 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url();?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
					<?php foreach($getAllUserPosts as $posts):?>
                    <a href="<?php echo base_url().'blog-view/details/'.$posts->slug;?>">
                        <h2 class="post-title">
                           <?php echo $posts->title;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $posts->content;?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $posts->first_name .$posts->last_name;?></a> on <?php echo $posts->updated_at;?></p>
					
					<?php endforeach; ?>
                </div>
                <hr>
               
                

            </div>
        </div>
    </div>

    <hr>