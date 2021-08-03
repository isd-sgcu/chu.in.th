<!-- <?= __('By', 'sage'); ?> -->
โดย
<?php if(function_exists('coauthors')): ?>
    <?php $i = 0; ?>
    <?php $len = count(get_coauthors()); ?>
    <?php foreach( get_coauthors() as $coauthor ): ?>
        <a href="<?php echo get_author_posts_url($coauthor->id); ?>" rel="author" class="fn"><?php echo $coauthor->display_name ?></a><?php echo (($i < $len - 1) ? ', ' : ''); ?>
        <?php $i++; ?>
    <?php endforeach; ?>
<?php else: ?>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
        <?php the_author(); ?>
    </a>
<?php endif; ?>
เมื่อ <time class="updated" datetime="<?php echo get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>
