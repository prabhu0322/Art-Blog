<?php
require( 'includes/db_con.php' );
require( 'includes/utils.php' );

$file_name = null;

if( isset( $_FILES['file']['name'] ) && !empty( $_FILES['file']['name'] ) ){
    
    $file_ext=explode('.',$_FILES["file"]["name"])[1];

    $img = "new_file_".rand(0,100).".".$file_ext;
    
    $result=move_uploaded_file($_FILES["file"]["tmp_name"],"photos/".$img);
    //to check if file uploaded successfully
    if($result){
        $file_name = $img;
    }

}
// print_r($_POST['tagline']);exit;
$tagline=$_POST['tagline'];
$description=$_POST['description'];
// var_dump($con->error);exit;



    if(empty($_POST['post_id'])){
        
        $statement = $con->prepare("INSERT INTO posts (tagline, description, path) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $tagline, $description, $img);
        $res=$statement->execute();
    }


// dd($stmt);

dd($res);

    if( $res ){
        return header("Location:addPhoto.php?msg=Successful&success=1");
    } else {
        return header("Location:addPhoto.php?msg=Something went wrong&success=0");
    }


?>