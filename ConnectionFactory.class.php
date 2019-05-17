<?php

class ConnectionFactory {

    private static $url = 'localhost';
    private static $user = 'root';
    private static $pwd = '';
    private static $dbName = 'teste';

    private static $con;

    public static function getConnection(){
        if(!isset(self::$con)){
            self::createConnection();
        }
        return self::$con;
    }

    private function createConnection(){
        self::$con = mysqli_connect(self::$url, self::$user, self::$pwd, self::$dbName);
    }

}