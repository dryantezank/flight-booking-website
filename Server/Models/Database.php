<?php

class Database {
    private static string $database;
    private static string $dns;
    private static string $host;
    private static string $port;
    private static string $dbname;
    private static string $username;
    private static string $password;
    private static array $options;
    private static PDO $db;
    private function __construct()
    {
        self::$database = $_ENV["DATABASE"];
        self::$host = $_ENV["HOSTNAME"];
        self::$port = $_ENV["PORT"];
        self::$dbname = $_ENV["DBNAME"];
        self::$username = $_ENV["USERNAME"];
        self::$password = $_ENV["PASSWORD"];
        self::$options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        self::$dns = "{${self::$database}}:host={${self::$host}};dbname={${self::$dbname}};port={${self::$port}}";
    }

    public static function connect() : PDO {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dns, self::$username, self::$password, self::$options);
            } catch (PDOException $e) {
                echo "Error Connection: {$e->getMessage()}";
                exit();
            }
        }
        return self::$dbname;
    }
    public static function close_connect() : PDO
    {
        self::$db = null;
        return self::$db;
    }

    /*public static function execute_nonquery($sql, $option = array()) {
        self::getDB();
        if (self::$db != null) {
            try {
                $cmd = self::$db->prepare($sql);
                if (count($option) > 0) {
                    for ($i = 0; $i < count($option); $i++) {
                        $cmd->bindParam($i + 1, $option[$i]);
                    }
                }
                $cmd->execute();
                $ketqua = $cmd->fetchAll();
                return $ketqua;
            } catch (PDOException $ex) {
                ShowError($ex);
            }
        } else {
            ShowError("Lỗi kết nối cơ sở dữ liệu");
        }
        self::disconnect();
    }*/
    public static function execute_nonquery(string $sql, array $option = array()) : array|bool {
        if(self::$db !== null) {
            try {
                $cmd = self::$db->prepare($sql);
                if(count($option) > 0) {
                    for ($i = 0; $i < count($option); $i++) {
                        $cmd->bindParam($i + 1, $option[$i]);
                    }
                }
                $cmd->execute();;
                $result = $cmd->fetchAll();
            } catch (PDOException $e) {
                echo "Error: {$e->getMessage()}";
                exit();
            }
        } else {
            echo "Error When Connect To Database";
        }
        self::close_connect();
        return false;

    }

}

?>