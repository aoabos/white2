<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
</div>
<section id="wrapper">
        <article class="post"><header><h1><?php $this->title() ?></h1>
            <h2 class="headline"><?php $this->date('F j, Y'); ?></h2><h2 class="headline">&nbsp;<?php $this->category(','); ?></h2>
        <section id="post-body">
<ul class="view-image2">
            <?php $this->content(); ?>
</ul>
</section>
</article>
</header><!-- end #header -->
</div><!-- end #main-->
<div id="comment"></div>
<script>
var disq = new iDisqus('comment', {
forum: 'aoabos',
api: 'https://api.fadedream.com/disqus/api',
site: 'https://fadedream.com',
mode: 1,
timeout: 3000,
init: true
});
</script>
<?php $this->need('footer.php'); ?>