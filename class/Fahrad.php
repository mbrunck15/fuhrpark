<?php

class Fahrad       //elternklasse
{
private int $sitzplaetze;  //Attribute
private int $gaenge;

    /**
     * @param int $sitzplaetze
     * @param int $gaenge
     */
    public function __construct(int $sitzplaetze, int $gaenge)  //constuktor Metode
    {
        $this->sitzplaetze = $sitzplaetze;
        $this->gaenge = $gaenge;
    }

    public function getSitzplaetze(): int   //geter seter Metode
    {
        return $this->sitzplaetze;
    }

    public function setSitzplaetze(int $sitzplaetze): void
    {
        $this->sitzplaetze = $sitzplaetze;
    }

    public function getGaenge(): int
    {
        return $this->gaenge;
    }

    public function setGaenge(int $gaenge): void
    {
        $this->gaenge = $gaenge;
    }


}