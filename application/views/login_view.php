  <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Login </h1>
                        <hr class="small">
                        <span class="subheading">Login Here.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               
                <form action="<?php echo base_url().'login/auth.html'?>" method="post">
					<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username')?>" />                       
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"  value="<?php echo set_value('password')?>"/>                    
                        </div>
                    </div>
                 
                    
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default pull-right">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>