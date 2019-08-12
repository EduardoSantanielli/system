<!DOCTYPE html> 
<html> 
<head>
    
</head>

<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aluno.css?875448">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/inserir.css?6451645">
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
        <br>
        <center>
            <h5>Aluno</h5>
            <hr>
        </center>

        <div class="container">    
                <div class="jumbotron">
                    
                    
                    
                  <div class="row">
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div class="thumbnail text-center photo_view_postion_b" >
                          <img src="img/avatar5.png" width="240" height="240" alt="stack photo" style="border-radius:10%;" >
                        </div>
                      </div>
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                          <div class="" style="border-bottom:1px solid black">
                            <h3>Lourenço da Silva </h3>
                          </div>
                            <hr>
                          <div class="col-md-8">  
                          <ul class="details">
                      
                          <div class="row">
                <div class="form-group col-md-6">
                    <label for="campo2">CPF</label>
                    <input type="text" class="form-control" id="campo3" placeholder="XXXXXXXXXXX">
            </div>

            <div class="form-group col-md-6">
                <label for="campo3">Nascimento</label>
                <input type="date" class="form-control" id="campo3" placeholder="XX/XX/XXXX">
            </div>
    </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="campo2">Genero</label>
                    <input type="text" class="form-control" id="campo3" placeholder="Masculino">
            </div>

            <div class="form-group col-md-6">
                <label for="campo3">RG</label>
                <input type="text" class="form-control" id="campo3" placeholder="XXXXXXXX">
            </div>
         
            </div>

            
            
  
                          </div>
                    
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                        <div class="form-group" style="border-bottom:1px solid black">
                            <h3>Informações de Contato & Moradia</h3>
                          
                        </div>
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
    <div class="form-group col-md-3">
                <label for="campo3">Rua</label>
                <input type="text" class="form-control" id="campo3" placeholder=" Ex: Cibratel">
            </div>

    </div>
                
    <div class="row">
    <div class="col-md-3">
     <label for="telefone">Celular</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="(13)996403088">
    </div>
    </div>
            
            <div class="col-md-3">
     <label for="telefone">Telefone</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-tty"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="(13)996403088">
    </div>
    </div>
            
   
    <div class="col-md-6">
     <label for="telefone">Email</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>

            
    </div>
 

    </div>
                    
                  
                   
             
            
                    </div>
                    
                    <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-group" style="border-bottom:1px solid black">
                                <h3>Responsáveis</h3>
                            </div>
                             
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
    
            
    </div>
 

    </div>
    <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                        <div class="form-group" style="border-bottom:1px solid black">
                            <h3>Informações Clínicas do Paciente</h3>
                          
                        </div>
                        </div>
                      </div>

                      <div class="row">
                <div class="form-group col-md-3">
                    <label for="campo2">Tratamento</label>
                    <input type="text" class="form-control" id="campo3" placeholder=" Ex: Fisioterapia">
            </div>
            
            <div class="form-group col-md-3">
                <label for="campo3">Tratamento 2(Opcional)</label>
                <input type="text" class="form-control" id="campo3" placeholder=" Ex: Programação">
            </div>

            
   
    <div class="col-md-3">
     <label for="telefone">Tratamento 3 (Opcional)</label>
        <div class="input-group form-group">
         
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>

            
    </div>

                
    <div class="row">
    <div class="col-md-4">
     <label for="telefone">Escolaridade</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="Ensino Médo (Fazendo)">
    </div>
    </div>
            
            <div class="col-md-4">
     <label for="telefone">Deficiencia</label>
   
               
                <input type="text" class="form-control" id="telefone" placeholder="ex: Autismo">

    </div>
            
   
    <div class="col-md-4">
     <label for="telefone">Dificuldade (Opcional) </label>
     
                <input type="text" class="form-control" id="telefone" placeholder="ex: Falar">
            </div>

            

 

    </div>
                    
                  
                   
             
            
                    </div>

                    <div class="row">
                    <div class="form-group col-md-3">
                <label for="campo3">Dificuldade 2 (Opcional)</label>
                <input type="text" class="form-control" id="campo3" placeholder=" Ex: Coordenação Motora">
            </div>
                    <div class="col-md-4">
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
            
            

            
   
    <div class="col-md-3">
     <label for="telefone">Tratamento</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-briefcase-medical"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="XXXX-XXXX-XXXX">
            </div>

            
    </div>
   
                
    <div class="row">
    <div class="col-md-3">
     <label for="telefone">Tratamento 2 (Opcional)</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="(13)996403088">
    </div>
    </div>
            
            <div class="col-md-3">
     <label for="telefone">Tratamento 3 (Optcional)</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-stethoscope"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="(13)996403088">
    </div>
    </div>
            
   
    <div class="col-md-5">
     <label for="telefone">Necessidades</label>
        <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-hands-helping"></i></span>
                </div>
                <input type="text" class="form-control" id="telefone" placeholder="Ex: Ajuda para ....">
            </div>
           
    </div>
  
        
    </div>
    </div>
    <br>
    <br>
            <button class="btn btn-primary">Editar Dados</button> 
                  
                   
             
            
                    </div>
                   
             
            
                    </div>
                            
                        </div>
                      </div>

                      
                    </div>
            


         
        
</body>
</html>