<?php

function validateUser($user){

    $errors = array();

    if( empty($user['username'])){
    array_push($errors, 'Username is required');
    }
    if( empty($user['email'])){
        array_push($errors, 'Email is required');
    }
    if( empty($user['password'])){
        array_push($errors, 'Password is required');
    }
    if($user['passwordConf'] !== $user['password'] ){
        array_push($errors, 'Password is not match');
    }

    $existingUser = selectOne('users',['email'=>$user['email']]);
    
    if($existingUser){
        if(isset($user['update-user']) && $existingUser['id']!= $user['id']){
            array_push($errors, 'Email is already exist. ');
        }
        
        if(isset($user['create-admin'])){
            array_push($errors, 'Email is already exist. ');
            
        }
    }
    $existingUser = selectOne('users',['username'=>$user['username']]);
    if($existingUser){
        if(isset($user['update-user']) && $existingUser['id']!= $user['id']){
            array_push($errors, 'Username already exists');
        }
        
        if(isset($user['create-admin'])){
            array_push($errors, 'Username already exists');
            
        }
    }

    return $errors;
}



function validateLogin($user){

    $errors = array();

    if( empty($user['username'])){
    array_push($errors, 'Username is required');
    }
    if( empty($user['password'])){
        array_push($errors, 'Password is required');
    }

    return $errors;
}