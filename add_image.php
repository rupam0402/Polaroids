<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="header">
                <div class="sidea">
                    <div class="title">
                        <a href="home.php"><h1>PolarXroid</h1></a>
                        <p class="para"> Lets create some memorable stuffs..!!</p>
                    </div>
                    <a href="main.php"><img src="./3.jpg" alt=""></a>  <!---Polaroid picture----->
                </div>
                <div class="sideb">
                    <div class="title2">
                    <h1>Add Pictures</h1>
                    <p class="para">Add your favorite pictures to create polaroids...!!</p>
                </div>
                <form method="POST" enctype = "multipart/form-data" class = "form-control">
                    <div class="form">
                        Unique ID <input type="text" name="u1" class =""> <br> <br>   
                        Your Picture<input type="file" name="p1" class="ch_img">  <br>
                        Description <input type="text" name="d1" class="">
                        <br>
            
                        
                        <input type="submit" value="Submit" class="btnn">
                    
                        
                    </div>
                </form>
            </div>
        </div>
            
        
        <?php
        
        if(isset($_POST['d1'])==true)
         {
            $a = $_POST['u1'];
            $b = $_POST['d1'];

            $f = $_FILES['p1']['tmp_name'];
            $n = $_FILES['p1']['name'];
       
        
             if(move_uploaded_file($f,$n))
                {
                        $con = mysqli_connect('localhost','root', '', 'polaroids');
                        $q ="insert into add_polaroid value('$a','$n','$b')";
                        $rs = mysqli_query($con,$q);
                        if ($rs) {
                            echo"Image Added Successfully";
                        }
                        else{
                            echo"Error!!";
                        }
                    }
                    else{
                        echo"Error While Uploading";
                    }
                }
            ?>
        

</body>
</html>