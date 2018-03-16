

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Oswald" media="screen">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <script><?php include 'bootstrap/js/bootstrap.min.js'; ?></script> 
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script><?php include 'public/js/main.js'; ?></script>
    </head>
    <body>
        <div class="container-fluid top-container" style="padding: 35px;">
        <div class="navbar-container" data-spy="affix" >
            <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="">InstaPlan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a id="homeButton" class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  id="aboutButton" class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a id="contactButton" class="nav-link" href="">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a id="signButton" class="nav-link" href="">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a id="logButton" class="nav-link" href="">Log In</a>
                    </li>

                </ul>
            </div>
        </nav>
            </div>
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-xl-6">
                            <h1 class="top-name">InstaPlan</h1>
                        </div>
                        <div class="col-xl-6">
                            <p class="tag-line">An Instagram content management system for businesses growing through the power of social media </p>
                            <p><a class="top-button btn btn-lg" role="button" style="color: white;">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bottom-container" style="padding: 35px;">
            <div id="homepage" class="row panel blurb-container ">
                <div class="col-md-4 fade-background">
                    <h1 style="padding: 85px 5px; font-family: Oswald; border-bottom: solid white 10px; border-right: solid white 10px">With InstaPlan, you can control your company's social media strategy without any experience at all.</h1>

                </div>
                <div class="col-md-8">
                    <img src='instagram.jpg' style="width: 100%;">
                </div>
            </div>
            <div id="about-us" class="row panel" style="min-height: 900px;">
                <div class="row">
                    <div class="col-md-5">
                        <span class="about-us-header">About Us</span><br><br><br>
                        Within the last five years, social media has become the most popular platform in the world for consumers to express themselves, interact with each other, and engage with a community. <br><br>InstaPlan is a scheduling and analytical tool to complement social media advertising efforts from small and large companies alike.  <span style="font-size: 32px; font-family: Oswald; line-height: 40px;"> <br><br>At the heart of our business we offer a seamless way for companies to share their content with Instagram followers in a convenient and consistent way.</span> 

                    </div>
                    <div class="col-md-7 about-us-content">
                        <img src="landscape.jpg" style="width: 100%;">
                    </div>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <div id="contact-us" class="row panel" style="padding-bottom: 55px;">
                <div class="col-md-6">
                    <img src='tickets.jpg'>
                </div>
                <div class="col-md-6">
                    <div class="jumbotron white">
                        <h1 style="font-family: Oswald;">Have any Questions? Contact Us</h1>
                        <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Name</label>
                            <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Your Email</label>
                            <input type="password" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" action="sendEmail.php" class="btn btn-primary bottom-button"style="color:black" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="log-in" class="row panel">
                <div class="col-lg-6">
                    <div class="jumbotron white">
                        <h2 class="small-heading white">Sign up now to begin superpowering your Instagram presence!
</h2>
                        <form>
  <a class="btn btn-primary bottom-button" style="color:black" href="new_user.php" >Sign Up</a>
</form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jumbotron white">
                        <h2 class="small-heading white">Already have an account? Log in here</h2>
                        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary bottom-button" style="color:black">Log In</button>
</form>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>



