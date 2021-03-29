<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
	public function index()
	{
		echo '404';
	}

	public function register()
	{
		$data = [
			'meta_title'=>'Register | CI4_Auth',
            'nomenu'=>true
		];
		helper(['form']);

		if($this->request->getMethod()=='post'){
			//validation
			$rules = [
				'name'=>'required|min_length[3]|max_length[50]',
				'email'=>'required|min_length[3]|max_length[50]|valid_email|is_unique[users.email]',
				'password'=>'required|min_length[5]|max_length[255]',
				'confirm_password'=>'matches[password]'
			];

			if(!$this->validate($rules)){
				$data['validation']=$this->validator;
			}
			else{
				$model = new User();

				$newData = [
					'name'=>$this->request->getVar('name'),
					'email'=>$this->request->getVar('email'),
					'password'=>$this->request->getVar('password')
				];

				$model->save($newData);
				$session = session();
				$session->setFlashdata('success','Registration successful. Now you can login...');
				return redirect()->to('/');
			}


			return view('register',$data);
		}



		return view('register',$data);
	}






    public function login()
	{
		$data = [
			'meta_title'=>'Login | CI4_Auth',
            'nomenu'=>true
		];
		helper(['form']);




		if($this->request->getMethod()=='post'){
			//validation
			$rules = [
				'email'=>'required|min_length[3]|max_length[50]|valid_email',
				'password'=>'required|min_length[5]|max_length[255]'
			];

			if(!$this->validate($rules)){
				$data['validation']=$this->validator;
			}
			else{
				$model = new User();

				$user = $model->where('email', $this->request->getVar('email'))
								->first();
				
				//I need session now
				$session = session();

				
				if(!$user){	
					$session->setFlashdata('wrong', 'Wrong Email');
					return redirect()->to('/login');
				}
				else{
					if( !password_verify($this->request->getVar('password'), $user['password']) ){
						$session->setFlashdata('wrong', 'Wrong password');
						return redirect()->to('/login');
					}
					else{
						$this->setUserSession('ci4logged',$user);
						$session->setFlashdata('success', 'Welcome '.$user['name']);
						return redirect()->to('/profile');
					}
					//return redirect()->to('/');
				}
			}

			return view('login',$data);
		}
		return view('login',$data);
	}


	private function setUserSession($logName, $user){
		$data = [
			'name'=>$user['name'],
			'email'=>$user['email']
		];

		session()->set($logName, $data);
		return true;
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}



}
