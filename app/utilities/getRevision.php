<?php

namespace App\Utilities;

class GetRevision
{
    public function getRevision()
    {
        if (date('N') >= 6) {
            echo "m'envoipasl'information le titre";
        }else
        {
            echo "C'est  pour devoir laravel ";
        }
    }

    public function getMessageBienvenu()
    {
       echo "Bienvenue à L'universite cheikh Ahmadou Banba";

    }
}

?>
