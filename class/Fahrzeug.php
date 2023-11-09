<?php

class Fahrzeug
{
    private int $kfzscheinnummer;
    private int $rahmennummer;
    private string $kennzeichen;
    private int $kw;

    /**
     * @param int $kfzscheinnummer
     * @param int $ramennummer
     * @param string $kennzeichen
     * @param int $kw
     */
    public function __construct(int $kfzscheinnummer, int $rahmennummer, string $kennzeichen, int $kw)
    {
        $this->kfzscheinnummer = $kfzscheinnummer;
        $this->rahmennummer = $rahmennummer;
        $this->kennzeichen = $kennzeichen;
        $this->kw = $kw;
    }

    public function getKfzscheinnummer(): int
    {
        return $this->kfzscheinnummer;
    }

    public function setKfzscheinnummer(int $kfzscheinnummer): void
    {
        $this->kfzscheinnummer = $kfzscheinnummer;
    }

    public function getRahmennummer(): int
    {
        return $this->rahmennummer;
    }

    public function setRahmennummer(int $rahmennummer): void
    {
        $this->rahmennummer = $rahmennummer;
    }

    public function getKennzeichen(): string
    {
        return $this->kennzeichen;
    }

    public function setKennzeichen(string $kennzeichen): void
    {
        $this->kennzeichen = $kennzeichen;
    }

    public function getKw(): int
    {
        return $this->kw;
    }

    public function setKw(int $kw): void
    {
        $this->kw = $kw;
    }




}