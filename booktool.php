<?php
session_start();
if (isset($_SESSION['loginid'])){
 $db = mysqli_connect('localhost', 'root', '', 'kalappa');
 $em=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Contact Form</title>
  <link rel="stylesheet" href="css/bookfert.css">
  <link rel="stylesheet" href="./style2.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="booktoolpro.php" method="post">
      <?php
  
  

      $sel="SELECT * FROM `tool` WHERE tool_id=$em";
      $res=mysqli_query($db,$sel);
      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
      {
        $fid=$row['tool_id'];
        //$lid=$row['log_id'] ;
        
        //$sq=mysqli_query($db,"select email from login where log_id='$lid' ");
        //$r=mysqli_fetch_array($sq,MYSQLI_ASSOC);
        //$em=$r['email'];
      
      ?>
    <h3>BOOk</h3>
    <h4></h4>
    <fieldset>
    <label for="first_name"> Tool Id</label>
      <input  type="text" tabindex="2" name="id" value="<?php
      echo $row['tool_id'];
      ?> " readonly>
    </fieldset>
    <fieldset>
    <label for="first_name">Tool Name</label>
    <input  type="hidden"  id="amt" value="  <?php 
      echo $row['tool_amount'];
  ?>" readonly>
      <input  type="text" tabindex="1" value="  <?php 
      echo $row['tool_name'];
  ?>" readonly>
    </fieldset>
    <fieldset>
    <label for="first_name">Amount-per-Number</label>
      <input  type="text" tabindex="2" value="<?php
      echo $row['tool_amount'];
      ?> Rs" readonly>
    </fieldset>
    <fieldset>
    <label for="first_name"> Available Number</label>
      <input  type="text" tabindex="2" id="rem_qty" value="<?php
      echo $row['tool_number'];
      ?> " readonly>
    </fieldset>
    <fieldset>
      <input  name="no" type="text" id="no" placeholder="Enter the number" tabindex="3"  autocomplete="off" onchange="check_qty();">
    </fieldset>
    
    <fieldset>
      <input type="text" name="price" id="fprice" tabindex="4" readonly placeholder="Final amount">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" >Book</button>
    </fieldset>
    <?php }} ?>
  </form>
 
  
</div>
<!-- partial -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $( "#no" ).blur(function() {
    var q=($( "#no" ).val());
    var amt=($( "#amt" ).val());
    var price= q*amt ;
    
    ($( "#fprice" ).val(price+"  ₹"));
});
</script>
<script>
 function check_qty() {
     var qty=document.getElementById('no').value;
     var rem_qty=document.getElementById('rem_qty').value;
     if(qty>rem_qty) {
         alert("quantiy exceeds.");
         document.getElementById('no').value='';
     } 
 }
 
</script>
</html>