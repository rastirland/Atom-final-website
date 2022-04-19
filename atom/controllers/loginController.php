<?php
class loginController {

   
    private $loginTable;

    public function __construct($loginTable) {
        $this->loginTable = $loginTable;
    }

    public function admin() { 
        if (isset($_POST['submit'])) {
           $result = $this->loginTable->find('username',$_POST['username'])[0];
          //some logic to check if the user exists here     
          if ( password_verify($_POST['password'], $result['password'])){
              $_SESSION['username'] = $result['username'];
              $_SESSION ['loggedin'] = true;     
              header('Location: /kitchen/acategories');
          } else {
              
            var_dump($_SESSION);
            $error = 'Incorrect Login Details';
          }
        }
            
          
        return [  
            'template' => 'logintext.html.php',
            'option' => 'Admin',
            'title' => 'kitchen website Admin',
            'variables' => [ 
              'error' => $error ?? null
            ]
          ];
      }

public function register() { 
  $users = $this->loginTable->findAll();
  if (isset($_POST['submit'])) {
    $this->loginTable->save([
  'username' => $_POST['username'],
  'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);
  unset($_POST['submit']);
    }
    
  return [
     
      'template' => 'registerform.html.php',
      'option' => 'Home',
      'title' => 'kitchen website',
      'variables' => ['users' => $users]
  ];

  }
  public function adeleteuser(){
    $this->loginTable->delete($_POST['id']);
    header('Location: /login/register');
  
  }

}