
<?php
$sname=$_POST["sname"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$date=$_POST["dob"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$add=$_POST["addr"];
$gender=$_POST["gender"];
$cousre=$_POST["course"];
$hobby=$_POST["cocurri"];
$result=$_POST["photo"];



/*foreach($_POST['hobby'] as $value)
			{
				$value;
			
			
			
		
        }
*/
echo "<html>
	<head>    
		<title>Registration Form</title>
		
		<meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'>
  
  </script>
		
		<style>
	td
		{
			text-align:center;
		}
		#txtfld {
			text-align:left;
		}
b{
	padding:30px;}
	#inputbtn{
		 margin:4px;}
table {
  background-color: lightblue;
}
	
	td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 1px;
}
table {
        border: 2px thin;

    }
	#txtvalue{text-align: left; }
input[type=button]
{
	border-radius: 6px; 
}
</style>

</head>


<h1 align='center'>Confirmations</h1>



<body>
 		<div class='container'>
		<form class='form-verticle'>
            <div class='form-group'>
<table width='30%' border='1' align='center' class='table table-hover'>
  <tr>
    <th scope='col' colspan='1' >Field </th>
    <th scope='col' colspan='2' >Value</th>
  </tr>
  <tr>
    <td id='txtfld'>Student Name</td>
    <td id='txtvalue'>$sname</td>
  </tr>
  <tr>
    <td id='txtfld'>Father's Name</td>
    <td id='txtvalue'>$fname</td>
  </tr>
 <tr>
    <td id='txtfld'>Mother's Name</td>
    <td id='txtvalue'>$mname</td>
  </tr>
  <tr>
    <td id='txtfld'>Date of Birth</td>
    <td id='txtvalue'>$date</td>
  </tr>
  <tr>
    <td id='txtfld'>Contact no.</td>
    <td id='txtvalue'>$mob</td>
  </tr>
  <tr>
    <td id='txtfld'>E-mail id</td>
    <td id='txtvalue'>$email</td>
  </tr>
  <tr>
    <td id='txtfld'>Address</td>
    <td id='txtvalue'>$add</td>
  </tr>
  <tr>
    <td id='txtfld'>Gender</td>
    <td id='txtvalue'>$gender</td>
  </tr>
  <tr>
    <td id='txtfld'>Course</td>
    <td id='txtvalue'>$cousre</td> </tr>";
	
	echo "<tr>
    <td id='txtfld'>Hobby</td>
    <td id='txtvalue'>$hobby</td>
  </tr>";

  
  
  echo "<tr>
    <td id='txtfld'>Upoaded Photo</td>
    <td id='txtvalue'>$result</td>
  </tr>
  
<tr>
	<td colspan='2'>
	<input type='button' value='Recheck' onclick='history.back(0)' id='inputbtn' class='btn btn-danger' >
	<input type='button' id='inputbtn' onClick='fun()' value='Finalize' class='btn btn-success' ></td>
	
</tr>
<script>function fun()
  {alert('Form Submitted Successfully.');
  location.replace('index.html')
  }</script>
</table>
</div>
</form>
</div>
</body>
</html>
 ";


















/*
echo "
<body bgcolor='#006666'>
<script>alert(navigator.userAgent);
function fun()
	{
	document.getElementById('demoP').innerHTML='Over the Paragraph';	

	}
function fun2()
	{
	document.getElementById('demoP').innerHTML='Out from Paragraph';	

	}
</script>
<p id='demoP' onMouseMove='fun()' onMouseOut='fun2()' style='color:#fff'>
This is the text in paragraph
</p>
</body>		
";
*/
?>
