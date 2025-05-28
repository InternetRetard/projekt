<?php
// // insert żeby wyłączyć to gówno 

include('sql.php');
$sql = 'SELECT email FROM niggas';
$work = mysqli_query($conn, $sql);
$niggas = mysqli_fetch_all($work, MYSQLI_ASSOC);
mysqli_free_result($work);
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">

    <?php include("header.php"); ?>

    <h4 class="center blue-text">Emails To Our Helpers!</h4>
    <div class="container"></div>
    <div class="row"></div>
    <?php foreach($niggas as $nigga){ ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <img src="logonobg.png" class="beastlogo">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($nigga['email']); ?></h6>
                </div>
                <div class="card-content right-align">
                    <a class="brand-text" href="vids.html">Videos</a>
                </div>
            </div>
        </div>
        
        
        <?php } ?>

    <?php include("footer.php"); ?>
    
    

</html>