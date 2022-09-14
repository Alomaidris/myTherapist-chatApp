<?php
    session_start();
    include 'includes/DB.php';
    include 'includes/Query.php';

    $Qobject = new Query;

   
		 	 	 	 	 	 	
    if(isset($_SESSION['user_id'])){
                     
        $table = 'messages';
        $incoming_msg_id = $_POST['incoming_id'];
        $outgoing_msg_id = $_POST['outgoing_id'];
        $msg =  $_POST['message'];
       
        $data[] = '';
                
        $data = array(
            'incoming_msg_id' => $incoming_msg_id ,
            'outgoing_msg_id' => $outgoing_msg_id ,
            'msg' => $msg ,
        );
        $result = $Qobject->insert($table, $data);
        
    }



?>