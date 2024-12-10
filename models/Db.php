<?php
class Db
{
    private static $conn;
    private static $hostname = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $databaseName = 'sample_db';
    public function __construct()
    {
        try {
            self::$conn = new mysqli(self::$hostname, self::$username, self::$password, self::$databaseName);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * Get Database connection.
     */

    public function getConnection()
    {
        return self::$conn;
    }
}