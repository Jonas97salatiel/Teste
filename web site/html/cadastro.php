<?php
//conexão
require_once 'db_connect.php';

//sessão
session_start();
//Enviar


?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>I M O</title>
        <link rel="stylesheet" href="../custom/custom-cadastro.css">
        <link rel="stylesheet" href="../css/bootstrap.css"> 
          
    </head>
    <body>
           <div class="bg-dark">
            <nav class="container navbar navbar-expand-md navbar-dark ">
              <a class="navbar-brand navlogo" href="../html/login.html">I M O</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="../html/login.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/login.html">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/cadastro.html">Cadastre-se</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>

                </ul>
              </div>
            </nav>
           </div>  
           
           
            <form class="container" action="../create.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="email">Nome</label>
              <input type="text" class="form-control" nome="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-5">
              <label for="senha">Sobrenome</label>
              <input type="text" class="form-control" nome="sobrenome" id="sobrenome" placeholder="sobrenome">
            </div>
            <div class="form-gruop col-md-2">
              <label for="idade">Idade</label>
              <input type="text" class="form-control" nome="idade" id="idade">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" nome="email" id="email" placeholder="Email">
            </div>
            
            <div class="form-group col-md-6">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" nome="senha" id="senha" placeholder="*******">
            </div>
            
          </div>
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" nome="endereco" id="endereco" placeholder="Rua dos Bolos, nº 0">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Complemento</label>
            <input type="text" class="form-control" nome="complemento" id="complemento" placeholder="Apartamento, hotel, casa, etc.">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" nome="cidade" id="cidade" >
            </div>
            <div class="form-group col-mds-4">
              <label for="estado">Estado</label>
              <select nome="estado" class="form-control">
                <option selected>Acre (AC)</option>
                    <option selected>Alagoas (AL)</option>
                    <option selected>Amapá (AP)</option>
                    <option selected>Amazonas (AM)</option>
                    <option selected>Bahia (BA)</option>
                    <option selected>Ceará (CE)</option>
                    <option selected>Distrito Federal (DF)</option>
                    <option selected>Espírito Santo (ES)</option>
                    <option selected>Goiás (GO)</option>
                    <option selected>Maranhão (MA)</option>
                    <option selected>Mato Grosso (MT)</option>
                    <option selected>Mato Grosso do Sul (MS)</option>
                    <option selected>Minas Gerais (MG)</option>
                    <option selected>Pará (PA) </option>
                    <option selected>Paraíba (PB)</option>
                    <option selected>Paraná (PR)</option>
                    <option selected>Pernambuco (PE)</option>
                    <option selected>Piauí (PI)</option>
                    <option selected>Rio de Janeiro (RJ)</option>
                    <option selected>Rio Grande do Norte (RN)</option>
                    <option selected>Rio Grande do Sul (RS)</option>
                    <option selected>Rondônia (RO)</option>
                    <option selected>Roraima (RR)</option>
                    <option selected>Santa Catarina (SC)</option>
                    <option selected>São Paulo (SP)</option>
                    <option selected>Sergipe (SE)</option>
                    <option selected>Tocantins (TO)</option>
                
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="ceo">CEP</label>
              <input type="text" class="form-control" nome="cep" id="cep" >
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Aceitar termos de uso
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-dark" name="btn_cadastrar">Cadastrar</button>
          <button type="reset" class="btn btn-secondary">Cancelar</button>
        </form>       
         
         
  
                 
    <footer class=" modal-footer  bg-dark">
          <div class="container footer-copyright text-center ">© 2018 Copyright
            <a href="../html/cadastro.html"> imo.com.br</a>
        </div>
    </footer>     
         
         
         
         
      <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
      <script type="text/javascript" src="../js/popper.min.js"></script>                                  
      <script type="text/javascript" src="../js/bootstrap.js"></script>
      
    </body>
    
    
</html>
