<?php get_header();?>
<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'main-menu', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <!--content head-->
            <div class="sh-content-head">
                <div class="sh-content-head__btn-calendar sh-btn-icon">
                    <i class="icon-Calender"></i>
                    <div class="sh-calendar">
                        <div class="sh-calendar__head">
                            <div>
                                <span>Browse front page posts by date</span>
                                <p>Missed a day browsing? Don’t worry we got you!</p>
                            </div>
                            <div class="sh-calendar__close sh-btn-icon"><i class="icon-Cancel"></i></div>
                        </div>
                        <div class="sh-calendar__content">
                            <div class="sh-calendar__datepicker"></div>
                        </div>
                        <div class="sh-calendar__footer">
                            <p><a href="#">510 front page posts</a> found on 23 September, 2016</p>
                        </div>
                    </div>
                </div>
                <script>
                    require(['app'], function () {
                        require(['modules/datePicker']);
                    });
                </script>
                <h1>The <a href="#">most awesome</a> posts on gaming, sorted by
                    <div class="sh-content-head__popularity-btn">
                        <span>popularity</span>
                        <div class="sh-content-head__popularity-content">
                            <div class="sh-content-head__popularity-head">
                                <span>Popularity</span>
                                <span>Currently Selected</span>
                            </div>
                            <div class="sh-content-head__popularity-body">
                                <ul>
                                    <li><a href="#">Newest first</a></li>
                                    <li><a href="#">Highest scoring</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </h1>
                <div class="sh-content-head__control">
                    <a href="#" class="sh-btn-icon"><i class="icon-Timeline_View"></i></a>
                    <a href="#" class="sh-btn-icon"><i class="icon-Grid_View"></i></a>
                    <a href="#" class="sh-btn-icon active"><i class="icon-Tile_View"></i></a>
                    <a href="#" class="sh-btn-icon"><i class="icon-Randomize"></i></a>
                </div>
            </div>
            <!--sections-->
            <div class="sh-section__wrap row"  style="visibility : visible";>
                <!--section-->
                <?php 
                            $args=[
                                'posts_per_page'=>20,
                                'post_status'=>"publish"

                            ];
                            $query=new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    $featured_img_url=get_the_post_thumbnail_url(get_the_ID(),'full');



                            ?>
                <div class="sh-section__item col-lg-6">
                    
                   
                            <div class="sh-section">
                        <div class="sh-section__head">
                       
                            <a href="single_post.html" class="sh-section__avatar sh-avatar"><img src="<?php echo get_template_directory_uri();?>/assets/images/avatars/avatar-02.png" alt=""></a>
                            <div>
                                <a href="<?php the_permalink(); ?>" class="sh-section__name"><?php the_title();?></a>
                                <span class="sh-section__passed"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
</span>
                            </div>
                            <a href="#" class="sh-section__link sh-btn-icon"><i class="icon-Link"></i></a>
                        </div>
                        <div class="sh-section__content">
                            <p><?php echo wp_trim_words(get_the_content(), 18);?></p>
                            <div class="sh-section__image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url;?>" alt=""></a>
                            </div>
                           
                        </div>
                        <div class="sh-section__footer">
                            <a href="#" class="sh-section__btn-upvote sh-btn-icon"><i class="icon-Upvote"></i></a>
                            <a href="#" class="sh-section__btn-downvote sh-btn-icon"><i class="icon-Downvote"></i></a>
                            <a href="#" class="sh-section__btn-repost sh-btn-icon"><i class="icon-Repost"></i></a>
                            <a href="#" class="sh-section__btn-like sh-btn-icon"><i class="icon-Favorite_Full"></i><span>1,274</span></a>
                            <a href="#" class="sh-section__btn-comment sh-btn-icon"><i class="icon-Comment_Full"></i><span><?php comments_template('/comments.php'); ?></span></a>
                            <a href="#" class="sh-section__btn-share sh-btn-icon"><i class="icon-Share"></i></a>
                        </div>
                    </div>
                    
                </div>
                <?php endwhile;
                            endif;?>
         
                <!--section-->
                
                </div>
            </div>
        </div>
    </main>

    <?php get_footer();?>
</body>
</html>