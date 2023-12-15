<?php get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title">Search Results for: "<?php echo esc_html(get_search_query()); ?>"</h1>
        </header>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>No search results found for "<?php echo esc_html(get_search_query()); ?>".</p>
        <?php endif; ?>
    </main>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


