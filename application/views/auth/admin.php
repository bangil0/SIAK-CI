<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/style.css">
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin Login</h1>
			</div>

			<div class="login-form">
             <?= form_open('admin') ?>
				<div class="control-group">
				<?= form_error('email'); ?>
				<input type="email" class="login-field" name="email" value="<?=set_value('email') ?>" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<?= form_error('password'); ?>
				<input type="password" class="login-field" name="password" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="submit" class="btn btn-primary btn-large btn-block" name="submit" value="login">
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</body>


</body>
</html>
