<style>

body{
    background-image: url("uploads/img/biblioteca.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.login-box{
    width:100%;
}

.card{
    border-radius:18px;
    overflow:hidden;
    box-shadow:0px 10px 30px rgba(0,0,0,.45);
}

.card-header{
    background:#8B0000 !important;
    color:white !important;
    border-bottom:none;
    padding:20px;
}

.login-card-body{
    background:rgba(255,255,255,.95);
}

.btn-danger{
    border-radius:30px;
    font-weight:bold;
}

.btn-danger:hover{
    transform:scale(1.03);
    transition:.3s;
}

.form-control{
    border-radius:10px;
}

.input-group-text{
    background:#8B0000;
    color:white;
}

</style>
<div class="row">
      <div class="form-group col-sm-5 d-flex align-items-center">
          <<div class="text-center">
            <img src="uploads/img/logo.png"
            class="img-fluid"
            style="width:260px;">
            <h2 class="mt-4 text-white">
                Biblioteca Digital
            </h2>
            <p class="text-white">
                Administre libros, préstamos y usuarios desde un solo lugar.
            </p>

</div>
      <div class="form-group col-sm-7">
          <div class="login-box">
              <div class="card card-outline card-danger">
                  <div class="card-header">
                      <h3 class="text-center"><i class="bi bi-book-half"></i>
                      Biblioteca Digital
                    </h3>
                    <p class="text-center mb-0">
                        Sistema de Gestión Bibliotecaria
                    </p>
                  </div>
                  <div class="card-body login-card-body">

                        <?php
                        if (isset($_SESSION['user_error']) && $_SESSION['user_error'] != null) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <i class="bi bi-x-circle-fill me-2"></i> <strong>Error:</strong>
                                <?php echo $_SESSION['user_error']; ?>
                            </div>
                        <?php
                            $_SESSION['user_error'] = null;
                        }
                        ?>

                      <p class="login-box-msg">Ingrese sus credenciales para acceder al sistema.</p>

                      <form action="./?action=processlogin" method="post">
                          <div class="input-group mb-1">
                              <div class="form-floating">
                                  <input id="loginEmail" type="text" name="txtCedula" class="form-control" value="" placeholder="" />
                                  <label for="loginEmail">Usuario</label>
                              </div>
                              <div class="input-group-text">
                                  <span class="bi bi-person-fill"></span>
                              </div>
                          </div>
                          <div class="input-group mb-1">
                              <div class="form-floating">
                                  <input id="loginPassword" type="password" name="txtPassword" class="form-control" placeholder="" />
                                  <label for="loginPassword">Contraseña</label>
                              </div>
                              <div class="input-group-text">
                                  <span class="bi bi-lock-fill"></span>
                              </div>
                          </div>
                          <!--begin::Row-->
                          <div class="row">
                              <div class="col-8 d-inline-flex align-items-center">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                      <label class="form-check-label" for="flexCheckDefault"> Recordarme </label>
                                  </div>
                              </div>
                              <!-- /.col -->
                              <div class="col-4">
                                  <div class="d-grid gap-2">
                                      <button type="submit" name="btn-login" class="btn btn-danger w-100">Ingresar</button>
                                  </div>
                              </div>
                              <!-- /.col -->
                          </div>
                          <!--end::Row-->
                      </form>
                  </div>
                  <!-- /.login-card-body -->
              </div>
          </div>
      </div>
  </div>