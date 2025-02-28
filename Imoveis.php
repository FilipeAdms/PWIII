<?php

    class Imoveis{
        
        protected float $dimencao;
        protected float $valor;
        
        private string $tipoImovel;
        private string $descricao;
        public string $regiao;
        public function __construct($dimencao, $valor, $tipoImovel, $descricao, $regiao){
            $this->tipoImovel = $tipoImovel;
            $this->descricao = $descricao;
            $this->dimencao = $dimencao;
            $this->regiao = $regiao;
            $this->valor = $valor;
        }
        
        public function __set($name, $value){
            $this->$name = $value;
        }
        public function __get($name){
            return $this->$name;
        }

    }

    $Imovel01 = new Imoveis(200,200000,
    "casa","batata","ZN");

    echo $Imovel01->dimencao . "\n</br>"; 
    echo $Imovel01->descricao . "\n</br>";
    echo $Imovel01->tipoImovel . "\n</br>";
    echo $Imovel01->regiao . "\n</br>";
    echo $Imovel01->valor . "\n</br>";
   

?>