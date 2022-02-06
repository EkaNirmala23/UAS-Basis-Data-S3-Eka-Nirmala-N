<?php

$conn = mysqli_connect("localhost", "root", "", "uasbasisdata");

if( isset($_POST["submit"])){

    $Nama = $_POST["Nama"];
    $NIM = $_POST["NIM"];
    $Jurusan = $_POST["Jurusan"];
    $Email = $_POST["Email"];

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '', '$Nama', '$NIM', '$Jurusan', '$Email')

            ";
    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>

        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
    
    <ul>
        <li>
            <label for="NIM">NIM : </label>
            <input type="text" name="NIM" id="NIM" autocomplete="off">
        </li>
        <li>
            <label for="Nama">Nama : </label>
            <input type="text" name="Nama" id="Nama" autocomplete="off">
        </li>      
        <li>
            <label for="Jurusan">Jurusan : </label>
            <input type="text" name="Jurusan" id="Jurusan" autocomplete="off">
        </li>
        <li>
            <label for="Email">Email : </label>
            <input type="text" name="Email" id="Email" autocomplete="off">
        </li>
        <li>
            <button type="submit" name="submit"> Tambah </button>
        </li>
    </ul>


    </form>
</body>
</html>