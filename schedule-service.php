

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule Service</title>
    <link rel="stylesheet" href="./assets/css/lib/bootstrap.css"> 
    <link rel="stylesheet" href="./assets/css/lib/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/theme/style.css"> 
    <link rel="stylesheet" href="./assets/css/theme/index.css">
    <link rel="stylesheet" href="./assets/css/theme/checkcustom.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/schedulecss/Scheduledemo.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="assets/schedulecss/Schedulestyle.css">
  
    <style>
    #datepicker {
      margin-top: 20px;
    }
    
    #selected-date {
      margin-top: 30px;
      color: #333;
    }
    
    #time-slots {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
    }
    
    #time-slots button {
      margin-right: 10px;
      margin-bottom: 10px;
      padding: 8px 12px;
      border: none;
      background-color: rgb(125, 225, 255);
      border-radius: 5px;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    #time-slots button:hover {
      background-color: rgb(2, 115, 150);
    }

    #time-slots button::selection {
        background-color: green;
    }

    .selected {
      background-color: rgb(0, 150, 196);
    }

    </style>
  </head>
  <body style="background-color: black;">

    <div id="loader">
    <div id="loader-wrapper">
    <div class="loader ">
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
            <img src="./assets/images/logos/logo.png" id="main-site-logo" class="img-fluid" alt="">
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
            <!-- <li class="th-nav-item position-relative">
              <a href="rims.php" class="position-relative d-flex align-items-center justify-content-lg-center justify-content-between text-capitalize">rims</a>
            </li> -->

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

    <div class="container text-center" style="padding-top:130px;color:white;">
          <h1>SCHEDULE SERVICE</h1>
    </div>

    <!-- Start Stepper HTML -->
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="steps" style="background-color: black;border-radius: 10px;">
                <progress id="progress" value=0 max=100 ></progress>
                <div class="step-item">
                    <button class="step-button text-center mt-3" type="button" style="background-color: white;color:rgb(0, 0, 0);">
                        1
                    </button>
                    <div class="step-title p-2" style="color: white;">
                        Appointment Details
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed mt-3" type="button" style="background-color: white;color:rgb(0, 0, 0);">
                        2
                    </button>
                    <div class="step-title p-2" style="color: white;">
                        Vehicle Information
                    </div>
                </div>
                <div class="step-item">
                    <button class="step-button text-center collapsed mt-3" type="button" style="background-color: white;color:rgb(0, 0, 0);">
                        3
                    </button>
                    <div class="step-title p-2" style="color: white;">
                        Contact Information
                    </div>
                </div>
            </div>

                <div class="card">
                  <div id="collapseOne" class="show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body p-0">
                          <div class="container"  style="background-color: black;color:white;padding:50px;border:3px solid white;">
                            <div class="row">
                                <div class="col">
                                    <h4 style="color: white;margin-bottom: 20px;">Do you wish to leave your vehicle or wait during the repair?</h4>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col-lg-12 col-sm-12"> 
                                  <!-- <label for="cars">Select Time:</label><br> -->
                                    <select id="repair" name="repair" class="repair" style="padding:10px;border-radius:5px;cursor:pointer;" required>
                                        <option value=""></option>
                                        <option value="I Will Wait For My Vehicle">I Will Wait For My Vehicle</option>
                                        <option value="I Will Drop Off My Vehicle">I Will Drop Off My Vehicle</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row pt-5">
                                <div class="col">
                                    <h4 style="color: white;margin-bottom: 20px;">Select Appointment Date And Time</h4>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col">
                                    <button id="previous-month" class="btn btn-warning m-1" style="cursor:pointer;">Previous Month</button>
                                    <button id="next-month" class="btn btn-warning m-1"  style="cursor:pointer;">Next Month</button>
                                </div>
                            </div>
                            <div class="row">
                                  <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                                    <div id="datepicker"></div>
                                  </div>
                            </div>
                            <div class="row">
                                  <div class="col-lg-12 col-sm-12">
                                    <h4 id="selected-date" class="text-center text-white" >Selected Date: <span id="selected-date-text"></span></h4>
                                    <label for="cars">Select Time:</label><br>
                                    <select id="exacttime" name="exacttime" class="exacttimemention" style="cursor:pointer;" required>
                                        <option value=""></option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="12:00 AM">12:00 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="row text-end">
                              <div class="col-lg-12 col-sm-12">
                                <button id="first_step_schedule_service" class="stepper-buttons-next btn btn-warning text-center collapsed mt-3" type="button"  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  NEXT
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>

                <div class="card">
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="card-body p-0">
                          <div class="container"  style="background-color: black;color:white;padding:50px;border: 3px solid white;">
                  
                              <div class="row">
                                  <div class="col-12">
                                      <h4 style="color: white;margin-bottom: 20px;">Select Your Vehicle</h4>
                                  </div>
                              </div>
                      
                              <div class="row">
                                  <div class="col-sm-12 col-md-6 col-lg-4  mt-2">
                                          <label style="color:white;font-weight: bolder;">YEAR</label><br>
                                          <select class="select" name="year_selected_user"  style="width: 250px;padding:10px;border-radius: 5px;" id="selectedYear">
                                            <option value=""></option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                            <option value="1904">1904</option>
                                            <option value="1903">1903</option>
                                            <option value="1902">1902</option>
                                            <option value="1901">1901</option>
                                            <option value="1900">1900</option>
                                          </select>   
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
                                          <label style="color:white;font-weight: bolder;">MAKE</label><br>
                                          <select class="select" style="width: 250px;padding:10px;border-radius: 5px;" id="selectedMake">
                                          <option value=""></option>
                                          <option value="ACURA">ACURA</option>
                                          <option value="ASTON MARTIN">ASTON MARTIN</option>
                                          <option value="AUDI">AUDI</option>
                                          <option value="BENTLEY">BENTLEY</option>
                                          <option value="BMW">BMW</option>
                                          <option value="BUICK">BUICK</option>
                                          <option value="CADILLAC">CADILLAC</option>
                                          <option value="CHEVROLET">CHEVROLET</option>
                                          <option value="CHRYSLER">CHRYSLER</option>
                                          <option value="DODGE">DODGE</option>
                                          <option value="FERRARI">FERRARI</option>
                                          <option value="FORD">FORD</option>
                                          <option value="GMC">GMC</option>
                                          <option value="HONDA">HONDA</option>
                                          <option value="HUMMER">HUMMER</option>
                                          <option value="HYUNDAI">HYUNDAI</option>
                                          <option value="INFINITI">INFINITI</option>
                                          <option value="ISUZU">ISUZU</option>
                                          <option value="JAGUAR">JAGUAR</option>
                                          <option value="JEEP">JEEP</option>
                                          <option value="KIA">KIA</option>
                                          <option value="LAMBORGHINI">LAMBORGHINI</option>
                                          <option value="LAND ROVER">LAND ROVER</option>
                                          <option value="LEXUS">LEXUS</option>
                                          <option value="LINCOLN">LINCOLN</option>
                                          <option value="LOTUS">LOTUS</option>
                                          <option value="MASERATI">MASERATI</option>
                                          <option value="MAYBACH">MAYBACH</option>
                                          <option value="MAZDA">MAZDA</option>
                                          <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                          <option value="MERCURY">MERCURY</option>
                                          <option value="MINI">MINI</option>
                                          <option value="MITSUBISHI">MITSUBISHI</option>
                                          <option value="NISSAN">NISSAN</option>
                                          <option value="PONTIAC">PONTIAC</option>
                                          <option value="PORSCHE">PORSCHE</option>
                                          <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                          <option value="SAAB">SAAB</option>
                                          <option value="SATURN">SATURN</option>
                                          <option value="SUBARU">SUBARU</option>
                                          <option value="SUZUKI">SUZUKI</option>
                                          <option value="TOYOTA">TOYOTA</option>
                                          <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                          <option value="VOLVO">VOLVO</option>
                                          </select>   
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4  mt-2">
                                          <label style="color:white;font-weight: bolder;">MODEL</label><br>
                                          <input type="text" class="form-control" placeholder="Enter your model name" id="selectedModel" required>
                                  </div>
                              </div>
                      
                              <div class="row">
                                  <div class="col-sm-12 mb-3">
                                      <h4 class="mt-4">Select Services</h4>
                                  </div>
                                  <div class="col-sm-12 col-md-6 mt-2">
                                  <label for="services">Select Service:</label><br>
                                  <select name="services" style="padding: 10px;width: 70%;border-radius: 5px;" id="selectedService" required>
                                    <option value=""></option>
                                    <option value="Mechanic Repair Services">Mechanic Repair Services</option>
                                    <option value="Collision Repair - Schedule Call">Collision Repair - Schedule Call</option>
                                    <option value="Body shop">Body shop</option>
                                    <option value="Wrap Boutique - Schedule Call">Wrap Boutique - Schedule Call</option>
                                    <option value="Exotic Rental - Schedule Call">Exotic Rental - Schedule Call</option>
                                    <option value="Windshield Repair - Schedule Call">Windshield Repair - Schedule Call</option>
                                    <option value="Window Tinting - Schedule Call">Window Tinting - Schedule Call</option>
                                    <option value="Wheel Repair">Wheel Repair</option>
                                    <option value="Used Car Parts - Schedule Call">Used Car Parts - Schedule Call</option>
                                    <option value="Upholstery - Schedule Call">Upholstery - Schedule Call</option>
                                    <option value="Tune up">Tune up</option>
                                    <option value="Transmission Repair">Transmission Repair</option>
                                    <option value="Transmission Coolers">Transmission Coolers</option>
                                    <option value="Towing Service - Schedule Call">Towing Service - Schedule Call</option>
                                    <option value="Torque Converter Repair">Torque Converter Repair</option>
                                    <option value="Tire Repair">Tire Repair</option>
                                    <option value="Tire Balancing">Tire Balancing</option>
                                    <option value="Timing Belt Replacement">Timing Belt Replacement</option>
                                    <option value="SUV Repair">SUV Repair</option>
                                    <option value="Suspension Repair">Suspension Repair</option>
                                    <option value="Speedometer Repair">Speedometer Repair</option>
                                    <option value="Smog Test">Smog Test</option>
                                    <option value="Sensor Repair">Sensor Repair</option>
                                    <option value="Scratch Removal - Schedule Call">Scratch Removal - Schedule Call</option>
                                    <option value="Roadside Assistance - Schedule Call">Roadside Assistance - Schedule Call</option>
                                    <option value="Retail Tire">Retail Tire</option>
                                    <option value="Remote Starter Installation - Schedule Call">Remote Starter Installation - Schedule Call</option>
                                    <option value="Radiator Repair">Radiator Repair</option>
                                    <option value="Power Window Repair">Power Window Repair</option>
                                    <option value="Paintless Dent Repair - Schedule Call">Paintless Dent Repair - Schedule Call</option>
                                    <option value="Paint Protection Film - Schedule Call">Paint Protection Film - Schedule Call</option>
                                    <option value="Oil Change and Lube">Oil Change and Lube</option>
                                    <option value="Mufflers Repair">Mufflers Repair</option>
                                    <option value="Interior Repair - Schedule Call">Interior Repair - Schedule Call</option>
                                    <option value="Interior Cleaning - Schedule Call">Interior Cleaning - Schedule Call</option>
                                    <option value="Hybrid Repair">Hybrid Repair</option>
                                    <option value="High Performance Tires">High Performance Tires</option>
                                    <option value="High Performance Parts">High Performance Parts</option>
                                    <option value="High Performance Modification">High Performance Modification</option>
                                    <option value="Headlight Restoration - Schedule Call">Headlight Restoration - Schedule Call</option>
                                    <option value="Head Gasket Repair">Head Gasket Repair</option>
                                    <option value="Hail Damage Repair">Hail Damage Repair</option>
                                    <option value="Fuel Injection Repair">Fuel Injection Repair</option>
                                    <option value="Factory Wheels">Factory Wheels</option>
                                    <option value="Fabrication and Restoration">Fabrication and Restoration</option>
                                    <option value="Exhaust Repair">Exhaust Repair</option>
                                    <option value="Engine Repair">Engine Repair</option>
                                    <option value="Engine Installation">Engine Installation</option>
                                    <option value="Emissions Testing">Emissions Testing</option>
                                    <option value="Electrical Repair">Electrical Repair</option>
                                    <option value="Electric Car Repair">Electric Car Repair</option>
                                    <option value="Diagnostic Services">Diagnostic Services</option>
                                    <option value="Cylinder and Block Repair">Cylinder and Block Repair</option>
                                    <option value="CV Axle Repair">CV Axle Repair</option>
                                    <option value="Custom Work - Schedule Call">Custom Work - Schedule Call</option>
                                    <option value="Custom Wheels - Schedule Call">Custom Wheels - Schedule Call</option>
                                    <option value="Custom Painting - Schedule Call">Custom Painting - Schedule Call</option>
                                    <option value="Clutch Repair">Clutch Repair</option>
                                    <option value="Cluster Repair">Cluster Repair</option>
                                    <option value="Catalytic Converter Repair">Catalytic Converter Repair</option>
                                    <option value="Car Wash - Schedule Call">Car Wash - Schedule Call</option>
                                    <option value="Car Detailing - Schedule Call">Car Detailing - Schedule Call</option>
                                    <option value="Car Battery Installation">Car Battery Installation</option>
                                    <option value="Car Alarm Installation">Car Alarm Installation</option>
                                    <option value="Car Alarm">Car Alarm</option>
                                    <option value="Car Accessory Installation">Car Accessory Installation</option>
                                    <option value="Brake Repair">Brake Repair</option>
                                    <option value="Body Work and Paint">Body Work and Paint</option>
                                    <option value="Auto Repair">Auto Repair</option>
                                    <option value="Auto Inspection - Schedule Call">Auto Inspection - Schedule Call</option>
                                    <option value="Auto Glass Repair - Schedule Call">Auto Glass Repair - Schedule Call</option>
                                    <option value="Auto Body Repair">Auto Body Repair</option>
                                    <option value="Audio and Video Installation">Audio and Video Installation</option>
                                    <option value="Alternator and Starter Repair">Alternator and Starter Repair</option>
                                    <option value="Alignment">Alignment</option>
                                    <option value="Aftermarket Wheels - Schedule Call">Aftermarket Wheels - Schedule Call</option>
                                    <option value="Oil Change">Oil Change</option>
                                    <option value="Brake Service">Brake Service</option>
                                    <option value="A/C & Heating">A/C & Heating</option>
                                    <option value="Tire Change">Tire Change</option>
                                    <option value="Steering Repair">Steering Repair</option>
                                    <option value="General Maintenance">General Maintenance</option>
                                    <option value="Diagnostic / Check engine light">Diagnostic / Check engine light</option>
                                  </select>

                                  </div>
                                  <div class="col-sm-12 col-md-6 mt-2">
                                      <div class="form-group">
                                          <label for="comments">Further Details <small class="furtherDetails">( Optional )</small></label>
                                          <textarea class="form-control" rows="3" placeholder="Enter any Further Details" id="selectedFurtherDetails"></textarea>
                                      </div>
                                  </div>
                                  <!-- <button class="text-center collapsed btn btn-warning mt-3" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Next
                                  </button> -->
                              </div>
                              
                              <div class="row text-end">
                                <div class="col-lg-12 col-sm-12">
                                <button id="second_step_schedule_service" class="stepper-buttons-next btn btn-warning text-center collapsed mt-3" type="button" >
                                  NEXT
                                </button>
                                </div>
                              </div>
                          </div>     
                      </div>
                  </div>
                </div>

                <div class="card">
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="card-body p-0">
                        <div class="container" style="background-color: black;color:white;padding:50px;border: 3px solid white;">
                            <div class="row py-2">
                                <h2>Provide Your Contact Information</h2>
                            </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="lastName">Last name</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="EmailAddress">Email Address</label>
                                            <input type="text" class="form-control" id="emailAddress" placeholder="Enter your Email Address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="PhoneNumber">Phone Number</label>
                                            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your PhoneNumber" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="comments">Additional comments <small class="optional-label">( Optional )</small></label>
                                                <textarea class="form-control" id="comments" rows="3" placeholder="Enter any additional comments"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" style="font-weight: bolder;text-align: start;">
                                        <h2>Appointment Summary</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <div class="form-group">
                                            <span>Location</span><br>
                                                <p style="font-weight: bolder;" id="location"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <div class="form-group">
                                            <span>Date and Time</span><br>
                                                <p style="font-weight: bolder;" id="date_and_time"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <div class="form-group">
                                            <span>Service(s)</span><br>
                                                <p style="font-weight: bolder;" id="service_selected"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <div class="form-group">
                                            <span>Type of Appointment</span><br>
                                                <p style="font-weight: bolder;" id="type_of_appointment"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                                        <div class="form-group">
                                            <span>Vehicle</span><br>
                                                <p style="font-weight: bolder;" id="vehicle"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 py-2 text-center">
                                        <button type="submit" id="third_step_schedule_service" class="btn btn-warning w-50">Submit</button>
                                    </div>
                                </div>
                      </div>
                    </div>
                </div>
              </div>
        </div>
    </div>

  <div class="container-fluid mt-4" style="background-color: black;padding-top: 10px;">
  </div>
  <div class="loc-container">
    <div class="contact-details">
      <h5>Location</h5>
      <p>1050 n state road 7 Hollywood Florida 33021</p>

      <h5>Email Address</h5>
      <p>info@nationaltires.com</p>

      <h5>Phone Number</h5>
      <p>Phone: 954-987-2390<br>

      <h5>Hours of Operation</h5>
      <p>Store hours are 8am-7:30pm<br>
      Open 7 days a week</p>
    </div>
    <div class="google-map" style="border-radius: 10px;overflow: hidden;">
      <!-- Your Google Map embed code or API integration goes here -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.4366722657946!2d-80.21045628497377!3d26.019264683520486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a96b1824da1b%3A0x4dca69c1b455ee80!2sNational%20Tires!5e0!3m2!1sen!2s!4v1689057576283!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <section class="setblackbackgroundcolor">
    <div class="container p-5">
      <div class="row">
        <div class="col-md-12 text-center text-white">
          <h1>FOLLOW US ON INSTAGRAM</h1>
        </div>
      </div>
      <div class="row">
        <div class="container py-4">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post1.png" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post2.png" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post3.png" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post4.jpg" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post5.jpg" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="insta-box">
                <img src="assets/images/vectors/post6.jpg" class="img-fluid border-radius-image" id="instagram_vedios_section" alt="Instagram Link">
                <span class="insta-play">&#9658;</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- :: Footer -->
  <footer class="setblackbackgroundcolor">
    <!-- newsletter -->
    <!-- <div class="n-l">
      <div class="container text-center">
        <h2 class="mb-2">Subscribe To Our Newsletter</h2>
        <form method="POST" class="mx-auto text-center" id="subscribersform">
          <div class="d-sm-flex align-items-center justify-content-start">
            <input type="email" name="email" id="emailaddress" class="w-100 mb-sm-0 mb-3" placeholder="Email Address" autocomplete="off" required>
            <button class="text-uppercase" type="submit" id="subscriberssubmitbutton">Sign Up</button>
          </div>
        </form>
      </div>
    </div> -->
    <!-- links -->
    <div class="links">
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3 mt-3">COMPANY</li>
              <li><a href="index.php" class="text-capitalize text-white">Home</a></li>
              <li><a href="services.php" class="text-capitalize text-white">Services</a></li>
              <li><a href="meet_the_mechanic.php" class="text-capitalize text-white">Meet The Mechanics</a></li>
              <li><a href="rims.php" class="text-capitalize text-white">Rims</a></li>
              <li><a href="schedule-service.php" class="text-capitalize text-white">Schedule-Service</a></li>
              <li><a href="special_customize.php" class="text-capitalize text-white">Special Customize</a></li>
              <li><a href="products.php" class="text-capitalize text-white">Products</a></li>
              <li><a href="about_us.php" class="text-capitalize text-white">About Us</a></li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3 mt-3" id="policies-location">POLICIES</li>
              <li><a href="faq.php" class="text-capitalize text-white">Faq</a></li>
              <li><a href="terms&service.php" class="text-capitalize text-white">Terms of Service</a></li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3 mt-3" id="support-location">SUPPORT</li>
              <li><a href="schedule-service.php" class="text-capitalize text-white">Schedule Service</a></li>
              <li>
                <a href="https://www.facebook.com/profile.php?id=100067901697288&mibextid=LQQJ4d"><i class="fa-brands fa-facebook fa-bounce fa-2xl"></i></a>
                <a href="https://www.instagram.com/nationaltires/"><i class="fa-brands fa-instagram fa-bounce fa-2xl"></i></a>
              </li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3 mt-3" id="footer-location">LOCATION</li>
              <li><span class="text-capitalize text-white">Address : 1050 n state road 7 Hollywood Florida 33021 </span><br><br>
                  <span class="text-capitalize text-white">Phone number : 954-987-2390</span><br><br>
                  <span class="text-capitalize text-white">Store hours are 8am-7:30pm</span><br>
                  <span class="text-capitalize text-white">Open 7 days a week</span>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- copyrights -->
    <div class="c-r text-left">
      <div class="container mt-4">
        <p class="mb-0 text-white text-center">&copy; 2023 National tires & Auto repairs Ltd. Trademarks & brands are the property of their respective owners.</p>
        <p class="comment mb-0 text-white text-center">Developed By
          <a href="index.php" target="_blank">National tires & Auto repairs</a>
        </p>
      </div>
    </div>
  </footer>

