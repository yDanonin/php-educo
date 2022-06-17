<?php
    class Imagem{
        private $nome;
        public function __construct($imagem, $pasta, $titulo){
            $nome = "";
            $valida = $this->validar($imagem["type"]);
            if (is_uploaded_file($imagem["tmp_name"])&& $valida!=false){
                $nome = $pasta.$this->nomear($titulo).$valida;
                move_uploaded_file($imagem["tmp_name"], $nome);
               
        }
        $this->setNome($nome);
    }

        private function validar($arquivo){
            $tipo = strrchr($arquivo, "/");

            switch($tipo){
                case "/jpeg":
                    return ".jpg";
                break;
                case "/gif":
                    return ".gif";
                break;
                case "/png":
                    return ".png";
                break;
                default:
                    return false;
            }
        }
        private function nomear($titulo){
            $nome = date("Y-m-d")."-".str_replace(" ", "", $titulo);
            $nome = trim(substr($nome, 0, 46));
            return $nome;
        }
        public function setNome($valor){
            $this->Nome = $valor;
        }
        public function getNome(){
            return $this->Nome;
        }
    }
?>