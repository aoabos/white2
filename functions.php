<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    {
     $logoname = new Typecho_Widget_Helper_Form_Element_Text('logoname', NULL, NULL, _t('首页头部文字'), _t('在这里输入首页头部文字'));
    $form->addInput($logoname);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('输入favicon的链接，请带上http或https'));
    $form->addInput($favicon);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('Logo'), _t('输入首页头像的链接，请带上http或https'));
    $form->addInput($logo);

    $abouturl = new Typecho_Widget_Helper_Form_Element_Text('abouturl', NULL, NULL, _t('abouturl'), _t('首页头像点击的关于页面地址'));
    $form->addInput($abouturl);

     $description = new Typecho_Widget_Helper_Form_Element_Text('description', NULL, NULL, _t('网站简要说明'), _t('网站简要说明，用作seo'));
    $form->addInput($description);

    $indexsm = new Typecho_Widget_Helper_Form_Element_Text('indexsm', NULL, NULL, _t('网站首页说明'), _t('首页头像下的说明'));
    $form->addInput($indexsm);

    $icpNum = new Typecho_Widget_Helper_Form_Element_Text('icpNum', NULL, NULL, _t('网站备案号'), _t('在这里填入网站备案号'));
    $form->addInput($icpNum);

    $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('github地址'), _t('在这里填入你github 首页地址'));
    $form->addInput($github);

    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('新浪微博地址'), _t('在这里填入你新浪微博首页地址'));
    $form->addInput($weibo);
   
    $tuite = new Typecho_Widget_Helper_Form_Element_Text('tuite', NULL, NULL, _t('推特地址'), _t('在这里填入你推特首页地址'));
    $form->addInput($tuite);
 
}

}