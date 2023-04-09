<?php


class checkLogin
{
  private static $isLogged;

  public static function getIsLogged()
  {
    return self::$isLogged;
  }

  public static function setIsLogged($value)
  {
    self::$isLogged = $value;
  }
}
