<!DOCTYPE html>
<html lang="en">
<x-topo />

<body class="g-sidenav-show  bg-gray-200">
    <x-menu xestilo="relatorio" />

    <!-- inicio FORM -->
    <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Formulário de Pesquisa</h2>
    <form action="{{ route('listar') }}" role="form" class="" method="POST">

        <div class="d-md-flex mb-1 bg-info">
            <div class="col-4 col-md-auto">
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

            <div class="col-12 col-md-auto mb-0">
                <label for="setorOrigem">Setor Origem:</label>
                <select id="setorOrigem" name="setorOrigem" class="rounded-2">
                    <option value="RH">RH</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Vendas">Vendas</option>
                    <option value="TI">TI</option>
                </select>
            </div>
        </div>

        <div class="d-md-flex mb-0 bg-info gap-3">
            <div class="col-md-auto">
                <label for="remetente" class="w-100">Remetente:</label>
                <select id="remetente" name="remetente" class="rounded-2 w-100">
                    <option value="RH">RH</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Vendas">Vendas</option>
                    <option value="TI">TI</option>
                </select>
            </div>

            <div class="col-md-auto mb-0">
                <label for="tipo" class="w-100">Criador:</label>
                <select id="tipo" name="tipo" class="rounded-2 w-100">
                    <option value="Memorando">Meus</option>
                    <option value="Ofício">Todos</option>
                </select>
            </div>



            <div class="col-md-4 mb-0">
                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto" class="rounded-2 w-100">
            </div>



        </div>

        <div class="col-md-4 mb-0">
            <label class="mb-0"for="assunto">Texto:</label>
            <input type="text" id="assunto" name="assunto" class="rounded-2 w-100 mb-2">
        </div>

        <button type="submit" class="btn btn-primary"
            style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Pesquisar</button>
    </form>


    <div class="bd-example">
        <table class="table table-light table-bordered border border-dark ">
            <thead class="">
                <tr class="">
                    <th scope="col" class="ps-2 border border-dark">Nº</th>
                    <th scope="col" class="ps-2 border border-dark">Destino</th>
                    <th scope="col" class="ps-2 border border-dark">Assunto</th>
                    <th scope="col" class="ps-2 border border-dark">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-2 border border-dark">00128/2024</th>
                    <td class="ps-2 border border-dark">Cell</td>
                    <td class="ps-2 border border-dark">Cell</td>
                    <td class="ps-2 border border-dark">Cell</td>
                </tr>
                
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>


    







    <!-- fim FORM -->
    <x-scripts-rodape />
</body>

</html>
