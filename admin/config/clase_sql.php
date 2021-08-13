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
        # Funcion para consultar Vehiculo
        public function ConsultaVehiculoGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM vehiculos");
            return $resultado;
        }
        # Funcion para Insertar vehiculo
        public function InsertarVehiculo($nummatricula,$marca,$nommodel,$kvehiculo,$cvehiculo,$capacidad,$combustible,$transmision,$presio,$an,$ruta){
            $resultado = $this->bd->query("INSERT INTO  vehiculos ( NUM_MAT_VE,NOM_MARC,NOM_MODEL,KM_VE,COLOR_VE,CAPACIDAD,COMBUSTIBLE,TRANSMISION,PRECIO_VE,	ANO,ESTADO,IMG_VE) VALUES ('$nummatricula','$marca','$nommodel','$kvehiculo','$cvehiculo','$capacidad','$combustible','$transmision','$presio','$an','disponible','$ruta')");
            return true;
            }
        # Funcion para eliminar Vehiculo
        public function EliminarVehiculo($id){
            $resultado = $this->bd->query("DELETE FROM vehiculos WHERE NUM_MAT_VE = '$id'");
            return $resultado;
        }
        
        # Funcion para Visualizar Paralelos Unico
        public function ConsultarVehiculoUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM vehiculos WHERE NUM_MAT_VE = '$cod'");
            return $resultado;
        }
        
        # Funcion para Actualizar Paralelos
        public function ActualizarVehiculo($cod,$nummatricula,$marca,$nommodel,$kvehiculo,$cvehiculo,$capacidad,$combustible,$transmision,$presio,$an,$ruta){
            $resultado = $this->bd->query("UPDATE vehiculos set  NUM_MAT_VE='$nummatricula',NOM_MARC='$marca',NOM_MODEL='$nommodel',KM_VE='$kvehiculo',COLOR_VE='$cvehiculo',CAPACIDAD='$capacidad',COMBUSTIBLE='$combustible',TRANSMISION='$transmision',PRECIO_VE='$presio',ANO='$an',IMG_VE='$ruta' WHERE NUM_MAT_VE = '$cod'");
            return true;
        }
        public function ConsultaMarca(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT NOM_MARC FROM marca");
            return $resultado;   
        }
        #Funcion para Consultar Modelo
        public function ConsultaMarcaGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM marca");
            return $resultado;
        }
        # Funcion para Insertar Modelo
        public function InsertarMarca($marca,$ruta){
            $resultado = $this->bd->query("INSERT INTO  marca ( NOM_MARC, IMG_MARCA) VALUES ('$marca','$ruta')");
            return true;
            }
        # Funcion para eliminar Modelo
        public function EliminarMarca($id){
            $resultado = $this->bd->query("DELETE FROM marca WHERE NOM_MARC = '$id'");
            return $resultado;
        }
        # Funcion para Visualizar Modelo Unico
        public function ConsultarMarcaUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM marca WHERE NOM_MARC = '$cod'");
            return $resultado;
        }
        
        # Funcion para Actualizar Modelo
        public function ActualizarMarca($cod,$marca,$ruta){
            $resultado = $this->bd->query("UPDATE marca set NOM_MARC ='$marca' ,IMG_MARCA ='$ruta' WHERE NOM_MARC = '$cod'");
            return true;
        }
        #Funcion para Consultar Incidencias
        public function ConsultaIncidenciaGeneral(){
 
            $resultado = $this->bd->query("SELECT * FROM incidencia");
            return $resultado;
        }
        public function InsertarIncidente($matricula,$date,$incidencias){
            $resultado = $this->bd->query("INSERT INTO  incidencia (NUM_MAT_VE,FECHA,DES_INCI) VALUES ('$matricula','$date','$incidencias')");
            return true;
            }
             # Funcion para eliminar Incidente
        public function EliminarIncidente($id){
            $resultado = $this->bd->query("DELETE FROM incidencia WHERE COD_INCI = '$id'");
            return $resultado;
        }
        # Funcion para eliminar Cliente
        public function EliminarCliente($id){
            $resultado = $this->bd->query("DELETE FROM clientes WHERE CED_CLI = '$id'");
            return $resultado;
        }
        # Funcion para Visualizar Cliente Unico
        public function ConsultarClienteUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM clientes WHERE CED_CLI = '$cod'");
            return $resultado;
        }

        # Funcion para Actualizar Cliente
        public function ActualizarCliente($cod,$nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef,$correo,$contra){
            $resultado = $this->bd->query("UPDATE clientes set CED_CLI= '$nummident',TIPO_CLIENTE='$Tcliente' , NOM_TCLI='$Inombres',APE_CLI ='$Iapellidos' ,DIR_CLI ='$Idireccion' ,TELF_CLIF='$Numtelef',COR_CLI='$correo', PASS_CLI='$contra'  WHERE CED_CLI = '$cod'");
            return true;
        }
        public function ConsulTipoCliente(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT TIPO_CLIENTE FROM tipo_cliente");
            return $resultado;
        }
        public function ConsultaClienteGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM clientes");
            return $resultado;
        }
        # Funcion para Insertar Cliente
        public function InsertarCliente($nummident,$Tcliente,$Inombres,$Iapellidos,$Idireccion,$Numtelef,$correo,$contra){
        $resultado = $this->bd->query("INSERT INTO  clientes (CED_CLI,TIPO_CLIENTE,NOM_TCLI,APE_CLI,DIR_CLI,TELF_CLIF,COR_CLI,PASS_CLI) VALUES ('$nummident','$Tcliente','$Inombres','$Iapellidos','$Idireccion','$Numtelef','$correo','$contra')");
        return true;
        }
        # funcion para ingresar reservas
        public function InsertarReserva($nummat,$cliente,$dat,$date,$date1,$precio){
            $resultado = $this->bd->query("INSERT INTO  reservas (NUM_MAT_VE,	CED_CLI,	FECHA_RE,	FECHA_INI_RE,	FECHA_FIN,	PRECIO, ESTADO) VALUES ('$nummat','$cliente','$dat','$date','$date1','$precio','En espera')");
            return true;
            }
        public function  ConsultaReservaGeneral(){
            $resultado = $this->bd->query("SELECT * FROM reservas");
            return $resultado;
        }
        public function ConsultarReservaUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM reservas WHERE COD_RE = '$cod'");
            return $resultado;
        }
        public function ActualizarReserva($cod,$nummat,$cliente,$dat,$date,$date1,$precio){
            $resultado = $this->bd->query("UPDATE reservas  set NUM_MAT_VE='$nummat',CED_CLI='$cliente',FECHA_RE='$dat',FECHA_INI_RE='$date',FECHA_FIN='$date1',	PRECIO='$precio' WHERE COD_RE = '$cod'");
            return true;
        }
        public function CancelarReserva($cod){
            $resultado = $this->bd->query("UPDATE reservas  set ESTADO='Cancelado' WHERE COD_RE = '$cod'");
            return true;
        }
        public function InsertarAlquiler1($num,$cod,$ced,$fechaActual,$fei,$fef,$pre){
            $resultado = $this->bd->query("INSERT INTO  alquiler (NUM_MAT_VE,	COD_RE,	CED_CLI,	FECHA_AL,	FECHA_INI_AL,	FECHA_FIN_AL,	PRECIO,	ESTADO) VALUES ('$num','$cod','$ced','$fechaActual','$fei','$fef','$pre','En proceso')");
            return true;

        }
        public function Actualizarreser($cod){
            $resultado = $this->bd->query("UPDATE reservas  set ESTADO='Entregado' WHERE COD_RE = '$cod'");
            return true;
        }
        public function  ConsultaAlquilerGeneral(){
            $resultado = $this->bd->query("SELECT * FROM alquiler");
            return $resultado;
        }
        public function InsertarUsuario($cedula,$usuario,$contra,$correo){
            $resultado = $this->bd->query("INSERT INTO  usuarios (CED_USU,	NOM_USE,	PASS_USE,	COR_USE) VALUES ('$cedula','$usuario','$contra','$correo')");
            return true;

        }
        public function ConsultaUsuarioClave($ced, $cla){
            $resultado = $this->bd->query("SELECT * FROM usuarios  WHERE CED_USU='$ced' AND  PASS_USE='$cla'");
            return $resultado;
              
        }
        public function ActualizarUsuario($cedula,$usuario,$contra,$correo){
            $resultado = $this->bd->query("UPDATE usuarios  set NOM_USE='$usuario', PASS_USE='$contra',COR_USE='$correo' WHERE CED_USU = '$cedula'");
            return true;
        }
        public function ConsultaClienteClave($ced, $cla){
            $resultado = $this->bd->query("SELECT * FROM clientes  WHERE CED_CLI='$ced' AND  PASS_CLI='$cla'");
            return $resultado;
              
        }

 

    
    }
?>