<!DOCTYPE html>
<html lang="en">
<x-topo />

<body class="g-sidenav-show  bg-gray-200">
    <x-menu xestilo="relatorio" />

    <!-- inicio FORM -->
    <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Formulário de Pesquisa</h2>
    <form>

        <div class="d-md-flex mb-5 me-4 me-md-5 bg-info ">
            <div class="col-12 col-md-auto" >
                <label for="ano">Ano:</label>
                <input type="number" id="ano" name="ano" value="2024" class="rounded-2">
            </div>

            <div class="col-12 col-md-auto">
                <label for="tipo">Tipo:</label>
                <select id="tipo" name="tipo" class="rounded-2">
                    <option value="Memorando">Memorando</option>
                    <option value="Ofício">Ofício</option>
                </select>
            </div>

            <div class="col-12 col-md-auto" >
                <label for="setorOrigem">Setor Origem:</label>
                <select id="setorOrigem" name="setorOrigem" class="rounded-2">
                    <option value="RH">RH</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Vendas">Vendas</option>
                    <option value="TI">TI</option>
                </select>
            </div>



        </div>


        

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="remetente" style="display: block; margin-bottom: 5px;">Remetente:</label>
            <select id="remetente" name="remetente"
                style="width: 95%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="RH">RH</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Vendas">Vendas</option>
                <option value="TI">TI</option>
            </select>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="assunto" style="display: block; margin-bottom: 5px;">Assunto:</label>
            <input type="text" id="assunto" name="assunto"
                style="width: 95%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="texto" style="display: block; margin-bottom: 5px;">Texto:</label>
            <textarea id="texto" name="texto"
                style="width: 95%; height: 100px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        </div>

        <button type="submit" class="btn btn-primary"
            style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Pesquisar</button>
    </form>
    <!-- fim FORM -->


    <x-scripts-rodape />
</body>

</html>
