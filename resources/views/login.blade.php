
<!DOCTYPE html>
<html lang="en">

<x-topo/>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
      </div>
    </div>
  </div>
 
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Entrar</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

             
              

              <!-- FORM -->
              <div class="card-body">
                
                
              
                @if ($errors->any())
                    <div class="alert alert-danger">
                     <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  
                @session('erro')
                  <div class="alert alert-danger">
                    {{ session('erro') }}
                  </div>
                @endsession

                <form action="{{ route('auth') }}" role="form" class="" method="POST">
                  @csrf
                  <div class="input-group input-group-outline mb-3">
                      <div class="form-floating">                        
                        <input type="text" class="form-control" id="floatingInputGroup1" name="cpf" placeholder="CPF">
                        <label for="floatingInputGroup1">CPF</label>
                      </div>
                    </div>

                  <div class="input-group input-group-outline mb-3">
                    <div class="form-floating">                        
                      <input type="password" class="form-control" id="floatingInputGroup1" name="password" placeholder="SENHA">
                      <label for="floatingInputGroup1">SENHA</label>
                    </div>
                  </div>

                 
                  <div class="text-center">
                    <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2"></input>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Não tem conta?
                    <a href="/registrar" class="text-primary text-gradient font-weight-bold">Registrar</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
 
</body>

</html>