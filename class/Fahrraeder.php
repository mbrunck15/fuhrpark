<?php

class Fahrraeder extends Fahrad
{

    public function __construct(int $sitzplaetze,int $gaenge)
    {
        parent::__construct($sitzplaetze,$gaenge);
    }
}