<?php


function filteringPassword($password)
{
    $notAllowedSymbolsArray = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '[', ']', '{', '}', '|', '\\', ';', ':', '"', '\'', '<', '>', ',', '.', '/', '?');

    $filteredPassword = str_replace($notAllowedSymbolsArray, '', $password);

    return $filteredPassword;
}


$password = $_POST['password'];
$filteredPassword = filteringPassword($password);
