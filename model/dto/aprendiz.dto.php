<?php

    class Aprendiz{

        private $codea;
        private $nombre;
        private $fechan;
        private $sexo;
        private $ciudad;

        /*GETTERS*/
        public function getCodea(){
            return $this->codea;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getFechan(){
            return $this->fechan;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getCiudad(){
            return $this->ciudad;
        }
        /*SETTING */
        public function setCodea ( $codea ){
            $this -> codea = $codea;
        }
        public function setNombre ( $nombre ){
            $this -> nombre = $nombre;
        }
        public function setFechan ( $fechan ){
            $this -> fechan = $fechan;
        }
        public function setSexo ( $sexo ){
            $this -> sexo = $sexo;
        }
        public function setCiudad ( $ciudad ){
            $this -> ciudad = $ciudad;
        }
    }

?>