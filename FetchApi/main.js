function search() {
    const cep = document.getElementById('cep').value
    const cepDigitado = document.getElementById('cepDigitado')
    const logradouro = document.getElementById('logradouro')
    const complemento = document.getElementById('complemento')
    const bairro = document.getElementById('bairro')
    const localidade = document.getElementById('localidade')
    const uf = document.getElementById('uf')
    const ibge = document.getElementById('ibge')
    const ddd = document.getElementById('ddd')

    let link = "https://cep.awesomeapi.com.br/json/" + cep
    console.log(cep)

    fetch(link)
        .then(T => T.json())
        .then( element => {
            cepDigitado.innerText = cep
            logradouro.innerText = element.address_name
            complemento.innerText = '--'
            bairro.innerText = element.district
            localidade.innerText = element.city
            uf.innerText = element.state
            ibge.innerText = element.city_ibge
            ddd.innerText = element.ddd
        })

    document.getElementById("button").addEventListener("click", function(event){
        event.preventDefault()
    });
}