<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=user_authentication', 'root', '');

// Get the user profile information
$user_profile = $db->query('SELECT * FROM users WHERE id = 42')->fetch();

// Display the user profile information in the form
echo '<input type="text" name="name" value="' . $user_profile['name'] . '"\n>';
echo '<input type="email" name="email" value="' . $user_profile['email'] . '"\n>';
echo '<input type="password" name="password" value="' . $user_profile['password'] . '"\n>';


?>
