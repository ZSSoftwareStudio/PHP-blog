<?php
setcookie("user", "", time() - 31536000, "/");
echo "<script>window.location = 'index.php'</script>";
?>