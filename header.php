<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta content="Sensedia — Developers Portal" property="og:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="container container-navbar">
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                </div>
                    
                <div class="navbar-box">
                    <nav role="navigation" class="nav-menu w-nav-menu">
                        <?php wp_nav_menu('menu_class=navbar-menu'); ?>
                    </nav>
                    <?php if (!um_profile_id()): ?>
                        <a href="<?php echo esc_url( home_url( '/login' ) ); ?>" class="button-primary is-small order-last w-inline-block">
                            <div class="button-primary-text">Login</div>
                        </a>
                    <?php else: ?>
                        <ul id="menu-menu-top" class="navbar-menu">
                            <li class="user">
                                <?php if(um_profile('profile_photo')): ?>
                                    <img src="<?php echo um_get_avatar_uri( um_profile('profile_photo'), 44 ); ?>" alt="image user" />
                                <?php endif ?>

                                <div class="user-box">
                                    <div class="user-container">
                                        <div class="avatar">
                                            <?php if(um_profile('profile_photo')): ?>
                                                <img src="<?php echo um_get_avatar_uri( um_profile('profile_photo'), 65 ); ?>" alt="image user" />
                                            <?php endif ?>
                                        </div>
                                        <div class="user-info">
                                            <span class="user-name">
                                                <?php echo um_user('display_name') ?>
                                            </span>
                                            <span class="user-email">
                                                <?php echo um_user('user_email') ?>
                                            </span>
                                            <div class="user-actions">
                                                <button class="btn-outline-user" onclick="window.location.href='<?php echo esc_url( home_url( '/user' ) ); ?>'">
                                                    Dashboard
                                                </button>
                                                <button class="btn-outline-user" onclick="window.location.href='<?php echo esc_url( home_url( '/logout' ) ); ?>'">
                                                    Logout
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php endif ?>
                </div>

                <div class="mobile-box">
                    <div class="icon-menu">
                        <em class="fas fa-bars"></em>
                    </div>
                </div>
            </div>
        </header>