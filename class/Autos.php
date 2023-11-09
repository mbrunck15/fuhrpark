<?php

class Autos extends Fahrzeug
{
        private int $sitzplaetzen;

    /**
     * @param int $sitzplaetzen
     */
    public function __construct(int $kfzscheinnummer,int $rahmennummer,string $kennzeichen,int $kw, int $sitzplaetzen)
    {
        parent::__construct($kfzscheinnummer,$rahmennummer,$kennzeichen,$kw);

        $this->sitzplaetzen = $sitzplaetzen;
    }

    public function getSitzplaetzen(): int
    {
        return $this->sitzplaetzen;
    }

    public function setSitzplaetzen(int $sitzplaetzen): void
    {
        $this->sitzplaetzen = $sitzplaetzen;
    }


}