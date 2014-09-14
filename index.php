<?php get_header(); ?>
<section id="content" role="main">
    <div class="info">
        <div id="mc_embed_signup">
            <form class="validate" id="mc-embedded-subscribe-form" action="http://habit-free.us7.list-manage1.com/subscribe/post?u=77f075e2753009ae77c7b56f5&amp;id=051eb7f324" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
                    <strong>Escape Internet sexual addiction.</strong>&nbsp;&nbsp;Sign up for our free course:&nbsp;
                    <input class="email" id="mce-EMAIL" type="email" name="EMAIL" placeholder="email address" required="" value="" /> 
                    <input class="button" id="mc-embedded-subscribe" type="submit" name="subscribe" value="Subscribe" />
            </form>
        </div>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>