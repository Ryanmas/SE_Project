<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Store</title>


    <!--Bootstrap CDN-->
    <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous" 
    />

    <!-- Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b7a61c9463.js" crossorigin="anonymous"></script>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Slick Library-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  

</head>

<body>

    <!--
        button.bt.btn - exemple shortcut to add a class
        Another example: div.container  -- TAB
    -->

    <!-- To host a live developmental server:

    Open VSCode and type ctrl+P , type ext install ritwickdey  -->
    

    <!-- header-->
    <header>
        <div class="container"> 
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">USD</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" style="color:white">EUR</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white" style="font-family:roboto; font-size:60px">Pete's Online Store</h2>
                </div>
                <div class="col-md-3 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a class="px-2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</a>
                        <div id="id01" class="modal">
                        
                            <form class="modal-content animate" action="/action_page.php">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Window">×</span> <br>
                                    <!-- If you want a header:  <h1 class="text-center">Sign In</h1>-->
                                </div>
                        
                                <div class="container text-left">
                                    <label><b style="font-size:20px">Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>
                                    <br> <br>
                                    <label><b style="font-size:20px">Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    
                                    <div class="text-center">
                                        <button type="submit" id="signin_button"><span style="font-size:18px">Login</span></button>
                                    </div>
                                </div>
                        
                                <div class="container text-left" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <span class="psw"><a href="#">Forgot password?</a></span>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="px-1" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Create an Account</a>
                        <div id="id02" class="modal">
                        
                            <form class="modal-content animate" action="/action_page.php">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id02').style.display='none'" class="close"
                                        title="Close Window">×</span> <br>
                                    <h1 class="text-center" style="font-size:35px">Sign Up</h1>
                                </div>
                        
                                <div class="container text-left">
                                    <label><b style="font-size:20px">First Name</b></label>
                                    <input type="text" placeholder="Enter First Name" name="fName" required>
                                    <br> <br>
                                    <label><b style="font-size:20px">Last Name</b></label>
                                    <input type="text" placeholder="Enter Last Name" name="lName" required>
                                    <br> <br>
                                    <label><b style="font-size:20px">Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="NewEmail" required>
                                    <br> <br>
                                    <label><b style="font-size:20px">Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="Npass" required>
                                    <br> <br>
                                    <label><b style="font-size:20px">Confirm Password</b></label>
                                    <input type="password" placeholder="Confirm Password" name="2pass" required>

                        
                                    <div class="text-center">
                                        <button type="submit" id="signin_button"><span style="font-size:18px">Create Account</span></button>
                                    </div>
                                </div>
                        
                                <div class="container text-left" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id02').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </p>
                </div>
            </div>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AboutUs.php">About Us<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
             <div class="navbar-nav">
                <li class="nav-item border rounded-circle mx-2 search-icon">
                    <i class="fas fa-search p-2"></i>  
                </li> 
                <li class="nav-item border rounded-circle mx-2 basket-icon">
                    <i class="fas fa-shopping-basket p-2"></i>  
                </li>   
            </div>            
        </nav>
    </div>    
    </header>
    <!-- Main Section-->
    <main>
    </body>

    </html>
    <div class ="container">
                <div class = row>
                    <div class = "col-lg-2 col-md-2 col-xs-2" >
                        <div class = "col1">
    
                            
    
                        </div>
                    </div>
                    <div class = "col-lg-8 col-md-8 col-xs-8">
                        <div class = "col2">
    
<div class="about-section">
    <h1 style = "text-align:center" ;>About Us</h1>
    <h2 style = "text-align:center">Pete's Online Store Developers</h2>
    
  </div>
  
  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">"
      <div class="card">
        <img src="" alt="Jose" style="width:100%">
        <div class="container">
          <h2>Jose</h2>
          <p class="title">Software Developer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>jose@example.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="" alt="Ray" style="width:100%">
        <div class="container">
          <h2>Ray</h2>
          <p class="title">Software Developer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>ray@example.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="" alt="Ryan" style="width:100%">
        <div class="container">
          <h2>Ryan</h2>
          <p class="title">Software Developer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>rmastriano@uh.edu</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>