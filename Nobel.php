<?php

class Nobel {

    private $evszam;
    private $tipus;
    private $keresztnev;
    private $vezeteknev;
    
    function __construct($evszam, $tipus, $keresztnev, $vezeteknev) {
        $this->evszam = $evszam;
        $this->tipus = $tipus;
        $this->keresztnev = $keresztnev;
        $this->vezeteknev = $vezeteknev;
    }

    function getEvszam() {
        return $this->evszam;
    }

    function getTipus() {
        return $this->tipus;
    }

    function getKeresztnev() {
        return $this->keresztnev;
    }

    function getVezeteknev() {
        return $this->vezeteknev;
    }

    function setEvszam($evszam): void {
        $this->evszam = $evszam;
    }

    function setTipus($tipus): void {
        $this->tipus = $tipus;
    }

    function setKeresztnev($keresztnev): void {
        $this->keresztnev = $keresztnev;
    }

    function setVezeteknev($vezeteknev): void {
        $this->vezeteknev = $vezeteknev;
    }

    function teljesNev(){
        return ($this->keresztnev." ".$this->vezeteknev);
    }

}
