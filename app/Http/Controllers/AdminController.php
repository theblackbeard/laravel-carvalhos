<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function index()
	{

		return view("admin.index");
	}
	
	public function dash()
	{
		return view("admin.dash");
	}

}
