<?php
require 'C:\xampp\htdocs\PFA V0\PFA 2\View\ViewAdmin.php'; ?>
<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>document</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
 
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Admin page</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li style="list-style: none; margin-bottom: 20px;">
    <h2 class="pagetitle" style="font-size: 24px; font-weight: bold; color: #333; margin: 0;">
        <a href="../Home/nothome.php" style="text-decoration: none; color: #333;">Home</a>
    </h2>
</li>


        

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.php">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.php">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>

     





    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Instructors and Their Students</h5>

              <!-- Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Instructor</th>
                    <th scope="col">Student</th>
                    <th scope="col">Course</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($prof as $instructor) : ?>
                    <?php foreach ($student as $enrollment) : ?>
                      <?php if ($enrollment['creatorID'] === $instructor['creatorID']) : ?>
                        <tr>
                          <td><?php echo "{$instructor['firstname']} {$instructor['lastname']}"; ?></td>
                          <td><?php echo "{$enrollment['firstname']} {$enrollment['lastname']}"; ?></td>
                          <td><?php echo $enrollment['title']; ?></td>
                        </tr>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Certifications</h5>

              <!-- Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Course</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($certification as $cert) : ?>
                    <tr>
                      <td><?php echo "{$cert['firstname']} {$cert['lastname']}"; ?></td>
                      <td><?php echo $cert['title']; ?></td> <!-- Assuming 'title' is the field name for the course name -->
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table -->
            </div>


          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Instructors and Their Courses</h5>

              <!-- Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Instructor</th>
                    <th scope="col">Course</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($prof as $instructor) : ?>
                    <tr>
                      <td><?php echo "{$instructor['firstname']} {$instructor['lastname']}"; ?></td>
                      <td><?php echo $instructor['title']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table -->
            </div>
          </div>


    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>