<?php namespace App\Controllers;

class About extends BaseController
{
	public function home()
	{
		return view('home.php');
	}
	public function about()
	{
		return view('about.php');
	}
	public function menu()
	{
		return view('menu.php');
	}
	public function form()
	{
		return view('form.php');
	}
	//--------------------------------------------------------------------

}
