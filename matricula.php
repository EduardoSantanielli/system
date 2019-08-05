<!DOCTYPE html> 
<html> 
<head>
</head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/matricula.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
            <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
     /* $(document).ready( function () {
            $('#usuarios').DataTable();
        } ); */
    
    </script>

<body>

          <nav class="navbar navbar-expand-lg navbar-light" id="nave">
          <a class="navbar-brand"  href="#" style="color:white;">Secretar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <img src="img/avatar5.png" class="user-image" alt="User Image">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Pedro Emanoel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">
            <i class="fas fa-cog"></i><span>Perfil</span>
        </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-comment-alt"></i><span>Mensagens</span>
          </a>
          <a class="dropdown-item" data-toggle="modal" data-target="#deslogar">
             <i class="fas fa-sign-out-alt"></i><span>Sair</span>
          </a>
        </div>
      </li>
                        
  </div>
</nav>
<div class="Vertical">
    <div class="col-md-12">
       <div class="user-panel">
       <div class="col-md-6">
        </div>
        </div>
      </div>
      <a class="navbar-brand" href="#" style="color:white;">Secretary Account</a>
    <hr>
        <center>
        <strong><p style="color:gray;">Menu</p></strong>
        </center>
        <ul class="navbarVertical">
            <li>
                 <a href="menu.php">
                 <i class="fas fa-users"></i><span>Usuarios</span>
                </a>
            </li>

            <li>
                 <a href="#">
                    <i class="fas fa-file-invoice"></i><span>Diários</span>
                </a>
            </li>
            
            <li>
                <a href="#">
                <i class="fas fa-search"></i><span>Inserir Aluno</span>
                </a>
            </li>   

              <li>
              <a href="horarios.php">
                    <i class="fas fa-clock"></i><span>Horários</span>
                </a>
            </li>  

             <li>
                 <a href="#">
                    <i class="fas fa-paste"></i> <span>Relatórios</span>
                </a>
            </li>  

             <li>
                <a href="#">
                  <i class="fas fa-archive"></i> <span>Biblioteca</span>
                </a>
            </li>               

           <li>
                 <a href="bot.php">
                    <i class="fas fa-comments"></i><span>Bot</span>
                </a>
            </li> 
            <li>
             <a href="agendamento.php">
                 <i class="fas fa-calendar-alt"></i><span>Agendamentos</span>
            </a>
            </li>  

            <li>
             <a href="requisita.php">
                  <i class="fas fa-book"></i><span>Requisitar</span>
            </a>
            </li>
        
            <li>
             <a href="#" data-toggle="modal" data-target="#cadastrar">
              <i class="fas fa-user-plus"></i><span>Cadastrar</span>
                </a>
            </li>  

        </ul>
        <!-- Button trigger modal -->
</div>
<div class="modal fade" id="cadastrar" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Escolha o nível de cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <a href="matricula.php" id="oioi" class="btn btn-warning">Matricular Paciente</a><a href="#" class="btn btn-success">Cadastrar Profissional</a>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
  </div>
