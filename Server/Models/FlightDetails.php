<?php

class FlightDetails {
    private int $id;
    private DateTime $departuredate;
    private int $price;
    private int $availableseats;

    /**
     * @param int $id
     * @param DateTime $departuredate
     * @param int $price
     * @param int $availableseats
     */
    public function __construct(int $id, DateTime $departuredate, int $price, int $availableseats)
    {
        $this->id = $id;
        $this->departuredate = $departuredate;
        $this->price = $price;
        $this->availableseats = $availableseats;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDeparturedate(): DateTime
    {
        return $this->departuredate;
    }

    public function setDeparturedate(DateTime $departuredate): void
    {
        $this->departuredate = $departuredate;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getAvailableseats(): int
    {
        return $this->availableseats;
    }

    public function setAvailableseats(int $availableseats): void
    {
        $this->availableseats = $availableseats;
    }

    public function addFlightDetails($flightId, $flightDepartureDate, $price, $availableSeats) : bool {
        try {
            $sql = "INSERT INTO 
            flightbooking.flightdetails(flight_id, flightdeparturedate, price, availableseats) 
            VALUES (:flight_id, :flightdeparture, :price, :availableseats)";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":flight_id", $flightId);
            $cmd->bindValue(":flightdeparture", $flightDepartureDate);
            $cmd->bindValue(":price", $price);
            $cmd->bindValue(":availableseats", $availableSeats);
            $result = $cmd->execute();
            Database::close_connect();
            return $result;
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }

    public function checkAvailableSeats(int $flight_id) : bool {
        try {
            $sql = "SELECT availableseats FROM flightbooking.flightdetails WHERE flight_id=:flight_id";
            $cmd = Database::connect()->prepare($sql);
            $cmd->bindValue(":flight_id", $flight_id);
            $cmd->execute();
            $result = $cmd->fetch();
            if($result["availableseats"] > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            return false;
        }
    }
}

?>