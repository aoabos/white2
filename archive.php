<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
</div>
<section id="wrapper">
<article class="post">
<header>
<h1><?php $this->archiveTitle(' &nbsp; ', '', ''); ?></h1>
</header>
<section id="post-body"></section>
</article>
<ul id="post-list">
<?php $this->widget("Widget_Archive@$category->mid" ,array('pageSize' => '3' ,'type' => 'category'), "mid= 2")->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
<nav id="post-nav">
<span class="next"><div style="float:left;"><span class="arrow"><?php $this->pageLink('←上一页'); ?></span></div>

<span class="next"><div style="float:right;"><span class="arrow"><?php $this->pageLink(' 下一页→', 'next')?></span></div>
</nav>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>