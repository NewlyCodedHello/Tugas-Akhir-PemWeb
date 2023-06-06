<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<style>
		.container {
			border: 1px solid black;
			padding: 20px 30px;
			width: 400px;
			margin: 20px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div style="text-align: center; margin-top: 30px;">
			<h2 style="color: #333;">Login</h2>
			<form action="admin.php" method="post" style="width: 300px; margin: 0 auto;">
				<p style="margin-bottom: 10px;">
					<label for="username" style="display: block; text-align: left;">Username:</label>
					<input type="text" name="username" id="username" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc;">
				</p>
				<p style="margin-bottom: 10px;">
					<label for="password" style="display: block; text-align: left;">Password:</label>
					<input type="password" name="password" id="password" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc;">
				</p>
				<p>
					<input type="submit" value="Login" name="submit" style="padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
				</p>
			</form>
		</div>
	</div>
</body>
</html>
