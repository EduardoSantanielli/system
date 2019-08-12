<!DOCTYPE html> 
<html> 
<head>
</head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/matricula.css?5456454">
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

<nav class="navbar navbar-expand-lg fixed-top  bg-dark pmd-navbar pmd-z-depth nave" id="nave">
    
    <!-- Sidebar Toggle Button-->
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <img src="img/avatar5.png" class="user-image" alt="User Image" style="margin-left:1100px">

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
      
    <!-- Navbar Right icon -->		
</nav>

  <div id="wrapper">
   <!-- Sidebar -->
   <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
          <br>
          <br>
         <br>
     
        <strong><p style="color:gray; margin-left: 80px">Menu</p></strong>
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
                <a href="inserir.php">
                <i class="fas fa-search"></i><span>Tratamentos</span>
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
                  <i class="fas fa-archive"></i><span>Laudos</span>
                </a>
            </li>               

            <li>
             <a href="agendamento.php" >
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
      </ul>
   </div>
   <!-- /#sidebar-wrapper -->
        <br>
        <br>
  
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
    <center>
            <h5>Matricular Aluno</h5>        
            <hr />
         <div id="main" class="container-fluid">
           
                <form action="#" method="post">
                    <!-- area de campos do form -->
          


            <div class="row">
                <div class="form-group col-md-9">
                    <label for="campo1">Nome Completo</label>
                    <input type="text" class="form-control" id="campo1" placeholder="Ex: Pedro Emanoel do Nascimento Silva">
            </div>
                
                </div>
            
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo2">CPF</label>
                    <input type="text" class="form-control" id="campo3" placeholder="XXXXXXXXXXX">
            </div>
            
            <div class="form-group col-md-3">
                <label for="campo3">Nascimento</label>
                <input type="date" class="form-control" id="campo3" placeholder="XX/XX/XXXX">
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

  <div class="col-md-4" id="selecto"> 
        <select class="form-control">
            <option>Sexo:</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>
            </div>
  

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo2">Cidade</label>
                    <input type="text" class="form-control" id="campo3" placeholder=" Ex: Mongaguá">
            </div>
            
            <div class="form-group col-md-3">
                <label for="campo3">Bairro</label>
                <input type="text" class="form-control" id="campo3" placeholder=" Ex: Cibratel">
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
    <div class="col-md-5">
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


    <center>
        <hr>
            <h3 class="page-header">Responsável</h3>        
            <div id="main" class="container-fluid">
                <form action="#" method="post">
                    <!-- area de campos do form -->
      <br>


      <div class="row">
                <div class="form-group col-md-9">
                    <label for="campo1">Nome Completo</label>
                    <input type="text" class="form-control" id="campo1" placeholder="Ex: Pedro Emanoel do Nascimento Silva">
            </div>
                
                </div>
            
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo2">CPF</label>
                    <input type="text" class="form-control" id="campo3" placeholder="XXXXXXXXXXX">
            </div>
            
            <div class="form-group col-md-3">
                <label for="campo3">Nascimento</label>
                <input type="date" class="form-control" id="campo3" placeholder="XX/XX/XXXX">
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

  <div class="col-md-4" id="selecto"> 
        <select class="form-control">
            <option>Sexo:</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>
            </div>
  

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo2">Cidade</label>
                    <input type="text" class="form-control" id="campo3" placeholder=" Ex: Mongaguá">
            </div>
            
            <div class="form-group col-md-3">
                <label for="campo3">Bairro</label>
                <input type="text" class="form-control" id="campo3" placeholder=" Ex: Cibratel">
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
    <div class="col-md-5">
     <label for="telefone">Emprego</label>
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
    <button class="btn btn-primary" type="submit">Finalizar Matricula</button>
    <button class="btn btn-danger" type="submit">Cancelar Matricula</button>
    
</form>
<br>
    <br>
<div class="col-md-6">
        <h1></h1>
    </div>

</body>
</html>