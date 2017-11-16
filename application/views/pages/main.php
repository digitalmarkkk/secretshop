<section>
	<div class="logo-main">
		<div class="main-block">
			<div class="container">
	            <div class="row">
	            	<div class="col-lg-4 col-md-4 col-sm-4"></div>
	            	<div class="col-lg-4 col-md-4 col-sm-4">
	            		<div class="logo-area text-align-center">
	            			<img src="<?php echo assets_url(); ?>images/ub-logo.png" />
	            		</div>
		            </div>
	            </div>
	        </div>
		</div>
	</div>
</section>
<section>
	<div class="container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-3"></div>
        	<div class="col-lg-6 col-md-6 col-sm-6">
        		<div class="login-block text-align-center">
        			<div class="login-area">
        				<img src="<?php echo assets_url(); ?>images/userv-logo-reverse.png" class="m-b-1"/>
        				<?php echo form_open(); ?> 
        					<fieldset class="text-align-center">
        						<input type="text" name="employee_number" class="form-control b-a-0 m-b-1" placeholder="Employee No" />
        						<input type="password" name="password" class="form-control b-a-0 m-b-1 <?php echo (form_error('password') ? 'form-input-danger' : '') ?>" placeholder="Password"/>
        						<button class="btn bcolor1 btn-block b-a-0" type="submit">Login</button>
        					</fieldset>
        				<?php echo form_close(); ?>
        			</div>
        		</div>
            </div>
        </div>
	</div>
</section>