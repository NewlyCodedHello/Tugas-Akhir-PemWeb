<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<style>
		body {
			background-image: url('background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}

		.container {
			background-color: #f5f5f5;
			border: 1px solid #ccc;
			padding: 30px;
			width: 500px;
			margin: 20px auto;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		h2 {
			color: #333;
			margin-bottom: 30px;
			font-family: 'Times New Roman', Times, serif;
			text-align: center;
		}

		form {
			text-align: center;
		}

		label {
			display: block;
			text-align: left;
			margin-bottom: 5px;
			font-weight: bold;
			color: #555;
		}

		input[type="text"],
		input[type="password"] {
			padding: 12px;
			width: 95%;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 15px;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-size: 14px;
		}

		input[type="submit"] {
			padding: 12px 24px;
			background-color: blue;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #003399;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 style="font-family: 'Times New Roman', Times, serif; text-align: center;">Login</h2>
		<form action="admin.php" method="post">
			<p>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="Enter your username">
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="Enter your password">
			</p>
			<p>
				<input type="submit" value="Login" name="submit">
			</p>
		</form>
	</div>
</body>
</html>
