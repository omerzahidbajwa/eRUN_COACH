<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <base href="<?php echo base_url(); ?>" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> Let's Get Started... </title>
  
  <meta name="description" content="Thank you for signing up with eRun. Tell us about youy goals" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/forum/normalize.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/forum/component.css" />
  <script src="assets/js/forum/modernizr.custom.js"></script>
</head>

<body>
<div class="container">
  <div class="top"> <a href="">&lt;&lt; Back </a>
    <div class="clr"></div>
  </div>
  
  <section>
    <header class="header">
      <h1> Let's Get Started.... <span> 24 questions to better help me understands your needs. </span></h1>
    </header>
    
    <form id="theForm" action = "index.php/forum/save_entry" method="POST"class="simform" autocomplete="off">
      <div class="simform-inner">
        <ol class="questions">
          <li> <span>
            <label for="q1">What is your first name?</label>
            </span>
            <input id="q1" name="q1" type="text"/>
          </li>
          <li> <span>
            <label for="q2">What is your last name?</label>
            </span>
            <input id="q2" name="q2" type="text"/>
          </li>
          <li> <span>
            <label for="q3">What is your address?</label>
            </span>
            <input id="q3" name="q3" type="text"/>
          </li>
          <li> <span>
            <label for="q4">What is your postcode?</label>
            </span>
            <input id="q4" name="q4" type="text"/>
          </li>
          <li> <span>
            <label for="q5">What is your home phone number?</label>
            </span>
            <input id="q5" name="q5" type="text"/>
          </li>
          <li> <span>
            <label for="q6">What is your mobile phone number?</label>
            </span>
            <input id="q6" name="q6" type="text"/>
          </li>
          <li> <span>
            <label for="q7">What is your email?</label>
            </span>
            <input id="q7" name="q7" type="text"/>
          </li>
          <li> <span>
            <label for="q8">Who is your emergency contact?</label>
            </span>
            <input id="q8" name="q8" type="text"/>
          </li>
          <li> <span>
            <label for="q9">What is their number?</label>
            </span>
            <input id="q9" name="q9" type="text"/>
          </li>
          <li> <span>
            <label for="q10">What is your most important goal?</label>
            </span>
            <input id="q10" name="q10" type="text"/>
          </li>
          <li> <span>
            <label for="q11">What is your short term goal? (6 months)</label>
            </span>
            <input id="q11" name="q11" type="text"/>
          </li>
          <li> <span>
            <label for="q12">What is your medium term goal? (12 months)</label>
            </span>
            <input id="q12" name="q12" type="text"/>
          </li>
          <li> <span>
            <label for="q13">What is your long term goal? (24 months)</label>
            </span>
            <input id="q13" name="q13" type="text"/>
          </li>
          <li> <span>
            <label for="q14">How long have you been running for?</label>
            </span>
            <input id="q14" name="q14" type="text"/>
          </li>
          <li> <span>
            <label for="q15">What are some of your best running achievements (and what year?)</label>
            </span>
            <input id="q15" name="q15" type="text"/>
          </li>
          <li> <span>
            <label for="q16">What is your current activity program? (include all physical activities)</label>
            </span>
            <input id="q16" name="q16" type="text"/>
          </li>
          <li> <span>
            <label for="q17">How many days a week will you commit to work on your goals?</label>
            </span>
            <input id="q17" name="q17" type="text"/>
          </li>
          <li> <span>
            <label for="q18">How many hours per day will you commit to working on your goals?</label>
            </span>
            <input id="q18" name="q18" type="text"/>
          </li>
           <li> <span>
            <label for="q19">What days suit you best for training?</label>
            </span>
            <input id="q19" name="q19" type="text"/>
          </li>
           <li> <span>
            <label for="q20">What time of day suit you best for training?</label>
            </span>
            <input id="q20" name="q20" type="text"/>
          </li>
           <li> <span>
            <label for="q21">Will you achieve your goals if you continue to repeat your current lifestyle habits?</label>
            </span>
            <input id="q21" name="q21" type="text"/>
          </li> <li> <span>
            <label for="q22">What are you going to do, change or give up so that you will achieve your goals?</label>
            </span>
            <input id="q22" name="q22" type="text"/>
          </li>
           <li> <span>
            <label for="q23">What are the main factors getting in the way stopping you from achieving your goals?</label>
            </span>
            <input id="q23" name="q23" type="text"/>
          </li>
           <li> <span>
            <label for="q24">What specifically would you like me to do to help you achieve your goal?</label>
            </span>
            <input id="q24" name="q24" type="text"/>
          </li>
        </ol>
        <button class="submit" type="submit">Send answers</button>

        <div class="controls">
          <button class="next"></button>
          <div class="progress"></div>
          <span class="number"> <span class="number-current"></span> <span class="number-total"></span> </span> <span class="error-message"></span> </div>
      </div>
      <span class="final-message" id = "finals"></span>
      <input type="submit" id = "sub" value="Submit" style='display:none'/>
    </form>
  </section>
</div>
<script src="assets/js/forum/classie.js"></script> 
<script src="assets/js/forum/stepsForm.js"></script> 
<script>var theForm=document.getElementById("theForm");new stepsForm(theForm,{onSubmit:function(){classie.addClass(theForm.querySelector(".simform-inner"),"hide");var e=theForm.querySelector(".final-message");e.innerHTML="Thank you, you will be notified shortly";document.getElementById("sub").click(),classie.addClass(e,"show") }});
</script>
</body>
</html>