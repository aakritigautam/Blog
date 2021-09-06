<?php get_header();?>

<!-- MAIN -->
<main>
    <div class="container">
        <!--content head-->
        <div class="sh-content-head sh-content-head__flex-off">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sh-content-head__navigation">
                        <a href="#" class="sh-content-head__btn-prev sh-btn-icon">
                            <i class="icon-Arrow_Left"></i>
                            <span>Previous Post</span>
                        </a>
                        <a href="#" class="sh-content-head__btn-next sh-btn-icon">
                            <span>Next Post</span>
                            <i class="icon-Arrow_Right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sh-content-head__right-col">
                        <div class="sh-content-head__text">
                            <div>Trending Posts</div>
                            <span>Sorted by Newest First</span>
                        </div>
                        <div class="sh-content-head__control">
                            <a href="#" class="sh-btn-icon"><i class="icon-Grid_View"></i></a>
                            <a href="#" class="sh-btn-icon active"><i class="icon-Tile_View"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--sections-->
        <div class="row">
            <div class="col-lg-8">
                <!--section-->
                <div class="sh-section">
                    <div class="sh-section__head">
                    <?php
                                
                                while (have_posts()):
                                   the_post();
                                   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                   $reading_time = get_post_meta(get_the_ID(),"reading_time",1);
                                
                         ?>

                        <a href="#" class="sh-section__avatar sh-avatar"><img src="images/avatars/avatar-02.png" alt=""></a>
                        <div>
                            <a href="#" class="sh-section__name"><?php the_title();?></a>
                            <span class="sh-section__passed"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></span>
                        </div>
                        <a href="#" class="sh-section__link sh-btn-icon"><i class="icon-Link"></i></a>
                    </div>
                    <div class="sh-section__content">
                    <div class="sh-section__image">
                            <a href=""><img src="<?php echo $featured_img_url; ?>" alt=""></a>
                        </div>
                        <p><?php echo get_the_content();?> </p>

                        <?php comments_template(); ?>
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                        <?php endwhile; 
                    ?>
                        
                    </div>
                    <div class="sh-section__footer">
                        <a href="#" class="sh-section__btn-upvote sh-btn-icon"><i class="icon-Upvote"></i></a>
                        <a href="#" class="sh-section__btn-downvote sh-btn-icon"><i class="icon-Downvote"></i></a>
                        <a href="#" class="sh-section__btn-repost sh-btn-icon"><i class="icon-Repost"></i></a>
                        <a href="#" class="sh-section__btn-like sh-btn-icon"><i class="icon-Favorite_Full"></i><span>1,274</span></a>
                        <a href="#" class="sh-section__btn-comment sh-btn-icon"><i class="icon-Comment_Full"></i><span>982</span></a>
                        <div class="sh-section__btns-right">
                            <a href="#" class="sh-section__btn-awesome">Awesome</a>
                            <div class="sh-section__btn-stat sh-btn-icon">
                                <i class="icon-Stat"></i>
                                <div class="sh-statistic__arrow"></div>
                                <div class="sh-statistic">
                                    <div class="sh-statistic__head">
                                        <p>Post Stats</p>
                                        <div class="sh-statistic__close sh-btn-icon"><i class="icon-Cancel"></i></div>
                                    </div>
                                    <div class="sh-statistic__content">
                                        <div id="curve_chart"></div>
                                    </div>
                                    <div class="sh-statistic__footer">
                                        <div class="sh-statistic__band">
                                            <i class="icon-Upvote"></i>
                                            <div class="sh-statistic__band-section">
                                                <div style="width: 80%;"><span>9,217</span><span>395</span></div>
                                            </div>
                                            <i class="icon-Downvote"></i>
                                        </div>
                                        
                                        <a href="#">
                                            <i class="icon-Favotire_empty"></i>
                                            <span>347 Favorites</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <script>
                                require(['app'], function () {
                                    require(['modules/statistic']);
                                    require(['modules/googleCharts']);
                                });
                            </script>
                            <a href="#" class="sh-section__btn-options sh-btn-icon"><i class="icon-Options"></i></a>
                            <a href="#" class="sh-section__btn-share sh-btn-icon"><i class="icon-Share"></i></a>
                        </div>
                    </div>
                    <div class="sh-section__feeling">
                        <div class="sh-feeling">
                            <a href="#" rel="tooltip" data-original-title="Happy"><img src="fonts/icons/sharehub/svg/Happy.svg" alt=""><span>126</span></a>
                            <a href="#" rel="tooltip" data-original-title="Lol"><img src="fonts/icons/sharehub/svg/LOL.svg" alt=""><span>256</span></a>
                            <a href="#" rel="tooltip" data-original-title="Surprised"><img src="fonts/icons/sharehub/svg/Surprised.svg" alt=""><span>741</span></a>
                            <a href="#" rel="tooltip" data-original-title="Sad"><img src="fonts/icons/sharehub/svg/Sad.svg" alt=""><span>2K</span></a>
                            <a href="#" rel="tooltip" data-original-title="Tongue Out"><img src="fonts/icons/sharehub/svg/Tongue_Out.svg" alt=""><span>245</span></a>
                            <a href="#" rel="tooltip" data-original-title="No words"><img src="fonts/icons/sharehub/svg/No_words.svg" alt=""><span>237</span></a>
                            <a href="#" rel="tooltip" data-original-title="Love"><img src="fonts/icons/sharehub/svg/Love.svg" alt=""><span>1,236</span></a>
                            <a href="#" rel="tooltip" data-original-title="Blushing"><img src="fonts/icons/sharehub/svg/Blushing.svg" alt=""><span>365</span></a>
                            <a href="#" rel="tooltip" data-original-title="Cool"><img src="fonts/icons/sharehub/svg/Cool.svg" alt=""><span>412</span></a>
                            <a href="#" rel="tooltip" data-original-title="Angry"><img src="fonts/icons/sharehub/svg/Angry.svg" alt=""><span>478</span></a>
                        </div>
                    </div>
                </div>
                <div class="sh-add-comment">
                    <form action="#"><input type="text" class="form-control ttg-border-none" placeholder="Add a Comment"/></form>
                    <div class="sh-add-comment__content">
                        <a href="#" class="sh-add-comment__btn-addimg sh-btn-icon"><i class="icon-Add_Image"></i></a>
                        <span>Remember Community Guidelines</span>
                        <a href="#" class="sh-add-comment__btn-save sh-btn-icon"><span>180</span><i class="icon-Submit_Tick"></i></a>
                    </div>
                </div>
                <div class="sh-comments">
                    <div class="sh-comments__head">
                        <div class="sh-comments__title">214 Comments</div>
                        <div class="sh-comments__options">
                            <span>Sort by:</span>
                            <a href="#" class="sh-comments__btn-image sh-btn-icon"><i class="icon-Image"></i></a>
                            <a href="#" class="sh-comments__btn-upvote sh-btn-icon"><i class="icon-Upvote"></i></a>
                            <a href="#" class="sh-comments__btn-down sh-btn-icon"><i class="icon-Downvote"></i></a>
                            <a href="#" class="sh-comments__btn-expand sh-btn-icon"><i class="icon-Expand_all"></i></a>
                        </div>
                    </div>
                            </div>
            </div>
            <div class="col-lg-4">
                <aside class="sh-aside">
                <?php $args=[ 
                                'posts_per_page' => 5,
                                'post_status'=> "publish",
                                'offset'=>1
                                
                            ];
                                $query=new WP_Query($args);
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                       $query->the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                             ?>
                    <!--section-->
                    <div class="sh-section">
                   
                        <div class="sh-section__head">
                       
                            <a href="#" class="sh-section__avatar sh-avatar"><img src="images/avatars/avatar-03.png" alt=""></a>
                            <div>
                                <a href="#" class="sh-section__name"><?php the_title();?></a>
                                <span class="sh-section__passed"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></span>
                            </div>
                            <a href="#" class="sh-section__link sh-btn-icon"><i class="icon-Link"></i></a>
                        </div>
                        <div class="sh-aside__image">
                        <a href="<?php the_permalink();?>"><img src="<?php echo $featured_img_url;?>" alt=""></a>
                    </div>
                        <div class="sh-section__content">
                            <p><?php echo wp_trim_words(get_the_content(), 18);?></p>
                        </div>
                        <div class="sh-section__footer">
                            <a href="#" class="sh-section__btn-upvote sh-btn-icon"><i class="icon-Upvote"></i></a>
                            <a href="#" class="sh-section__btn-downvote sh-btn-icon"><i class="icon-Downvote"></i></a>
                            <a href="#" class="sh-section__btn-repost sh-btn-icon"><i class="icon-Repost"></i></a>
                            <a href="#" class="sh-section__btn-like sh-btn-icon"><i class="icon-Favorite_Full"></i><span>1,274</span></a>
                            <a href="#" class="sh-section__btn-comment sh-btn-icon"><i class="icon-Comment_Full"></i><span>982</span></a>
                        </div>
                        
                        
                    </div>
                    <?php endwhile;
                        endif;?>

                    

                    <!--section-->
                    
                </aside>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<?php get_footer();?>
</body>
</html>