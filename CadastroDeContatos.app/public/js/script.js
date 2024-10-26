
function showContactInfo(contactId) {
    fetch(`/contato/data/${contactId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('modalEmail').innerText = data.email;
            document.getElementById('modalNumero').innerText = data.numero;
            document.getElementById('modalEndereco').innerText = data.endereco;
            document.getElementById('modalComplemento').innerText = data.complemento;
            document.getElementById('modalCep').innerText = data.cep;
            document.getElementById('modalEstado').innerText = data.estado;
            $('#mostrarInfo').modal('show');
        })
        .catch(error => console.error('Erro ao buscar dados do contato:', error));
}