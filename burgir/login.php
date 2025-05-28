<?php 
include('sql.php');
$email=$emailpassword='';
$error = array('email'=>'' , 'emailpassword'=>'');
    if(isset($_POST['submit'])){

        if(empty($_POST['email'])){
            $error['email']= 'need email';
        }else{
            $email= $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email']= "give valid email";
            }
        }
        if(empty($_POST['emailpassword'])){
            $error['emailpassword']= 'need emailpassword';
        }else{
            $emailpassword= $_POST['emailpassword'];
        }

        if(array_filter($error)){

        }else{
            // why no work? :(
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $emailpassword = mysqli_real_escape_string($conn, $_POST['emailpassword']);

            $sql = "INSERT INTO niggas(email , emailpassword) VALUES ('$email' , '$emailpassword')";
            if(mysqli_query($conn , $sql)){
            header('Location:index.php');
            }else {
                echo 'grrr' . mysqli_error($conn);
            }
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

    <?php include("header.php"); ?>
    <section class="container grey-text">
        <h4 class="center">LOGIN</h4>
        <form class="light-blue lighten-4" action="login.php" method="post">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <div class="red-text"><?php echo $error['email']; ?></div>
            <label>Email Password</label>
            <input type="text" name="emailpassword" value="<?php echo $emailpassword ?>">
            <div class="red-text"><?php echo $error['emailpassword']; ?></div>
            <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand">
        </div>
        </form>
    </section>
    <?php include("footer.php"); ?>
    
    

</html>