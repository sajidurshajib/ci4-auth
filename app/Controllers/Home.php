<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title'=>'Home | CI4_Auth'
		];
		return view('home',$data);
	}

	public function profile()
	{
		$data = [
			'meta_title'=>'Profile | CI4_Auth'
		];

		//redirecet
		if(!session()->get('ci4logged'))
			return redirect()->to('/');

		return view('profile',$data);
	}
}
