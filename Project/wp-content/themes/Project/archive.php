<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="container">
<div class="item mt-5 pt-4">

                            <?php
                                if (have_posts()):
                                    while (have_posts()):
                                       the_post();
                                       $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                       $reading_time= get_post_meta(get_the_ID(),"reading_time",1) 
                             ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php the_permalink();?>">
                            <img class="card-img-bottom d-block radius-image" src="<?php echo $featured_img_url; ?>"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="col-lg-6 blog-details align-self mt-lg-0 mt-sm-5 mt-4">
                        <a href="<?php the_permalink();?>" class="blog-desc-big"><?php the_title();?>
                        </a>
                        <p><?php echo wp_trim_words(get_the_content(), 18);?></p>
                        <div class="author align-items-center mt-4 mb-1">
                            <a href="#author"><?php echo get_the_author();?></a> in <a href="#url">Design</a>
                        </div>
                        <ul class="blog-meta">
                            <li class="meta-item blog-lesson">
                                <span class="meta-value"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
 </span>
                            </li>
                            <li class="meta-item blog-students">
                                <span class="meta-value"> <?php echo get_post_meta(get_the_ID(),"reading_time",1);?></span>
                            </li>
                        </ul>
                    </div>
                </div>
				<hr>
            <?php endwhile;
        endif;?>
         <?php the_posts_pagination();?>
            </div>
</div>

<?php get_footer(); ?>
