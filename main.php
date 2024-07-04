<link rel="stylesheet" href="main.css">
<a href="add_image.php">Add More Images</a>
<a href="delete_images.php">Clear all Images</a>

<div class="wrapper">


        <?php
            
            $con = mysqli_connect('localhost','root', '', 'polaroids');
            $q = "select *from add_polaroid";
            $rs = mysqli_query($con,$q);
            while($row = mysqli_fetch_array($rs))
            {
            

            echo"

            <div class='item'>
                <div class='polaroid'><img src='$row[Photo]'>
                    <div class='caption'>$row[Description]</div>
                </div>
            </div>

            ";}


        ?>
</div>