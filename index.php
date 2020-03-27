<?php
/**
 * 简约单栏主题
 * 
 * @package white
 * @author AoaBo's
 * @version 1.0
 * @link https://fadedream.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('top.php');
 ?>
<?php while($this->next()): ?>
<li><h2 class="headline"><a href="<?php $this->permalink() ?>"></h2>
<?php $this->title() ?><aside class="dates"><?php $this->date('F j, Y'); ?></aside></li>
<?php endwhile; ?>
</ul>
<nav id="post-nav">
<span class="next"><div style="float:left;"><span class="arrow"><?php $this->pageLink('←上一页'); ?></span></div>
<span class="next"><div style="float:right;"><span class="arrow"><?php $this->pageLink(' 下一页→', 'next')?></span></div>
</nav>
<!-- end #main-->
<?php $this->need('footer.php');