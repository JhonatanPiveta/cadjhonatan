<?php

?>
<html>
    <head>
    <title>Atividade LADS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
      <script> 

//         $(document).ready(function() {

//             function limpa_formulário_cep() {
//                 // Limpa valores do formulário de cep.
//                 $("#rua").val("");
//                 $("#bairro").val("");
//                 $("#cidade").val("");
//                 $("#uf").val("");
//                 $("#ibge").val("");
//             }
            
//             //Quando o campo cep perde o foco.
//             $("#cep").blur(function() {

//                 //Nova variável "cep" somente com dígitos.
//                 var cep = $(this).val().replace(/\D/g, '');

//                 //Verifica se campo cep possui valor informado.
//                 if (cep != "") {

//                     //Expressão regular para validar o CEP.
//                     var validacep = /^[0-9]{8}$/;

//                     //Valida o formato do CEP.
//                     if(validacep.test(cep)) {

//                         //Preenche os campos com "..." enquanto consulta webservice.
//                         $("#rua").val("...");
//                         $("#bairro").val("...");
//                         $("#cidade").val("...");
//                         $("#uf").val("...");
//                         $("#ibge").val("...");

//                         //Consulta o webservice viacep.com.br/
//                         $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

//                             if (!("erro" in dados)) {
//                                 //Atualiza os campos com os valores da consulta.
//                                 $("#rua").val(dados.logradouro);
//                                 $("#bairro").val(dados.bairro);
//                                 $("#cidade").val(dados.localidade);
//                                 $("#uf").val(dados.uf);
//                                 $("#ibge").val(dados.ibge);
//                             } //end if.
//                             else {
//                                 //CEP pesquisado não foi encontrado.
//                                 limpa_formulário_cep();
//                                 alert("CEP não encontrado.");
//                             }
//                         });
//                     } //end if.
//                     else {
//                         //cep é inválido.
//                         limpa_formulário_cep();
//                         alert("Formato de CEP inválido.");
//                     }
//                 } //end if.
//                 else {
//                     //cep sem valor, limpa formulário.
//                     limpa_formulário_cep();
//                 }
//             });
//         });

    </script>
    <script>
    	var email = ""
    	var senha = ""
    	var nome  = ""		
        $(document).ready(function() {
        	$("#cadastro").show()
            $("#login").hide()
            $("#redefinir").hide()
            $("#botaopaginacadastro").click(function() {
            	$("#cadastro").show()
                $("#login").hide()
                $("#redefinir").hide()
            })
            $("#botaopaginalogin").click(function() {
            	 $("#login").show()
            	 $("#cadastro").hide()
                 $("#redefinir").hide()
            })
            $("#botaopaginaredefinir").click(function() {
            	$("#redefinir").show()
            	$("#login").hide()
                $("#cadastro").hide()
            })
      		 $("#botaocadastro").click(function() {
          		 if("" != $("input[name='emailcadastro']").val() && "" != $("input[name='senhacadastro']").val() && "" != $("input[name='nomecadastro']").val()){
          			email = $("input[name='emailcadastro']").val()
          			nome  = $("input[name='nomecadastro']").val()
          			senha = $("input[name='senhacadastro']").val()
          			alert("Cadastro Feito!")
          		}else{
          			alert("Campo Vazio!")
          		}
      		 })
      		 $("#botaologin").click(function() {
      			if (email == $("input[name='emaillogin']").val() && senha == $("input[name='senhalogin']").val() && "" != $("input[name='emaillogin']").val() && "" != $("input[name='senhalogin']").val()){
      				alert("Login Feito!")
          		}else{
      				alert("Email ou Senha Errado!")
          		}
            })
             $("#botaoredefinir").click(function() {
      			if ("" != $("input[name='emailredefinir']").val()){
          			if (email == $("input[name='emailredefinir']").val()){
              			alert("Email Encontrado")
              		}else{
                  		alert("Email Não Encontrado")
                  	}
          		}else{
              		alert("Email Vazio")
              	}
            })
        })
    </script>
    </head>

    <body>
    <h1> Atividade LADS</h1>
    <!-- Inicio do formulario -->
    <nav>
    	<button type="button" id="botaopaginacadastro">Página Cadastro</button>
    	<button type="button" id="botaopaginalogin">Página Login</button>
    	<button type="button" id="botaopaginaredefinir">Página Redefinir Senha</button>
    </nav>
    <div id="cadastro">
    	<h2> Cadastro </h2> <br>
    	<form>
    		Email: <input type="email" name="emailcadastro"><br>
    		Nome: <input type="text" name="nomecadastro"><br>
    		Senha: <input type="password" name="senhacadastro"><br>
    	</form>
    	<button type="button" id="botaocadastro">Cadastrar</button>
    </div>
    <div id="login">
    	<h2> Login </h2> <br>
    	<form>
    		Email: <input type="email" name="emaillogin"><br>
    		Senha: <input type="password" name="senhalogin"><br>
    	</form>
    	<button type="button" id="botaologin">Logar</button>
    </div>
    <div id="redefinir">
    	<h2> Redefinir </h2> <br>
    	<form>
    		Email: <input type="email" name="emailredefinir"><br>
    	</form>
    	<button type="button" id="botaoredefinir">Redefinir Senha</button>
    </div>

<!--       <form method="get" action="."> -->
<!--         <label>Cep: -->
<!--         <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br /> -->
<!--         <label>Rua: -->
<!--         <input name="rua" type="text" id="rua" size="60" /></label><br /> -->
<!--         <label>Bairro: -->
<!--         <input name="bairro" type="text" id="bairro" size="40" /></label><br /> -->
<!--         <label>Cidade: -->
<!--         <input name="cidade" type="text" id="cidade" size="40" /></label><br /> -->
<!--         <label>Estado: -->
<!--         <input name="uf" type="text" id="uf" size="2" /></label><br /> -->
<!--         <label>IBGE: -->
<!--         <input name="ibge" type="text" id="ibge" size="8" /></label><br /> -->
<!--       </form> -->
    </body>

    </html>

