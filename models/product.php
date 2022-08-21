<?php

class product {
    private $id;
    private $name;
    private $details;
    private $date;
    private $by;
    
    public function __construct($id, $name, $details, $date, $by) {
        $this->id = $id;
        $this->name = $name;
        $this->details = $details;
        $this->date = $date;
        $this->by = $by;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getDetails() {
        return $this->details;
    }
    public function setDetails($details) {
        $this->details = $details;
    }
    public function getDate() {
        return $this->date;
    }
    public function setDate($date) {
        $this->date = $date;
    }
    public function getBy() {
        return $this->by;
    }
    public function setBy($by) {
        $this->by = $by;
    }



}