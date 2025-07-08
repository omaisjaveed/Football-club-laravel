<?php require_once('include/links.php') ?>


<header>
  <!--<section class="sub-header">-->
  <!--    <div class="top-nav">-->

  <!--    <ul>-->
  <!--        <li> <a href="#"><i class="fa-brands fa-twitter"></i></a> </li>-->
  <!--        <li> <a href="#"><i class="fa-brands fa-instagram"></i></a> </li>-->
  <!--        <li> <a href="#"><i class="fa-brands fa-facebook"></i></a> </li>-->
  <!--    </ul>-->

  <!--    </div>-->
  <!--</section>-->
  <section class="top-bar">
    <div class="continer">
      <div class="topbar"></div>
    </div>
  </section>
  <section class="main-header">

    <div class="align">

      <div class="main-flex">


        <div class="nav-listing">
          <ul>
            <li>
              <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php">HOME</a>
                <a href="about-us.php">ABOUT US</a>
                <a href="media.php">MEDIA</a>
                <a href="academy.php">ACADEMY</a>
              </div>

              <div id="main">
                <button class="openbtn" onclick="openNav()">&#9776; </button>
              </div>
            </li>
            <li> <a href="index.php">HOME</a> </li>
            <li> <a href="about-us.php">ABOUT US</a> </li>
            <li> <a href="media.php">MEDIA</a> </li>
            <li> <a href="academy.php">ACADEMY</a> </li>

            <li>
              <div class="team-dropdown">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="sbutton" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    TEAM
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item-1" href="pro-indoor-team.php">Pro indoor team</a></li>
                    <li><a class="dropdown-item-1" href="outdoor-team.php">Outdoor team</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <li> <a href="sponsord.php">SPONSORS</a> </li>
            <!--<li> <a href="#">VIDEO</a> </li>-->
            <!--<li><a href="#" class="ticket-btn"><i class="fa-solid fa-ticket-simple"></i> TICKETS </a></li> -->
          </ul>
        </div>

        <div class="site-listing">
          <ul>
            <li>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  EN <i class="fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </li>

            <li class=""> <a href="tickets.php" class="ticket-btn"> <i class="fa-solid fa-ticket-simple"></i>
                TICKETS</a> </li>
            <li class="bordered"> <a href="shop.php"> <i class="fa-solid fa-cart-shopping"></i> SHOP</a> </li>

            <li> <a href="log-in.php">LOGIN <i class="fa-solid fa-arrow-right"></i> </a> </li>
          </ul>
        </div>

      </div>

      <div class="site-logo">
        <img src="images/logo-4.png" alt="">
      </div>

    </div>

  </section>
</header>
<script>
  /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
</script>