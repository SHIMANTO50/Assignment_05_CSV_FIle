<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="POST" action="process_form.php" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>
		
		<label for="profile_pic">Profile Picture:</label>
		<input type="file" name="profile_pic" id="profile_pic"><br><br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>