<?php
// include database connection file
include'koneksi.php';

// Get id from URL to delete that user
$id = isset($_GET['id_barang']);

// Delete user row from table based on given id
mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang=$id")or die(mysqli_error($koneksi));

// After delete redirect to Home, so that latest user list will be displayed.

?>