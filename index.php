<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
                <div class="sidea">
                    <div class="title">
                        <h1>PolarXroid</h1>
                        <p class="para"> Lets create some memorable stuffs..!!</p>
                    </div>
                    <img src="./1.jpg" alt="">  <!---Polaroid picture----->
                </div>
                <div class="sideb">
                    <div class="title2">
                    <h1>Login/ Sign UP</h1>
                    <p class="para">Start creating Polariods of your favorite memories..!!</p>
                </div>
                <form>
                <div class="form">
                    <input type="email" placeholder="Enter Your E-Mail" name = "t4"> <br>
                    <input type="password" placeholder="Enter Your Password" name = "t8">
                    <input type="submit" value="Login">
                    
                    <p class="link">Don't have an account <br>
                    <a href="#" class="link">Sign UP here</a>
                    </form>
                </div>
            </div>
        </div>
   

<!-- Back-end -->

<?php
        if(isset($_GET['t4'])==true)
        {
            $a = $_GET['t4'];
            $b = $_GET['t8'];

            $con = mysqli_connect('localhost','root', '', 'polaroids');
            $q = "select *from login_polar where username = '$a' and passsword = '$b'";
            $rs = mysqli_query($con,$q);
            if($row = mysqli_fetch_array($rs))
            {

                echo"<script>window.location='home.php'</script>";
            }
            else
            {
                echo"invalid";
            }
        }
        ?>

    
</body>
</html>