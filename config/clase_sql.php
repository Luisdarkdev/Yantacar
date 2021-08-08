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
        # Funcion para Insertar paralelo
        public function InsertarParalelo($nom){
            $resultado = $this->bd->query("INSERT INTO  snp_para ( PAR_NOMBRE) VALUES ('$nom')");
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

        # Funcion para Consultar Alumnos 
        public function ConsultaAlumnos(){
            $resultado = $this->bd->query("SELECT * FROM snp_alumnos");
            return $resultado;
        }

        #Funcion Consultar ID Alumno
        public function ConsultaAlumnoID($id){
            $resultado = $this->bd->query("SELECT * FROM snp_alumnos WHERE alum_codigo = '$id'");
            return $resultado;
        }

        #Funcion para Insertar Alumnos
        public function InsertarAlumnos($alum_fech_matric,  $alum_folio,  $alum_tipo, $alum_aaa,  $alum_educacion,  $alum_seccion, $alum_especialidad, $alum_paralelo, $alum_apellido, $alum_nombre, $alum_cedula, $alum_lug_nac,  $alum_fech_nac,  $alum_domicilio,  $alum_telefono,  $alum_civil,  $alum_sex,  $alum_new,  $padre_nombre,  $padre_nacionalidad, $padre_direccion, $padre_profesion, $padre_cedula,  $padre_telefono, $padre_trabajo, $padre_lug_tra, $madre_nombre,  $madre_nacionalidad, $madre_direccion, $madre_profesion, $madre_cedula,  $madre_telefono, $madre_trabajo, $madre_lug_tra, $cliente_nombre, $repre_nombre, $parentesco, $alum_colAnt, $direcc, $i_aaa, $i_tipo, $ii_aa, $repite, $condicionantes, $observacion){
            $resultado = $this->bd->query("INSERT INTO snp_alumnos(alum_codigo, alum_fech_matr, alum_folio, alum_tipo_matr, alum_ao, alum_educacion, alum_seccion, alum_especialidad, alum_paralelo, alum_apellido, alum_nombre, alum_cedula, alum_lug_nac, alum_fech_nac, alum_nacionalidad, alum_domicilio, alum_telefono, alum_civil, alum_sexo, alum_nuevo, alum_padre_nombre, alum_padre_nacionalidad, alum_padre_direccion, alum_padre_profesion, alum_padre_cedula, alum_padre_telefono, alum_padre_lug_trab, alum_madre_nombre, alum_madre_nacionalidaad, alum_madre_direccion, alum_madre_profesion, alum_madre_cedula, alum_madre_telefono, alum_madre_trabajo, alum_madre_lug_trab, alum_cliente_nombre, alum_repre_nombre, alum_repre_parentesco, alum_colant_nombre, alum_colant_direccion, alum_colant_tipo, alum_colant_ao, alum_rep_ao, alum_condicionantes, alum_observacion) VALUES ('$alum_fech_matric',  '$alum_folio',  '$alum_tipo', '$alum_aaa',  '$alum_educacion',  '$alum_seccion', '$alum_especialidad', '$alum_paralelo', '$alum_apellido', '$alum_nombre', '$alum_cedula', '$alum_lug_nac',  '$alum_fech_nac',  '$alum_domicilio',  '$alum_telefono',  '$alum_civil',  '$alum_sex',  '$alum_new',  '$padre_nombre',  '$padre_nacionalidad', '$padre_direccion', '$padre_profesion', '$padre_cedula',  '$padre_telefono', '$padre_trabajo', '$padre_lug_tra', '$madre_nombre',  '$madre_nacionalidad', '$madre_direccion', '$madre_profesion', '$madre_cedula',  '$madre_telefono', '$madre_trabajo', '$madre_lug_tra', '$cliente_nombre', '$repre_nombre', '$parentesco', '$alum_colAnt', '$direcc', '$i_aaa', '$i_tipo', '$ii_aa', '$repite', '$condicionantes', '$observacion')");
            return true;
        }

        #Funcion para Actualizar alumnos
        public function UpdateAlumnos($alum_fech_matric,  $alum_folio,  $alum_tipo, $alum_aaa,  $alum_educacion,  $alum_seccion, $alum_especialidad, $alum_paralelo, $alum_apellido, $alum_nombre, $alum_cedula, $alum_lug_nac,  $alum_fech_nac,  $alum_domicilio,  $alum_telefono,  $alum_civil,  $alum_sex,  $alum_new,  $padre_nombre,  $padre_nacionalidad, $padre_direccion, $padre_profesion, $padre_cedula,  $padre_telefono, $padre_trabajo, $padre_lug_tra, $madre_nombre,  $madre_nacionalidad, $madre_direccion, $madre_profesion, $madre_cedula,  $madre_telefono, $madre_trabajo, $madre_lug_tra, $cliente_nombre, $repre_nombre, $parentesco, $alum_colAnt, $direcc, $i_aaa, $i_tipo, $ii_aa, $repite, $condicionantes, $observacion){
            $resultado = $this->bd->query("UPDATE snp_alumnos SET alum_codigo = '', alum_fech_matr  = '', alum_folio  = '', alum_tipo_matr  = '', alum_ao = '', alum_educacion = '', alum_seccion = '', alum_especialidad = '', alum_paralelo = '', alum_apellido = '', alum_nombre = '', alum_cedula = '', alum_lug_nac = '', alum_fech_nac = '', alum_nacionalidad = '', alum_domicilio = '', alum_telefono = '', alum_civil = '', alum_sexo = '', alum_nuevo = '', alum_padre_nombre = '', alum_padre_nacionalidad = '', alum_padre_direccion = '', alum_padre_profesion = '', alum_padre_cedula = '', alum_padre_telefono = '', alum_padre_lug_trab = '', alum_madre_nombre = '', alum_madre_nacionalidaad = '', alum_madre_direccion = '', alum_madre_profesion = '', alum_madre_cedula = '', alum_madre_telefono = '', alum_madre_trabajo = '', alum_madre_lug_trab = '', alum_cliente_nombre = '', alum_repre_nombre = '', alum_repre_parentesco = '', alum_colant_nombre = '', alum_colant_direccion = '', alum_colant_tipo = '', alum_colant_ao = '', alum_rep_ao = '', alum_condicionantes = '', alum_observacion = '' WHERE alum_codigo = '' ");
            return $resultado;
        }

        #Funcion para Eliminar Alumnos
        public function EliminarAlumno($id){
            $resultado = $this->bd->query("DELETE FROM snp_alumnos WHERE alum_codigo = '$id'");
            return true;
        }

        # Funcion para consultar materia
         public function ConsultaMateriaGeneral(){
             $resultado = $this->bd->query("SELECT * FROM snp_mate");
             return $resultado;
         }
        #Funcion para insertar materia
         public function InsertarMateria($codm,$codcurm,$nombm,$codperm,$gram,$tipm,$ordenm,$resaltm,$obprmam,$cocomam,$numacom,$oculm,$areidm,$areacm,$ambm){
             $resultado = $this->bd->query("INSERT INTO snp_mate(MAT_CODIGO, MAT_CODCUR, MAT_NOMBRE, MAT_CODPER, MAT_GRADO, MAT_TIPO, MAT_ORDEN, MAT_RESALT, MAT_OBPRMA, MAT_COCOMA, MAT_NUMACO, MAT_OCULTA, MAT_AREID, MAT_AREAC, MAT_AMBITO) VALUES('$codm','$codcurm','$nombm','$codperm','$gram','$tipm','$ordenm','$resaltm','$obprmam','$cocomam','$numacom','$oculm','$areidm','$areacm','$ambm')");
             return true;
         }
        #Funcion para Eliminar materia
        public function EliminarMateria($cod){
            $resultado = $this->bd->query("DELETE FROM snp_mate WHERE MAT_CODIGO = $cod");
            return $resultado;
        }
        #Funcion para consultar Materia unico
        public function ConsultaMateriaUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM snp_mate  WHERE MAT_CODIGO = $cod");
            return $resultado;
        }
        #Funcion para Editar Materia
        public function ActualizarMateria($cod,$codm,$codcurm,$nombm,$codperm,$gram,$tipm,$ordenm,$resaltm,$obprmam,$cocomam,$numacom,$oculm,$areidm,$areacm,$ambm){
            $resultado = $this->bd->query("UPDATE snp_mate set MAT_CODIGO='$codm', MAT_CODCUR='$codcurm', MAT_NOMBRE='$nombm', MAT_CODPER='$codperm', MAT_GRADO='$gram', MAT_TIPO='$tipm', MAT_TIPO='$tipm', MAT_ORDEN='$ordem', MAT_RESALT='$resaltm', MAT_OBPRMA='$obprmam', MAT_COCOMA='$cocomam', MAT_NUMACO='$numacom', MAT_OCULTA='$oculm', MAT_AREID='$areidm', MAT_AREAC='$areacm',MAT_AMBITO='$ambm' WHERE MAT_CODIGO=$cod");
            return true;

        }
        #Funcion para consultar ciclo
        public function ConsultarCiclo(){
            $resultado = $this->bd ->query("SELECT * FROM snp_cicl");
            return $resultado;
        }
        #Funcion para insertar ciclo
        public function InsertarCiclo($nom){
            $resultado = $this->bd->query("INSERT INTO  snp_cicl (CIC_NOMB) VALUES ('$nom')");
            return true;
        }
        #Funcion para eliminar ciclo
        public function EliminarCiclo($cod){
            $resultado = $this->bd->query("DELETE FROM snp_cicl WHERE CIC_CODI = $cod");
            return $resultado;
        }
        #Funcion para editar ciclo
        public function ConsultaCicloUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM snp_cicl WHERE CIC_CODI = $cod");
            return $resultado;

        }
        # Funcion para actualizar ciclo
        public function ActualizarCiclo($cod, $codi, $name){
            $resultado = $this->bd->query("UPDATE snp_cicl set CIC_CODI='$codi', CIC_NOMB='$name' WHERE CIC_CODI =$cod");
            return true;
        }

    }
?>