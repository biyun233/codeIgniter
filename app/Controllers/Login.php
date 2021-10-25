<?php

namespace App\Controllers;

class Login extends BaseController {
  public function new()
  {
    return view('/Login/new');
  }

  public function create()
  {
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $auth = \Config\Services::auth();
    if($auth->login($email, $password)) {

      $redirect_url = session('redirect_url') ?? '/';
      unset($_SESSION['redirect_url']);
      return redirect()->to($redirect_url)
                       ->with('info', 'Login successfully');        
    } else {
      return redirect()->back()
                       ->with('warning', 'Invalid login')
                       ->withInput();
    }
  }

  public function delete() {
    $auth = \Config\Services::auth();
    $auth->logout();
    return redirect()->to("/")
                     ->with('info', 'Logout successfully');
  }
}