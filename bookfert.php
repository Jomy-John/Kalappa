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

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="bookfertpro.php" method="post">
      <?php
  
  

      $sel="SELECT * FROM `fertilizer` WHERE fertiliizer_id=$em";
      $res=mysqli_query($db,$sel);
      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
      {
        $fid=$row['fertiliizer_id'];
        //$lid=$row['log_id'] ;
        
        //$sq=mysqli_query($db,"select email from login where log_id='$lid' ");
        //$r=mysqli_fetch_array($sq,MYSQLI_ASSOC);
        //$em=$r['email'];
      
      ?>
    <h3>BOOK</h3>
    <h4></h4>
    <fieldset>
    <label for="first_name"> Fertilizer Id</label>
      <input  type="text" tabindex="2" name="id" value="<?php
      echo $row['fertiliizer_id'];
      ?> " readonly>
    </fieldset>
    <fieldset>
    <label for="first_name">Fertilizer Name</label>
    <input  type="hidden"  id="amt" value="  <?php 
      echo $row['fertilizer_amount'];
  ?>" readonly>
      <input  type="text" tabindex="1" value="  <?php 
      echo $row['fertilizer_name'];
  ?>" readonly>
    </fieldset>
    <fieldset>
    <label for="first_name">Amount-per-kilo</label>
      <input  type="text" tabindex="2" value="<?php
      echo $row['fertilizer_amount'];
      ?> Rs" readonly>
    </fieldset>
    <fieldset>
    <label for="first_name"> Available Quantity in Kg</label>
      <input  type="text" tabindex="2" id="rem_qty" value="<?php
      echo $row['fertilizer_quantity'];
      ?> " readonly>
    </fieldset>
    <fieldset>
      <input  name="quant" type="text" id="quant" placeholder="Enter the Quantity" tabindex="3" autocomplete="off" onchange="check_qty();">
    </fieldset>
    <fieldset>
      <input type="text" name="price" id="fprice"  tabindex="4"  placeholder="Final amount">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit"  >Book</button>
    </fieldset>
    <?php }} ?>
  </form>
 
  
</div>
<!-- partial -->
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $( "#quant" ).blur(function() {
    var q=($( "#quant" ).val());
    var amt=($( "#amt" ).val());
    var price= q*amt ;
    
    ($( "#fprice" ).val(price+"  ₹"));
});
</script>
<script>
 function check_qty() {
     var qty=document.getElementById('quant').value;
     var rem_qty=document.getElementById('rem_qty').value;
       if(qty>rem_qty) {
           alert("quantiy exceeds.");
           document.getElementById('quant').value='';
       } 
 }
 
</script>
</html>