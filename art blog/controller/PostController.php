<?php
use Controller\Controller;

class PostController extends Controller{

    public function getData(){
        $info = [
            'post_list' => $this->prepareQuery("SELECT * FROM posts")
        ];
        return $info;
    }
    
    public function getLatest(){
        $info = [
            'post_latest' => $this->prepareQuery("SELECT * FROM posts LIMIT 3")
        ];
        // dd($info);
        return $info;
    }
    public function getQueries(){
        $info = [
            'queries' => $this->prepareQuery("SELECT * FROM contacts")
        ];
        // dd($info);
        return $info;
    }
    

}