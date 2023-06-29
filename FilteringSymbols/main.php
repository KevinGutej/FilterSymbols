<?php


function filteringPassword($password) {
    $notAllowedSymbolsArray = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '[', ']', '{', '}', '|', '\\', ';', ':', '"', '\'', '<', '>', ',', '.', '/', '?');

    $filteredPassword = str_replace($notAllowedSymbolsArray, '', $password);

    return $filteredPassword;
}
