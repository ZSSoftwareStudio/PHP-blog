<?php
    include("_conn.php");
    $sql = "select * from `categories` LIMIT 9";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
        echo '
            <a class="dropdown-item" href="/blog/category.php?category='.$row['name'].'">'.$row['name'].'</a>
        ';
    }

?>


