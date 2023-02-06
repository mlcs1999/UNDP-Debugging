<?php

trait Obrada
{

    public function konvertujUNiz()
    {
        $niz = array();
        foreach ($this as $kljuc => $vrednost) {
            $niz[$kljuc] = $vrednost;
            $niz[$kljuc + 1] = 5;
        }
        return $niz;
    }
}

?>