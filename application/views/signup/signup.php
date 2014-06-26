<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <base href="<?php echo base_url(); ?>" />
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
  
  <title> Sign Up to eRun Coach | Log In to eRun </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sign up or log in to eRun Coach">
  <meta name="keywords" content="erun coach, norbert petras, norbit petras, norbitt petras">
  
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/signup/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate-custom.css">
 
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
  <script src="assets/js/placeholder_min.js"></script>
  <script src="assets/js/sign_up_min.js"></script>
</head>

<body>
<div class="container"> 
  <div class="top"> <a href="">&lt;&lt; Back </a>
    <div class="clr"></div>
  </div>
  
  <div class="top50"></div>
  
  <section>
    <div id="container_demo" > 
      <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
          <div id="login" class="animate form">
            <form  action="index.php/signup/login" method = "POST" autocomplete="on">
              <h1>Log in <span>to eRun Coach</span></h1>
              <p>
                <?php if(!is_null($msg) && $msg == "<font color=red>Invalid username and/or password.</font><br />")echo $msg; ?>
                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                <input id="username" name="username" required="required" type="text" placeholder="email or username"/>
              </p>
              <p>
                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                <input id="password" name="password" required="required" type="password" placeholder="password" />
              </p>
              <p class="keeplogin">
                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                <label for="loginkeeping">Keep me logged in</label>
              </p>
              <p class="login button">
                <input type="submit" value="Login" />
              </p>
              <p class="change_link"> Not a member yet ? <a href="index.php/signup#toregister" id = "signup" class="to_register">Join us</a> </p>
            </form>
          </div>
          <div id="register" class="animate form">
            <form  action="index.php/signup/register" method="POST" autocomplete="on">
              <h1>Sign up <span>to eRun Coach</span></h1>
              <p>
                <?php if(!is_null($msg) && $msg == "<font style=bold color=red>Username already exists.</font><br />")echo $msg; ?>
                <?php echo $msg; ?>
                <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="your username" />
              </p>
              <p>
                <?php if(!is_null($msg) && $msg == "<font style=bold color=red>Email already exists.</font><br />")echo $msg; ?>
                <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="your email"/>
              </p>
              <p>
                <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="your password"/>
              </p>
              <p>
                <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="confirm your password"/>
              </p>
              <p class="signin button">
                <input type="submit" value="Sign up"/>
              </p>
              <p class="change_link"> Already a member ? <a href="index.php/signup#tologin" class="to_register"> Go and log in </a> </p>
            </form>
          <!--<?php require_once ('../../mysqli_connect_name.php'); $q1 = "SELECT country_id AS value, name AS name FROM country ORDER BY name ASC"; $r1 = @mysqli_query ($dbc, $q1); while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) { echo'<option value= '.$row['value'].' '; if ((isset($_POST['country']))&&($_POST['country'])==$row['value']) {echo 'selected';} echo'> '. $row['name'].' </option> ' ; } echo '</select> '; mysqli_free_result ($r1); ?>-->
          </div>
        </div>
      </div>
    </section>
  
  </div>
</body>
</html>