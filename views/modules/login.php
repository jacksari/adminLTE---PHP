<div id="back">

</div>

<div class="login-box login-radius">
  
  <!-- /.login-logo -->
  <div class="card card-asd">
  <div class="login-logo logo-p">
        <div class="logo-h">
            <img class="img-responsive logo" src="views/icon/android-chrome-256x256.png" alt="">    
        </div>
        <div class="logo-h">
            <a href="../../index2.html"><b>Sistema </b>Inventario</a>
        </div>
  </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        Inicia sesión para comenzar tu sesión</p>

      <form method="post">
        <div class="input-group mb-3">
          <input name="ingUsuario" type="usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="ingPassword" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
            $login = new ControllerUsuarios();
            $login -> ctrIngresoUsuario();

        ?>

      </form>

      
      <p class="mb-1">
        <a href="forgot-password">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrarme como nuevo miembro</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->