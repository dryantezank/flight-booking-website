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
            Database::close_connect();
            return $result;
        } catch(PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    // Lấy account theo id
    public function getAccountById(int $id) : mixed {
        $dbconn = Database::connect();
        try {
            $sql = "SELECT * FROM account WHERE id=:id";
            $cmd = $dbconn->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->fetch();
            Database::close_connect();
            return $result;
        } catch(PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function checkAccount(string $accountname, string $password) : bool {
        $dbconn = Database::connect();
        try {
            $sql = "SELECT * FROM account WHERE accountname=:accountname,password=:password";
            $cmd = $dbconn->prepare($sql);
            $cmd->bindValue(":accountname", $accountname);
            $cmd->bindValue(":password", $password);
            $result = $cmd->fetch();
            return !empty($result);
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }
}

?>
