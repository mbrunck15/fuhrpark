<?php

class Fuhrpark
{
    private array $fuhrpark=[];

    //erstelle hier kein constucter, da ich sonst alle Zelte außerhalb der klasse erstellen muß.

    public function erstelletestdaten()
    {
        //Ausführlich
        $this->fuhrpark[]=new Fahrraeder(1,6);
        $this->fuhrpark[]=new Autos(123,321,'B-B123',75,5,);
        $this->fuhrpark[]=new LKW(456,654,'B-B23',100,250);
        $this->fuhrpark[]=new Motorraeder(789,987,'B-W258',12,2,30);
        $this->fuhrpark[]=new ERickschas(4,2,12);

    }


    public function getGesamtflaeche():float{

        $gesamtfahrzeuge=0;
        foreach ($this->fuhrpark as $fahrzeug) {
            $gesamtfahrzeuge+=$fahrzeug->getSitzplaetzen();

        }
        return $gesamtfahrzeuge;
    }








}