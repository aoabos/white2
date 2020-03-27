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
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<script src="/usr/themes/white/style.js"></script>
</head>
<body>
<nav class="main-nav">
<a href="https://fadedream.com/guestbook.html">留言板</a>
<a href="https://fadedream.com/time.html">归档</a>
<a href="https://fadedream.com/links.html/">邻居</a>
<a href="https://fadedream.com/feed">订阅</a></nav>
<section id="wrapper">
<div class="profile"><section id="wrapper"><header id="header">
<a href="<?php $this->options->abouturl() ?>"><img id="avatar" src="<?php if ($this->options->logo): $this->options->logo();
else: $this->options->themeUrl('img/logo.png');endif; ?>"></a>
<h1><?php $this->options->logoname() ?></h1>
<h2><?php $this->options->indexsm() ?></h2>
</header>
</section>
</div>
<ul id="post-list">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    </div>
</header><!-- end #header -->