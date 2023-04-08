<?php

class checkLogin
{
  public static $isLogged; // Declare the static property

  public static function getIsLogged()
  {
    return self::$isLogged;
  }

  public static function setIsLogged($value)
  {
    self::$isLogged = $value;
  }
}


// Access the value of $isLogged property
$isLoggedValue = checkLogin::getIsLogged(); // Returns true
