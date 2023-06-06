<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border: 3px solid black;
            display: inline-block;
        }

        table {
            width: 100%;
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
            background-color: #333;
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
        
        input[type="submit"][name="keluar"] {
            background-color: blue;
        }
    </style>
</head>

<body>
    <h2><span style="background-color: #fff; padding: 5px;">Data Mahasiswa</span></h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi MVC.php";
            $rs = $mysqli->query("SELECT * FROM datamahasiswa");
            while ($datamahasiswa = mysqli_fetch_array($rs)) {
                echo "<tr>
<td>$datamahasiswa[no]</td>
<td>$datamahasiswa[nim]</td>
<td>$datamahasiswa[nama]</td>
<td>$datamahasiswa[programstudi]</td>
<td>$datamahasiswa[email]</td>
</tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="keluar.php" method="POST">
        <input type="submit" name="keluar" value="Logout">
    </form>

</body>

</html>
