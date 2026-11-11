<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
        private float $num3;
        
        //Criando um construtor = Instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;
            $this->num3      = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2; 
            return $this->resultado;
        }//fim do método somar

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método dividir

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método

        public function dobrarUmNumero(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }//fim do método dobrar

        public function mediaDosNumeros(float $num1, $num2, $num3){
            $this->resultado = $num1 + $num2 + $num3;
            return $this->resultado;
        }//fim método média

        public function raiz(float $num1){
            $this->resultado = sqrt($num1);
            return $this->resultado;
        }//fim método raiz 
        
        public function area(float $num1){
            $this->resultado = pow($num1,2) * 3.14;
            return $this->resultado; 
        }//fim método area
        
        public function desconto(float $num1){
            $this->resultado = $num1 * 0.9;
            return $this->resultado;
        }//fim do método desconto 

        public function velocidadeMedia(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }

        public function mediaAritmetica(float $num1, float $num2){
            $this->resultado = ($num1 + $num2) /2;
            return $this->resultado;
        }//fim do método aritmética

        public function dias(float $num1){
            $this->resultado = $num1 * 365.25;
            return $this->resultado;
        }//fim do método Anos em dias

        public function meses(float $num1){
            $this->resultado = $num1 * 12;
            return $this->resultado;
        }//fim do método Anos em dias

        public function temperatura(float $num1){
            $this->resultado = ($num1*1.8) + 32;
            return $this->resultado;
        }//fim do método Anos em dias

        public function areaTriangulo(float $num1, float $num2){
            $this->resultado = $num1*$num2 /2;
            return $this->resultado; 
        }//fim método area do triângulo 

        public function metros(float $num1){
            $this->resultado = $num1;
            return $this->resultado;
        }//fim método de converção metros para centimetros
    }//fim da classe
?>