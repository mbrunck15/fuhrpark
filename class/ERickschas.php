<?php

class ERickschas extends Fahrad
{
private int $kw;

    /**
     * @param int $kw
     */
    public function __construct(int $sitzplaetze,int $gaenge ,int $kw)
    {
        parent::__construct($sitzplaetze,$gaenge);
        $this->kw = $kw;
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