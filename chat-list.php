
<?php 
    session_start();
    
    include('./includes/_chat_header.php') ;
    if(!isset($_SESSION['type']))
    {
        header("location:login.php");
    }    

    $title = 'My Therapist ';
    include('./includes/_chat_header.php') ;
?>

    <main>
        <section class="chat-list">
            <h2><?= $_SESSION['username'] ?></h2>

            <div class="previous-chats">
                <h3>Previous Chats</h3>
                <ul class="chat-group">
                    <?php
                    
                        $user_id = $_SESSION['user_id'];
                        if($_SESSION['type'] == 'user'){
                            
                            $query = "SELECT DISTINCT messages.incoming_msg_id, users.user_id, users.name FROM messages  INNER JOIN users ON messages.incoming_msg_id=users.user_id WHERE outgoing_msg_id = '$user_id'";
                            $result = $DBobject->select($query);
                            $count = $DBobject->table_row_count($query);
                            if($count > 0){
                                foreach($result as $row => $therapist){
                                     echo ' <li class="chat-item">
                                        <a href="./chat.php?user_id='.$therapist['user_id'].'" class="chat-link">
                                            <div>
                                                <i class="ri-user-follow-line"></i> 
                                            </div>
                                            <p>'.$therapist['name'].'</p>
                                        </a>
                                    </li>';
                                }
                            }
                        }else{
                            $user_id = $_SESSION['user_id'];
                            $query = "SELECT DISTINCT messages.outgoing_msg_id, users.user_id, users.name FROM messages  INNER JOIN users ON messages.outgoing_msg_id=users.user_id WHERE incoming_msg_id = '$user_id'";
                            $result = $DBobject->select($query);
                            $count = $DBobject->table_row_count($query);
                            if($count > 0){
                                foreach($result as $row => $therapist){
                                     echo ' <li class="chat-item">
                                        <a href="./chat.php?user_id='.$therapist['user_id'].'" class="chat-link">
                                            <div>
                                                <i class="ri-user-follow-line"></i> 
                                            </div>
                                            <p>'.$therapist['name'].'</p>
                                        </a>
                                    </li>';
                                }
                            }
                        }
                    ?>
                        
                    
                </ul>
            </div>

            <?php
                if($_SESSION['type'] === 'user'){ ?>
                            
                        
                    <div class="online-therapist">
                        <h3>Online Therapists</h3>
                        <ul class="chat-group">
                            <?php
                                
                                $query = "SELECT * FROM users WHERE user_type = 'therapist' and user_status = '1'";
                                $result = $DBobject->select($query);
                                $count = $DBobject->table_row_count($query);
                                if($count > 0){
                                    foreach( $result as $row => $therapist){
                                        echo ' <li class="chat-item">
                                                <a href="./chat.php?user_id='.$therapist['user_id'].'" class="chat-link">
                                                    <div>
                                                        <i class="ri-user-follow-line"></i> 
                                                    </div>
                                                    <p>'.$therapist['name'].'</p>
                                                </a>
                                            </li>';
                                    }
                                }
                            ?>
                        
                        
                            
                        </ul>
                    </div>
                <?php } ?>
        </section>
    </main>
    
<?php include('./includes/_chat_footer.php') ?>
