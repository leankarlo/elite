<?php

namespace App\Http\Controllers\Canvas;

use App\Models\Project;
use App\Models\ProjectType;
use App\Models\ProjectTag;
use App\Models\ProjectTypeLevel;
use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Project Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the Images functions
    | 1. Upload
    | 2. Edit
    | 3. Delete
    |
    */

    //show functions
    protected function getProjectTypes()
    {
        return Response::json(array('data' => ProjectType::all() )) ;
    }

    //create, delete and updates
    protected function create(Request $request){
        try{
            // INITIALIZATION
            $input = $request->all();

            $project = new Project;
            $project->title = $input['title'];
            $project->content = $input['content'];
            if (array_key_exists('image', $input)) {
                $project->featured_image = $input['image'];
            }
            $project->save();

            $projectTag = new ProjectTag;
            $projectTag->project_id = $project->id;
            $projectTag->project_types_id = $input['projectType'];
            $projectTag->save();

            return Redirect::to('canvas/projects/manage');

        }catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => $e ));
        }
    }

    protected function delete($id){
        try{
            $project = Project::find($id);
            $project->delete();

            $projectTag = ProjectTag::where('project_id', $id);
            $projectTag->delete();

            return Response::json(array('result'=>'true', 'message'=>'Project Successfully Deleted!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
    }

    protected function update(Request $request){       
        try{
            // INITIALIZATION
            $input = $request->all();

            $project = Project::find($input['id']);
            $project->title = $input['title'];
            $project->content = $input['content'];
            if (array_key_exists('image', $input)) {
                $project->featured_image = $input['image'];
            }
            $project->save();

            $projectTag = ProjectTag::find($input['projectTagID']);
            $projectTag->project_types_id = $input['projectType'];
            $projectTag->save();

            return Response::json(array('result'=>'true', 'message'=>'Project Successfully UPDATED!!'));

        }catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => $e ));
        }
    }

    //show projects
    protected function getAllProjects()
    {
        return Response::json(array('data' => Project::with(['featured_image'])->get() ) ) ;
    }

    protected function getProject($id)
    {
        return Response::json(array('data' => Project::with(['Tags.ProjectType'])->with(['featured_image'])->find($id) )) ;
    }

    protected function activate($id)
    {
        try{
            $project = Project::find($id);
            $project->isPublished = 1;
            $project->save();
            return Response::json(array('result'=>'true', 'message'=>'Project Successfully Published!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }   

    protected function deActivate($id)
    {
        try{
            $project = Project::find($id);
            $project->isPublished = 0;
            $project->save();
            return Response::json(array('result'=>'true', 'message'=>'Project Successfully Unpublished!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }  


    //
    protected function GetProjectTypeLevel(){

        $productCategories = ProjectTypeLevel::with('ProjectType')->orderBy('position')->get();

        if($productCategories){
            return Response::json(array('result' => 'true', 'message' => 'successfull', 'data' => $productCategories ));
        }else{
            return Response::json(array('result' => 'false', 'message' => 'no data' ));
        }
        
    }

    protected function LoadCategorySelection(){
        $categories = ProjectType::all();
        if($categories){
            return Response::json(array('result' => 'true', 'message' => 'successfull', 'data' => $categories ));
        }else{
            return Response::json(array('result' => 'false', 'message' => 'no data' ));
        }
    }

    protected function CreateNewCategory($name){
        try{
            $productCategory = new ProjectType;
            $productCategory->name = $name;
            $productCategory->save();

            return Response::json(array('result' => 'true', 'message' => 'Successfully deleted.' ));
        }
        catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => 'Error on deleting category.', 'data' => $e ));
        }
    }

    public function UpdateLevel(Request $request){
        
        // INITIALIZATION
        $input = $request->all();
        try{
            $isParent = 0;
            $categoryMenu = ProjectTypeLevel::find($input['child']);
            $categoryMenu->parent_id = $input['parent'];

            if($input['parent'] != 0)
            {
                $isParent = 1;
            }

            $categoryMenu->isParent = 0;
            $categoryMenu->position = $input['position'];
            $categoryMenu->save();

            if($input['parent'] != 0)
            {
                $parent = ProjectTypeLevel::find($input['parent']);
                $parent->isParent = 1;
                $parent->save();
            }
            

            return Response::json(array('result'=>'Success', 'message'=>'Category Menu has been Updated'));
        }
        catch(Exception $e)
        {
            return Response::json(array('result'=>'Failed', 'message'=>$e));
        }
        
    }

    public function AddCategoryLevel($id){

        try{
            $categoryMenu = new ProjectTypeLevel();
            $categoryMenu->project_type_id = $id;
            $categoryMenu->save();
            return Response::json(array('result'=>'Success', 'message'=>'New Category Menu has been added'));
        }
        catch(Exception $e)
        {
            return Response::json(array('result'=>'Failed', 'message'=>$e));
        }
    }

    public function DeleteCategoryLevel($id){
        try{
            $categoryMenu = ProjectTypeLevel::find($id);
            if($categoryMenu->isParent == 1){
                return Response::json(array('result'=>'Failed', 'message'=>'Category must not have child level!!</br>REMOVE CHILD FIRST!!!'));
            }else{
                $categoryMenu->delete();
                return Response::json(array('result'=>'Success', 'message'=>'Category was removed!'));
            }
        }
        catch(Exception $e)
        {
            return Response::json(array('result'=>'Failed', 'message'=>$e));
        }
    }

}
