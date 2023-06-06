<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2 style="font-family: 'Times New Roman', Times, serif;">DATA MAHASISWA</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi MVC.php";
            $rs = $mysqli->query("SELECT * FROM datamahasiswa");
            while ($datamahasiswa = mysqli_fetch_array($rs)) {
                echo
                    "<tr>
<td>$datamahasiswa[no]</td>
<td>$datamahasiswa[nim]</td>
<td>$datamahasiswa[nama]</td>
<td>$datamahasiswa[programstudi]</td>
<td>$datamahasiswa[email]</td>
<td><a href=\"form.php?No=$datamahasiswa[no]&e=1\">Edit</a></td>
<td><a href=\"delete.php?No=$datamahasiswa[no]\">Delete</a></td>
</tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="button-container">
        <button onclick="location.href='form.php'" type="button">Tambah</button>
    </div>
    <div class="button-container">
        <button onclick="location.href='keluar.php'" type="button">Logout</button>
    </div>
</body>

</html>
