<?php

class Restaurant
{
    private $address; //Where restaurant is situated
    private $places; //Places into restaurant to sit there
    private $staff; //People who work in restaurant
    private $startWorkingTime; //When restaurant beginning to work every day
    private $endWorkingTime; //When restaurant stopping to work every day
    private $dailyMoneyTurnOver; //How much money restaurant earn today

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPlaces()
    {
        return $this->places;
    }

    public function setPlaces($places)
    {
        $this->places = $places;
    }

    public function getStaff()
    {
        return $this->staff;
    }

    public function setStaff($staff)
    {
        $this->staff = $staff;
    }

    public function getStartWorkingTime()
    {
        return $this->startWorkingTime;
    }

    public function setStartWorkingTime($startWorkingTime)
    {
        $this->startWorkingTime = $startWorkingTime;
    }

    public function getEndWorkingTime()
    {
        return $this->endWorkingTime;
    }

    public function setEndWorkingTime($endWorkingTime)
    {
        $this->endWorkingTime = $endWorkingTime;
    }

    public function getDailyMoneyTurnOver()
    {
        return $this->dailyMoneyTurnOver;
    }

    public function setDailyMoneyTurnOver($dailyMoneyTurnOver)
    {
        $this->dailyMoneyTurnOver = $dailyMoneyTurnOver;
    }


}