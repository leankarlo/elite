<?php

namespace App\Http\Controllers\Canvas;

use App\Models\Module;
use App\Models\SubModule;
use App\Models\UserAccessModule;
use Validator;
use Mail;
use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubModuleController extends Controller
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

    protected function getUserAccessSubModules($id)
    {
        $accessType = Auth::user()->user_access;

        $modules = SubModule::distinct()->whereIn('id', function($q) use($id, $accessType) {
            $q->select('sub_module_id')
            ->from(with(new UserAccessModule)->getTable())
            ->where('module_id', $id)
            ->where('access_id', $accessType);
        })
        ->get();

        return Response::json($modules);
    }

}

