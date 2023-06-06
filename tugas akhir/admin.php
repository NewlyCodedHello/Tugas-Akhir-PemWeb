<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 30px;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h3 {
            margin-bottom: 20px;
            color: red;
        }

        .container form {
            display: flex;
            justify-content: center;
        }

        .container input[type="submit"] {
            margin-top: 10px;
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
        }

        .container input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['submit'])) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if ($_SESSION['username'] == 'SUNU' && $_SESSION['password'] == '12345') {
                header("Location: index.php");
            } else if ($_SESSION['username'] == 'Guest' && $_SESSION['password'] == 'guest') {
                header("Location: tabeluser.php");
            } else {
                echo "<h3>Username atau password salah. Silakan coba lagi!!!</h3>";
                echo "<form action='login.php'>";
                echo "<input type='submit' name='submit' value='Login'>";
                echo "</form>";
            }
        }
        ?>
        <form action="tabeluser.php">
            <input type="submit" value="Masuk sebagai Tamu">
        </form>
    </div>
</body>

</html>
