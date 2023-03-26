<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f0f0f0;
		}
		
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}
		
		form {
			width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			color: #555;
			font-weight: bold;
		}
		
		input, select {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			font-size: 16px;
		}
		
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 18px;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<h1>Feedback Form</h1>
	<form method="post" action="thankyou.php">
		<label>Complete Name</label>
		<input type="text" name="complete_name" required>
		
		<label>Email Address</label>
		<input type="email" name="email" required>
		
		<label>Type</label>
		<select name="type">
			<option value="Inquiry">Inquiry</option>
			<option value="Feedback">Feedback</option>
			<option value="Other">Other</option>
		</select>
		
		<label>Satisfaction Level</label>
		<input type="range" name="satisfaction_level" min="0" max="10" required>
		
		<label>Feedback Message</label>
		<textarea name="message" required></textarea>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>
