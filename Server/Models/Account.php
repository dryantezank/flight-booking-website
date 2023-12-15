<?php
require "Database.php";
class Account {
    private int $id;
    private string $accoutName;
    private string $password;
    private int $role;

    /**
     * @param int $id
     * @param string $accoutName
     * @param string $password
     * @param int $role
     */
    public function __construct(int $id, string $accoutName, string $password, int $role)
    {
        $this->id = $id;
        $this->accoutName = $accoutName;
        $this->password = $password;
        $this->role = $role;
    }


    public function getAllAccount() {
        try {
            $sql = "SELECT * FROM account";
            $cmd = Database::connect()->prepare($sql);
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
        try {
            $sql = "SELECT * FROM account WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->fetch();
            Database::close_connect();
            return $result;
        } catch(PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function checkAccount(string $accountName, string $password) : bool {
        try {
            $sql = "SELECT * FROM account WHERE accountname=:accountName,password=:password";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":accountName", $accountName);
            $cmd->bindValue(":password", $password);
            $result = $cmd->fetch();
            return !empty($result);
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function changePassword(int $id, string $account, string $oldPassword, string $newPassword) : bool {
        if($this->checkAccount($account, $oldPassword)) {
            try {
                $sql = "UPDATE account SET password=:newPassword WHERE id=:id";
                $cmd = Database::connect()->prepare($sql);
                $cmd->bindParam(":newPassword", $newPassword);
                return $cmd->execute();
            } catch (PDOException $e){
                echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            }
        }
        return false;
    }
}

?>
