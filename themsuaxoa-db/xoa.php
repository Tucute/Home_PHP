<?php
include "db.php";
global $conn;
?>
<?php
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM product WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        echo "Kết nối thành công";
        header("Location: index.php");
    }
    else {
        echo "Lỗi kết nối database". mysqli_error($conn);
    }
}
?>