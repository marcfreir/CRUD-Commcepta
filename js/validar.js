function validate() {
    var codigo_requerido = document.form.txtcodigo.value;
    var nome_requerido = document.form.txtnome.value;
    var data_entrada_requerida = document.form.txtdataentrada.value;
    var status = false;

    if(codigo_requerido == "") {
        document.getElementById("codigoerrado").style.color = "red";
        document.getElementById("codigoerrado").innerHTML = "Requerido";
        status = false;
    } else {
        document.getElementById("codigoerrado").style.color = "green";
        document.getElementById("codigoerrado").innerHTML = "Tudo certo";
        status = true;
    }

    if(nome_requerido == "") {
        document.getElementById("nomeerrado").style.color = "red";
        document.getElementById("nomeerrado").innerHTML = "Requerido";
        status = false;
    } else {
        document.getElementById("nomeerrado").style.color = "green";
        document.getElementById("nomeerrado").innerHTML = "Tudo certo";
        status = true;
    }

    if(data_entrada_requerida == "") {
        document.getElementById("dataentradaerrada").style.color = "red";
        document.getElementById("dataentradaerrada").innerHTML = "Requerido";
        status = false;
    } else {
        document.getElementById("dataentradaerrada").style.color = "green";
        document.getElementById("dataentradaerrada").innerHTML = "Tudo certo";
        status = true;
    }
    return status;
}