<?php
/**
 * archive
 *
 * @package custom
 */
$this->need('header.php'); ?>

</div>
<section id="wrapper">
<article class="post">
<header>
<h1><?php $this->title() ?></h1>
<h2 class="headline"><?php $this->date('F j, Y'); ?></h2>
</header>
<section id="post-body"></section>
</article>
<ul id="post-list">
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li><a href="{permalink}">{title}<aside class="dates">{year}-{month}-{day}</aside></li>'); ?>
    </ul>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>