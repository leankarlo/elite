<?php

namespace App\Http\Controllers\Canvas;

use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserAccessModule;
use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Images Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the Images functions
    | 1. Upload
    | 2. Edit
    | 3. Delete
    | 4. Activate
    | 5. Deactivate
    | 6. Validation
    |
    */

    // USER DISPLAYS
    protected function showAll()
    {
        return Response::json(array('data' => User::with(['image'])->get() ) );
    }

    // USER MANAGEMENT
    protected function create(Request $request)
    {
        // INITIALIZATION
        $input = $request->all();

        // CREATE USER
        $user = new User;
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']);
        $user->isActive = 1;
        $user->user_access = $input['accessType'];
        $user->user_position = $input['positionTitle'];
        if(isset($input['image'])){
            $user->image_id =   $input['image'];
        }
        $user->save();

        return Redirect::to('canvas/users/management');
    }

    protected function getUser($id){
        //$user = User::with(['image'])->find($id);
		$user = User::with(['image'])->with(['AccessType'])->find($id);
        return Response::json(array('result'=>'true', 'data'=>$user));
    }

    protected function update(Request $request)
    {
        try{
            // INITIALIZATION
            $input = $request->all();
    
            // CREATE USER
            $user = User::find($input['id']);
            $user->email = $input['email'];
            $user->user_access = $input['accessType'];
            $user->user_position = $input['positionTitle'];
            if(isset($input['image'])){
                $user->image_id =   $input['image'];
            }
            $user->save();
    
            return Response::json(array('result'=>'true', 'message'=>'Successfully UPDATED!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'false', $e));
        }
        
    }

    protected function activate($id)
    {
        try{
            $user = User::find($id);
            $user->isActive = 1;
            $user->save();
            return Response::json(array('result'=>'true', 'message'=>'User Successfully Activated!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }   

    protected function deActivate($id)
    {
        try{
            $user = User::find($id);
            $user->isActive = 0;
            $user->save();
            return Response::json(array('result'=>'true', 'message'=>'User Successfully Deactivated!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }   

    protected function delete($id)
    {
        try{
            $user = User::find($id);
            $user->delete();
            return Response::json(array('result'=>'true', 'message'=>'User Successfully Deleted!!'));
        }catch(Exception $e){
            return Response::json(array('result'=>'fail', 'message'=>$e));
        }
        
    }  

    // VALIDATION
    protected function validateEmail(Request $request) {
        $input = $request->all();

        $user = User::where('email',$input['email'])->get();
        if ($user->isEmpty()){
            return 'true';
        }else{
            return 'false';
        }
    }
	
	// ACCESS TYPE
	
	// GET ALL
	protected function getAllAccessTypes()	
    {
        return Response::json(array('data' => UserAccess::all() )) ;
    }
	// CREATE
	protected function CreateAccessType($name){
        try{
            $accessType = new UserAccess;
            $accessType->name = $name;
            $accessType->save();

            return Response::json(array('result' => 'true', 'message' => 'Successfully created.' ));
        }
        catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => 'Error on creating access type.', 'data' => $e ));
        }
    }
	
	// GET ACCESS TYPE
	protected function getAccessType($id){
		return Response::json(array('data' => UserAccess::find($id) ) );
    }

    // DELETE ACCESS TYPE
    protected function DeleteAccessType($id){
        try{
            $accessType = UserAccess::where('id',$id)->delete();
            $userAccessModule = UserAccessModule::where('access_id',$id)->delete();

            return Response::json(array('result' => 'true', 'message' => 'Successfully deleted.' ));
        }
        catch(Exception $e){
            return Response::json(array('result' => 'false', 'message' => 'Error on deleting access type.', 'data' => $e ));
        }
    }

	
}
