<?php

class Employee {
    private int $id;
    private string $name;
    private DateTime $birthday;
    private string $address;
    private string $email;
    private string $account_id;

    /**
     * @param int $id
     * @param string $name
     * @param DateTime $birthday
     * @param string $address
     * @param string $email
     * @param string $account_id
     */
    public function __construct(int $id, string $name, DateTime $birthday, string $address, string $email, string $account_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->email = $email;
        $this->account_id = $account_id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAccountId(): string
    {
        return $this->account_id;
    }

    public function setAccountId(string $account_id): void
    {
        $this->account_id = $account_id;
    }
    public function getAllEmployee() {
        try {
            $sql = "SELECT * FROM flightbooking.employee";
            $cmd = Database::connect()->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function getEmployeeById(int $id) {
        try {
            $sql = "SELECT * FROM flightbooking.employee WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function getEmployeeByAccountId(int $accountId) {
        try {
            $sql = "SELECT * FROM flightbooking.employee WHERE account_id=:accountId";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":accountId", $accountId);
            $cmd->execute();
            $result = $cmd->fetch();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function deleteEmployee(int $id) : bool {
        try {
            $sql = "DELETE FROM flightbooking.employee WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    public function updateEmployee(int $id, string $name, DateTime $birthday, string $address, float $points, string $email, int $accountId){
        try {
            $sql = "UPDATE flightbooking.customer 
                SET name=:name, birthday=:birthday, address=:address, points=:points, email=:email, account_id=:accountId
                WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":birthday", $birthday);
            $cmd->bindValue(":address", $address);
            $cmd->bindValue(":points", $points);
            $cmd->bindValue(":email", $email);
            $cmd->bindValue(":accountId", $accountId);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    // return true if current amount points of User can be pay
    // other return false
//    public function checkPoints(float $payPoints) : bool {
//        if($this->points < $payPoints) return false;
//        if(($this->points - $payPoints) < 0) return false;
//        return true;
//    }
//    public function minusPointsOfUser(float $payPoint) : float {
//        if($this->checkPoints($payPoint)) {
//            $remain = $this->points - $payPoint;
//            $this->setPoints($remain);
//            return true;
//        }
//        return false;
//    }

    public function getAgeFromBirthday(DateTime $birthday) : int {
        $currentDay = new DateTime();
        return (int) ($currentDay->diff($birthday))->format("y");
    }
}

?>
