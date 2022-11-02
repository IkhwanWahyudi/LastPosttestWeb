<?php

require 'koneksi.php';

$id = $_GET['Nomor'];

$result = mysqli_query($conn, "DELETE FROM pembelian_sepatu WHERE Nomor = $id");

if ( $result ) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'formbuy.php';
      </script>  
    ";
} else {
    echo "
      <script>
        alert('Data gagal dihapus');
        document.location.href = 'index.php';
      </script>  
    ";
}
?>