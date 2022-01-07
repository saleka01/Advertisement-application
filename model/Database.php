<?php

class Database
{
	public static $host = "127.0.0.1";
    public static $dbName = "sample";
    public static $username = "root";
    public static $password = "";

    private static function connect(){
	/** 
	*	Try to connect to the MySQL database, if it can't, then throw an error. 
	*	@return PDO connection to the database.
	*/
        try{
            $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8",self::$username,self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $e){
            echo "Connection failed: ". $e->getMessage();
        }
    }
	/** 
	*Creates a connect to the database and run the $query command. 
	* @param string $query a command what we run, 
	* @param array $params an array that contains data to the query,
	* @return array what we give them (value,null,empty)
	*/
	public static function query($query,$params = []){
	        if(self::connect() != null){
	            $statement = self::connect()->prepare($query);
	            $statement->execute($params);
	            if (explode(' ',$query)[0] == 'SELECT'){
	                $data = $statement->fetchAll();
	                return $data;
	            }
	        }
	        else{
	            return [];
	        }
	    }
	

}