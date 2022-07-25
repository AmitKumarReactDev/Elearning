<!-- <!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<title>demo</title>
</head>
<body>
<form>
	<select name="state" id="stateid">
		<option>select state</option>
		<option value="gujrat">gujrat</option>
		<option value="MH">MH</option>
	</select>
	<select name="state" id="citydata">
	</select>
</form>
</body>
</html>
<script type="text/javascript">
 $(document).ready(function() {

        $("#stateid").change(function(){

            var value =$("#stateid").val();
     		// alert(value);
            $.ajax({
                url: "<?php echo site_url() ?>/demo/fillcity/"+value, 
                type: "POST",
                success: function(res){
  					$("#citydata").html(res);
                }
            });
        });
        });
</script> 
<!DOCTYPE html>
<html>
<head>
    <title>send email demo</title>
</head>
<body> -->

    <!-- <?php  
           // $otp=rand(999,9999);
           //  $to='av686715@gmail.com';
           //  $subject="Forgot Password";
           //  $body="Your Otp is".$otp;
           //  if(mail($to,$subject,$body)) 
           //  {
           //      echo "email sent successfully";
           //      $this->session->set_flashdata('Msg','Otp Sent on your Email successfully');
           //      // redirect('login');
           //  } 
           //  else 
           //  {
           //      echo "email not sent";
           //      // echo'Server error';
           //  }
           //  ?>
           <!- <input type="checkbox" name="chk" id="chk"> -->
       
<!-- </body>
 /html>-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dynamically Generate Select Dropdowns</title>
</head>
<body>
<form>
    <select>
        <option selected="selected">Choose one</option>
        <?php
        // A sample product array
        $products = array("Mobile", "Laptop", "Tablet", "Camera");
        
        // Iterating through the product array
        foreach($products as $item){
        ?>
        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>
-->
<!-- <!DOCTYPE html>
<html>
<head>
  <title>demo</title>
  <script type="text/javascript">
    var arr = {
               person:"abc",
               age:10,
               };
    // for (var i = 0; i < arr.length; i++) 
    // {
    // }
    // var x = arr.fullname();
    window.alert(arr.person+''+arr.age);
  </script>
</head>
<body>
  <!- <p id="demo">hello</p>
    <input type="button" value="click me" name="btn" onclick="window.alert('helloooo')">--
</body>
</html> -->
<!DOCTYPE html>
<html>
<body>

<!-- <h2>JavaScript Objects</h2> -->

<!-- <p>An object method is a function definition, stored as a property value.</p> -->

<!-- <p id="demo" onchange="this.Date();"></p> -->
<!-- <input type="text" name="" onchange="this.value=Date();"> -->
<!-- <input type="text" name=""> -->
<table>
    <form method="post">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email"></td>
      </tr>
      <tr>
        <td>City</td>
        <td><select name="" id="city">
            <option>--Select City--</option>
            <option>Surat</option>          
            <option>Baroda</option>          
            <option>Bharuch</option>          
        </select></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="ps" id="password"></td>
      <tr>
        <td>Confirm-Password</td>
        <td><input type="password" name="cps" id="cpassword"></td>
      </tr>
      </tr>
      <tr>
        <td><input type="submit" onclick="validation();" name="submit" id="submit"></td>
      </tr>
    </form>
</table>
<script type="text/javascript">
  function validation() 
  {
    if (document.getElementById('name').innerHTML == '')
    {
      alert('name ');
      // return false;
    }
     if (document.getElementById('email').innerHTML == '')
    {
      alert('Email');
      // return false;
    }
    //  if (document.getElementById('city') == '')
    // {
    //   alert('City');
    //   // return false;
    // }
     if (document.getElementById('password').innerHTML == '')
    {
      alert('password');
      // return false;
    }
     if (document.getElementById('cpassword').innerHTML == '')
    {
      alert('Confirm-Password');
      // return false;
    }
    // if (document.getElementById('').innerHTML == '')
    // {
    //   alert('name ');
    //   return false;
    // }
    // var name = getElementById('name').value;
    // alert('clicked');
    
  }
// var name = getElementById('name').value = 'abc';
// var email = getElementById('email').value;
// var city = getElementById('city').value;
// var password = getElementById('password').value;
// var cpassword = getElementById('cpassword').value;
// if (getElementById('name').innerHTML=="") {
//   alert('name cant empty')
//   return false;
// }

// alert('abc');
// Create an object:
// var person = {
//   firstName: "John",
//   lastName : "Doe",
//   id     : 5566,
//   fullName : function() {
//     return this.firstName + " " + this.lastName;
//   }
// };
// Display data from the object:
// document.getElementById("demo").innerHTML = Date();
// alert(Date());
// var str = "hrllooooooabct";
// alert(str.length+'length'+str.search('abc')+'search'+str.indexOf('t')+'indexOf'+str.lastIndexOf('l',4));
// var arr ={
//   name:'abc',
//   age:10
// };
// alert('');
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<!-- <h2>JavaScript Arrays</h2> -->

<!-- <p>Array.forEach() calls a function for each array element.</p>

<p>Array.forEach() is not supported in Internet Explorer 8 or earlier.</p> -->
<!-- <input type="submit" name="" id="btn" onclick="demo();"> -->
<!-- <input type="text" onkeyup ="chk();" name="txt" id="demo"> --> 
<!-- <input type="text" name="txt" id="demo2"> -->
<!-- <p id="demo"></p> -->
<script>
  //write script for convert lower case into upper case.
  function chk() 
  {
    // "use strict";
   // var chk = document.getElementById("demo").value;
   //   chk= chk.toUpperCase(); 
   //    document.getElementById("demo").value = chk;
   // alert(chk.toUpperCase());
    // document.getElementById("demo2").innerHTML = chk.toUpperCase();
    // alert(chk);
  }
  // function chk() 
  // {
  //   var chk = getElementById('demo');
  //   // alert(chk);
  //   chk.value = chk.toUpperCase();
  //   // chk.innerHTML = chk.toLowerCase();
  // }
</script>
</body>
</html>