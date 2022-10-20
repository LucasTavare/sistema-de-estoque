const validaLogin = () =>{
    let dados = new FormData($('#login-usuario')[0])

    const result = fetch('backend/validaLogin.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {

            Swal.fire({
                title: 'Atenção',
                text: result.retorno == 'ok' ? 'Login realizado com sucesso' : 'Credenciais invalidas',
                icon: result.retorno == 'ok' ? 'success' : 'error'
            })

            result.retorno == 'ok' ? window.location.replace("http://stackoverflow.com") : ''

        })

}
