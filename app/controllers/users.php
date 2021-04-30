<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
/*ini yang dibawah,,,var errornya di declare terus valuenya array,,jadi deh*/
$table = 'users';
$admin_users = selectAll($table);

$errors = array();
$id = '';
$username ='';
$admin = '';
$email ='';
$password ='';
$passwordConf ='';



function loginUser($user){
    //login user
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] =$user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    }else{
    header('location: ' . BASE_URL . '/blog.php');
    }
    exit();
}




// function logoutUser($user){
//     //login user
//     $_SESSION['id'] = $user['id'];
//     $_SESSION['username'] = $user['username'];
//     $_SESSION['admin'] =$user['admin'];
//     $_SESSION['message'] = 'You are now logged in';
//     $_SESSION['type'] = 'success';
//     header('location: ' . BASE_URL . '/blog.php');
    
//     exit();
// }
// if(isset($_POST['logout-btn'])){
//   logoutUser($user);
// }






if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){
    $errors = validateUser($_POST);
    if (count($errors) === 0){
        unset($_POST['passwordConf'],$_POST['register-btn'],$_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if(isset($_POST['admin'])){
            $_POST['admin']=1;
            $user_id = create($table, $_POST);
            $_SESSION['message']= 'Admin users created successfully !';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
        }else{

            $_POST['admin']=0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            // loginUser($user);
            header('location: ' . BASE_URL . '/login.php');
        }   
    }else{
        $username =$_POST['username'];
        $admin = isset($_POST['admin'])? 1 : 0 ;
        $email =$_POST['email'];
        $password =$_POST['password'];
        $passwordConf =$_POST['passwordConf'];
    }
}

if(isset($_POST['update-user'])){
    adminOnly();
    $id =$_POST['id'];
    $errors = validateUser($_POST);
    if (count($errors) === 0){
        unset($_POST['passwordConf'],$_POST['update-user'],$_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
            $_POST['admin']= isset($_POST['admin'])? 1:0;
            $count= update($table,$id, $_POST);
            $_SESSION['message']= 'Admin users updated successfully !';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit(); 
    }else{
        $username =$_POST['username'];
        $admin = isset($_POST['admin'])? 1 : 0 ;
        $email =$_POST['email'];
        $password =$_POST['password'];
        $passwordConf =$_POST['passwordConf'];
    }
}
if (isset($_GET['id'])){
    $user = selectOne($table,['id'=> $_GET['id']]);
    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin']== 1  ;
    $email = $user['email'];
}

if(isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);

    if(count($errors)=== 0){
        $user =selectOne($table,['username'=> $_POST['username']]);

        if($user && password_verify($_POST['password'],$user['password'])){
            loginUser($user);
        }else{
            array_push($errors, 'Your Username or Password are incorect!');
        };
    }
        $username =$_POST['username'];
        $password =$_POST['password'];
    
}




if(isset($_GET['delete_id'])){
    adminOnly();
    $delete_id = $_GET['delete_id'];
    $count = delete($table,$delete_id);
    $_SESSION['message']= 'Admin users deleted successfully !';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/users/index.php'); 
    exit();
}