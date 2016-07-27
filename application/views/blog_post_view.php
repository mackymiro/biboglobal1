 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $getBlogDetails->title;?></h1>
                        
                        <span class="meta">Posted by <a href="#"><?php echo $getBlogDetails->first_name;?><?php echo $getBlogDetails->last_name;?></a> on <?php echo $getBlogDetails->updated_at;?></span>
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
					<?php echo $getBlogDetails->content; ?>
                </div>
				<br>
				<form action="<?php echo base_url().'blog-view/add-comments'?>" method="post">
					<?php if($this->session->flashdata('comments')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Added A Comment.</p>
						</div>
						<?php endif;?>
					<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						 <div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Comments</label>
								<textarea name="comments" class="form-control" placeholder="Comments...."></textarea>
							</div>
						</div>
					</div>
					 <div class="row">
							<div class="form-group col-xs-12">
								<?php if($this->session->userdata('loggedIn')): ?>
									<input type="hidden" name="slugName" value="<?php echo $getBlogDetails->slug; ?>" />
									<input type="hidden" name="blogId" value="<?php echo $getBlogDetails->id; ?>" />
									<button type="submit" class="btn btn-default pull-right">Add Comments</button>
								<?php else: ?>
									<a href="<?php echo base_url().'login.html'?>" class="btn btn-default pull-right">Login to comment</a>
								<?php endif;?>
							</div>
					 </div>
				</form>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<?php foreach($getComments as $comment): ?>
						<p><?php echo $comment->content;?></p>
					<?php endforeach;?>
                </div>
            </div>
        </div>
    </article>

    <hr>