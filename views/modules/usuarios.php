<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                Administrar usuarios 
                                
                            </h1>
                            
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                                <li class="breadcrumb-item active">Administrar usuarios</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modelAgregarUsuario">
                            Agregar usuario
                        </button>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        
                    <div class="table-responsive-lg">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Foto</th>
                                <th>Perfil</th>
                                <th>Estado</th>
                                <th>Último login</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>Usuario administrador</th>
                                <th>admin</th>
                                <th>
                                    <div class="d-flex justify-content-center">
                                        <img src="views/dist/img/user-default.png" class="img-thumbnail" width="50px" alt="">
                                    </div>
                                    
                                </th>
                                <th>Administrador</th>
                                <th>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success btn-sm p-1">Activado</button>
                                    </div>
                                </th>
                                <th>2020-12-11</th>
                                <th>
                                    <div class="btn-group d-flex justify-content-center">
                                        <div>
                                            <button class="btn btn-warning mr-1"><i class="fas fa-pencil-alt"></i></button>
                                        </div>
                                       <div>
                                            <button class="btn btn-danger ml-1"><i class="fas fa-trash-alt"></i></button>
                                       </div>
                                    </div>

                                </th>
                            </tr>
                
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Foto</th>
                                <th>Perfil</th>
                                <th>Estado</th>
                                <th>Último login</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Administración de usuarios
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Modal -->
<div class="modal fade" id="modelAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-purple modal-header-primary">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button btn-lg" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
            <div class="box-body">
                <form>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Ingresar nombre" name="nuevoNombre" require aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Ingresar usuario" name="nuevoUsuario" require aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-passport"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Ingrese password" name="nuevoPassword" require aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="perfil"><i class="fas fa-user-friends"></i></label>
                        </div>
                        <select class="custom-select" id="perfil">
                            <option selected>Selecciona perfil...</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Especial">Especial</option>
                                <option value="Vendedor">Vendedor</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 d-flex align-items-center">
                        
                        <div class="custom-file mr-3">
                            <input type="file" class="custom-file-input" id="foto" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label-2" for="foto">Elegir foto</label>
                        </div>
                        <img src="views/dist/img/user-default.png" class="img-thumbnail perfil-foto" width="100px" alt="">
                    </div>
                    



                </form>

            
            </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="modelAgregarUsuario2">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body bg-white">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->