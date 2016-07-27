<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Register</h1>
                        <hr class="small">
                        <span class="subheading">Register Here.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<form action="<?php echo base_url().'register/add.html'?>" method="post">
					<?php if($this->session->flashdata('succReg')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Registered.</p>
						</div>
					<?php endif;?>
					<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
					 <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>First Name</label>
                           <input type="text" name="firstName" class="form-control" placeholder="First Name" value="<?php echo set_value('firstName');?>" />
                            
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Last Name</label>
                           <input type="text" name="lastName" class="form-control" placeholder="Last Name" value="<?php echo set_value('lastName');?>" />
                           
                        </div>
                    </div>
					
					 <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
							<input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email');?>" />
              
                        </div>
                    </div>
					
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username');?>" />
                           
                        </div>
                    </div>
					 <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password');?>"/>                       
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default pull-right">Register</button>
                        </div>
                    </div>
					
				</form>
            </div>
        </div>
    </div>

    <hr>