<?php

$conn = mysqli_connect("localhost", "root", "", "uasbasisdata");

$NIM = $_GET["id"];

$result = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE NIM = $NIM");

$mhs = mysqli_fetch_assoc($result);


if( isset($_POST["submit"])){
$NIM = $_POST["NIM"];
$Nama = $_POST["Nama"];
$Jurusan = $_POST["Jurusan"];
$Email = $_POST["Email"];

$query = "UPDATE mahasiswa SET
            NIM = '$NIM',
            Nama = '$Nama',
            Jurusan = '$Jurusan',
            Email = '$Email'
        WHERE NIM = $NIM
        ";
mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        
        <script>
            alert('Data Berhasil Diedit!');
            document.location.href = 'index.php';
        </script>

        ";

    } else {
        echo "
        
        <script>
            alert('Data Gagal Diedit!');
            document.location.href = 'index.php';
        </script>

        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="POST">
    
    <ul>
        <li>
            <label for="NIM">NIM : </label>
            <input type="text" name="NIM" id="NIM" autocomplete="off" value="<?= $mhs["NIM"]; ?>">
        </li>
        <li>
            <label for="Nama">Nama : </label>
            <input type="text" name="Nama" id="Nama" autocomplete="off" value="<?= $mhs["Nama"]; ?>">
        </li>
        <li>
            <label for="Jurusan">Jurusan : </label>
            <input type="text" name="Jurusan" id="Jurusan" autocomplete="off" value="<?= $mhs["Jurusan"]; ?>">
        </li>
        <li>
            <label for="Email">Email : </label>
            <input type="text" name="Email" id="Email" autocomplete="off" value="<?= $mhs["Email"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit"> Edit </button>
        </li>
    </ul>


    </form>
</body>
</html>