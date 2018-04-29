<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="dist/img/tinoicon.ico">
  <title>TINO CRM | Dashboard</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple-light.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.css">
  <link rel="stylesheet" href="dist/css/custom-style.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index-tino.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TINO</b>crm</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 2 notificações não lidas</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 9 novos chamados
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 1 novo comentário em "Descarga não funciona"
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Visualizar todas</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 3 chamados em aberto</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Carteira quebrada
                        <small class="pull-right">25%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 25%" role="progressbar"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">25% completo</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Descarga não funciona
                        <small class="pull-right">50%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 50%" role="progressbar"
                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">50% completo</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Parede rabiscada
                        <small class="pull-right">75%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 75%" role="progressbar"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">75% completo</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">João da Silva</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  João da Silva - Infraestrutura
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Configurações</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>João da Silva</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index-tino.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Relatórios</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-search-plus"></i> <span>Mais opções</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Opção 4</a></li>
            <li><a href="#">Opção 5</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cristiano Machado - CM1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Aqui</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>13<sup style="font-size: 20px"></sup></h3>

              <p>Chamados concluídos no último mês</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 id="novosChamados"></h3>

              <p>Novos chamados registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>28</h3>

              <p>Chamados já concluídos</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de chamados</h3>
    
              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Protocolo</th>
                    <th>Chamado</th>
                    <th>Local</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody id="table-chamados-tino">
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
        </div>
        <div class="col-lg-6 col-xs-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfico de chamados</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="200"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-green"></i> Concluídos</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Pendentes</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Em andamento</li>
                    <li><i class="fa fa-circle-o text-red"></i> Cancelados</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mais-detalhes" style="padding: 4%;">
                  <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.footer -->
          </div>
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<div class="modal fade in" id="modal-detalhes" style="display: none; padding-right: 15px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="tituloChamado"><span class="label label-info pull-right" 
          style="margin-right: 4%;" data-toggle="tooltip" data-placement="bottom" 
          title="Clique para alterar status">Em andamento</span></h4>
        <p>Responsável: João da Silva</p>
      </div>
      <div class="modal-body">
        <h4>Descrição:</h4>
        <p id="descChamado"></p>
        <p><i class="fa fa-arrow-up"></i> 123</p>
        <div class="comentarios">
          <div class="direct-chat-msg">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-left">Gilson Souza</span>
              <span class="direct-chat-timestamp pull-right">23 Jun 14:00</span>
            </div>
              <!-- /.direct-chat-info -->
            <img class="direct-chat-img" src="dist/img/avatar.png" alt="message user image">
              <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              Isso é um comentário!
            </div>
              <!-- /.direct-chat-text -->
          </div>
          <div class="direct-chat-msg right">
            <div class="direct-chat-info clearfix">
              <span class="direct-chat-name pull-right">Simone Ferreira</span>
              <span class="direct-chat-timestamp pull-left">24 Jun 16:05</span>
            </div>
              <!-- /.direct-chat-info -->
            <img class="direct-chat-img" src="dist/img/avatar2.png" alt="message user image">
              <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              Isso também é um comentário!
            </div>
              <!-- /.direct-chat-text -->
          </div>
            <form action="#" method="post">
              <div>
                <textarea type="text" name="message" placeholder="Inserir comentário ..." class="form-control"></textarea>
              </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Mudar status</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<script src="bower_components/chart.js/Chart.min.js"></script>
<script src="bower_components/chart.js/src/Chart.Doughnut.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/tino.js"></script>
<script src="dist/js/ajax.js"></script>
</body>
</html>