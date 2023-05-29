window.onload = function () {
    document.forms.formulariocontato.addEventListener("submit", function (e) {
      e.preventDefault();
      valida(e);
    });
  };
  
  function valida(e) {
    var formulario = e.target;
    var valido = true;
    var objnome = formulario.nome;
    var str_nome = objnome.value.split(" ");
    var objemail = formulario.email;
    var email = objemail.value;
  
    if (objnome.value == null || str_nome.length < 2) {
      objnome.style.border = "2px solid red";
      objnome.nextElementSibling.nextElementSibling.textContent =
        "O usuário deve digitar Nome e Sobrenome";
      valido = false;
    } else {
      objnome.style.border = "2px solid green";
      objnome.nextElementSibling.nextElementSibling.textContent = "";
    }
  
    if (
      email.indexOf("@") === -1 ||
      email.indexOf("@") === 0 ||
      email.lastIndexOf(".") - email.indexOf("@") < 3 ||
      email.lastIndexOf(".") === email.length - 1
    ) {
      objemail.style.border = "2px solid red";
      objemail.nextElementSibling.nextElementSibling.textContent =
        "O email deve ser válido (exemplo: exemplo@dominio.com)";
      valido = false;
    } else {
      objemail.style.border = "2px solid green";
      objemail.nextElementSibling.nextElementSibling.textContent = "";
    }
    if(formulario.tipoctt.value == "")
    {
        valido = false;
        formulario.tipoctt.style.border = "2px solid red";
        formulario.tipoctt.nextElementSibling.nextElementSibling.textContent = "Selecione uma opção válida"
    }else
    {
        formulario.tipoctt.style.border = "2px solid green";
        formulario.tipoctt.nextElementSibling.nextElementSibling.textContent = ""
    }
  
    if (formulario.mensagem.value.length == 0) {
      valido = false;
      formulario.mensagem.style.border = "2px solid red";
      formulario.mensagem.nextElementSibling.nextElementSibling.textContent =
        "Obrigatório preenchimento!";
    }else
    {
        formulario.mensagem.style.border = "2px solid green";
    }

    let checkbox = document.getElementById('flexCheckDefault');

    if (checkbox.checked)
    {
        checkbox.style.border = "2px solid green";
    }else
    {
        checkbox.style.border = "2px solid red";
        valido = false;
    }
  
    if (valido) {
      exibeModal(formulario);
        }
    }

  function exibeModal(formulario) {
    var nome = formulario.nome.value;
    var email = formulario.email.value;
    var tipo = formulario.tipoctt.value;
    var mensagem = formulario.mensagem.value;
    var objnome = formulario.nome;
    var objemail = formulario.email;
    let checkbox = document.getElementById('flexCheckDefault');

    document.getElementById("modal-nome").textContent = "Nome: " + nome;
    document.getElementById("modal-email").textContent = "Email: " + email;
    document.getElementById("modal-tipo").textContent = "Tipo de Mensagem: " + tipo;
    document.getElementById("modal-mensagem").textContent = "Mensagem: " + mensagem;
  
    var modal = new bootstrap.Modal(document.getElementById("confirmModal"), {
      backdrop: "static",
      keyboard: false,
    });
    modal.show();
    document.getElementById("resetModalButton").addEventListener("click", function () {
        // Limpar estilos e mensagens de validação caso existam
        objnome.style.border = "";
        objnome.nextElementSibling.nextElementSibling.textContent = "";
        objemail.style.border = "";
        objemail.nextElementSibling.nextElementSibling.textContent = "";
        formulario.tipoctt.style.border = "";
        formulario.tipoctt.nextElementSibling.nextElementSibling.textContent = "";
        formulario.mensagem.style.border = "";
        formulario.mensagem.nextElementSibling.nextElementSibling.textContent = "";
        checkbox.style.border = "";
        modal.hide();
        formulario.reset();
        
        
      });

    document.getElementById("confirmModalButton").addEventListener("click", function () {
      formulario.submit();
    });

  }