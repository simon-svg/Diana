<?php

class Config{
    private static $dbHost = 'localhost';
	private static $dbUser = 'root';
	private static $dbPass = 'simon605@gmail';
	private static $dbName = 'Diana';
	public static $conn = null;

	public static function getConnect(){
		if(!self::$conn) {
			self::$conn = new mysqli(self::$dbHost, self::$dbUser, self::$dbPass, self::$dbName);
			if(self::$conn -> connect_error) {
				return 'connect error'.self::$conn -> connect_errno.')'.self::$conn ->connect_error;
			}
		}
		return self::$conn;
	}
}