<?php

namespace App\Utilities;

class GetRevision
{
    public function getRevision()
    {
        if (date('N') >= 6) {
            echo "Revision Laravel";
        }else
        {
            echo " m'envoie pas l'information le Revision ";
        }
    }

    public function getMessageBienvenu()
    {
       echo "Bienvenue à L'universite cheikh Ahmadou Banba";

    }
}

?>
