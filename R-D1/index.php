<html>
<title>Roman Numeral To Decimal in PHP</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script type="text/javascript">
 	function chk(){
 		var name=document.getElementById('name').value;
 		var dataString='name=' + name;
 		$.ajax({
 			type:"post",
 			url:"p.php",
 			data:dataString,
 			cache:false,
            success:function(html){
           $('#msg').html(html);
            }
 		});
 	}
 </script>

<style>
 body {
font-family:sans-serif;
font-size: 20px;
font-weight: bold;
text-align:center;
 };
</style>
<body>
 <?php

  error_reporting(0);
 $input = $_POST['inputFirst'];

 
?>
<br>
 <h1 style="text-decoration: underline;">Roman Numeral To Decimal Numeral</h1>
<form action="p.php" method="post">
<label>Enter Roman Numeral:</label>
 <input type="text" id="name" name="inputFirst" value="<?php echo $input; ?>" size="8" autofocus required/>
 <br><br>
 <input type="submit" name="SubmitButton" value="Submit" style="padding:4px;background-color:powderblue;"/>
 
 
</form>
<?php
$obj = new RomanToDecimal();

if(isset($_POST['SubmitButton'])){
$original = $input;
$val = $obj->roman($original);
 echo "<br>";
 $display_result = "The Decimal equivalent of " .$original. " is "
.$val.".";
 echo $display_result;
 echo "<br>";
 }
?>


<p id="msg"></p>
</body>
</html>