<!-- Modal de sair -->
<div class="modal fade" id="deslogar" role="dialog">
        <div class="modal-dialog modal-md" style="width: 210px; text-align: center;"> 
            <div class="modal-content">
                <div class="modal-body" style="padding-bottom: 0px;">
                    <h3>Deseja sair?</h3>               
                </div>
                <div class="modal-footer" style="padding-top: 5px; padding-bottom: 5px; text-align: center;">
                    <a href="#" type="button" class="btn btn-success" style="width: 80px;">Sim</a>
                    <a href="#" type="button" type="button" class="btn btn-danger" data-dismiss="modal" style="width: 80px;">Não</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <form action="#" method="post">
         <div id="main" class="container-fluid">
            <h3 class="page-header">Matricular Aluno</h3>        

                <form action="#" method="post">
                    <!-- area de campos do form -->
            <hr />


            <div class="row">
                <div class="form-group col-md-7">
                    <label for="campo1">Nome Completo</label>
                    <input type="text" class="form-control" id="campo1">
            </div>
                
                </div>
            
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="campo2">CPF</label>
                    <input type="text" class="form-control" id="campo3">
            </div>
            
            <div class="form-group col-md-2">
                <label for="campo3">Nascimento</label>
                <input type="text" class="form-control" id="campo3">
            </div>

            
   
    <div class="col-md-3">
     <label for="telefone">Telefone</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-5">
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
            </div>
                <input type="text" class="form-control" id="email" placeholder="Ex: RicardoMilos@gmail.com">			
			</div>
    </div>

  <div class="col-md-2" id="selecto"> 
        <select class="form-control">
            <option>Sexo:</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>
            </div>
  

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="campo2">Cidade</label>
                    <input type="text" class="form-control" id="campo3">
            </div>
            
            <div class="form-group col-md-2">
                <label for="campo3">Bairro</label>
                <input type="text" class="form-control" id="campo3">
            </div>

            
   
    <div class="col-md-3">
     <label for="telefone">CEP</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>
    </div>
    </div>
        
    <div class="row">
    <div class="col-md-3">
     <label for="telefone">Encaminhamento</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                   
                    <span class="input-group-text"><input type="radio" name="nao" id="nop" required>não // 
                        <input type="radio" name="nao" id="nop" required>sim
                  </span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="Instituição">
            </div>
    </div>

    <div class="col-md-4" id="selecto"> 
        <label>Escolaridade</label>
        <select class="form-control">
            <option>Selecione</option>
            <option value="Fundamental Incompleto">Fundamental Incompleto</option>
            <option value="Fundamental Completo">Fundamental Completo</option>
            <option value="Médio Incompleto">Médio Incompleto</option>
            <option value="Médio Completo">Médio Completo</option>
            <option value="Superior Incompleto">Superior Incompleto</option>
            <option value="Superior Completo">Superior Completo</option>
        </select>
    </div>
      </div>
    </div>

<div id="main" class="container-fluid">
            <h3 class="page-header">Responsável</h3>        

                <form action="#" method="post">
                    <!-- area de campos do form -->
            <hr />


            <div class="row">
                <div class="form-group col-md-7">
                    <label for="campo1">Nome Completo</label>
                    <input type="text" class="form-control" id="campo1">
            </div>
                </div>
            
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="campo2">CPF</label>
                    <input type="text" class="form-control" id="campo3">
            </div>
            
            <div class="form-group col-md-2">
                <label for="campo3">Nascimento</label>
                <input type="text" class="form-control" id="campo3">
            </div>

            
   
    <div class="col-md-3">
     <label for="telefone">Telefone</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-5">
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
            </div>
                <input type="text" class="form-control" id="email" placeholder="Ex: RicardoMilos@gmail.com">			
			</div>
    </div>

  <div class="col-md-2" id="selecto"> 
        <select class="form-control">
            <option>Sexo:</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>
            </div>
  

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="campo2">Cidade</label>
                    <input type="text" class="form-control" id="campo3">
            </div>
            
            <div class="form-group col-md-2">
                <label for="campo3">Bairro</label>
                <input type="text" class="form-control" id="campo3">
            </div>

            
   
    <div class="col-md-3">
     <label for="telefone">CEP</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>
    </div>
    </div>
        
    <div class="row">
    <div class="col-md-3">
     <label for="telefone">Profissão</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                   
                    <span class="input-group-text"><input type="radio" name="nao" id="nop" required>não // 
                        <input type="radio" name="nao" id="nop" required>sim
                  </span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="Instituição">
            </div>
    </div>

    <div class="col-md-4" id="selecto"> 
        <label>Escolaridade</label>
        <select class="form-control">
            <option>Selecione</option>
            <option value="Fundamental Incompleto">Fundamental Incompleto</option>
            <option value="Fundamental Completo">Fundamental Completo</option>
            <option value="Médio Incompleto">Médio Incompleto</option>
            <option value="Médio Completo">Médio Completo</option>
            <option value="Superior Incompleto">Superior Incompleto</option>
            <option value="Superior Completo">Superior Completo</option>
        </select>
    </div>
      </div>
    </div>

    <div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar Aluno</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</form>


</body>
</html>