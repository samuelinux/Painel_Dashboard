<!DOCTYPE html>
<html lang="en">

<x-topo />
<body class="g-sidenav-show">
  

<div class="card card-body mx-3 mx-md-4 mt-n6">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../dashboard">
              Painel
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../dashboard">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../perfil">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../registrar">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Registrar
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../login">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Login
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
 


      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            
            <div class="col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-7">
              <div class="card card-plain">
                <div class="card-header ">
                  <h4 class="font-weight-bolder">Registrar</h4>
                  <p class="mb-0">Entre com seu email para se registrar</p>
                </div>

                

                <div class="row">
                  <form role="form">

                    <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Nome">
                        <label for="floatingInputGroup1">Nome</label>
                      </div>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="CPF">
                        <label for="floatingInputGroup1">CPF</label>
                      </div>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="TELEFONE">
                        <label for="floatingInputGroup1">TELEFONE</label>
                      </div>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="email" class="form-control" id="floatingInputGroup1" placeholder="EMAIL">
                        <label for="floatingInputGroup1">EMAIL</label>
                      </div>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="password" class="form-control" id="floatingInputGroup1" placeholder="SENHA">
                        <label for="floatingInputGroup1">SENHA</label>
                      </div>
                    </div>

                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Eu aceito os <a href="javascript:;" class="text-dark font-weight-bolder">Termos e Condições</a>
                      </label>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Registrar</button>
                    </div>
                  </form>
                </div>

                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Já tem uma conta?
                    <a href="../login" class="text-primary text-gradient font-weight-bold">Login</a>
                  </p>
                </div>

              </div>
            </div>
            
          </div>
        </div>
      </div>
  
  </main>

 
  <x-scripts-rodape/>
</body>

</html>