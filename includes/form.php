<?php include 'shortform.transmit.xml.php'; ?>  

<!doctype html>
<html class="no-js" lang="en">

<head>
<title>Roadrunner Transportation Systems Submission Confirmation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42051114-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
(function() { var ac = document.createElement('script'); ac.type = 'text/javascript'; ac.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
'pixel.app-cast.com/pixels/transportation3-82.js?t=1386263451'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ac, s); })();
</script>
</head>

<body>


            <!-- form input --> 
            <form class="input" action="engine/clientProcessor.php<?php echo '?zal=' . htmlspecialchars($_GET["zal"]) . '&utm_campaign=' . htmlspecialchars($_GET["utm_campaign"]); ?>" method="post" name="referralForm" onSubmit="MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','RisNum');return document.MM_returnValue">

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
                            <option value="None">State</option>
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
                        <input placeholder="Zip Code" name="zip" type="text" value="" id="zip" size="25" maxlength="50" required>

                        <label>Phone Number</label>
                        <input placeholder="Phone Number" name="phone" type="text" value="" id="phone" size="25" maxlength="50" required>

                        <center>
						<label></label>
						<select name="cdl-a" id="cdl-a" title="cdl-a" style="width:80%;"  required>
                        <option value="None">Do You Have a CDL-A License?</option>
                            <option value="Yes">Yes</option> 
                            <option value="No">No</option>                                   
                        </select>
					
                        <label></label>
                        <select name="interest" id="interest" title="interest" style="width:80%;" required>
                        <option value="None">Driving job your interested in</option>
                            <option value="Company Driver">Company Driver</option> 
                            <option value="Owner Operator">Owner Operator</option>                                   
                        </select>
                        </center>
						

                <span class="phone-only">
                <button input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_phn']);">SUBMIT</button>
                </span>
                <!-- end visible-phone -->
                <!-- start visible-tablet -->
                <span class="tablet-only">
                <button input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_tab']);">SUBMIT</button>
                </span>
                <!-- end visible-tablet -->
                <!-- start visible-desktop -->
                <span class="desktop-only">
                <button input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_dsk']);">SUBMIT</button>
                </span>
            
            </form>

            </body>
            </html>
        
