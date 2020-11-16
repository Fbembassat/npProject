<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('Email');
        $this->userModel = $this->model('User');
    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // Validate name
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Validate confirm password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Password do not match';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Validate

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('users/signup', $data);
            }
        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Load view
            $this->view('users/signup', $data);
        }
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            // Check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {
                // User found
            } else {
                // User not found
                $data['email_err'] = 'No user found';
            }


            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validate
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // Create Session
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password incorrect';

                    $this->view('users/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }

    public function resetPassword()
    {
        $this->view('users/resetPassword');
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('pages/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }


//request

public function request(){
 
    // Check if POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Sanitize POST
     $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
     $data = [       
       'email' => trim($_POST['email']),
       'email_err' => ''
             
     ];
 
     // Check for email
       if(empty($data['email'])){
         $data['email_err'] = 'Please enter email.';
       }
 
           // Check for user
           if($this->userModel->findUserRequest($data['email'])){
             // User Found
           } else {
             // No User
             $data['email_err'] = 'This email is not registered.';
             
           }
 
     // Make sure errors are empty
     if(empty($data['email_err'])){
 
       // Check and set logged in user
       
       if($this->userModel->request($data)){
        // redirect('users/ressetpass');
       
          $send = new Email();
                 $send->sendMail($data['email']);
         $this->view('users/login', $data);
       
       }
       else {
         die('something went wrong');
       }
       // $this->userModel->request($data['email']);
      
      // $this->view('users/request', $data);
     } else {
       // If NOT a POST
 
       $this->view('users/request', $data);
        }
       }
       else {
         // init data
         // keeps data there if form reset
         $data =[
 
             'email' => '',
 
             'email_err' => '',
 
         ];
 
 
     $this->view('users/request', $data);
 }
}

 public function ressetpass(){
 
    // Check if POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Sanitize POST
     $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
     $data = [       
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''   
    ];
 
     // Check for email
       if(empty($data['email'])){
         $data['email_err'] = 'Please enter email.';
       }
 
           // Check for user
           if($this->userModel->findUserResset($data['email'])){
             // User Found
           } else {
             // No User
             $data['email_err'] = 'This email is not registered.';
             
           }
      
           // Validate password
        if(empty($data['password'])){
          $password_err = 'Please enter a password.';     
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must have atleast 6 characters.';
        }

        // Validate confirm password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Please confirm password.';     
        } else{
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Password do not match.';
            }
        }




      // Make sure errors are empty
      if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
        // SUCCESS - Proceed to insert

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        //Execute
        if($this->userModel->ressetpass($data)){
          redirect('users/login');
        }
        else {
          die('something went wrong');
        }
        // $this->userModel->request($data['email']);
        
        // $this->view('users/request', $data);
      } else {
        // If NOT a POST
  
        $this->view('users/ressetpass', $data);
          }
        }
        else {
          // init data
          // keeps data there if form reset
          $data =[
  
              'email' => '',
  
              'email_err' => '',
              'password' => '',

              'confirm_password' => '',
  
          ];
  
  
      $this->view('users/ressetpass', $data);
  }
 }
}
  
