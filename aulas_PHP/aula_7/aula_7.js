function verificar() {
    const num = [
        window.document.getElementById("num1"),
        window.document.getElementById("num2"),
        window.document.getElementById("num3"),
        window.document.getElementById("num4"),
        window.document.getElementById("num5")
    ];

    let v_valido = 0; // Verificando quantos valores possuem entradas

    for (let i=0; i<num.length; i++) {
        if (num[i].value.length > 0) { // Se o valor não for vazio, ele adiciona na variavel v_valido
            v_valido++;
        }
    }

    if (v_valido < 2) {
        window.alert("[ERRO] Preencha pelo menos 2 campos."); // Levanta um aviso para preencher no minimo 2 campos
        window.location.href = "http://localhost/PHP_Studies/aulas_PHP/aula_7/aula_7.html"; // mantem a pagina na mesma
        return false; // impede o submit de ser enviado
    }
}