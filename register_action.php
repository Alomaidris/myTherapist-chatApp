<?php
    include 'includes/DB.php';
    include 'includes/Query.php';

    $Qobject = new Query;

    $table = 'users';
    $user_name = $_POST['name'];
    $user_username = $_POST['username'];
    $user_email =  $_POST['email'];
    $user_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user_type =  'user';
    $user_status = 1;
    
    $data[] = '';
		 	 	 	 	 	 	
    $data = array(
      'name' => $user_name ,
      'username' => $user_username ,
      'email' => $user_email ,
      'password' => $user_password ,
      'user_type' => $user_type ,
      'user_status' => $user_status ,
      
    );
    $result = $Qobject->insert($table, $data);
    if($result)
    {
      
      $data['success'] = 'Success! Congrats, New User Added';
    }
    else {
      $data['error'] = 'User could not be added, an error occured';
    }

    echo json_encode($data);

?>
