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
      <?php
        $sql2 = "SELECT * FROM `blogs` WHERE `cat` = '". $category ."'";
        $query2 = mysqli_query($conn, $sql2);

        while ($row2 = mysqli_fetch_assoc($query2)){
          echo '
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              '. $row2['cat'] .'
            </div>
            <div class="card-body" style="width: 18rem;">
              <h5 class="card-title">'. $row2['name'] .'</h5>
              <p class="card-text">'. substr($row2['description'], 0, 100) .'... </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
          ';
        }
      ?>
  </div>
</div>
<?php include("Components/_footer.php"); ?>