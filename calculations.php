<?php
$userInp = $_POST['userInp'];
$randomNumber = rand(1,6);
if ($userInp == $randomNumber) {
  echo "You guessed the number!";
} else{
  echo "You guessed wrong the number was ".$randomNumber.", try again!";
}
