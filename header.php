<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="<?php $this->options->title() ?>">
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<meta name="renderer" content="webkit">
<meta name="description" content="<?php $this->options->description() ?> " />
<link rel="shortcut icon" href="<?php if ($this->options->favicon): $this->options->favicon();
else: $this->options->themeUrl('img/favicon.ico');endif; ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('/css/main-170803.css'); ?>" />
<link rel="stylesheet" href="https://api.fadedream.com/disqus/dist/iDisqus.min.css" />
<script src="https://api.fadedream.com/disqus/dist/iDisqus.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//tokinx.github.io/ViewImage/view-image.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery.viewImage({
            'target': '.view-image img,.view-image2 a,.view-image3 a',
            'exclude': '.exc',
            'delay': 300
        });
    });
</script>

<!--
           ▄              ▄
          ▌▒█           ▄▀▒▌
          ▌▒▒▀▄        ▀▒▒▒▐
         ▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐
       ▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
     ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▐
    ▐▒▒▒▄▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▌
    ▌▒▒▐▄█▀▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐
   ▐▒▒▒▒▒▒▒▒▒▒▒▌██▀▒▒▒▒▒▒▒▒▀▄▌
   ▌▒▀▄██▄▒▒▒▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
   ▌▀▐▄█▄█▌▄▒▀▒▒▒▒▒▒░░░░░░▒▒▒▐
  ▐▒▀▐▀▐▀▒▒▄▄▒▄▒▒▒  typecho  ▒▌
  ▐▒▒▒▀▀▄▄▒▒▒▄▒▒▒▒▒▒░░░░░░▒▒▒▐
   ▌▒▒▒▒▒▒▀▀▀▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
   ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▐
    ▀ Vans  ▒▒▒▒▒▒▒▒▒▒▒▄▒▒▒▒▌
      ▀▄▒▒▒▒▒▒▒▒▒▒▄▄▄▀▒▒▒▒▄▀
     ▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀
--你看源码时_是否期待源码也同样注视(注释)着你
-->   
</head>
<body>
<nav class="main-nav">
<a href="<?php $this->options->siteUrl(); ?> ">首页</a>
<a href="https://fadedream.com/guestbook.html">留言板</a>
<a href="https://fadedream.com/time.html">归档</a>
<a href="https://fadedream.com/links.html/">邻居</a>
<a href="https://fadedream.com/feed">订阅</a></nav>
    