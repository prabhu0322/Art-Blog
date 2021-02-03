<?php
use Controller\Controller;

class AdminController extends Controller{

    public function login($data){
        // dd($data);
        $name = $data['name'];
        $password = $data['password'];
       
        $login = $this->db()->query("SELECT * FROM admin WHERE name='$name' AND password='$password' LIMIT 1")->fetch_assoc();

        // dd($login);

        if($login['role'] == 'admin'){
            $_SESSION['logged_user'] = $login;
            return header("Location:routes.php?route=create&msg=Login Successful&success=1"); 
           
        
        }else{
            return header("Location:routes.php?route=login&msg=Login Failed&success=0"); 
           
        }
       return $info;
    }
}
?>