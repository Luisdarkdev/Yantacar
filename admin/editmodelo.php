
<?php
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';
$clase_ve = new Clase_sql();

if(isset($_GET['NOM_MOD'])){
    $cod = $_GET['NOM_MOD'];
    $result = $clase_ve-> ConsultarModeloUnico($cod);
    $row =mysqli_fetch_array($result);
    $nom_mod = $row['NOM_MOD'];
    $mar_mod = $row['MARCA_MOD'];
    $pre_mod = $row['PRECIO_MOD'];
    $con_mod = $row['CONBUSTIBE'];
    $tra_mod = $row['TRANSMISION']; 
    $cap_mod = $row['CAPACIDAD'];  
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['NOM_MOD'];
    $nommodelo = $_POST['nommodel'];
    $marmodel = $_POST['marmodel'];
    $premodel = $_POST['premodel'];
    $combustible = $_POST['combustible'];
    $trasnmision = $_POST['trasnmision'];
    $capacidad = $_POST['capacidad'];

    $result = $clase_ve-> ActualizarModelo($cod,$nommodelo,$marmodel,$premodel,$combustible,$trasnmision,$capacidad);
    // header ('Location: consulta_cliente.php');
  header ('Location: page-gmodelo.php');
}
?>

<?php 
include ("includes/header.php")
?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario Editar Modelo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Editar Modelo</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="editmodelo.php?NOM_MOD=<?php echo $_GET['NOM_MOD'];?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label" for="nommodel">Ingrese Nombre del Modelo</label>
                        <input class="form-control" type="text" name="nommodel" placeholder="Modelo" value="<?php echo $nom_mod; ?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese modelo</div>
                   </div>                 
                  <div class="form-group">
                        <label class="col-form-label" for="marmodel">Ingrese Marcar del modelo</label>
                        <input class="form-control" type="text" name="marmodel"  placeholder="Marca" value="<?php echo $mar_mod; ?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese modelo</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="premodel">Ingrese Precio por dia</label>
                        <input class="form-control" type="text" name="premodel"  placeholder="Preco"  value="<?php echo $pre_mod; ?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Precio</div>
                   </div>
                   <div class="form-group">
                   <label class="col-form-label" for="combustible">Tipo de combustible</label>
                        <select class="form-control" name="combustible" >
                            <option value="Gasolina">Gasolina</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electrico">Electrico</option>
                            <option value="Hibrido">Hirbido</option>
                        </select>
                   </div>
                   <div class="form-group">
                   <label class="col-form-label" for="transmision">Tipo de Transmision</label>
                        <select class="form-control" name="trasnmision" >
                            <option value="Manual">Manual</option>
                            <option value="Automatica">Automatica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="capacidad">Capacidad de personas</label>
                        <input class="form-control" type="text" name="capacidad"  placeholder="Capacidad" value="<?php echo $cap_mod; ?>" required>
                                <div class="invalid-feedback">Campo vacío Ingrese capacidad</div>
                   </div>
                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all" name="actualizar" id="">Actualizar</button>
                    </div>
              </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

<?php include ("includes/footer.php")?>