<?php
include 'conn.php';

$sql = "UPDATE pedidos SET status = 'Cancelado' WHERE status <> 'Pronto'";

if ($conn->query($sql) === TRUE) {
    echo "All records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
header("Location: index.php");
exit();
?>
