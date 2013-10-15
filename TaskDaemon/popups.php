<!-- popup form for login at header -->
        				<a href="#x" class="overlay" id="login_form"></a>
        					<div class="popup" id="popup_box">
            					<h2>Welcome User!</h2>
            					<p>Please enter your login and password here</p>
        							<form data-abide name="login" action="verify_user.php" method="post">    
						    	<div >
                				
                				<center><input class="glowing-border" type="text" id="email" name="email" placeholder="E-mail Address" required /></center>
            					</div>	
								
                                <div>
                			
                				<center>	<input class="glowing-border" type="password" id="password" name="password" placeholder="Password" required/></center>
            					</div>
							<div >
                				
                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="remind_me" name="remind_me"/>&nbsp;&nbsp;Remember me next time </input>
            				</div>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button-green big_button_padding" type="submit" name="login" id="login">LOGIN</button>&nbsp;&nbsp;
		<a  href="recover_password.php">Forgotten your password?</a>
									</form>
            					<a class="close" href="#close"></a>
							</div>
	
                    <!-- popup form for signup  at header-->
						<a href="#x" class="overlay" id="join_form"></a>
        				<div class="popup"> 
								<table>
        							<tr>
        								<td>
              								<h2>Signup for User</h2>
                                            <p>Please enter your details here</p>
												<form data-abide name="signup" action="db.php"  method="post">
													<div>
                										
                						<center>	<input class="glowing-border" type="text" id="email" name="email" placeholder="E-Mail Address" required/></center>
            										</div>
            						
                                    				<div>
 
                						<center>	<input class="glowing-border" type="password" id="password" name="password" placeholder="Password" required/> </center>
            										</div>
            						
                                					<div>
 
										<center>	<input class="glowing-border" type="text" id="name" name="name" placeholder="Fullname" required/></center>
            										</div>
            						
                               					    <div>
 
										<center>	<input class="glowing-border" type="text" id="address" name="address" placeholder="Address" required /></center>
           											</div>
                                    
													<div>
 
                						<center>	<input class="glowing-border" type="text" id="mobile" name="mobile" placeholder="Mobile" required/>
										</center>
            										</div>                
         				<br>								
              			<button class="button-green big_button_padding signup_button" type="submit" name="submit" id="submit" >SIGNUP</button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;&nbsp
      
						<a class="button-green big_button_padding" href="#login_form" id="login_pop">LOGIN</a>							                            						</form>
						
						
						<a class="close" href="#close"></a>
			 						
                                        </td>
									</tr>


<br>
										<table>
									<br>
										</table>

        						</table>

	        			</div>
						
                            <!-- popup form  for freelancer at index page-->
                            <a href="#x" class="overlay" id="join_form1"></a>
        						<div class="popup"> 
                                	
              									<h2>Signup for Freelancer</h2>
            									
                                                	<p>Please enter your details here</p>
														<form data-abide name="signup" action="db.php"  method="post">
															<div>
                												<label for="email">Login (Email)</label>
                												<input class="glowing-border" type="text" id="email" name="email" required/>
            												</div>
            						
                                    						<div>
                												<label for="password">Password</label>
                												<input class="glowing-border" type="password" id="password" name="password" required/>
            												</div>
            						
                                						    <div>
                												<label for="fullname">FullName</label>
                												<input class="glowing-border" type="text" id="name" name="name" required/>
            												</div>
            						
                                						    <div>
                												<label for="address">Address</label>
                												<input class="glowing-border" type="text" id="address" name="address" required/>
            												</div>
                                    
                                   							 <div>
                												<label for="mobile">Moblie</label>
                												<input class="glowing-border" type="text" id="mobile" name="mobile" required/>
            												</div>
 
                                						    <div>
                												<label for="state">State</label>
                												<input class="glowing-border" type="text" id="state" name="state" required/>
            												</div>

 	                              						    <div>
                												<label for="account_number">Account Number</label>
                												<input class="glowing-border" type="text" id="account_number" name="account_number" required/>
            												</div>
                                						    <div>
                												<label for="country">Country</label>
                												<input class="glowing-border" type="text" id="country" name="country" required/>
            												</div>
                                						    <div>
                												<label for="continent">Continent</label>
                												<input class="glowing-border" type="text" id="continent" name="continent" required/>
            												</div>
															<br>
		<button class="button-green big_button_padding rcorners_mid" type="submit" name="submit" id="submit" onClick="return validateForm()">SIGNUP</button>							                                               
&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;     
	 <a class="button-green big_button_padding rcorners_mid" href="#login_form" id="login_pop">LOGIN</a>
																</form>
                                        <a class="close" href="#close"></a>
       
       							</div>
								
<!-- popup form for login at check_login -->
        				<a class="overlay" id="login_form5" name="login_form5"></a>
        					<div class="popup">
            					<h2>Welcome User!</h2>
            					<p>Please enter</p>
        							<form data-abide name="login_form5" action="verify_user1.php" method="post">    
						    	<div >
                				
                				<center><input class="glowing-border" type="text" id="email" name="email" placeholder="E-mail Address Please" required /></center>
            					</div>	
								
                                <div>
                			
                				<center>	<input class="glowing-border" type="password" id="password" name="password" placeholder="Password" required/></center>
            					</div>
							<div >
                				
                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="remind_me" name="remind_me"/>&nbsp;&nbsp;Remember me next time </input>
            				</div>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button-green big_button_padding" type="submit" name="login" id="login">LOGIN</button>&nbsp;&nbsp;
		<a  href="recover_password.php">Forgotten your password?</a>
									</form>
            					<a class="close" href="#close"></a>
							</div>
	
