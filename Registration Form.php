<html>
	<head>
		<title> Registrartion Form</title>
	</head>
	<style>
		table{
			padding:1px;
			text-align:center;
			
			}
	</style>
	<body>
    <form>
		<center>
		<h2> Registration Form </h2>

		<table height="400px" width="350px" border="2"> 
		<tr>
			<td>
				<label> First Name : </label>
			</td>
			<td>
				<input type="text" placeholder="Enter Your First Name">

			</td>
		</tr>

<tr>
			<td>
				<label> Address : </label>
			</td>
			<td>
				<textarea rows="4" cols="20"> </textarea>
			</td>
		</tr>


		<tr>
			<td>
				<label> Gender : </label>
			</td>
			<td>
				Male <input type="radio" name="gender">
				Female <input type="radio" name="gender">

			</td>
		</tr>

		<tr>
			<td>
				<label> Education  : </label>
			</td>
			<td>
				<input type="checkbox" name="Education"> SSC
				<input type="checkbox" name="Education"> HSC
				
				<br>
				<br>

				<input type="checkbox" name="Education"> BCA
				<input type="checkbox" name="Education"> MCA
			</td>
		</tr>


		<tr>
			<td>
				<label> Select City : </label>
			</td>
			<td>
				<Select name="City">
                    <option>Select</option>
					<option>Ahmedabad</option>
					<option>Baroda</option>
					<option>Mahesana</option>
					<option>Surat</option>
					
			</td>
		</tr>
</table>

<br>

		<table height="50px" width="350px" border="3">
<tr>
	
	<td><input type="submit"></td>
       <td> <input type="reset"></td>
       
</tr>
</table>

		</center>
<form>
	</body>
</html>