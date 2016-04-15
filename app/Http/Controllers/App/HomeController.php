<?php
namespace App\Http\Controllers\App;

use Redirect;
use View;
use Response;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Page Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the Images functions
    | 1. Upload
    | 2. Edit
    | 3. Delete
    |
    */

    public function index()
	{
		$view 							= View::make('webpage.home', array());
		$view->pageName					= 'Welcome';
		return $view;
	}

}
