<?php 
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
        $data=[];
        helper(['form']);
        helper(['cookie']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'email' => 'required|min_length[5]|max_length[50]|valid_email',
                'password' => 'required|min_length[5]|max_length[50]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password Wrong'
                ]
            ];
            if (!$this->validate($rules, $errors)){
                $data['validation']= $this->validator;
            }
            else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))
                ->first();
                if(isset($_POST['remember'])) {
                    setcookie('rememberme', 'true', time()+360);
                }

                $this->setUserSession($user);
                return redirect()->to('home');
            }
        }
        if(isset($_COOKIE['rememberme'])) {
            if(get_cookie('rememberme')=='true') {
                session()->set('isLoggedIn', true);
                if(session()->has('isLoggedIn')) {
                    return view('home');
                }
            }
        }
        // if(session()->has('isLoggedIn')) {
        //     return view('home');
        // }
        return view('login', $data);
	}
    private function setUserSession($user){
        $data = [
            'email'=>$user['email'],
            'level'=>$user['level'],
            'isLoggedIn'=>true,
        ];
        session()->set($data);
        return true;
    }
    public function register()
    {
        $data=[];
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'name' => 'required|min_length[5]|max_length[50]',
                'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $model = new UserModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email'=> $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('login');
            }
        }
        return view('register', $data);
    }
    
    public function logout(){
        helper(['cookie']);
        session()->destroy();
        setcookie('rememberme', '', time()-3600);
        delete_cookie('rememberme');
        return redirect()->to('login');
    }

}