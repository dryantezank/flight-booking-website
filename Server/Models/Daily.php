<?php

class Daily
{
    private int $id;
    private string $title;
    private string $content;
    private int $author;
    private DateTime $date;

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param int $author
     * @param DateTime $date
     */
    public function __construct(int $id, string $title, string $content, int $author, DateTime $date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAuthor(): int
    {
        return $this->author;
    }

    public function setAuthor(int $author): void
    {
        $this->author = $author;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getAllDaily()
    {
        try {
            $sql = "SELECT * FROM flightbooking.daily";
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

    public function getDailyById(int $id) {
        try {
            $sql = "SELECT * FROM flightbooking.daily WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }


    public function addDaily(string $title, string $content, int $author, DateTime $date): bool
    {
        try {
            $sql = "INSERT INTO flightbooking.daily(title, content, author, date) 
            VALUES (:title, :content, :author, :date)";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":title", $title);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":author", $author);
            $cmd->bindValue(":date", $date);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    public function deleteDaily(int $id): bool
    {
        try {
            $sql = "DELETE FROM flightbooking.daily WHERE id=:id";
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

    public function updateDaily(int $id, string $title, string $content, int $author, DateTime $date): bool
    {
        try {
            $sql = "UPDATE flightbooking.daily 
                    SET title=:title, content=:content, author=:author, date=:date
                    WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":title", $title);
            $cmd->bindValue(":content", $content);
            $cmd->bindValue(":author", $author);
            $cmd->bindValue(":date", $date);
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