
<!-- Sidebar -->
 <nav id="sidebar"  class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item-X">
                <a class="nav-link" href="../views/home.php?id_page=1"> <img src="/assets/img/logo.png" width="120" height="58" ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/views/home.php?id_sap=<?php echo $id ?>">
                  <i class="fas fa-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="/views/listado_equipos_registrados.php?id_sap=<?php echo $id ?>">
                  <i class="fas fa-laptop"></i> Equipment
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-users"></i> Users
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/views/seleccionar_equipo.php?id_sap=<?php echo $id ?>">
                  <i class="fas fa-clipboard-list"></i> Assignments
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/views/informe.php?id_sap=<?php echo $id ?>">
                  <i class="fas fa-chart-bar"></i> Reports
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <i class="fas fa-chart-bar"></i>Exit
                </a>
              </li>
            </ul>
          </div>
        </nav>