<br><br>
<?php
  $sql1="SELECT * FROM contact_details ORDER BY id DESC LIMIT 0,1";
  $res1       = $conn->query($sql1);
  $data       = $res1->fetch_assoc();
  $email      = !empty($data['email'])?$data['email']:'';
  $mobile     = !empty($data['mobile'])?$data['mobile']:'';
  $address    = !empty($data['address'])?$data['address']:'';
  $google_map = !empty($data['google_map'])?$data['google_map']:'';
  $facebook   = !empty($data['facebook'])?$data['facebook']:'';
  $google_plus   = !empty($data['google_plus'])?$data['google_plus']:'';
  $twitter    = !empty($data['twitter'])?$data['twitter']:'';
  $linkedin   = !empty($data['linkedin'])?$data['linkedin']:'';
  $youtube    = !empty($data['youtube'])?$data['youtube']:'';
  $instagram  = !empty($data['instagram'])?$data['instagram']:'';
  $id         = !empty($data['id'])?$data['id']:'';



?>

<div class="content-box">
	<form id="updateForm" rel="<?php echo $id; ?>" name="contact_details">
	<div class="row">
		<div class="col">
			<h4>Agent Details</h4>
		</div>
		<div class="col">
		</div>
	</div>
	<br>
	<div class="row">

	

		<div class="col">
			<div class="form-group">
				<label>Agent Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
			</div>
		</div>

	</div>
		<div class="row">
		<div class="col">
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address">
					<?php echo $address; ?>
				</textarea>
			</div>
		</div>
		

	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label>Region Assigned</label>
				<input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>">
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="google_plus" class="form-control" value="<?php echo $google_plus; ?>">
			</div>
		</div>
	</div>

		<div class="row">
		<div class="col">
			<div class="form-group">
				<label>Twitter Account URL</label>
				<input type="text" name="twitter" class="form-control" value="<?php echo $twitter; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<label>LinkedIn Account URL</label>
				<input type="text" name="linkedin" class="form-control" value=" <?php echo $linkedin; ?>">
			</div>
		</div>
	</div>

		<div class="row">
		<div class="col">
			<div class="form-group">
				
				<button class="btn btn-secondary">Save</button>
			</div>
		</div>
	</div>


</form>
</div>