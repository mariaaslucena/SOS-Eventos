document.querySelector("form").addEventListener("submit", function(event) {

    const nome = document.querySelector("input[name='nome_cliente']").value;

    if (nome.trim() === "") {
        alert("O nome do cliente é obrigatório!");
        event.preventDefault();
    }

});