<?php include 'backend/header.php';
?>

<div id="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col" class="th">ID</th>
        <th scope="col" class="th">Nome</th>
        <th scope="col" class="th">Marca</th>
        <th scope="col" class="th">Fornecedor</th>
        <th scope="col" class="th">Valor Unitario</th>
        <th scope="col" class="th">estoque</th>
        <th scope="col" class="th">Funções</th>
        <th scope="col" class="th"></th>
      </tr>
    </thead>
    <tbody id="tabela" class="table-group-divider">

    </tbody>
  </table>


  <div class="modal" id="modal-saida" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Saida de Produtos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="" method="POST" id="att-pro">


          <div class="input-modal text-center">
              <label for="modal-id">ID produto</label>
              <input type="text" id="modal-id" name="modal-id">
            </div>
            <div class="input-modal text-center">
              <label for="modal-nome">Nome</label>
              <input type="text" id="modal-nome" name="modal-nome">
            </div>
            <div class="input-modal text-center">
              <label for="modal-marca">Marca</label>
              <input type="text" id="modal-marca" name="modal-marca" disabled>
            </div>
            <div class="input-modal text-center">
              <label for="modal-fornecedor">Fornecedor</label>
              <input type="text" id="modal-fornecedor" name="modal-fornecedor" disabled>
            </div>
            <div class="input-modal text-center">
              <label for="modal-valorUnit.">Valor Unit.</label>
              <input type="text" id="modal-valorUnit" name="modal-valorUnit" disabled>
            </div>
            <div class="input-modal text-center">
              <label for="modal-estoque">Estoque</label>
              <input type="number" id="modal-estoque" name="modal-estoque" disabled>
            </div>
            <div class="input-modal text-center">
              <label for="modal-quantidade">Quantidade</label>
              <input type="number" id="modal-quantidade" name="modal-quantidade">
            </div>
            <div class="input-modal text-center">
              <select class="input-modal" name="tipo" id="tipo">
                <option value="1">Entrada</option>
                <option value="2">Saida</option>
              </select>
            </div>

          </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="fazerSaida()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js" integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/assets/script.js"></script>


</body>

</html>