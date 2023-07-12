
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- :: Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Home">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="#0635c9">
  <meta name="keywords" content="Home">
  <!-- :: Stylesheet -->
  <link rel="stylesheet" href="./assets/css/lib/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/lib/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/theme/style.css">
  <link rel="stylesheet" href="./assets/css/theme/index.css">
  <link rel="stylesheet" href="./assets/css/theme/custom.css">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title><?php echo $pageTitle; ?></title>
</head>

<body>

  <div id="loader">
  <div id="loader-wrapper">
  <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1"><div class="loader-circle-2"></div></div>
        <div class="needle"></div>
        <div class="loading">Loading</div>
      </div>
    </div>
    <img src="assets/images/logos/logo.png" alt="My Image" width="300">
  </div>

  <!-- :: Navbar -->
  <nav class="th-nav-st1">
    <div class="container">
      <!-- nav content -->
      <div class="nav-content d-flex align-items-center justify-content-between">
        <!-- brand -->
        <a href="#" class="brand">
          <img src="./assets/images/logos/logo.png" style="height: 80px;width: 150px;" class="img-fluid" alt="">
        </a>
        <!-- links -->
        <ul class="nav-links list-unstyled d-lg-flex align-items-center justify-content-end mb-0">

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="index.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">home</a>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="services.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">services</a>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="meet_the_mechanic.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">meet the mechanics</a>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="rims.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">rims</a>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="schedule-service.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">Schedule-service</a>
          </li>

          <!-- nav item has dropdown -->
          <li class="th-nav-item has-dropdown position-relative">
            <a href="special_customize.html" onclick="return false;" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">special customize</a>
            <!-- dropdown list -->
            <ul class="th-dropdown-list list-unstyled mb-0">
              <li class="th-dropdown-item">
                <a href="lift_kits.php" class="position-relative d-flex align-items-center justify-content-between text-capitalize">lift kits</a>
              </li>
              <li class="th-dropdown-item">
                <a href="starroof_lights.php" class="position-relative d-flex align-items-center justify-content-between text-capitalize">starroof lights</a>
              </li>
              <li class="th-dropdown-item">
                <a href="auto_wraps.php" class="position-relative d-flex align-items-center justify-content-between text-capitalize">auto wraps</a>
              </li>
              <li class="th-dropdown-item">
                <a href="more.php" class="position-relative d-flex align-items-center justify-content-between text-capitalize">& more</a>
              </li>
            </ul>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="products.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">products</a>
          </li>

          <!-- nav item -->
          <li class="th-nav-item position-relative">
            <a href="about_us.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">about us</a>
          </li>

        </ul>
        <!-- toggler -->
        <button class="nav-toggler position-relative d-lg-none d-block" id="nav_toggler">
          <span class="d-block w-100"></span>
          <span class="d-block w-100"></span>
          <span class="d-block w-100"></span>
        </button>
      </div>
    </div>
  </nav>