<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="http://getbootstrap.com/favicon.ico">
 -->
    <title>Knight Refrigerated</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<!--     <link href="jumbotron.css" rel="stylesheet">
 -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand hidden-xs hidden-sm" href="http://getbootstrap.com/examples/jumbotron/#">CALL A RECRUITER TODAY<br>888-888-8888</a>
        </div>
         <div id="navbar" class="navbar-collapse">
          <!-- <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div> -->
            <button type="submit" class="btn btn-success hidden-xs hidden-sm">Apply Now</button>
            
          <!--</form>
        </div> --><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <div class="row">
         <div class="col-md-12">
          <h2>Even Our Cool is Really Hot <br>Join Knight Refrigerated for an excellent career opportunity.</h2>
              <p>Refrigerated Truck Driving Associates play an important role in at Knight. Moving perishable goods across the country is essential to our nation’s economy. Knight’s customers will depend on you to fill store shelves with the goods needed to feed our families nationwide. Call a recruiter today to join our team and take pride in what you do.</p>

              <p class="visible-xs visible-sm">CALL A RECRUITER TODAY 888-888-8888 <br><br><button type="submit" class="btn btn-success">Apply Now</button> </p>
            </div>

          </div>
        
      </div>
    </div>

    <div id="mainContent" class="container">
      <!-- Example row of columns -->       
        <div class="col-md-8">

          <div id="CTA" class="col-md-8">  
          <p><a href="#"><button class="btn btn-primary btn-lg">Benefits</button></a>
          <p>Since the beginning, Knight has known that drivers are the foundation of the business. That’s why we make sure truck driving associates like you receive the respect and benefits you deserve. </p>
        </div>

      <div class="symbol-container col-md-6">     
          <div class="row">
              <div class="col-md-6"> 
              <img src="img/moneyicon.png" class="img-responsive" alt="Earn $50,000 annually">  
              <p>Earn $50,000 annually</p>
            </div>

            <div class="col-md-6">  
            <img src="img/insuranceicon.png" class="img-responsive" alt="Medical, Dental, Vision and Life Insurance">  
              <p>Medical, Dental, Vision and Life Insurance</p>
            </div>

          </div> 

           <div class="row">
              <div class="col-md-6">
              <img src="img/weeklyicon.png" class="img-responsive" alt="Weekly Hometime">  
              <p>Weekly Hometime</p>
            </div>

            <div class="col-md-6">
            <img src="img/401icon.png" class="img-responsive" alt="Company Match Premium 401K">  
              <p>Company Match Premium 401K</p>
            </div>

          </div>


           <div class="row">
              <div class="col-md-6">
              <img src="img/milesicon.png" class="img-responsive" alt="Consistent OTR Miles">  
              <p>Consistent OTR Miles.</p>
            </div>

            <div class="col-md-6">
            <img src="img/equipicon.png" class="img-responsive" alt="New Equipment">  
              <p>New Equipment</p>
            </div>

          </div> 
       </div>
      </div>

      <div class="col-md-4">
        <div class="booking">
        <h4>REQUEST A CALL BACK</h4>

        <p>Fill out the short form and a Knight Recruiter will be in touch shortly</p>
         <form class="input" action="engine/clientProcessorNew.php<?php echo '?zal=' . htmlspecialchars($_GET["zal"]) . '&utm_campaign=' . htmlspecialchars($_GET["utm_campaign"]); ?>" method="post" name="referralForm" onSubmit="MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','RisNum');return document.MM_returnValue">

                    <!-- php hidden vars -->
                    <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>">  
                    <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>">  
                    <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>">  
                    <input type="hidden" name="zal" value="<?php echo $_GET['zal']; ?>">  
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> 

                      <label>First Name</label>
                      <input placeholder="First Name" name="firstname" type="text" value="" id="firstname" size="25" maxlength="50" required>
                      <label>Last Name</label>
                      <input placeholder="Last Name" name="lastname" type="text" value="" id="lastname" size="25" maxlength="50" required>
                      <label>Email</label>
                      <input placeholder="Your Email" name="email" type="text" value="" id="email" size="25" maxlength="50" required>

                      <label>State</label>
                        <select name="state" id="state" title="state" style="width:100%;" required>
                            <option value="">State</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>

                        <label>Zip</label>
                        <input placeholder="Zip Code" name="zip" type="text" value="" id="zip" size="25" maxlength="5" required>

                        <label>Phone Number</label>
                        <input placeholder="Phone Number" name="phone" type="text" value="" id="phone" size="25" maxlength="10" required>

                        <center>
            <label></label>
            <select name="cdl-a" id="cdl-a" title="cdl-a" style="width:80%;"  required>
                            <option value="">Do You Have a CDL-A License?</option>
                            <option value="Yes">Yes</option> 
                            <option value="No">No</option>                                   
                        </select>
          
                        <label></label>
                        <select name="interest" id="interest" title="interest" style="width:80%;" required>
                            <option value="">Driving job your interested in</option>
                            <option value="Company Driver">Company Driver</option> 
                            <option value="Owner Operator">Owner Operator</option>                                   
                        </select>
                        </center>
            

                <span class="visible-sm visible-xs">
                <button input name="Submit" class="btn-success" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_phn']);">Apply Now</button>
                </span>
                <!-- end visible-phone -->
                <!-- start visible-tablet -->
                <span class="visible-md">
                <button input name="Submit" class="btn-success" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_tab']);">Apply Now</button>
                </span>
                <!-- end visible-tablet -->
                <!-- start visible-desktop -->
                <span class="visible-lg">
                <button input name="Submit" class="btn-success" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_dsk']);">Apply Now</button>
                </span>
            
            </form>
        </div>
      </div>
    </div>


      
    </div> <!-- /container -->
    <footer>
     <p class="copyright">&copy; 2015 Knight Transportation All Rights Reserved. | <a href="#">Privacy Policy</a></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>