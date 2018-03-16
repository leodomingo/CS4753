<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === "dup_user"){
      $error_message = "Looks like that username is already registered with us, please log in if you already have an account";
    }
    else{
      $error_message = "Looks like that email is already registered with us, please log in if you already have an account";
    }
} else {
    // Fallback behaviour goes here
}
?>
<html>
    <head>
    <head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Oswald" media="screen">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/nav_styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/form_styles.css">
    <script><?php include 'bootstrap/js/bootstrap.min.js'; ?></script> 
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="public/js/parsley.min.js"></script>
    <script src="public/js/form.js"></script>
    </head>
    </head>
    <body>
    <div class="navbar-container" data-spy="affix" >
        <nav class="navbar navbar-expand-lg navbar-light" style="width:100%">
            <a class="navbar-brand" href="/">InstaPlan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a id="homeButton" class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  id="aboutButton" class="nav-link" href="/">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a id="contactButton" class="nav-link" href="/">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a id="signButton" class="nav-link" href="">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a id="logButton" class="nav-link" href="/">Log In</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div id="log-in" class="row panel" style="padding-top: 75px">
            <div class="offset-md-2 col-lg-8">
                <h1 style="padding:15px; border: solid black 5px; margin-bottom: 45px;">Sign up now to begin supercharging your social media presence</h1>
                <?php if(isset($error_message)){echo '<h5 style="padding:15px; border: solid black 5px; margin-bottom: 25px; font-style: italic; color: red;">'.$error_message.'</h5>';}  ?>
            <form id="signUpForm" action="post_user.php" method="post" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First name"  data-parsley-trigger="input" pattern="^[a-zA-Z ]+"	 required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="lastName" name="last_name"placeholder="Last name" pattern="^[a-zA-Z ]+"	  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email"  data-parsley-trigger="input"	required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
        <input type="text" data-parsley-whitespace="trim" name="username" class="form-control" id="userName" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a valid username.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02"> Street Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Street Address"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
        <select class="form-control" name="state" id="state" required>
            <option value="" selected="selected">Select a State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="number" class="form-control" id="zip" name="zip" placeholder="Zip" min="10000" max="99999"  required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Instagram Username</label>
      <input type="text" data-parsley-whitespace="trim" name="insta_username" class="form-control" id="instaName" placeholder="First name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Instagram Password</label>

      <input type="password" class="form-control" name="insta_pass" id="instaPassword"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  </div>
  <button class="btn btn-primary" type="submit" style="color: black; background-color: white; border: solid black 5px; border-radius:0">Submit form</button>
</form>

            </div>
        </div>
</div>

    </body>
</html>



