<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale">
	<title>Registsa</title>
</head>
<body>
	<div align="content">
		<h1>Registaion</h1>
		<?php
		function sanitize($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars(data);
			return $data;
		}
		var_dump($ _REQUEST);
		echo "<hr>";
		print_r(isset($_POST['gender']));
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fname = sanitize($_POST["fname"]);
            $lname = sanitize($_POST["lname"]);
            $uname = sanitize($_POST["uname"]);
            $email = sanitize($_POST["email"]);
            $phn = sanitize($_POST["phn"]);
            $Password = sanitize($_POST["Password"]);
            $CPassword = sanitize($_POST["CPassword"]);
            $gender = isset($_POST["gender"]) ? sanitize($_POST["gender"]) : "";
            $dob = sanitize($_POST["date"]);
            $address = sanitize($_POST["address"]);
            $flag = true;
            if (empty($fname)) {
                $flag = false;
                echo "Please fillup First Name.<br>";
            }
            if (empty($lname)) {
                $flag = false;
                echo "Please fillup Last Name.<br>";
            }
           /* if (empty($uname)) {
                $flag = false;
                echo "Please fillup Fathers Name.<br>";
            }*/
            if (empty($email)) {
                $flag = false;
                echo "Please fillup Email.<br>";
            }
            if (empty($gender)) {
                $flag = false;
                echo "Please fillup Genders.<br>";
            }
            if (empty($bgrp)) {
                $flag = false;
                echo "Please fillup Blood Group.<br>";
            }
            if (empty($dob)) {
                $flag = false;
                echo "Please fillup DOB.<br>";
            }
            if (empty($email)) {
                $flag = false;
                echo "Please fillup Email.<br>";
            }
            if (empty($phn)) {
                $flag = false;
                echo "Please fillup Phone/Mobile.<br>";
            }
            if (empty($pad)) {
                $flag = false;
                echo "Please fillup present address.<br>";
            }
            if (empty($username)) {
                $flag = false;
                echo "Please fillup Username.<br>";
            }
            if (empty($password)) {
                $flag = false;
                echo "Please fillup Password.<br>";
            }
            if (empty($Cpassword)) {
                $flag = false;
                echo "Please fillup Currect Password.<br>";
            }
            if ($flag === true) {
                echo "<p><u>Registration Successful.</u></p><br>";
		?>
		<table>
			<tr>
				<td>
					<fieldset>
						<legend><b>General Information</b></legend>
						<table>
							<tr>
							<th><label for="fname">>First Name:</label></th>
							<td><label for="">
								<?php echo $fname ?>
								</label></input></td>
								</tr>
								 <tr>
                                <th><label for="lname">Last Name:</label></th>
                                <td><label for="">
                                        <?php echo $lname ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                            <th><label for="Username">Username: </label></th>
                            <td>
                            <td><label for="">
                                    <?php echo $username ?>
                                </label></Input></td></Input>
           					 </td>
      						 </tr>
      						                             <tr>
                                <th><label for="email">Email: </label></th>
                                <td>
                                <td><label for="">
                                        <?php echo $email ?>
                                    </label></Input></td>
               					 </td>
          					  </tr>
          					  <tr>
                <th><label for="phn">Phone/Mobile: </label></th>
                <td>
                <td><label for="">
                        <?php echo $phn ?>
                    </label></Input></td>
               		 </td>
          		  	</tr>
          		  	 <tr>
         	   <th><label for="password">Password: </label></th>
           	 <td>
          	  <td><label for="">
                    <?php echo "********" ?>
                </label></Input></td>
           		 </td>
        		</tr>
        		 <tr>
            <th><label for="Cpassword">CPassword: </label></th>
           		 <td>
           		 <td><label for="">
                    <?php echo "********" ?>
                </label></Input></td>
          			  </td>
       				 </tr>
       				  <tr>
                                <th><label for="male">Gender: </label> </th>

                                <td><label for="">
                                        <?php echo $gender ?>
                                    </label></Input></td>
                            </tr>
                             <tr>
                                <th><label for="date">Date of Birth</label></th>
                                <td><label for="">
                                        <?php echo $dob ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                                <th><label for="bgrp">Blood Group:</label> </th>
                                <td><label for="">
                                        <?php echo $bgrp ?>
                                    </label></td>
                            </tr>
                            <tr>
							<th><label for="address">Address:</label></th>
							<td><label for="">
								<?php echo $address ?>
								</label></input></td>
								</tr>

								 <td>
               					 <a href="Login.html">Log In</a>
           						 </td>
					</fieldset>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>