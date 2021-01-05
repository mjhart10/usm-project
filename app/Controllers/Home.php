<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home.php');
	}

	public function about()
	{
		return view('about.php');
	}

	//--------------------------------------------------------------------

}
