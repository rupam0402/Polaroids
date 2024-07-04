<?php

            $con = mysqli_connect('localhost','root', '', 'polaroids');
            $q = "delete from add_polaroid";
            $rs = mysqli_query($con,$q);
            
            {

                echo"<script>window.location='main.php'</script>";
            }
            
?>
