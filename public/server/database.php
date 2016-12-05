<?php

try {

    class Database {

        //Set connection variables
		
       	private static $dbName = 'twist';		
		private static $dbHost = 'localhost';
        private static $dbUsername = 'root';
		private static $dbUserPassword = '';
	   	
		//private static $dbName = 'twistnwr_ecommerce';
      	//private static $dbHost = 'localhost';
		//private static $dbUsername = 'twistnwr_nidhi';
		///private static $dbUserPassword = 'Electricity1';
       
	   
        private static $cont = null;

        public function __construct() {
            die('Init function is not allowed');
        }

        //Connect to database
        public static function connect() {
            // One connection through whole application
            if (null == self::$cont) {
                try {
                    self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }
            return self::$cont;
        }

        //Disconnect from database 
        public static function disconnect() {
            self::$cont = null;
        }

    }

} catch (Exception $ex) {
    
}
