<?php
    session_start();
    
    include 'includes/DB.php';
    include 'includes/Query.php';

    $Qobject = new Query;
 	 	 	 	
    if(isset($_SESSION['user_id'])){
        $table = 'messages';
        $incoming_msg_id = $_POST['incoming_id'];
        $outgoing_msg_id = $_POST['outgoing_id'];

        $output = "";
        $query = "SELECT * FROM messages WHERE outgoing_msg_id = '$outgoing_msg_id' AND incoming_msg_id = '$incoming_msg_id' OR outgoing_msg_id = '$incoming_msg_id' AND incoming_msg_id = '$outgoing_msg_id' ORDER BY msg_id ASC ";
        $result = $Qobject->select($query);
        $count = $Qobject->table_row_count($query);

        if($count > 0){
            foreach( $result as $row => $message){
                if($message['outgoing_msg_id'] === $outgoing_msg_id){
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'.$message['msg'].'</p>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                    <div class="details">
                                        <p>'.$message['msg'].'</p>
                                    </div>
                                </div>';
                }
    
            }
        }
        echo $output;
    }


?>