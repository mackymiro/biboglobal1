 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                       <h1>My Posts</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php foreach($getUserPosts as $posts): ?>
				<div id="post-preview<?php $posts->id;?>" class="post-preview">
					<a href="<?php echo base_url().'blog-view/details/'.$posts->slug;?>">
                        <h2 class="post-title">
                           <?php echo $posts->title;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $posts->content;?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $posts->first_name .$posts->last_name;?></a> on <?php echo $posts->updated_at;?></p>
					<a href="<?php echo base_url().'post/edit/id/'.$posts->id; ?>" >Edit</a> | 
					<a href="#">Delete</a>
					
                </div>
				<?php endforeach; ?>
                <hr>
               
           
            </div>
        </div>
    </div>

    <hr>
