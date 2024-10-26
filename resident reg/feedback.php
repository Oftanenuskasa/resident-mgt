<div id="content" align="center">

          <div id="contact_form" >
            
                <form method="post" name="contact" action="#">
                
                    <input type="hidden" name="post" value=" Send " />
                  <label for="author">First Name:<span class = "errorN"><?php echo $fNameErr?></span></label> <input type="text" id="author" name="fName" class="required input_field" /><br><br>
                  <div class="cleaner_h10"></div>
                    <input type="hidden" name="post" value=" Send " />
                  <label for="author">Last Name:<span class = "errorN"><?php echo $lNameErr?></span></label> <input type="text" id="author" name="lName" class="required input_field" /><br><br>
                  <div class="cleaner_h10"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="email">Email:<span class = "errorN"><?php echo $emailErr?></span></label>
                  <input type="email" id="email" name="email" class="validate-email required input_field" required/>
                    <div class="cleaner_h10"></div><br>
                   
                    
                    <label for="text">Message:<span class = "errorN"><?php echo $bodyErr?></span></label> <textarea id="text" name="body" rows="0" cols="0" class="required" required></textarea>
                    <div class="cleaner_h10" id = "msg"></div>
                    
                    <input style="font-weight: bold;" type="submit" class="submit_btn" name="submit" id="submit" value=" Send " />
                    <input style="font-weight: bold;" type="reset" class="submit_btn" name="reset" id="reset" value=" Reset " />
                
              </form>
			</div>
			</div>
			<?php
if(isset($_POST['submit'])){
    if(!empty($fName)){
		if(!empty($lName)){
			if(!empty($email)){
				if(!empty($body)){
			
				
					include("mysqlconnect.php");
					$insert = "insert into feedback(fName,lName,email,body,postedDate) values('$fName','$lName','$email','$body','$posted')";
					$sql = mysqli_query($conn,$insert);
					if(!$sql){
					die("your comment not recieved ".mysqli_error($conn));
					}
					else{
					echo 'thanks for your comment';
					}
					}
				}
			}
		}
}
?> </div>