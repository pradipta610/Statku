<?php

function validateTopic($topic){

    $errors = array();

    if( empty($topic['name'])){
    array_push($errors, 'Name is required');
    }
  
    $existingTopic = selectOne('topics',['name'=>$topic['name']]);
  
    if($existingTopic){
        if(isset($post['update-topic']) && $existingTopic['id']!= $post['id']){
            array_push($errors, 'Name is already exist. ');
        }
        
        if(isset($post['add-topic'])){
            array_push($errors, 'Name is already exist. ');
            
        }
    }
    return $errors;
}



