<?php


class Prueba{


    public function buscarPalabraCadena($texto, $letra)
    {        
        $longitudPalabra = strlen($letra);
        $encontrado = -1;

        for($i=0; $i< strlen($texto); $i++)
        {
            $letraEnTexto = substr($texto,$i,$longitudPalabra);
            if($letraEnTexto == $letra)
            {

                $encontrado = $i;
                
            }
        }

        return $encontrado;
    }

    public function buscarLetra($texto, $letra)
    {        
        $encontrado = -1;

        for($i=0; $i< strlen($texto); $i++)
        {
            $letraEnTexto = substr($texto,$i,1);
            if($letraEnTexto == $letra)
            {

                $encontrado = $i;
                break;
            }
        }

        return $encontrado;
    }
    public function buscarPalabra($text, $palabra)
    {
        $arrayPalabras = explode(" ",$text);

        $encontrado = -1;
        
        foreach($arrayPalabras as $key => $value)
        {
            if($value === $palabra)
                $encontrado = $key;
        }

        return $encontrado;
    }
    public function buscarPalabra2($text, $palabra)
    {
        $encontrado = in_array($palabra,explode(" ",$text));
        return $encontrado;
    }
    public function doFibonacci(){
        
        $j = 0;
        $k = 1;
        $fibonacci = 0;

        for ($i=0; $i < 10 ; $i++) { 
            $fibonacci = $j + $k;
            echo $fibonacci."<br>";
            $j = $k;
            $k = $fibonacci;
            
        }
    }

    public function doFactorial($numero, $f = 1){
                
        
        $f = $f * $numero;
        $numero = $numero -1;

        if($numero > 0)
            return $this->doFactorial($numero, $f);
        else
            return $f;
         
            

        
    }
}

$p = new Prueba();
//$p->doFibonacci();
echo $p->doFactorial(0);
//echo $p->buscarPalabra("hola mundo desde mexico","mundo");
echo $p->buscarPalabra2("hola mundo desde mexico","mundo");
echo $p->buscarLetra("hola mundo desde mexico","e");
echo $p->buscarPalabraCadena("hola mundo desde mexico mun","mun");


?>