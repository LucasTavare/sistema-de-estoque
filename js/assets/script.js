$(document).ready(function() {

    listProduto()

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
                <td>botoes<td>
            </tr>
            
        
        `)
        })
            })

            
}
