<?php

namespace MAND\Cliente\Types;

use MAND\Cliente\ClienteAbstract;

class ClientePj extends ClienteAbstract
{

    private $numDocumento;

    /**
     * @return mixed
     */
    public function getNumDocumento()
    {
        return $this->numDocumento;
    }

    /**
     * @param mixed $numDocumento
     */
    public function setNumDocumento($numDocumento)
    {
        if($this->validaCNPJ($numDocumento)) {
            $this->numDocumento = $numDocumento;
        }
        return $this;
    }


    private function validaCNPJ($CNPJ){
        $CNPJ = preg_replace ("@[./-]@", "", $CNPJ);
        if (strlen ($CNPJ) <> 14 or !is_numeric ($CNPJ)){
            return false;
        }
        $j = 5;
        $k = 6;
        $soma1 = "";
        $soma2 = "";

        for ($i = 0; $i < 13; $i++){
            $j = $j == 1 ? 9 : $j;
            $k = $k == 1 ? 9 : $k;
            $soma2 += ($CNPJ{$i} * $k);

            if ($i < 12){
                $soma1 += ($CNPJ{$i} * $j);
            }
            $k--;
            $j--;
        }

        $digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
        $digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;
        return (($CNPJ{12} == $digito1) and ($CNPJ{13} == $digito2));
    }

}