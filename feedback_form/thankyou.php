<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; color: #333; margin: 0;">
	<div style="background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 2rem auto; max-width: 600px; padding: 2rem; text-align: center;">
		<h1 style="margin-top: 0;">Thank You!</h1>
		<p>Received <?php echo $_POST["type"]; ?> message from <?php echo $_POST["complete_name"]; ?> (<?php echo $_POST["email"]; ?>)</p>
		<p><?php echo $_POST["message"]; ?></p>
		<p>Satisfaction Level: <?php echo $_POST["satisfaction_level"]; ?></p>
	</div>
</body>
</html>
