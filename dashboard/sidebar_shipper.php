<header id="mySidenav" class="sidenav" style="z-index:9999!important;">
    <div class="sidebar-fixed text-center">
    <nav style="height:64px!important;margin-bottom:15px!important;">
<div class="logo-wrapper text-left" style="padding: 7px;position:absolute;width:69%!important;z-index:9999!important;right:0!important;margin-top: 5px;">
      <img src="../img/dashboard_logo.png" class="img-fluid" alt=""></div>
    </nav>
      <div class="list-group list-group-flush text-left">
        <a href="/dashboard/" onclick="closeNav();" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Completados
        </a>
        <a href="/dashboard/encargos" onclick="closeNav();" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tablero</a>
        <a href="/dashboard/historial" onclick="closeNav();" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-history mr-3"></i>Historial</a>
       <!---<a href="/dashboard/empleados" onclick="runConductors();" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Empleados</a>--->
        <a href="/dashboard/empresa" onclick="CargarEmpresa();closeNav();" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Empresa</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>