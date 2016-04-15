<?php

namespace App\Http\Controllers\Canvas;

use App\Models\Article;
use App\Models\ArticleType;
use App\Models\ArticleTag;
use App\Models\ArticleTypeLevel;
use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Article Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the Images functions
    | 1. Upload
    | 2. Edit
    | 3. Delete
    |
    */

    //show functions
    protected function getArticleTypes()
    {
        return Response::json(array('data' => ArticleType::all() )) ;
    }

    //create, delete and updates
    protected function create(Request $request){
        // INITIALIZATION
        $input = $request->all();

        try{
            $article = new Article;
            $article->title = $input['title'];
            $article->author = Auth::user()->id;
            $article->content = $input['content'];

            if (array_key_exists('image', $input)) {
                $article->featured_image = $input['image'];
            }

            $article->save();

            $articleTag = new ArticleTag;
            $articleTag->article_id = $article->id;
            $articleTag->article_types_id = $input['articleType'];
            $articleTag->save();

            return Redirect::to('canvas/articles');

        }catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => $e ));
        }
    }

    protected function delete($id){
        try{
            $article = Article::find($id);
            $article->delete();

            $articleTag = ArticleTag::where('article_id', $id);
            $articleTag->delete();

            return Response::json(array('result'=>'true', 'message'=>'Article successfull Deleted!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
    }

    protected function update(Request $request){
        try{
            $input = $request->all();

            $article = Article::find($input['id']);
            $article->title = $input['title'];
            $article->content = $input['content'];
            if (array_key_exists('image', $input)) {
                $article->featured_image = $input['image'];
            }
            $article->save();

            $articleTag = ArticleTag::find($input['articleTagID']);
            $articleTag->article_types_id = $input['articleType'];
            $articleTag->save();

            return Response::json(array('result'=>'true', 'message'=>"Article Has Been Updated"));

        }catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => $e ));
        }
    }

    //show articles
    protected function getMyArticles()
    {
        return Response::json(array('data' => Article::with(['featured_image'])->where('author', '=', Auth::user()->id)->get() ) ) ;
    }

    protected function getAllArticles()
    {
        return Response::json(array('data' => Article::with(['author'])->with(['featured_image'])->get() ) ) ;
    }

    protected function getArticle($id)
    {
        return Response::json(array('data' => Article::with(['Tags.ArticleType'])->with(['featured_image'])->find($id) )) ;
    }

    protected function activate($id)
    {
        try{
            $article = Article::find($id);
            $article->isPublished = 1;
            $article->save();
            return Response::json(array('result'=>'true', 'message'=>'Article successfull Published!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }   

    protected function deActivate($id)
    {
        try{
            $article = Article::find($id);
            $article->isPublished = 0;
            $article->save();
            return Response::json(array('result'=>'true', 'message'=>'Article successfull Unpublished!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }  


    //Article Category


    protected function GetArticleTypeLevel(){

        $productCategories = ArticleTypeLevel::with('ArticleType')->orderBy('position')->get();

        if($productCategories){
            return Response::json(array('result' => 'true', 'message' => 'successfull', 'data' => $productCategories ));
        }else{
            return Response::json(array('result' => 'false', 'message' => 'no data' ));
        }
        
    }

    protected function LoadCategorySelection(){
        $categories = ArticleType::all();
        if($categories){
            return Response::json(array('result' => 'true', 'message' => 'successfull', 'data' => $categories ));
        }else{
            return Response::json(array('result' => 'false', 'message' => 'no data' ));
        }
    }

    protected function CreateNewCategory($name){
        try{
            $productCategory = new ArticleType;
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
            $categoryMenu = ArticleTypeLevel::find($input['child']);
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
                $parent = ArticleTypeLevel::find($input['parent']);
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
            $categoryMenu = new ArticleTypeLevel();
            $categoryMenu->article_type_id = $id;
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
            $categoryMenu = ArticleTypeLevel::find($id);
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
