<?php

namespace MAND\Cliente\Types;

use MAND\Cliente\ClienteAbstract;

class ClientePf extends ClienteAbstract
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
        if($this->validaCPF($numDocumento)) {
            $this->numDocumento = $numDocumento;
        }
        return $this;
    }


    private function validaCPF($cpf){
        $cpf = str_pad(preg_replace("@[.-]@", "", $cpf), 11, '0', STR_PAD_LEFT);

        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' ||
            $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444'
            || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777'
            || $cpf == '88888888888' || $cpf == '99999999999'){
            return false;
        }
        else{
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }

}