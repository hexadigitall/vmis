
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" href="dash.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      media="screen"
      href="https://fontlibrary.org/face/glacial-indifference"
      type="text/css"
    />
    <script
      src="https://kit.fontawesome.com/2b9385dd69.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="mainDashboard">
      <!-- <div class="headerMenu">
        <h3>VisitLog Manager</h3>
      </div> -->
      <div class="Menu">
        <nav id="sideMenu">
          <div>
            <a href="dash.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
          </div>
          <div>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
          </div>
          <!-- <div>
            <a href="#"><i class="fas fa-sign-out-alt"></i>Logout </a>
          </div> -->
        </nav>
        <header>
          <div class="header-area">
            <hi class="header-heading"
              >VISITORS MANAGEMENT INFORMATION SYSTEM</hi
            >
          </div>
          <div></div>
        </header>
        <div id="contentArea">
          <div class="heading">
            <h1>Dashboard</h1>
            <p>Welcome to TechCreek VMIS</p>
          </div>
          <hr />
               <div class="search" id="search" >
                    <input type="text" class="search_bar" name="search_bar" id="search_bar" placeholder="search" required>
                    <input type="submit" name="submit" id="submit">
               </div>
               <!-- list displaying search results  -->
               <div class="search_result">
                   <ul class="">
                       <li></li>
                   </ul>
               </div>
        </div>
      </div>
    </div>
    <div class="footerdash"></div>
  </body>
</html>