<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>

    var disabledDates = ["2023-07-05", "2023-07-06"]; // Add any specific disabled dates here

    $("#datepicker").datepicker({
      dateFormat: "yy-mm-dd",
      beforeShowDay: function(date) {
        var dateString = $.datepicker.formatDate("yy-mm-dd", date);
        return [!isDisabled(dateString)];
      },
      onSelect: function(dateText, inst) {
        $("#selected-date-text").text(dateText);
      }
    });

    function isDisabled(dateString) {
      return (disabledDates.indexOf(dateString) !== -1 || isWeekend(dateString) || isPastDate(dateString));
    }

    function isWeekend(dateString) {
      var date = new Date(dateString);
      return (date.getDay() === 0 || date.getDay() === 6);
    }

    function isPastDate(dateString) {
      var currentDate = new Date();
      var selectedDate = new Date(dateString);
      return (selectedDate < currentDate);
    }

    $("#previous-month").click(function() {
      $("#datepicker").datepicker("setDate", "-1m");
    });

    $("#next-month").click(function() {
      var currentDate = $("#datepicker").datepicker("getDate");
      var nextMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
      $("#datepicker").datepicker("setDate", nextMonth);
    });
   
    // const stepButtons = document.querySelectorAll('.stepper-buttons-next');
    // const progress = document.querySelector('#progress');

    // Array.from(stepButtons).forEach((button,index) => {
    //     button.addEventListener('click', () => {
    //         progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

    //         stepButtons.forEach((item, secindex)=>{
    //             if(index > secindex){
    //                 item.classList.add('done');
    //             }
    //             if(index < secindex){
    //                 item.classList.remove('done');
    //             }
    //         })
    //     })
    // });

    $("#first_step_schedule_service").click(function(){

      var repair = $('#repair').val();
      var exacttime = $('#exacttime').val();
      var selectedDate = $('#selected-date-text').text();

      if (repair === '' || exacttime === '' || selectedDate === '') {

        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Kindly, fill all the fields in the form . Thanks',
        });
       
      }else{

        localStorage.setItem('repair', repair);
        localStorage.setItem('exacttime', exacttime);
        localStorage.setItem('selectedDate', selectedDate);

        $('#first_step_schedule_service').attr('data-bs-toggle', 'collapse');
        $('#first_step_schedule_service').attr('data-bs-target', '#collapseTwo');
        $('#first_step_schedule_service').attr('aria-expanded', 'true');
        $('#first_step_schedule_service').attr('aria-controls', 'collapseTwo');
        $('#collapseTwo').collapse('show');

      }

    });

    $("#second_step_schedule_service").click(function(){

      var selectedYear = $('#selectedYear').val();
      var selectedMake = $('#selectedMake').val();
      var selectedModel = $('#selectedModel').val();
      var selectedService = $('#selectedService').val();
      var selectedFurtherDetails = $('#selectedFurtherDetails').val();

      if (selectedYear === '' || selectedMake === '' || selectedModel === '' || selectedService === '' || selectedFurtherDetails === '') {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Kindly, fill all the fields in the form . Thanks',
          });
         
        }else{

        localStorage.setItem('selectedYear', selectedYear);
        localStorage.setItem('selectedMake', selectedMake);
        localStorage.setItem('selectedModel', selectedModel);
        localStorage.setItem('selectedService', selectedService);
        localStorage.setItem('selectedFurtherDetails', selectedFurtherDetails);

        $('#second_step_schedule_service').attr('data-bs-toggle', 'collapse');
        $('#second_step_schedule_service').attr('data-bs-target', '#collapseThree');
        $('#second_step_schedule_service').attr('aria-expanded', 'true');
        $('#second_step_schedule_service').attr('aria-controls', 'collapseThree');
        $('#collapseThree').collapse('show');

        $('#location').text("1050 N State Road 7 Hollywood Florida 33021");
        $('#date_and_time').text(localStorage.getItem('exacttime') + ' ' + localStorage.getItem('selectedDate'));
        $('#service_selected').text(localStorage.getItem('selectedService'));
        $('#type_of_appointment').text(localStorage.getItem('repair'));
        $('#vehicle').text(localStorage.getItem('selectedModel')+' '+localStorage.getItem('selectedMake')+' '+localStorage.getItem('selectedYear'));

      }

    });
      
    $("#third_step_schedule_service").click(function(){
        
        var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var emailaddress = $('#emailAddress').val();
        var phoneNumber = $('#phoneNumber').val();
        var additionalComments = $('#comments').val();

        if (firstName === '' || lastName === '' || emailaddress === '' || phoneNumber === '') {

          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Kindly, fill all the fields in the form . Thanks',
          });
        }else{

          var formData = { 
                  'first_name' : firstName,
                  'last_name' : lastName,
                  'email_address' : emailaddress,
                  'phone_number' : phoneNumber,
                  'additional_comments' : additionalComments,
                  'selected_year' :  localStorage.getItem('selectedYear'),
                  'selected_make': localStorage.getItem('selectedMake'),
                  'selected_model': localStorage.getItem('selectedModel'),
                  'selected_service':  localStorage.getItem('selectedService'),
                  'selected_further_details': localStorage.getItem('selectedFurtherDetails'),
                  'repair' : localStorage.getItem('repair'),
                  'exacttime' : localStorage.getItem('exacttime'),
                  'selectedDate' : localStorage.getItem('selectedDate'),
            }

          $.ajax({
            type: 'POST',
            url: "insertscheduledetails.php",
            data: formData,
            dataType: "json",
            success: function($response) {
              if($response['status'] === true) {
                                Swal.fire(
                                  'Request Submitted ! Successfully',
                                  'Thank for ',
                                  'success'
                                );
              $('#firstName').val('');
              $('#lastName').val('');
              $('#emailAddress').val('');
              $('#phoneNumber').val('');
              $('#comments').val('');
                              
              }else if($response['status'] === false){
                                Swal.fire(
                                  'Please Try Again!',
                                  'Sorry For the Inconvience',
                                  'error'
                                );
                $('#firstName').val('');
                $('#lastName').val('');
                $('#emailAddress').val('');
                $('#phoneNumber').val('');
                $('#comments').val('');
              }
            },
            error: function(xhr, status, error) {
              // Handle the server's error response
              console.log("Error submitting data:", error);
            }
        })
      
      }
    
    });
   
  </script>
  <script src="./assets/js/lib/popper.js"></script>
  <script src="./assets/js/lib/bootstrap.min.js"></script>
  <script src="./assets/js/theme/theme.js"></script>
  <script src="./assets/js/loader.js"></script>
  <script src="https://kit.fontawesome.com/12cd0f72cd.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>


