<?php namespace App\Controllers;

use App\Models\LoginAdminModels;

class Login extends BaseController
{
	public function index()
	{
		return view('auth/login');
   }
   
   public function login_action() 
   {
      $muser = new LoginAdminModels();

      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($email, $password);

      if (($cek['email'] == $email) && ($cek['password'] == $password))
      {
         session()->set('email', $cek['email']);
         session()->set('username', $cek['username']);
         session()->set('id_admin', $cek['id_admin']);
         return redirect()->to(base_url('public/admin/masteradmin/imdex'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('public/login/index'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }

	//--------------------------------------------------------------------

}