<?php

class LKW extends Fahrzeug
{
        private int $ladevolumen;

    /**
     * @param int $ladevolumen
     */
    public function __construct(int $kfzscheinnummer,int $rahmennummer,string $kennzeichen,int $kw ,int $ladevolumen)
    {
        parent::__construct($kfzscheinnummer,$rahmennummer,$kennzeichen,$kw);
        $this->ladevolumen = $ladevolumen;
    }

    public function getLadevolumen(): int
    {
        return $this->ladevolumen;
    }

    public function setLadevolumen(int $ladevolumen): void
    {
        $this->ladevolumen = $ladevolumen;
    }


}