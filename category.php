<?php include("Components/_header.php"); ?>
<?php
    include("Components/_conn.php");
    $category = $_GET['category'];

    $sql = "SELECT * FROM `categories` WHERE `name` = '". $category ."' LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);
    
    echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4 text-center">'.$row['name'].'</h1>
            <br/>
            <p class="lead container">'. $row['description'] .'</p>
            </div>
        </div>';
?>
  
<div class="container my-4">
  <div class="row">

  </div>
</div>
<?php include("Components/_footer.php"); ?>