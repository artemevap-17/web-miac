<?php get_header(); ?>
<div class="news-block container">
    <div class="title">
        <h3>Новости</h3>
    </div>
    <div class="news-cards">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php echo get_the_permalink(); ?>" class="card">
            <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <span>ЗДРАВООХРАНЕНИЕ</span>
                <?php the_excerpt(); ?>
                <p class="card-text"><?php the_time('j F Y'); ?></p>
            </div>
        </a>
        <?php endwhile; else: ?>
            Записей нет.
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>