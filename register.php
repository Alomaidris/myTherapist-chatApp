<?php include('./includes/_header.php') ?>

    <main>
        <section class="login container">
            <h2>Create Account</h2>
            <form action="" class="login-form">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Full Name">
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Your Username">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email Address">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="input-group flex-row">
                    <input type="checkbox" name="emailOption" id="emailOption">
                    <label for="emailOption">Email me when my therapist makes a new comment</label>
                </div>
                <div class="input-group">
                    <button class="btn btn-grey sign-up">Sign Up</button>
                   
                </div>

            </form>
           
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.sign-up').click(function(e){
            e.preventDefault();
            let name = $('#name').val();
            let username = $('#username').val();

            let email = $('#email').val();
            let password = $('#password').val();

            if( name != '' && username != '' && email != '' && password != ''){
                $.ajax({
                    url:"register_action.php",
                    method:"POST",
                    data:{ name:name, email:email, password:password, username:username},
                    dataType:"json",
                    success:function(data)
                    {
                        if(data.success){
                            $('.login-form')[0].reset();
                            $('.sign-up').attr('disabled', false);
                            swal({
                                title: "Success!",
                                text: data.success,
                                icon: "success",
                            });
                            setTimeout(() => {
                                window.location = './login.php';
                            }, 3000)
                            
                        }else{
                            swal({
                                title: "Warning!",
                                text: data.success,
                                icon: "warning",
                            });
                        }
                    }
                });
            }else{
                swal({
                    title: "Warning!",
                    text: 'No field should be left empty',
                    icon: "warning",
                });
            }
        })
    </script>
<?php include('./includes/_footer.php') ?>

