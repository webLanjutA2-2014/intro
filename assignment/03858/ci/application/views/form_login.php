<h2>Login</h2>

<?php 
	echo form_open('login/authenticate');
	echo "Username: ";
	echo form_input('username', 'Username');
	echo "Password: ";
	echo form_password('password', 'Password');
	echo form_submit('submit', 'Login');
	echo form_close();
?>