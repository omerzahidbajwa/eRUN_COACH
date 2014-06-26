<div class="st-content">
<div id="st-trigger-effects" class="column">
  <button data-effect="st-effect-3"> <img src="assets/images/hamburger.png" alt="menu icon"/> </button>
</div>

<div id="container">
  <div class="container">
    <div class="row">
      <div class="span12"> 
        <!--<div class="quote">In order to succeed <br/> <i> you must first believe that you can.</i></div><div class="quote-underline"></div>-->
        <h1> Home Page for Logged in Members</h1>
        <div class="cite">
          <p>Account Details:</p>
        </div>
        <ol class="terms">
         <li>	<?php echo $this->session->userdata('userid');?> </li>
         <li>	<?php echo $this->session->userdata('username');?> </li>
         <li>	<?php echo $this->session->userdata('email');?> </li>
        </ol>
        
       
       
      </div>
    </div>
  </div>