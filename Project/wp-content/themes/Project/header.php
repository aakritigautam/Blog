<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Sharehub - Responsive HTML5 Template">
    <meta name="author" content="etheme.com">
    <title>Blog</title>

    <!-- STYLESHEET -->
    <!-- FONTS -->
    <!-- Muli -->
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">

    <!-- icon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/fonts/icons/fontawesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/fonts/icons/sharehub/style.css"/>

    <!-- Vendor -->
    <!-- Custom -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendor/magnificPopup/dist/magnific-popup.css" type="text/css" />
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet"/>

    <!-- JAVA SCRIPT -->
    <!-- require -->
    <script data-main="js/app" src="<?php echo get_template_directory_uri();?>/assets/vendor/require/require.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendor/datePicker/css/datepicker.css"/>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="49iCReqp"></script>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="sh-header">
            <div class="container">
                <a href="index.php" class="sh-logo">
                    <img src="fonts/icons/sharehub/svg/Sharehub.svg" alt="">
                    <img src="fonts/icons/sharehub/svg/Sharehub-invert.svg" alt="">
                </a>
                <div class="sh-header__btn-dropdown sh-btn-icon"><i class="icon-Arrow_Down"></i></div>
                <ul class="sh-header__dropdown">
                <?php/*
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'sh-header__btn-dropdown sh-btn-icon',
           
            'menu_class'        => 'sh-header__dropdown',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );*/
        ?>
                    
                </ul>
                <script>
                    require(['app'], function () {
                        require(['modules/menu']);
                    });
                </script>
                <nav>
                    <ul class="sh-header__menu">
                    <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            
           
            'menu_class'        => 'sh-header__menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
                      
            
                        
                    </ul>
                </nav>
                <div class="sh-header__search">
                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <label>
                            <input type="search" name="s" class="form-control" placeholder="Search Posts, hashtags, categoires" value= "<?php echo get_search_query();?>">
                            <i class="icon-Search"></i>
                        </label>
                    </form>
                </div>
                <div class="sh-header__control">
                    <a href="#" class="sh-header__btn-like sh-btn-icon"><i class="icon-Favotire_empty"></i></a>
                    <a href="#" class="sh-header__btn-comment sh-btn-icon"><i class="icon-Comment"></i></a>
                    <a href="#" class="sh-header__btn-notification sh-btn-icon"><i class="icon-Notification"></i></a>
                    <a href="#" class="sh-header__avatar sh-avatar"><img src="images/avatars/avatar-01.png" alt=""></a>
                    <a href="#" class="sh-header__btn-upload sh-btn"><i class="icon-Upvote"></i> Upload</a>
                </div>
                <div class="sh-user">
                    <div class="sh-user__head">
                        <p>3 New Notifications</p>
                        <a href="#" class="sh-user__close sh-btn-icon"><i class="icon-Cancel"></i></a>
                    </div>
                    <div class="sh-user__content">
                        <div>
                            <div><a href="#"><img src="fonts/icons/sharehub/svg/Badge_03.svg" alt=""></a></div>
                            <div>
                                <div>New Badge Earned</div>
                                <span>Get 1K upvotes on your post</span>
                            </div>
                        </div>
                        <div>
                            <div><a href="#"><img src="images/avatars/user-02.jpg" alt=""></a></div>
                            <div>
                                <div>Life choices of my cat</div>
                                <span>Earned <i class="icon-Upvote"></i> 210</span>
                            </div>
                        </div>
                    </div>
                    <div class="sh-user__footer">
                        <a href="#" class="sh-comments__avatar sh-avatar"><img src="images/avatars/avatar-01.png" alt=""></a>
                        <div>
                            <a href="#">bastion . </a>
                            <span>1 hour ago</span>
                            <p>Hey, how’s it going nathun?</p>
                        </div>
                    </div>
                </div>
                <script>
                    require(['app'], function () {
                        require(['modules/userToggle']);
                    });
                </script>
            </div>
        </div>

        <div class="sh-upload">
            <div class="sh-upload__head">
                <form action="#"><input type="text" class="form-control ttg-border-none" placeholder="Paste URL or image link or add text here" /></form>
            </div>
            <div class="sh-upload__content">
                <img src="fonts/icons/sharehub/svg/Upload_graphic.svg" alt="">
                <p>Drag Images here or <a href="#" class="sh-btn">Browse</a> from your computer. </p>
            </div>
            <div class="sh-upload__footer">
                <a href="#">
                    <i class="icon-Make_a_meme"></i>
                    <span>Make a meme</span>
                </a>
                <a href="#">
                    <i class="icon-Upload_Image"></i>
                    <span>Video to GIF</span>
                </a>
                <a href="#">
                    <i class="icon-Video_to_GIF"></i>
                    <span>Browse your uploads</span>
                </a>
            </div>
        </div>
        <script>
            require(['app'], function () {
                require(['modules/main']);
                require(['modules/upload']);
            });
        </script>
    </header>