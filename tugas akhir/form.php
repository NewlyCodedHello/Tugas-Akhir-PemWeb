<?php
include "koneksi MVC.php";
if (empty($_GET['e']))
    $title = "Tambah Data Mahasiswa";
else {
    $title = "Edit Data Mahasiswa";
    $q = $mysqli->query("SELECT * FROM datamahasiswa WHERE No ='$_GET[No]'");
    $data = mysqli_fetch_array($q);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 40%;
            border-collapse: collapse;
            border: 3px solid black;
            margin-bottom: 20px;
            background-color: #fff;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }

        th {
            background-color: #333;
            color: #fff;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1><?php echo $title ?></h1>
    <form method="POST" action="edit.php">
        <input type="hidden" name="e" value="<?php if (isset($data)) echo $data['no']; ?>" />
        <table>
            <tr>
                <td>No</td>
                <td><input name="No" type="text" value="<?php if (isset($data)) echo $data['no']; ?>" /></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input name="NIM" type="text" value="<?php if (isset($data)) echo $data['nim']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="Nama" type="text" value="<?php if (isset($data)) echo $data['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input name="ProgramStudi" type="text" value="<?php if (isset($data)) echo $data['programstudi']; ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="Email" type="text" value="<?php if (isset($data)) echo $data['email']; ?>" /></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
