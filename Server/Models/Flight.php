<?php

class Flight {
    private int $id;
    private int $airline_id;
    private string $airlineName;
    private string $fromlocation;
    private string $tolocation;
    private DateTime $departuretime;
    private DateTime $arrivaltime;
    private int $duration;
    private int $totalseats;

    /**
     * @param int $id
     * @param int $airline_id
     * @param string $airlineName
     * @param string $fromlocation
     * @param string $tolocation
     * @param DateTime $departuretime
     * @param DateTime $arrivaltime
     * @param int $duration
     * @param int $totalseats
     */
    public function __construct(int $id, int $airline_id, string $airlineName, string $fromlocation, string $tolocation, DateTime $departuretime, DateTime $arrivaltime, int $duration, int $totalseats)
    {
        $this->id = $id;
        $this->airline_id = $airline_id;
        $this->airlineName = $airlineName;
        $this->fromlocation = $fromlocation;
        $this->tolocation = $tolocation;
        $this->departuretime = $departuretime;
        $this->arrivaltime = $arrivaltime;
        $this->duration = $duration;
        $this->totalseats = $totalseats;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAirlineId(): int
    {
        return $this->airline_id;
    }

    public function setAirlineId(int $airline_id): void
    {
        $this->airline_id = $airline_id;
    }

    public function getAirlineName(): string
    {
        return $this->airlineName;
    }

    public function setAirlineName(string $airlineName): void
    {
        $this->airlineName = $airlineName;
    }

    public function getFromlocation(): string
    {
        return $this->fromlocation;
    }

    public function setFromlocation(string $fromlocation): void
    {
        $this->fromlocation = $fromlocation;
    }

    public function getTolocation(): string
    {
        return $this->tolocation;
    }

    public function setTolocation(string $tolocation): void
    {
        $this->tolocation = $tolocation;
    }

    public function getDeparturetime(): DateTime
    {
        return $this->departuretime;
    }

    public function setDeparturetime(DateTime $departuretime): void
    {
        $this->departuretime = $departuretime;
    }

    public function getArrivaltime(): DateTime
    {
        return $this->arrivaltime;
    }

    public function setArrivaltime(DateTime $arrivaltime): void
    {
        $this->arrivaltime = $arrivaltime;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getTotalseats(): int
    {
        return $this->totalseats;
    }

    public function setTotalseats(int $totalseats): void
    {
        $this->totalseats = $totalseats;
    }

    public function getAllFlight() {
        try {
            $sql = "SELECT * FROM flightbooking.flight";
            $cmd = Database::connect()->prepare($sql);
            return $cmd->fetchAll();
        } catch (PDOException $e){
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }

    public function getFlightById(int $id) {
        try {
            $sql = "SELECT * FROM flightbooking.flight WHERE id=:id";
            $cmd = Database::connect()->prepare($sql);
            return $cmd->fetch();
        } catch (PDOException $e) {
            echo "<p>Lỗi truy vấn: {$e->getMessage()}</p>";
            exit();
        }
    }
     // Caculator flight duration time by departure time & arrivaltime
    // return hours
//    public function calulateFlightDuration(DateTime $departuretime, DateTime $arrivaltime) : int {
//    }
}

?>
