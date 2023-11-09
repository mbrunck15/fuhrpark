<?php

class Motorraeder extends Fahrzeug
{
private int $sitzplaetze;
private int $schraeglage;

    /**
     * @param int $sitzplaetze
     * @param int $schraeglage
     */
    public function __construct(int $kfzscheinnummer,int $rahmennummer,string $kennzeichen,$kw,int $sitzplaetze, int $schraeglage)
    {
        parent::__construct($kfzscheinnummer,$rahmennummer,$kennzeichen,$kw);
        $this->sitzplaetze = $sitzplaetze;
        $this->schraeglage = $schraeglage;
    }

    public function getSitzplaetze(): int
    {
        return $this->sitzplaetze;
    }

    public function setSitzplaetze(int $sitzplaetze): void
    {
        $this->sitzplaetze = $sitzplaetze;
    }

    public function getSchraeglage(): int
    {
        return $this->schraeglage;
    }

    public function setSchraeglage(int $schraeglage): void
    {
        $this->schraeglage = $schraeglage;
    }


}