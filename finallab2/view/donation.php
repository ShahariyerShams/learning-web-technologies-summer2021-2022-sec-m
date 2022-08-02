
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
</head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
    <h1 align= "center" color>
	<font face="daggersquare" color="#02a95c">Fund Lagbe!</font></h1>
	
	
	        <p align="right">
              
			 <p><a href="aboutus.html">About Us</a><a href="aboutus.html">Campaigns</a></p>
			 <p align="right" ><a href="dashbord.php">Dashbord</a>
			  
			 
			 <form action= "../New%20folder/donationController.php" method ="post" enctype="multipart/form-data">
			<fieldset>
				<legend align="center"> Donate </legend>
                
					<table align="center">

					<td>ID</td>
							
							<tr>
								<td><input type= "number" name="id" value="" placeholder="enter your ID" size="25" ></td>
								<td></td>
							<tr>
								<td><b>Name</td></b><td>
								
							</tr>
							<td><input type= "text" name="name" value="" placeholder="enter your name" size="25" ></td>
							<td></td>
						</tr>
							
						<tr>
                            <td><strong>DOB</strong><br>
                            <input type="date" name="sd" value=""></td> <td>
							<td></td>
						</tr>
                            <td>Phone No.</td>
							
							<tr>
								<td><input type= "number" name="pn" value="" placeholder="enter your phone number" size="25" ></td>
								<td></td>
							</tr>
							  <td><b>Country</td></b>
						<td>
							<select class="country"name = "country" >
								<option >Select a country</option>
								<option value="America">America</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Brazil">Brazil</option>
								<option value="Belgium">Belgium</option>
							    <option value="Canada">Canada</option>
								<option value="China">China</option>
								<option value="Denmark">Denmark</option>
								<option value="England">England</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="Hungary">Hungary</option>
								<option value="India">India</option>
                                <option value="Japan">Japan</option>
                                <option value="Kuwait">Kuwait</option>
								<option value="Qatar">Qatar</option>
                                <option value="UAE">UAE</option>
                                <option value="Ukraine">Ukraine</option>
							</select>
						</td>
				  	    </tr>
						<tr>
								<td >Location</td>
							</tr>
							<tr>
								<td><input type="text" name="lc" value="" size="25"></td>
								<td></td>
							</tr>
                            <td>Postal Code</td>
							
							<tr>
								<td><input type="number" name="pc" value=""size="25" ></td>
								<td></td>
							</tr>
							<td>Bank Name</td>
							
							<tr>
								<td><input type="text" name="bn" value=""size="25" ></td>
								<td></td>
							</tr>
							<td>Bank Account No.</td>
						
							<tr>
								<td><input type="number" name="bc" value=""size="25" ></td>
							</tr>
							<td><b>Donate In:</td></b>
						<td>
							<select class="category"name = "category">
								<option value="">Please Select a Individual/Organization</option>
								<option value="Flood campain for kurigram">Flood campain for kurigram</option>
								<option value="Fund for furvivers from Rana Plaza">Fund for furvivers from Rana Plaza</option>
                                <option value="Fund for cancer patient Turjo">Fund for cancer patient Turjo</option>
								<option value="Flood campaign for sylhet ">Flood campaign for sylhet </option>
								<option value="Fund collection for sitakundu tragedy">Fund collection for sitakundu tragedy</option>
							
							</select>
						</td>
				  	    </tr>
                            <tr>
								<td>Donation Amount</td>
							</tr>
							<tr>
								<td><input type ="number" name="ia" value="" size="25"></td>
							</tr>
                          
                         
							<td>Short Description</td>
							
							</tr>
							<td><textarea name="comment" rows="5" cols="40" placeholder="Please describe why are you investing here in few words" ></textarea></td>
                            
                            <tr>
	                        <td>
							<input type="checkbox" name=""> I agree with the <a href="t&c.html">terms and conditions</a>
					
						</tr>
	                        <tr>
						    </td>
								
							<tr>
							<td>
<input type="submit" name="submit" value="Submit" style="background-color:#02a95c;font-family:poppins;color:rgb(255,255,255);">
														
								<input type="reset" value="Reset" style="background-color:#02a95c;font-family:poppins;color:rgb(255,255,255);">
							</td>  
							</tr>

						</table>
						
			</fieldset>
		</form>

		<footer>
			<hr>
  <p align="center">
  <font face="daggersquare" color="#02a95c">© Fund Lagbe!</font></p></hr><hr>
</footer>
</body>
</html>
