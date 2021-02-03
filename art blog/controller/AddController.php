<?php
use Controller\Controller;

class AddController extends Controller{

    public function create($data){

        $info = [
            'success' => false,
            'msg' => "Oops something fishy!!!"
        ];
        // dd($data);

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

    if(empty($data['post_id'])){

        // $query = $this->db()->query("INSERT INTO posts (tagline, description, path) VALUES (?, ?, ?)");
        
        $statement = $this->db()->prepare("INSERT INTO posts (tagline, description, file_path) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $data['tagline'], $data['description'], $img);
        
    }

    $res=$statement->execute();
    // dd($res);
    if($res){
        $info['success'] = true;
        $info['msg'] = "Added Successfully";
    }
    return $info;
    }

    public function process($data){
        $info = [

            'success' => false

        ];
        // dd($data);

        $statement = $this->db()->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $statement->bind_param("sss", $data['name'], $data['email'], $data['message']);
        
    
    $res=$statement->execute();
    // dd($res);
    $info['success'] = true;
    return $info;

    }



}


?>