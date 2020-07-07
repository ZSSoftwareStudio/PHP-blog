<?php
    include("Components/_conn.php");
    $sql = "select * from `categories`";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
        echo '
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; padding: 20px">
                <img src="' . $row['url'] . '" class="card-img-top mx-auto" alt="' . $row['name'] . '" style="width: 120px; height: 120px;">
                <div class="card-body">
                    <h5 class="card-title">' . $row['name'] . '</h5>
                    <p class="card-text">' . substr($row['description'], 0, 110) . '...</p>
                    <a class="btn btn-primary" href="/blog/category.php?category='.$row['name'].'">View Category</a>
                </div>
            </div>
        </div>
        ';
    }

?>


