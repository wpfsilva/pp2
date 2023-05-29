window.onload = function () {
    document.forms.formulariocontato.onsubmit = function (e) {
      valida(e);
    };
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

    if (formulario.mensagem.value.length == 0)
    {
        valido = false;
        formulario.mensagem.style.border = "2px solid red";
        formulario.mensagem.nextElementSibling.nextElementSibling.textContent = "Obrigatório preenchimento!"
    }
  
    var atividadesSelecionadas = document.querySelectorAll(
      'input[name="termo[]"]:checked'
    );
  
    if (atividadesSelecionadas.length === 0) {
      atividadesSelecionadas[0].nextElementSibling.textContent =
        "Você precisa concordar com os termos!";
      valido = false;
    } 
  
    if (valido) {
      formulario.submit();
    }
  
    e.preventDefault();
  }