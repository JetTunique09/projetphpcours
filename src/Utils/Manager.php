<?php

class Manager
{
    protected static $pdo;

    public function getPDO()
    {
        try{
            if(self::$pdo == null){
                self::$pdo = new PDO("mysql:host=127.0.0.1;dbname=projetphpdb;charset=utf8mb4",'root', null, [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            }
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            exit;
        }
        return self::$pdo;
    }
}
