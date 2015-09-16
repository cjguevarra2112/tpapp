<div class="panel panel-info" id="login-panel">
	<div class="panel-heading">
		<h1>Who's there?</h1>
	</div>

	<div class="panel-body">
		<?php echo validation_errors(); ?>
		
		<?php echo form_open(base_url('login'));?>
			<div class="form-group">
				<input type="text" class="form-control" name="login-email" placeholder="Your Email" required/>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="login-password" placeholder="Your Password" required/>
			</div>
			<div class="form-group">
				<input type="reset" class="btn btn-danger"/>
				<input type="submit" class="btn btn-primary" value="Sign in"/>
			</div>
		</form>
	</div>
</div>
