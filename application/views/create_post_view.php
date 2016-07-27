 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Create Post</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<form action="<?php echo base_url().'create-post/create.html'?>" method="post">
						<?php if($this->session->flashdata('createSucc')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Created A Post.</p>
						</div>
					<?php endif;?>
						<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Title</label>
								<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo set_value('title')?>" />                       
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Content</label>
								<textarea class="form-control" name="content" placeholder="Content"><?php echo set_value('content')?></textarea>
							</div>
						</div>
					 
						
						<div class="row">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-default pull-right">Create Post</button>
			
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </article>

    <hr>