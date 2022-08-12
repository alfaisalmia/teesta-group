<?php
    require_once 'header.php';
?>


<!-- 			CONTACT SESSION   -->
<div class="full_contact">
<div class="container">
	<div class="row">
		<div class="col-sm-7 contact">
					<h3>Information</h3><hr>
							<h4>Website: www.teestagroup.com</h4> 
							<p>Emails:teesta@teestagroup.com</p>
							<p>Inquiry: teesta@teestagroup.com</p>
							<p>To Place an Order or Sample:teesta@teestagroup.com  </p>
							<p>Media & General: teestabangladesh@gmail.com </p><br>




							<h4>Tessta Group: Corporate Dhaka Office:</h4>
							<p>Avenue# 3, House #15, Road#9, Mirpur D.O.H.S, Dhaka, Bangladesh <br>
	
								Email:teesta@teestagroup.com, Web: www.teestagroup.com
							</p><br>

							<h4>New York Office:</h4>
							<p>1263 Broadway, 11th Floor, New York, NY USA<br>
							Web: www.teestagroup.com
							</p><br>

							<h4>France Office :</h4>
							<p>
                                334 Rue Saint-Honoré'<br> 75001 Paris, France
							</p><br>
							
							<h4>Bank Information:</h4>
							<p>United Commercial Bank<br>Swift Code:UCBLBDDHGSN <br>Account# 0952101000012278 <br>Gulshan Corporate Branch,Dhaka, Bangladesh
							</p><br>

							

		</div>
	<?php include 'form_process.php'; ?>



<div class="col-sm-5">
			<h3>Drop a mail</h3><hr>
							
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
								  <div class="form-group">
									    <label for="exampleInputEmail1">Your Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" tabindex="1" value="<?php $name ?>">
                                        <span class="error"><?php echo $name_error ?></span>
								  </div>
								  <div class="form-group">
									    <label for="exampleInputPassword1">Your Email address</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" name="email"placeholder="" tabindex="2" value="<?php $name ?>" > 
                                        <span class="error"><?php echo $email_error ?></span>
								  </div>
								  <div class="form-group">
									    <label for="exampleInputPassword1">Subject</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="subject" tabindex="3" value="<?php $name ?>" placeholder="" >
                                         <span class="error"><?php echo $sub_error ?></span>
								  </div>
								  <div class="form-group">
									    <label for="exampleInputPassword1">Message</label><br>
                                        <textarea name="msg" tabindex="4"  value="<?php $name ?>" id=""></textarea>
                                        <span class="error"><?php echo $msg_error ?></span>
								  </div>
                 
								 
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                <span class="success"><?php echo $success ;?></span>
								</form>
		</div>


		</div>
	</div>
</div>


<!-- 		MAP AREA -->
<div class="view_map">
	<div class="container">
		<div class="row">
			<h1>View On Map</h1>
		</div>
	</div>
</div>

<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2075661260606!2d-73.92709248517691!3d40.69142604681192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25c0df253a7e1%3A0x2887dfda41f0d3a7!2s1263+Broadway%2C+Brooklyn%2C+NY+11221%2C+USA!5e0!3m2!1sen!2sbd!4v1513181902085" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>



<!-- 		Footer Section start from here -->
<?php
require_once 'footer.php';
?>
