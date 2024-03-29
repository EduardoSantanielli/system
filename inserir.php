<!DOCTYPE html> 
<html> 
<head>
</head>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
          <h5>Gerenciamento de Tratamentos
              <hr>
          </h5>
        </center>

        <div class="col-md-6">
            <select class="form-control">
            <option>Filtrar por tratamento...</option>
                <option>Fisioterapia</option>
                <option>Fisioterapia</option>
                <option>Fisioterapia</option>
                <option>Fisioterapia</option>
            </select>
    </div>
    <div id="top" class="row">
    <div class="col-md-3">
    </div>
 
    <div class="col-md-6">
        <div class="input-group h2">
            </span>
        </div>
    </div>
</div>  
      </div>
<div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" id="usuarios">
            <thead>
                <tr>
                    <th>Tratamento</th>
                    <th>Aluno</th>
                    <th>Profissional</th>
                    <th>Carga Horária</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            <tr>
                    <td>Nada</td>
                    <td> DANIEL ORIVALDO DA SILVA</td>
                    <td>01/01/2015</td>
                    <td>100:00</td>
                    <td class="actions">
                    <i class="fas fa-edit fa-lg text-info"></i>
                  
                    </td>
                </tr>
                <tr>
                    <td>Fisioterapia</td>
                    <td> DANIEL ORIVALDO DA SILVA</td>
                    <td>Ronaldo</td>
                    <td>100:00</td>
                    <td class="actions">
                    <i class="fas fa-edit fa-lg text-info"></i>
                  
                    </td>
                </tr>
                <tr>
                <td>Psicologa</td>
                    <td> PEDRO</td>
                    <td>Mauricio</td>
                    <td>100:00</td>
                    <td class="actions">
                    <i class="fas fa-edit fa-lg text-info"></i>
                  
                    </td>
                </tr>
                <tr>
                <td>Programação</td>
                    <td> RICARDO</td>
                    <td>Jussimar</td>
                    <td>100:00</td>
                    <td class="actions">
                    <i class="fas fa-edit fa-lg text-info"></i>
                       
                    </td>
                </tr>

                <tr>
                <td>Programação</td>
                    <td> RICARDO</td>
                    <td>Jussimar</td>
                    <td>100:00</td>
                    <td class="actions">
                    <i class="fas fa-edit fa-lg text-info"></i>
                       
                    </td>
                </tr>

            </tbody>
         </table>
 
     </div>
      </div>
 </div>  
 <nav aria-label="Navegação de página exemplo" id="bottom">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
    <button class="btn btn-success" id="botao" data-toggle="modal" data-target="#inserir">Inserir Aluno</button> 
  </ul>   
  
</nav>

<div class="modal fade" id="inserir" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Aluno no tratamento:</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        <div class="row">
                <div class="form-group col-md-10">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Ex: RicardoMilos">
            </div>
                
                </div>
            
            <div class="row">
                <div class="form-group col-md-5">
                  <label> Tratamento</label>
                    <select class="form-control">
                      <option>Selecione</option>
                      <option>Fisioterapia</option>
                      <option>Fisioterapia</option>
                      <option>Fisioterapia</option>
                      <option>Fisioterapia</option>
                      <option>Fisioterapia</option>
                    </select>
            </div>
            
            <div class="form-group col-md-5">
                <label for="hora">Profissional</label>
                <input type="text" name="profissional" class="form-control" id="profissional" placeholder="Ex: Pedro">
            </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">inserir</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>