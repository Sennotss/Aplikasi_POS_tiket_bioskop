<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

  <style>
    .content-wrapper {
      margin: 18px 20px;
    }

      .seating-chart {
      display: grid;
      grid-template-columns: repeat(9, 1fr); /* Adjust the number of columns as needed */
      gap: 5px; /* Adjust the gap between seats */
  }

  .seat {
        width: 50px;
        height: 50px;
        display: inline-block;
        margin: 5px;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 50px;
        color:white;
        border-radius: 10px;
    } 

    .available {
        background-color: grey; /* Warna untuk kursi yang tersedia */
    }

    .reserved {
        background-color: red; /* Warna untuk kursi yang sudah nonaktif */
    }
  </style>

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php
  include 'sidebar.php';
  ?>
  <main class="main-content position-relative border-radius-lg ">

    <?php
    if(!empty($_GET['menu'])){
      $menu = $_GET['menu'];
      if($menu == 1) {
        include('dashboard.php');
      } elseif ($menu == 2){
        include('kasir/index.php');
      } elseif ($menu == 3){
        include('kasir/formtambah.php');
      } elseif ($menu == 4){
        include('kasir/formedit.php');
      } elseif ($menu == 5){
        include('studio/index.php');
      } elseif ($menu == 6){
        include('studio/formtambah.php');
      } elseif ($menu == 7){
        include('studio/formedit.php');
      } elseif ($menu == 8){
        include('pemesanan/index.php');
      } elseif ($menu == 9){
        include('pemesanan/formtambah.php');
      } elseif ($menu == 10){
        include('pemesanan/formedit.php');
      } elseif ($menu == 11){
        include('film/index.php');
      } elseif ($menu == 12){
        include('dtl_pemesanan/index.php');
      } elseif ($menu == 13){
        include('laporan/cetak.php');
      } elseif ($menu == 14){
        include('film/index.php');
      } elseif ($menu == 15){
        include('film/formtambah.php');
      } elseif ($menu == 16){
        include('film/info.php');
      } elseif ($menu == 17){
        include('dtl_pemesanan/index.php');
      }        
    } else {
      include('dashboard.php');
    }
    
       
       
    ?>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>