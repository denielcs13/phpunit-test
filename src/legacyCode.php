<?php

function NewUser ($db, $username, $password)
{
	// Fix for short password (less than 6)
	if(mb_strlen($password, 'UTF-8') >= 6) {
		$db->insert ($username, md5($password));	
	}
}

function DeleteUser ($db, $username)
{
	if (UserExists($db, $username))
	{
		$db->delete ($username);
	}
}

function ChangePassword ($db, $username, $password)
{
	if(mb_strlen($password, 'UTF-8') >= 6 && UserExists($db, $username)) {
		$db->update ($username, md5($password)); // Calling md5 on password resolves testChangePassword	
	}
}

function UserExists ($db, $username)
{
	$user = $db->get($username);
	return !empty($user);
}
