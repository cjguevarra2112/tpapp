<div class="panel panel-success" id="register-panel">
	<div class="panel-heading">
		<h1> Join the faculty </h1>
	</div>
	<div class="panel-body">
		<?php echo validation_errors(); ?>
		<?php echo form_open(base_url('register')); ?>
		
			<div class="form-group">
				<input type="text" class="form-control" name="fname" placeholder="Your first name"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="lname" placeholder="Your last name"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="email" placeholder="Your email"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="password" placeholder="Choose a password"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="confpassword" placeholder="Your password again" />
			</div>
			<div class="form-group">
				<input type="reset" class="btn btn-danger" />
				<input type="submit" class="btn btn-success" value="Register" />
			</div>
		</form>
	</div>
</div>