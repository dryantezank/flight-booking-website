<?php
require "Database.php";
class Account {
    private int $id;
    private string $accountname;
    private string $password;
    private int $role;

    public function __construct()
    {
        
    }

    public function getAllAccount() {
        $dbconn = Database::connect();
        try {
            $sql = "SELECT * FROM accountname";
            $cmd = $dbconn->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        } catch(PDOException $e) {

        }
    }
}

?>
