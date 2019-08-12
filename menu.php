<!DOCTYPE html> 
<html> 
<head>
</head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css?1422984254">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
            <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bot.js"></script>
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
    <br>
    <br>
        <center>
          <h5>Gerenciamento de Usuários do Sistema</h5>
  <hr>
        </center>

  


 
 
  <div class="col-md-10">
        <div class="input-group h2">
            <input name="" class="form-control" id="search" type="text" placeholder="Pesquisar Paciente">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                <i class="fas fa-search"></i> 
                </button>
            </span>
        </div>
    </div>
</div>

<div id="list" class="row">
<br>
    <div class="table-responsive col-xs-12">
        <table class="table table-striped table-fixed" id="usuarios">
            <thead>
                <tr>
                
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Matricula feita em:</th>
                    <th>Sexo</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
 
                <tr>
                    <td>Nada</td>
                    <td> DANIEL ORIVALDO DA SILVA</td>
                    <td>01/01/2015</td>
                    <td>Masculino</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar Paciente</a>
                    </td>
                </tr>
                
                <tr>
                <td>Nada</td>
                    <td> PEDRO</td>
                    <td>01/01/2015</td>
                    <td>Masculino</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar Paciente</a>
                    </td>
                </tr>
                <tr>
                <td>Nada</td>
                    <td> PEDRO</td>
                    <td>01/01/2015</td>
                    <td>Masculino</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar Paciente</a>
                    </td>
                </tr>
                <tr>
                <td>Nada</td>
                    <td> PEDRO</td>
                    <td>01/01/2015</td>
                    <td>Masculino</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar Paciente</a>
                    </td>
                </tr>
                <tr>
                <td>Nada</td>
                    <td> RICARDO</td>
                    <td>01/01/2015</td>
                    <td>Masculino</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar Paciente</a>
                    </td>
                </tr>
            </tbody>
         </table>
         </div>
     </div>
 </div> 
 <nav aria-label="Navegação de página exemplo" id="bottom">
  <ul class="pagination" style="color:black;">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
  </ul>
</nav>


   
        

    




</body>
</html>