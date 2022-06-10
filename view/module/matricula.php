<input type="text" name="txtCodigonm" id="txtCodigonm">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Matricula
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
        <li><a href="#">Matricula</a></li>
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
        <form method="post" id="frmMatricula">
            <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Centro</span>
                        <input type="text" class="form-control" id="txtNombrec" name="txtNombrec">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Costo</span>
                        <input type="text" class="form-control" id="txtCosto" name="txtCosto">
                        <span class="input-group-addon">C</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Estado</span>
                        <input type="text" class="form-control" id="txtEstado" name="txtEstado">
                        <span class="input-group-addon"><i class="fa"></i>E</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Codigo Programa</span>
                        <input type="text" class="form-control" id="txtCodepro" name="txtCodepro" >
                        <span class="input-group-addon"><i class="fa"></i>P</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <div>
            <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Codigo Aprendiz</span>
                        <input type="text" class="form-control" id="txtCodeapr" name="txtCodeapr" >
                        <span class="input-group-addon"><i class="fa"></i>A</span>
                    </div>
                </div>

            <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon"> Fecha Matricula
                        </span>
                        <input type="date" class="form-control" id="txtFecham" name="txtFecham" >
                    </div>
                </div>
              </div>
              
            <!-- /.box-body -->
            <div class="box-footer">
              
                <button class="btn btn-app bg-blue" onclick="validateM(event)">
                    <i class="fa fa-save "></i> Guardar
                </button>
              
            </div>
            <!-- /.box-footer-->
        </form>
        <?php
          if (isset($_POST['txtNombrec'])){
            $objCtrMatricula = new MatriculaController();
            $objCtrMatricula -> setInsertMatricula(
              $_POST['txtNombrec'],
              $_POST['txtCosto'],
              $_POST['txtEstado'],
              $_POST['txtCodepro'],
              $_POST['txtCodeapr'],
              $_POST['txtFecham']
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
                  <th class="text-center">Costo</th>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Codigo Programa</th>
                  <th class="text-center">Codigo Aprendiz</th>
                  <th class="text-center">Fecha Matricula</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form method="post">
                <?php
                  $objCtrMatriculaAll = new MatriculaController();
                  if (gettype($objCtrMatriculaAll -> getSearchAllmatricula()) == 'boolean'){
                    echo '
                    <tr>
                      <td colspan="5">no hay datos que mostrar</td>
                    </tr>';
                  }else{
                    
                    foreach ($objCtrMatriculaAll -> getSearchAllMatricula() as $key => $value) {
                      echo '
                      <tr>
                        <td>'.$value["CODEM"].'</td>
                        <td>'.$value["NOMBREC"].'</td>
                        <td>'.$value["COSTO"].'</td>
                        <td>'.$value["ESTADO"].'</td>
                        <td>'.$value["CODEPRO"].'</td>
                        <td>'.$value["CODEAPR"].'</td>
                        <td>'.$value["FECHAM"].'</td>
                        <td class="text-center">
                          <button class="btn btn-social-icon bg-yellow" onclick="getDataM(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-social-icon btn-google"  onClick="erasem(this.parentElement.parentElement)">
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
        <h4 class="modal-title">Modificar Matricula</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frmUsuarioModificar">
          <input type="hidden" name="txtCodigoMM" id="txtCodigoMM">
          <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Centro</span>
                        <input type="text" class="form-control" id="txtNombreCM" name="txtNombreCM">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Costo</span>
                        <input type="text" class="form-control" id="txtCostoM" name="txtCostoM">
                        <span class="input-group-addon">A</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Estado</span>
                        <input type="text" class="form-control" id="txtEstadoM" name="txtEstadoM">
                        <span class="input-group-addon"><i class="fa">E</i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Codigo Programa</span>
                        <input type="text" class="form-control" id="txtCodeproM" name="txtCodeproM" >
                        <span class="input-group-addon"><i class="fa">P</i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Codigo Aprendiz</span>
                        <input type="text" class="form-control" id="txtCodeaprM" name="txtCodeaprM">
                        <span class="input-group-addon"><i class="fa">A</i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha Matricula</span>
                        <input type="date" class="form-control" id="txtFechamM" name="txtClaveM">
                    </div>
                </div>
                <!-- ./col -->
            </div>


            
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div>
          <button class="btn btn-app float-left bg-blue" onclick="validateModify(event)">
              <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['txtNombreM'])){
              $objCtrUser = new UserController();
              $objCtrUser -> setUpdateUser(
                $_POST['txtCodigoM'],
                $_POST['txtUsuarioM'],
                $_POST['txtClaveM'],
                $_POST['txtNombreM'],
                $_POST['txtApellidoM']
              );
              include_once 'view/module/user.php'; 
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