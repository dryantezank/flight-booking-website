<?php

class Vote {
    private int $id;
    private int $points;
    private string $content;
    private string $accountId;

    /**
     * @param int $id
     * @param int $points
     * @param string $content
     * @param string $accountId
     */
    public function __construct(int $id, int $points, string $content, string $accountId)
    {
        $this->id = $id;
        $this->points = $points;
        $this->content = $content;
        $this->accountId = $accountId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }
    public function getAllVote() {
        try {
            $sql = "SELECT * FROM flightbooking.vote";
            $cmd = Database::connect()->prepare($sql);
            $cmd->execute();
            return $cmd->fetchAll();
        }catch (PDOException $e)
        {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function getVoteById(int $id) {
        try {
            $sql = "SELECT * FROM flightbooking.vote WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            return $cmd->fetch();
        }catch (PDOException $e)
        {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function getVoteByAccountId(int $accountId) {
        try {
            $sql = "SELECT * FROM flightbooking.vote WHERE account_id=:accountId";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":accountId", $accountId);
            $cmd->execute();
            return $cmd->fetchAll();
        }catch (PDOException $e)
        {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function addVote(int $point, string $content, int $accountId) : bool {
        try {
            $sql = "INSERT INTO flightbooking.vote(points, content, account_id) VALUES (points=:points, content=:content, account_id=:account_id)";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":points", $point);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":account_id", $accountId);
            return $cmd->execute();
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    public function deleteVote(int $id) : bool {
        try {
            $sql = "DELETE FROM flightbooking.vote WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            return $cmd->execute();
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }
    public function updateVote(int $point, string $content, int $accountId) : bool {
        try {
            $sql = "UPDATE flightbooking.vote SET points=:points, content=:content, account_id=:account_id WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":point", $point);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":account_id", $accountId);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        }catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }
}


?>