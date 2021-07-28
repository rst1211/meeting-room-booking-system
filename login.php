<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '','wtl');
    if($con->connect_error){
        die('Connection Failed :'.$con->connect_error);
    }
   

    if($_SERVER["REQUEST_METHOD"]== "POST"){
     $email=$_POST['email'];
    $your_pass=$_POST['your_pass']; 
    
   // print_r($_POST);
    if(!empty($email)&&!empty($your_pass)){
       // print_r($_POST);
        $sql = "SELECT * FROM user where username='$email' limit 1 ";
        $result = mysqli_query($con,$sql);
        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);
                //print_r($user_data['password']);
                if($user_data['password']!=$your_pass){
                    //print_r($_POST);
                     echo "Please enter valid information";
                   // header("location:login.php");
                    //die;
                }
            
           }
        }
 }   
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ZDMI ICONs css-->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    
</head>
<body>
    <div class="main">        
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing in image"></figure>
                       
                    </div>

                    <div id="signin" class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="radio" class="radio" id="organiser" name="select" value="organiser" onclick='updateLink(this.value)'>
                                <label for="organiser"><h3>Event Organiser :</h3></label><br>
                            </div>
                            <div class="form-group">
                                <input type="radio" class="radio" id="hod" name="select" value="hod" onclick='updateLink(this.value)'>
                                <label for="hod"><h3>HOD :</h3></label><br>
                            </div>
                             
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" href=""class="form-submit" value="Log In" onclick="loaction.href=''"/>
                            </div>
                        </form>
                       <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
                            <script>
                           /* function updateLink(value) {
                              if (value === "organiser") {
                                document.getElementById("signin").setAttribute('onclick', "location.href='event_organiser.html'")

                              } else {
                                document.getElementById("signin").setAttribute('onclick', "location.href='hod_connect.php'")

                              }

                            }*/
                       $(function(){
                       $('form').on('submit',function(){

                            event.preventDefault();
                           var value=$("input[name=select]:checked").val();
                           switch(value){
                             case "organiser":  location.href='event_organiser.html'; break;
                             case "hod":  location.href='hod_connect.php'; break;
                             
                            
                           }

                       });
                    });
                    </script>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>
</html>