<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        $verifica = ($ano/100);
        $seculo = 0;
        if(floor($verifica) == $verifica){
            $seculo = $verifica;
            return $seculo;
        }
        else{
            $seculo = floor($verifica)+1;
            return $seculo;
        }
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        $menor = $numero -1;
        $divisao=0;
        $primo = 0;

        while($primo <2 || $primo > 2){
            for($i=1;$i <= $menor ;$i++){
                $divisao = $menor/$i;

                if(floor($divisao)==$divisao){
                    $primo++;
                }
            }
            if($primo > 2){$primo = 0; $menor--;}
        }
        return $menor;
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $orderArray = [];
        $segundoMaior=0;
        foreach ($arr as $array){
            foreach($array as $item){
                $orderArray[]= $item;
            }
        }
        rsort($orderArray);
        unset($orderArray[0]);
        foreach($orderArray as $item) {
            $segundoMaior= $item;
        break; 
        }
        return $segundoMaior ; 
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): bool { //modifiquei boolean para bool pois o php tava interpletando como classe
        $quantidade = count($arr);
        if($quantidade == 2){
            return True;
        }
    
        for ($i = 0; $i < $quantidade; $i++){
            $arrayVerifica = [];
            $trueVerifica = 0;
            $itemVerificador =[];
            $array = $arr; 
            $newArray =[];
            unset($array[$i]);
            foreach ($array as $item){
                $newArray []= $item;
            }
            for($n=0; $n <count($newArray)-1;$n++){
                $x = $newArray[$n];
                $y = $newArray[$n+1];

                if($y>$x){
                $arrayVerifica []= "true";
                }else{
                $arrayVerifica []= "false";
                }    
            }
            foreach($arrayVerifica as $h){
                if($h == "true"){
                    $trueVerifica++;
                }
            }
            if($trueVerifica==count($arrayVerifica)){
                return True;
            }
            $trueVerifica = 0;
        }
        return False;
    }
}
