<?php
$userlist = file('usernames.txt');
$pwlist = file('passwords.txt');
$user = $_POST['username'];
$pw = $_POST['password'];
$pwpassed = false;
$usernamepassed = false;
$line = 0;

foreach ($userlist as $usercheck)
{
    if ($user == $usercheck) {
        $usernamepassed = true;
    }
    else {$line++;}
}
if ($pwlist[$line] == $pw)
{
    $pwpassed = true;
}
if ($usernamepassed && $pwpassed)
{
    echo '$user, you successfully logged in!';
}
else
{
    echo 'Invalid username or password. Please try again!';
}

?>