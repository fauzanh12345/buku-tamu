<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');?>">
</head>
<body>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class="login">
	<center><h2>Pengelolaan Tamu</h2></center>
            <form class="form-signin" action="<?php echo base_url('index.php/auth/proses_login'); ?>" method="post">
              <div>
                <label for="inputUsername">Username</label>
                <input type="text" name="username" class="validate" id="text" required autofocus>
              </div>

              <div>
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="validate" required>
              </div>
              <button class="tombol" type="submit">Sign in</button>
            </form>
          </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>