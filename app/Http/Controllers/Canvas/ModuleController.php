<?php

namespace App\Http\Controllers\Canvas;

use App\Models\Module;
use App\Models\User;
use App\Models\UserAccessModule;
use Validator;
use Mail;
use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Module Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the Modules and User Access
    | 0 = super admin
    | 1 = admin
    | 2 = data encoder / blogger
    |
    */

    /**
     * Create a new Module controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Get all the modules that is allowed to the current user
     *
     * @param  array  $data
     * @return Modules
     */
    protected function getUserModules()
    {
        $accessType = Auth::user()->user_access;

        $modules = User::where('id', Auth::user()->id)
        ->with('UserAccess.Module.subModules')
        ->get();

        return Response::json(array('data' => $modules));
    }


    protected function getUserAccessModules(){
        $accessType = Auth::user()->user_access;

        $modules = User::where('id', Auth::user()->id)
        ->with('UserAccess.Module.subModules')
        ->get();

        return Response::json(array('data' => $modules));
    }
}
