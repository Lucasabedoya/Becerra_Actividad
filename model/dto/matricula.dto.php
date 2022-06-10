<?php

    class Matricula{

        private $codem;
        private $nombrec;
        private $costo;
        private $estado;
        private $codepro;
        private $codeapr;
        private $fecham;

        /*GETTERS*/
        public function getCodem(){
            return $this->codem;
        }
        public function getNombrec(){
            return $this->nombrec;
        }
        public function getCosto(){
            return $this->costo;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function getCodepro(){
            return $this->codepro;
        }
        public function getCodeapr(){
            return $this->codeapr;
        }
        public function getFecham(){
            return $this->fecham;
        }
        /*SETTING */
        public function setCodem ( $codem ){
            $this -> codem = $codem;
        }
        public function setNombrec ( $nombrec ){
            $this -> nombrec = $nombrec;
        }
        public function setCosto ( $costo ){
            $this -> costo = $costo;
        }
        public function setEstado ( $estado ){
            $this -> estado = $estado;
        }
        public function setCodepro ( $codepro ){
            $this -> codepro = $codepro;
        }
        public function setCodeapr ( $codeapr ){
            $this -> codeapr = $codeapr;
        }
        public function setFecham ( $fecham ){
            $this -> fecham = $fecham;
        }
    }

?>