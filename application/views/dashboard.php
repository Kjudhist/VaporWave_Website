<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<h4><b>Selamat Datang <?php echo $this->session->userdata('nama'); ?></b></h4>
	<h2><b>Persewaan Kamar KOS</b></h2>
	<a href="logout">Logout here</a>
</body>
</html>