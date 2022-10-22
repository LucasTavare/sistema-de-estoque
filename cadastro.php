<?php include('backend/header.php') ?>

    

        <form action="" id="add-produto" class="form-cadastro" method="POST">
        <div class="corpo">
            <div class="input-cadastro">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="input-cadastro">
                <label for="marca">Marca</label>
                <input  type="text" id="marca" name="marca">
            </div>
            <div class="input-cadastro">
                <label for="fornecedor">Fornecedor</label>
                <input  type="text" id="fornecedor" name="fornecedor">
            </div>
            <div class="input-cadastro" >
                <label for="valorUnit.">Valor Unit.</label>
                <input type="text" id="valorUnit" name="valorUnit">
            </div>
            <div class="input-cadastro">
                <label for="estoque">Estoque</label>
                <input  type="text" id="estoque" name="estoque">
            </div>
        
        </div>
        <div class="text-center">
            <button type="button" onclick="addProduto()" class="btn-confirmar">Cadastrar</button>
        </div>
            
        </form>



    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="js/assets/script.js"></script>
</body>

</html>