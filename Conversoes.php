<?php
/**
 * Description of Conversoes
 *
 * @author Eduardo Ugolini <edu.ugolini2@gmail.com>
 */
class Conversoes {
    
    private $arrayDivid = array();
    private $converteDecimal;
    public $dividendoDec;
    public $arrayBinaria = array();
    
    public function binToDec($arrayConversor) {
        $this->arrayDivid[0] =  $arrayConversor[0];
        $this->arrayDivid[1] =  $arrayConversor[1];
        $this->arrayDivid[2] =  $arrayConversor[2];
        $this->arrayDivid[3] =  $arrayConversor[3];
        $this->arrayDivid[4] =  $arrayConversor[4];
        $this->arrayDivid[5] =  $arrayConversor[5];
        $this->arrayDivid[6] =  $arrayConversor[6];
        $this->arrayDivid[7] =  $arrayConversor[7];
        if($this->arrayDivid[0] == 0){
                if($this->arrayDivid[1] == 1){
                    $this->dividendoDec = 64;
                }
                if($this->arrayDivid[2] == 1){
                    $this->dividendoDec += 32;            
                }
                if($this->arrayDivid[3] == 1){
                    $this->dividendoDec += 16;       
                }
                if($this->arrayDivid[4] == 1){
                    $this->dividendoDec += 8;       
                }
                if($this->arrayDivid[5] == 1){
                    $this->dividendoDec += 4;       
                }
                if($this->arrayDivid[6] == 1){
                    $this->dividendoDec += 2;       
                }
                if($this->arrayDivid[7] == 1){
                    $this->dividendoDec += 1;       
                }
            }
            else{
                $this->dividendoDec = -128;

                if($this->arrayDivid[1] == 1){
                    $this->dividendoDec += 64;
                }
                if($this->arrayDivid[2] == 1){
                    $this->dividendoDec += 32;            
                }
                if($this->arrayDivid[3] == 1){
                    $this->dividendoDec += 16;       
                }
                if($this->arrayDivid[4] == 1){
                    $this->dividendoDec += 8;       
                }
                if($this->arrayDivid[5] == 1){
                    $this->dividendoDec += 4;       
                }
                if($this->arrayDivid[6] == 1){
                    $this->dividendoDec += 2;       
                }
                if($this->arrayDivid[7] == 1){
                    $this->dividendoDec += 1;       
                }
            }
        return $this->dividendoDec;    
    }
    
    public function decToBin($decimal) {
        $this->converteDecimal = $decimal;
        if($this->converteDecimal > 0){
            $this->arrayBinaria[0] = 0;
            if($this->converteDecimal >= 64){
                $this->converteDecimal-= 64;
                $this->arrayBinaria[1] = 1;
            }
            else{
                $this->arrayBinaria[1] = 0;
            }
            if($this->converteDecimal >= 32){
                $this->converteDecimal-= 32;
                $this->arrayBinaria[2] = 1;
            }
            else{
                $this->arrayBinaria[2] = 0;
            }
            if($this->converteDecimal >= 16){
                $this->converteDecimal-= 16;
                $this->arrayBinaria[3] = 1;
            }
            else{
                $this->arrayBinaria[3] = 0;
            }
            if($this->converteDecimal >= 8){
                $this->converteDecimal-= 8;
                $this->arrayBinaria[4] = 1;
            }
            else{
                $this->arrayBinaria[4] = 0;
            }
            if($this->converteDecimal >= 4){
                $this->converteDecimal-= 4;
                $this->arrayBinaria[5] = 1;
            }
            else{
                $this->arrayBinaria[5] = 0;
            }
            if($this->converteDecimal >= 2){
                $this->converteDecimal-= 2;
                $this->arrayBinaria[6] = 1;
            }
            else{
                $this->arrayBinaria[6] = 0;
            }
            if($this->converteDecimal >= 1){
                $this->converteDecimal-= 1;
                $this->arrayBinaria[7] = 1;
            }
            else{
                $this->arrayBinaria[7] = 0;
            }
        }         
        else{
            $this->arrayBinaria[0] = 1;
            if(($this->converteDecimal + 64) <= 0){
                $this->converteDecimal+= 64;
                $this->arrayBinaria[1] = 1;
            }
            else{
                $this->arrayBinaria[1] = 0;
            }
            if(($this->converteDecimal + 32) <= 0){
                $this->converteDecimal+= 32;
                $this->arrayBinaria[2] = 1;
            }
            else{
                $this->arrayBinaria[2] = 0;
            }
            if(($this->converteDecimal + 16) <= 0){
                $this->converteDecimal+= 16;
                $this->arrayBinaria[3] = 1;
            }
            else{
                $this->arrayBinaria[3] = 0;
            }
            if(($this->converteDecimal + 8) <= 0){
                $this->converteDecimal+= 8;
                $this->arrayBinaria[4] = 1;
            }
            else{
                $this->arrayBinaria[4] = 0;
            }
            if(($this->converteDecimal + 4) <= 0){
                $this->converteDecimal+= 4;
                $this->arrayBinaria[5] = 1;
            }
            else{
                $this->arrayBinaria[5] = 0;
            }
            if(($this->converteDecimal + 2) <= 0){
                $this->converteDecimal+= 2;
                $this->arrayBinaria[6] = 1;
            }
            else{
                $this->arrayBinaria[6] = 0;
            }
            if(($this->converteDecimal + 1) <= 0){
                $this->converteDecimal+= 1;
                $this->arrayBinaria[7] = 1;
            }
            else{
                $this->arrayBinaria[7] = 0;
            }
        }
        return $this->arrayBinaria;
    }
}
