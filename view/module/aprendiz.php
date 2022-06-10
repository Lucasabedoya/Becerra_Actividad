<input type="text" name="txtCodigoA" id="txtCodigoA">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aprendiz
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
        <li><a href="#">Aprendiz</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <form method="post" id="frmAprendiz">
            <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtNombreAp" name="txtNombreAp">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha Nacimiento</span>
                        <input type="date" class="form-control" id="txtFechan" name="txtFechan">
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Sexo</span>
                        <input type="text" class="form-control" id="txtSexo" name="txtSexo">
                        <span class="input-group-addon"><i class="fa">S</i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Ciudad</span>
                        <input type="text" class="form-control" id="txtCiudad" name="txtCiudad" >
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
                <button class="btn btn-app bg-blue" onclick="validateA(event)">
                    <i class="fa fa-save "></i> Guardar
                </button>
              
            </div>
            <!-- /.box-footer-->
        </form>
        <?php
          if (isset($_POST['txtNombreAp'])){
            $objCtrUser = new AprendizController();
            $objCtrUser -> setInsertAprendiz(
              $_POST['txtNombreAp'],
              $_POST['txtFechan'],
              $_POST['txtSexo'],
              $_POST['txtCiudad']
            );
          }
        ?>
      </div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="users" class="table table-dark table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Fecha Nacimiento</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form method="post">
                <?php
                  $objCtrAprendizAll = new AprendizController();
                  if (gettype($objCtrAprendizAll -> getSearchAllAprendiz()) == 'boolean'){
                    echo '
                    <tr>
                      <td colspan="5">no hay datos que mostrar</td>
                    </tr>';
                  }else{
                    
                    foreach ($objCtrAprendizAll -> getSearchAllAprendiz() as $key => $value) {
                      echo '
                      <tr>
                        <td>'.$value["CODEA"].'</td>
                        <td>'.$value["NOMBRE"].'</td>
                        <td>'.$value["FECHAN"].'</td>
                        <td>'.$value["SEXO"].'</td>
                        <td>'.$value["CIUDAD"].'</td>
                        <td class="text-center">
                          <button class="btn btn-social-icon bg-yellow" onclick="getDataA(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-social-icon btn-google"  onClick="erasea(this.parentElement.parentElement)">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>';
                    }//FIN FOREACH
                  }//FIN IF
                ?>
                </form>
              </tbody>
            </table>
        </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg bg-blue">
        <h4 class="modal-title">Modificar Aprendiz</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frmAprendizModificar">
          <input type="hidden" name="txtCodigoAM" id="txtCodigoAM">
          <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtNombreAM" name="txtNombreAM">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha Nacimiento</span> 
                        <input type="date" class="form-control" id="txtFechanM" name="txtFechanM">
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Sexo</span>
                        <input type="text" class="form-control" id="txtSexoM" name="txtSexoM">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Ciudad</span>
                        <input type="text" class="form-control" id="txtCiudadM" name="txtCiudadM">
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div>
          <button class="btn btn-app float-left bg-blue" onclick="validateAModify(event)">
              <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['txtNombreAM'])){
              $objCtrUser = new AprendizController();
              $objCtrUser -> setUpdateAprendiz(
                $_POST['txtCodigoAM'],
                $_POST['txtsexoM'],
                $_POST['txtCiudadM'],
                $_POST['txtNombreAM'],
                $_POST['txtFechanM']
              );
              include_once 'view/module/aprendiz.php'; 
            }
          ?>
          <button class="btn btn-app bg-blue" data-dismiss="modal">
              <i class="fa fa-close"></i> Salir
          </button>
        </div>
      </div>

    </div>
  </div>
</div>