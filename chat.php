
<?php 
    $title = 'My Therapist ';
    include('./includes/_chat_header.php') ;
    if(!isset($_SESSION['type']))
    {
        header("location:login.php");
    }    
?>

    <main class="chat">
        <section class="chat-area">
            <div class="chat-area-header">
                <a href="./chat-list.php"><i class="ri-arrow-left-line"></i> Back</a>
                
                <?php
                   
                        $user_id = $_GET['user_id'] ;    
                        $query = "SELECT * FROM users WHERE user_id = $user_id";
                        $result = $DBobject->select($query);
                        $count = $DBobject->table_row_count($query);
                        if($count > 0){
                            foreach( $result as $row => $user){
                                if($_SESSION['type'] == 'user'){
                                    echo ' <p>'.$user['name'].'</p>';
                                }else{
                                    echo ' <p>'.$user['username'].'</p>';
                                }
                                
                            }
                        } 
                   
                ?>
                
            </div>
            
            <div class="chat-box">
               
            </div>

            <form action="#" class="typing-area" autocomplete="off">
                <input type="hidden" name="outgoing_id" value="<?= $_SESSION['user_id'] ?>">
                <input type="hidden" name="incoming_id" value="<?= $user_id ?>">
                <input type="text" name="message" id="" class="input-field" placeholder="Type a message">
                <button><i class="ri-send-plane-fill"></i></button>
            </form>
               
        </section>
    </main>
    
    <script src="./assets/js/chat.js"></script>
<?php include('./includes/_chat_footer.php') ?>
