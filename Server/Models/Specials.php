<?php

class Specials {
    private int $id;
    private string $name;
    private string $type;
    private string $content;
    private string $reduceType;
    private int $reduceValue;

    /**
     * @param int $id
     * @param string $name
     * @param string $type
     * @param string $content
     * @param string $reduceType
     * @param int $reduceValue
     */
    public function __construct(int $id, string $name, string $type, string $content, string $reduceType, int $reduceValue)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->content = $content;
        $this->reduceType = $reduceType;
        $this->reduceValue = $reduceValue;
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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getReduceType(): string
    {
        return $this->reduceType;
    }

    public function setReduceType(string $reduceType): void
    {
        $this->reduceType = $reduceType;
    }

    public function getReduceValue(): int
    {
        return $this->reduceValue;
    }

    public function setReduceValue(int $reduceValue): void
    {
        $this->reduceValue = $reduceValue;
    }
    public function addSpecials(string $name, string $type, string $content, string $reduceType, int $reduceValue) : bool {
        try {
            $sql = "INSERT INTO flightbooking.specials(name, type, content, reduceType, reduceValue) VALUES (:name, :type, :content, :reduceType, :reduceValue)";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":name", $name);
            $cmd->bindValue(":type", $type);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":reduceType", $reduceType);
            $cmd->bindValue(":reduceValue", $reduceValue);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    public function deleteSpecials(int $id) : bool {
        try {
            $sql = "DELETE FROM flightbooking.specials WHERE id=:id";
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

    public function updateSpecals(int $id, string $name, string $type, string $content, string $reduceType, int $reduceValue) : bool {
        try {
            $sql = "UPDATE flightbooking.specials
                SET name=:name, type=:type, content=:content, reduceType=:reduceType, reduceValue=:reduceValue
                WHERE id=:id
                ";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":name", $name);
            $cmd->bindValue(":type", $type);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":reduceType", $reduceType);
            $cmd->bindValue(":reduceValue", $reduceValue);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }
}

?>