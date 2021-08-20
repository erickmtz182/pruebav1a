<?php

class Fibonacci{

    
    private $factorial = 1;
    private $mcd = 1;

    function doFactorial($numero)
    {
        $this->factorial = $this->factorial * $numero;
        $numero = $numero - 1;
        
        if($numero>0)
            $this->doFactorial($numero);
        else
            echo $this->factorial;
    }

    public function  doRecursividad($num1, $num2){
        
        $menor = 0;
        $resta = 0;

        if($num1==$num2)
        {
            $this->mcd = $num1;
        }
        elseif($num1>$num2)
        {
            $menor = $num2;
            $resta = $num1 - $num2;
            $this->doRecursividad($menor,$resta);
        }else
        {   
            $menor = $num1;
            $resta = $num2 - $num1;
            $this->doRecursividad($menor,$resta);
        }

        return $this->mcd;
    }

    public function sum($arreglo, $index = 0 , $sumatoria = 0){


        $sumatoria = $sumatoria + $arreglo[$index];
        $index++;
        if($index < count($arreglo))
        {            
            return $this->sum($arreglo,$index,$sumatoria);
        }
        else
            return $sumatoria;
/* 
        if($index==0 && $sumatoria==0)
        {
            $indice = count($arreglo);
            $sumatoria += $arreglo[$indice-1];
            echo "<br>1:".$sumatoria."-".$indice;
            $this->sum($arreglo,$indice-1, $sumatoria);
        }        
        else
        {
            $indice = $index;
            $sumatoria += $arreglo[$indice-1];
            echo "<br>3:".$sumatoria."-".$indice;
            if(($indice-1)>0)
                $this->sum($arreglo,$indice-1, $sumatoria);            
        }
        //echo "<br>4:".$sumatoria."-".$indice;
        return $sumatoria; */


    }
    public function getFactorial()
    {
        echo "<br>Factoail:". $this->factorial;
    }

    public function doFibonacci()
    {
        $i = 0;        

        $j = 1;

        $numeroFib = 0;

        for ($k=1; $k<=10 ; $k++) { 
            
            $numeroFib = $i + $j;
            $i = $j;
            $j = $numeroFib;

            

            $this->printNumber($numeroFib);
            
        }
        
    }
    public function printNumber($number)
    {
        echo "<br>" . $number; 
    }

    public function contarPalabras($text)
    {
        $palabras = explode(' ',str_replace(',','', strtoupper($text) ));
        $contador = [];
        $palabrasNoRepetidas = [];
        for ($i=0; $i < count($palabras) ; $i++) { 
            for ($j=0; $j < count($palabras) ; $j++) { 
                if ( $palabras[$i] == $palabras[$j] )
                {
                    if (isset ($contador[$i]))
                    {
                            
                            $contador[$i] = $contador[$i] + 1 ;

                    }
                    else
                    {

                        $palabrasNoRepetidas [$i] = $palabras [$i];
                            $contador[$i] =  1 ;
                    }
                    //$contador[$i] = $contador[$i] + 1 ;
                }
                
            }
        }
/* 
         for ($i=0; $i < count($palabrasNoRepetidas); $i++) { 
            echo $palabrasNoRepetidas[$i]."=>".$contador[$i]."<br>";
        }  */
        print_r($palabrasNoRepetidas);
    }

    public function contarPalabras2($text)
    {

        
        $palabras = explode(' ', str_replace(',','', strtoupper($text)) );
        $arrayAsociativo = [];

        $arregloUnicos = [];
        //print_r($palabras);


    //Hola Mundo soy erick, erick erick hola ingeniero que vive en este mundo y dice hola erick, saludos
        for ($i=0; $i < count($palabras) ; $i++) { 
            
            for ($j=0; $j < count($palabras) ; $j++) {                    
                
                    if ($palabras[$i] == $palabras[$j]){
                        
                        
                        if (isset($arrayAsociativo[$palabras[$i]])) {                            
                                    $arrayAsociativo[$palabras[$i]] = $arrayAsociativo[$palabras[$i]] + 1;
                                
                        }
                        else{
                            $arrayAsociativo[$palabras[$i]] = 1;
                        }
                        
                    }
                    
                    if ($j== (count($palabras) -1) && !in_array($palabras[$i],$arregloUnicos[$i]))
                    {
                        $arregloUnicos[$i] = $palabras[$i];
                    }
                
            }   
        }

        print_r($arregloUnicos);

    }

    public function printReversed($text, $index=0, $resultado='')
    {       
        
         if( strlen($resultado) < strlen($text))
         {             
             $resultado = substr($text, $index,1) . $resultado;  
             $index++;         
             return $this->printReversed($text, $index, $resultado);
         }
         else
            return $resultado; 

         
    }

    public function buscarPalabra($texto, $palabra)
    {
        $arrayPalabras = explode(' ', $texto);
        $encontrado = -1;
        foreach ($arrayPalabras as $key => $value) {
            if($palabra == $value)
            {
                $encontrado = $key;
                
            }
        }

        return $encontrado;
    }

    public function buscarLetra($texto, $letra)
    {
        $letraEncontrada = -1;
        for ($i=0; $i < strlen($texto) ; $i++) { 
            $letraTemporal = substr($texto,$i,1);

            if ($letraTemporal == $letra) {
                $letraEncontrada = $i;                               
            }
        }

        return $letraEncontrada;
    }

    public function passwordSecure($password)
    {

        $tamanioMinimo = false;
        $tieneMayuscula = false;
        $tieneNumero = false;

        if( strlen($password) >= 8)
        {
            $tamanioMinimo = true;

            for ($i=0; $i <strlen($password) ; $i++) { 
                $letra = substr($password,$i,1);
                if(ctype_upper($letra))
                    $tieneMayuscula = true;
                if(is_numeric($letra))
                    $tieneNumero = true;
            }
        }
        echo  $tamanioMinimo." , ".$tieneMayuscula." , ".$tieneNumero;
    }

    public function arreglos($arreglo)
    {

        rsort($arreglo);

        unset($arreglo[1]);

        print_r($arreglo);
    }

    public function cadenas($cadena, $letra)
    {
       /*  if (strpos($cadena,$letra)=== false)
            return "no encontrado";
        else    
            return "Encontrado"; */

            return "->".$cadena."<-";
    }
}

$f = new Fibonacci();
//$f->doFibonacci();

//$f->doFactorial(5);

//$mcd= $f->doRecursividad(412,184);

 //$resultado = $f->sum([1,2,3,4]); 

//$resultado = $f->printReversed("Hola Mundo");

//$resultado = $f->contarPalabras2("Hola Mundo soy erick, erick erick hola ingeniero que vive en este mundo y dice hola erick, saludos");


//echo $f->buscarPalabra("Hola erick ¿como estas?", 'estas?');

//echo $f->buscarLetra("Hola erick ¿como estas?", 'e');


//echo $f->passwordSecure("Erick2");

//$arraynumerico = array(1, 3, 2, 9, 4, 7, 6);
echo $f->cadenas('      hola erick              ', 'e');
//echo $resultado;
