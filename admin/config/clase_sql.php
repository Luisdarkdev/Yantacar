<?php
    class Clase_sql{
        # ATRIBUTOS |  privados
        private $bd;
        # CONSTRUCTOR - permite dar un valor inicial a los atributos
        public function __construct(){
            $this->bd = new mysqli(SERVIDOR,USUARIO,CLAVE,BDD);
            # Definir caracteres
            $this->bd -> set_charset('utf8');
        }

        # FUNCIONES
        # Funcion para consultar Paralelos
        public function ConsultaParaleloGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM snp_para");
            return $resultado;
        }
        # Funcion para Insertar vehiculo
        public function InsertarVehiculo($nummatricula,$nommodelo,$kvehiculo,$cvehiculo,$ruta){
            $resultado = $this->bd->query("INSERT INTO  vehiculos ( NUM_MAT_VE,NOM_MOD,KM_VE,COLOR_VE,IMG_VE) VALUES ('$nummatricula','$nommodelo','$kvehiculo','$cvehiculo','$ruta')");
            return true;
            }
        # Funcion para eliminar Paralelos
        public function EliminarParalelo($cod){
            $resultado = $this->bd->query("DELETE FROM snp_para WHERE PAR_CODIGO = $cod");
            return $resultado;
        }
        
        # Funcion para Visualizar Paralelos Unico
        public function ConsultaParaleloUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM snp_para WHERE PAR_CODIGO = $cod");
            return $resultado;
        }
        
        # Funcion para Actualizar Paralelos
        public function ActualizarParalelo($cod,$codi,$name){
            $resultado = $this->bd->query("UPDATE snp_para set PAR_CODIGO='$codi', PAR_NOMBRE='$name' WHERE PAR_CODIGO =$cod");
            return true;
        }


    }
?>