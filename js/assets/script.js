$(document).ready(function() {

    listProduto()

    listAcoes()

});

const validaLogin = () => {
    let dados = new FormData($('#login-usuario')[0])

    const result = fetch('backend/validaLogin.php', {
        method: 'POST',
        body: dados
    })

        .then((response) => response.json())
        .then((result) => {

            Swal.fire({
                title: 'Atenção',
                text: result.retorno != 'ok' ? 'Credenciais invalidas' : '',
                icon: result.retorno == 'ok' ? 'error' : ''
            })


            result.retorno == 'ok' ? window.location.replace("http://localhost/sistema-de-estoque/paginaInicial.php") : ''

        })

}

const addProduto = () => {
    const dados = new FormData($('#add-produto')[0])

    const result = fetch('backend/cadastroItem.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {

            Swal.fire({
                title: 'Atenção',
                text: result.retorno == 'ok' ? "Cadastro realizado com sucesso!" : result.Mensagem,
                icon: result.retorno == 'ok' ? 'success' : 'error'
            })
        })

}

const listProduto = () => {

    const result = fetch('backend/listProduto.php', {
        method: 'POST',
        body: ''
    })

        .then((response) => response.json())
        .then((result) => {

            result.map(usuario => {
                $('#tabela').append(`
        
            <tr>
                <td scope="row">${usuario.id}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.marca}</td>
                <td>${usuario.fornecedor}</td>
                <td>R$ ${usuario.valor_unitario}</td>
                <td>${usuario.estoque}</td>
                <td class="botoes">
                <button type="button" class="btn btn-outline-secondary mb-4" onclick="saida(${usuario.id})">Saida</button>
                <button type="button" class="btn btn-outline-secondary mb-4" onclick="entrada()">Entrada</button>

                <td>
            </tr>
            
        
        `)
        })
            })

            
}

const saida = (id) => {
    const modalEditar = new bootstrap.Modal('#modal-saida')

        modalEditar.show()
    const result = fetch(`backend/ListUserUpdate.php`, {
        method: 'POST',
        body: `id=${id}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    })
    .then((response) => response.json())
    .then((result) => {

        console.log(result)

        $('#modal-nome').val(result.nome)
        $('#modal-marca').val(result.marca)
        $('#modal-fornecedor').val(result.fornecedor)
        $('#modal-valorUnit').val(result.valor_unitario)
        $('#modal-estoque').val(result.estoque)
        $('#modal-id').val(result.id)
    
})
}

const fazerSaida = () => {
    const dados = new FormData($('#att-pro')[0]);

    dados.append('amount', $('#modal-estoque').val());

    const result = fetch('backend/entrada-saida.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {

            Swal.fire({
                title: 'Atenção',
                text: result.retorno == 'ok' ? "Cadastro realizado com sucesso!" : result.Mensagem,
                icon: result.retorno == 'ok' ? 'success' : 'error'
            })

            
        })

}

const listAcoes = () => {
    const result = fetch('backend/selectAcao.php', {
        method: 'POST',
        body: ''
    })

        .then((response) => response.json())
        .then((result) => {

            result.map(usuario => {
                $('#acao').append(`
        
            <tr>
                <td scope="row">${usuario.id}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.tipo}</td>
                <td>${usuario.quantidade}</td>
            </tr>
            
        
        `)
        })
            })
}