<?php

$conn = mysqli_connect("localhost", "root", "", "uasbasisdata");

$NIM = $_GET["id"];

    mysqli_query($conn, " DELETE FROM mahasiswa WHERE NIM = $NIM");
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>

        ";
    }
    
?>