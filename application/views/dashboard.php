<div class="row">

  <!-- Left side columns -->
  <div class="col-lg-8">
    <div class="row">

      <!-- Instalation Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Install <span>| This Month</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-journal-check"></i>
              </div>
              <div class="ps-3">
                <h6>14</h6>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Instalation Card -->

      <!-- Remove Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Remove <span>| This Month</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-journal-x"></i>
              </div>
              <div class="ps-3">
                <h6>3</h6>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Remove Card -->

      <!-- Maintenance Card -->
      <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Maintenance <span>| This Week</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-tools"></i>
              </div>
              <div class="ps-3">
                <h6>24</h6>

              </div>
            </div>

          </div>
        </div>

      </div><!-- End Customers Card -->

      <!-- Reports -->
      <div class="col-12">
        <div class="card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Week</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Reports <span>/This Week</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Install',
                    data: [1, 2,0, 1, 2, 1, 2],
                  }, {
                    name: 'Remove',
                    data: [1,0, 1, 2, 1, 0, 1]
                  }, {
                    name: 'Maintenance',
                    data: [1, 2, 2, 3, 1, 3, 1]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ff771d'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2024-08-02", "2024-08-04", "2024-08-05", "2024-08-07", "2024-08-09", "2024-08-12", "2024-08-14"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->

          </div>

        </div>
      </div><!-- End Reports -->

    </div>
  </div><!-- End Left side columns -->

  <!-- Right side columns -->
  <div class="col-lg-4">

    <!-- Recent Activity -->
    <div class="card">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Recent Activity <span>| This Week</span></h5>

        <div class="activity">

          <div class="activity-item d-flex">
            <div class="activite-label">1 Day Ago</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              Install WAP FLEET Panel 32 Grizzly
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">1 Day Ago</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              Install MINI HUB Panel 31 SFD
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">3 Day Ago</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              Remove Command System at Panel 17
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">4 Day Ago</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              remove Command System at Panel 16
            </div>
          </div><!-- End activity item-->

        </div>

      </div>
    </div><!-- End Recent Activity -->

    <!-- Job Traffic -->
    <div class="card">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Week</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
        </ul>
      </div>

      <div class="card-body pb-0">
        <h5 class="card-title">Job Traffic <span>| This Week</span></h5>

        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

        <script>
          document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#trafficChart")).setOption({
              tooltip: {
                trigger: 'item'
              },
              legend: {
                top: '5%',
                left: 'center'
              },
              series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                  show: false,
                  position: 'center'
                },
                emphasis: {
                  label: {
                    show: true,
                    fontSize: '18',
                    fontWeight: 'bold'
                  }
                },
                labelLine: {
                  show: false
                },
                data: [{
                    value: 15,
                    name: 'COMMAND'
                  },
                  {
                    value: 10,
                    name: 'FLEET'
                  }
                ]
              }]
            });
          });
        </script>

      </div>
    </div><!-- End Website Traffic -->

  </div><!-- End Right side columns -->

</div>