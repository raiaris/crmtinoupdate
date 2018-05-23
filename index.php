<!DOCTYPE html>
<?php 
  $title = "Dashboard";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="dist/img/tinoicon.ico">
  <title>TINO CRM | <?php echo $title ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php include('pages/default/stylesheets.php') ?>
</head>

<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">
  <?php include('pages/default/header-menu.php') ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title ?>
        <small>Cristiano Machado - CM1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $title ?></a></li>
        <li class="active">Aqui</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-4 col-xs-6">
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
        <div class="col-lg-4 col-xs-6">
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
        <div class="col-lg-4 col-xs-6">
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
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de chamados</h3>
            </div>
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
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-xs-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfico de chamados</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="200"></canvas>
                  </div>
                </div>
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-green"></i> Concluídos</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Pendentes</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Em andamento</li>
                    <li><i class="fa fa-circle-o text-red"></i> Cancelados</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <div class="mais-detalhes" style="padding: 4%;">
                  <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include('pages/default/footer.php') ?>
</div>
<?php include('pages/default/modal-chamados.php') ?>
<?php include('pages/default/scripts.php') ?>
</body>
</html>