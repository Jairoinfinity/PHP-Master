<?php
//Clase coche 
    class Coche{
        //atributos
        private $color;
        private $marca;
        private $modelo;
        private $velocidad;
        private $caballos;
        private $plazas;

        //Constructor
        public function __construct($color, $marca, $modelo, $velocidad = 0, $caballos = 0, $plazas = 0){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->caballos = $caballos;
            $this->plazas = $plazas;
        }

        //metodos get
        public function getColor(){
            return $this->color;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function getVelocidad(){
            return $this->velocidad;
        }

        public function getCaballos(){
            return $this->caballos;
        }

        public function getPlazas(){
            return $this->plazas;
        }

        //metodos set
        public function setColor($color){
            $this->color = $color;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function setVelocidad($valocidad){
            $this->velocidad = $velocidad;
        }

        public function setCaballos($caballos){
            $this->caballos = $caballos;
        }

        public function setPlazas($plazas){
            $this->plazas = $plazas;
        }

        //Funciones de la clase
        //acelerar
        public function acelerar(){
            $this->velocidad++;
        }

        //frenar
        public function frenar(){
            $this->velocidad--;
        }
    }
?>