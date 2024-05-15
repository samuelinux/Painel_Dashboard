
<!DOCTYPE html>
<html lang="en">
<x-topo/>
<body class="g-sidenav-show  bg-gray-200">
  <x-menu xestilo="memorando"/>


<!-- inicio memorando -->
<div class="card card-body mx-3 mx-md-4 mt-n6">

  <div class="row">
    <div class="row">

      <div class="col-md-8 d-flex align-items-center mb-3" >
        <h6 class="mb-0">Informações Memorando:</h6>
      </div>

      <form role="form">

        <div class="input-group input-group-static mb-3">
          <label class="ms-0">Setor de origem</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>ILUMINAÇÃO</option>
            <option>CEMITÉRIO</option>
            <option>PODA</option>
            <option>VARRIÇÃO</option>
          </select>
        </div>

        <div class="input-group input-group-static mb-3">
          <label class="ms-0">Remetente</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>SAMUEL</option>
            <option>ROBISON</option>
            <option>SAULO</option>
          </select>
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Setor de Destino</label>
          <input type="text" class="form-control">
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Destinatário</label>
          <input type="text" class="form-control">
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Assunto</label>
          <input type="text" class="form-control">
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Texto aqui...</label>
          <textarea rows="15" class="form-control"></textarea>
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Registrar</button>
        </div>
      </form>
     
      
    </div>
  </div>
</div>
<!-- fim memorando -->



  <x-scripts-rodape/>
</body>
</html>