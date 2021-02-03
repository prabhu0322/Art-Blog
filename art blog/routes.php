<?php
session_start();
define( 'project_root', __DIR__."/" );
define( 'view_root', 'Views/' );


require_once( dirname(__FILE__).'/Controller/Controller.php');
require_once( dirname(__FILE__).'/Controller/AddController.php');
require_once( dirname(__FILE__).'/Controller/AdminController.php');

require( 'includes/db_con.php' );
require( 'includes/utils.php' );

$route = ( !empty( $_GET['route'] ) )? $_GET['route'] : null;

if($route == ""){
    // dd("ddlmdm");
    include(view_root.'index.php');
}
if($route == "create"){
    // dd("ddlmdm");
    include(view_root.'addPhoto.php');
}
if($route == "about"){
    // dd("ddlmdm");
    include(view_root.'about.php');
}

if( $route == "addToDB" ){

    require_once( dirname(__FILE__).'/Controller/AddController.php');
    
    $data = $_POST;
    // dd($_POST);
    $info = ( new AddController() )->create($data);
    if($info['success']){
        return header("Location:routes.php?route=create&success=1&msg=added successfully");
    }
}
if( $route == "load_main_page" ){

    require_once( dirname(__FILE__).'/Controller/PostController.php');
    // dd($_POST);
    $info = ( new PostController() )->getData();
    $form = $info['post_list'];
    include(view_root.'gallery.php');
    // echo json_encode($info);
}
if($route == "contact"){
    include(view_root.'contact.php');
}
if( $route == "contact-process" ){

    require_once( dirname(__FILE__).'/Controller/AddController.php');
    $data = $_POST;
    $info = ( new AddController() )->process($data);
    if($info['success']){
        return header("Location:routes.php?route=&success=1&msg=thanks for contacting us...");
    }else{
        
        return header("Location:routes.php?route=&success=0&msg=Oops something went wrong...");
    }

}

if( $route == "getLatest" ){

    require_once( dirname(__FILE__).'/Controller/PostController.php');
   
    $info = ( new PostController() )->getLatest();
    // dd($info);
   
    echo json_encode($info);
}

if( $route == 'login' ){

    include( view_root.'login.php' );
    
}
if( $route == 'login-process' ){
    require_once( dirname(__FILE__).'/Controller/AdminController.php');
    $data = $_POST;
    // dd($data);
    $info = (new AdminController())->login($data);
    
}
if( $route == 'logout' ){
    $_SESSION['logged_user'] = null;
    
    return header("Location:routes.php?route=login&msg=logged out&success=1");
}
if( $route == 'messages' ){
    require_once( dirname(__FILE__).'/Controller/PostController.php');
   
    $info = ( new PostController() )->getQueries();
    $form = $info['queries'];
    // dd($form);
    include(view_root.'messages.php');

}


?>