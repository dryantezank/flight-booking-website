<?php

class Ticket {
    private int $id;
    private int $flightId;
    private DateTime $flightDepartureDate;
    private string $status;

    /**
     * @param int $id
     * @param int $flightId
     * @param DateTime $flightDepartureDate
     * @param string $status
     */
    public function __construct(int $id, int $flightId, DateTime $flightDepartureDate, string $status)
    {
        $this->id = $id;
        $this->flightId = $flightId;
        $this->flightDepartureDate = $flightDepartureDate;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFlightId(): int
    {
        return $this->flightId;
    }

    public function setFlightId(int $flightId): void
    {
        $this->flightId = $flightId;
    }

    public function getFlightDepartureDate(): DateTime
    {
        return $this->flightDepartureDate;
    }

    public function setFlightDepartureDate(DateTime $flightDepartureDate): void
    {
        $this->flightDepartureDate = $flightDepartureDate;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getAllTicket() {
        try {
            $sql = "SELECT * FROM flightbooking.ticket";
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
    public function getTicketById(int $id) {
        try {
            $sql = "SELECT * FROM flightbooking.daily WHERE id=:id";
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
    public function addTicket(int $flightId, DateTime $flightDepartureDate, string $status) {
        try {
            $sql = "INSERT INTO flightbooking.ticket(flight_id, flightdeparturedate, status) VALUES(:flightId, :flightDepart, :status)";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":flightId", $flightId);
            $cmd->bindValue(":flightDepart", $flightDepartureDate);
            $cmd->bindValue(":status", $status);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }
    public function deleteTicket(int $id) {
        try {
            $sql = "DELETE FROM flightbooking.ticket WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function updateTicket(int $id, int $flightId, DateTime $flightDepartureDate, string $status) {
        try {
            $sql = "UPDATE flightbooking.ticket SET flight_id=:flightId, flightdeparturedate=:flightDepar, status=:status WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":flightId", $flightId);
            $cmd->bindValue(":flightDepart", $flightDepartureDate);
            $cmd->bindValue(":status", $status);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }
}

?>
