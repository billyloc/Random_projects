<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="names.php" method="GET">
	<label>First Name<input type="text" value="" name="fn"></label>
	<label>Last Name<input type="text" value="" name="ln"></label>
	<button>Submit</button>
</form>

<br>
<br>

<form action="login.php" value="POST">
	<label>Email<input type="text" value="" name="email"></label>
	<label>Password<input type="password" value="" name="password"></label>
	<input type="submit">
</form>
<br>
<br>
<form action="get_products.php" method="GET">
	<select name="products" id="123">
		<option value=""></option>
		<option value="Motorola">Motorola</option>
		<option value="Nokia">Nokia</option>
		<option value="Nexxus">Nexxus</option>
	</select>
	<input type="number" name="quantity" value="10">
	<button>Submit</button>
</form>

<br>
<br>
<form action="user.php" method="POST">
    First Name:
    <input type="text" name="FirstName" required></input>
    Last Name:
    <input type="text" name="LastName"></input>
    City:
    <input type="text" name="City"  value="New York"></input>
    Gender:
    <input type="radio" name="Gender" value="m" selected>Male</input>
    <input type="radio" name="Gender" value="f">Female</input>
    <input type="checkbox" name="color" value="red">Red</input>
    <input type="checkbox" name="color" value="green">Green</input>
    <input type="checkbox" name="color" value="blue">Blue</input>
   </input>
   <select name="state"> 
       <option value="az">Arizona</option>
       <option value="nm">New Mexico</option>
       <option value="hi" selected>Hawaii</option>
  </select>

  <label>Sex : Male<input type="radio" name="gender" value="male">
  <input type="radio" name="gender" value="female">female
  <input type="checkbox" name="gender" value="both">both
  </label>
  <input type="submit">
  <button>Cancel</button>
</form>  


<form action="login.php" method="get">
	First Name<input type="text" value="">
	Last Name<input type="text" value="">
	Email<input type="email" value="" required>
	<input type="submit">
</form>


<br>
<br>
<br>
<br>




	
</body>
</html>