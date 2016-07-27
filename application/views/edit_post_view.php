 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Edit Post</h1>                 
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
					<form action="<?php echo base_url().'post/update-post.html'?>" method="post">
						<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Edited A Post.</p>
						</div>
						<?php endif;?>
						<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Title</label>
								<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $getPosts->title;?>" />                       
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Content</label>
								<textarea class="form-control" name="content" placeholder="Content"><?php echo $getPosts->content;?></textarea>
							</div>
						</div>
					 
						
						<div class="row">
							<div class="form-group col-xs-12">
								<input type="hidden" name="editId" value="<?php echo $getPosts->id; ?>" />
								<button type="submit" class="btn btn-default pull-right">Edit Post</button>
			
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </article>

    <hr>