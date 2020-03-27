
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>页面丢失了 No Find！</title>
    <meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta name="description" content="<?php $this->options->title() ?>">
    <meta name="keywords" content="<?php $this->options->title() ?>">
    <link type="<?php if ($this->options->favicon): $this->options->favicon();
else: $this->options->themeUrl('img/favicon.ico');endif; ?>" href="<?php if ($this->options->favicon): $this->options->favicon();
else: $this->options->themeUrl('img/favicon.ico');endif; ?>" rel="shortcut icon">
    <link rel="alternate" type="application/rss+xml" title="RSS"  href="/feed" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
        /* Base */
        h1{
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 500;
            line-height: 32px;
        }
        h2{
            color: #4288ce;
            font-weight: 400;
            padding: 6px 0;
            margin: 6px 0 0;
            font-size: 18px;
            border-bottom: 1px solid #eee;
        }
        h3.subheading {
            color: #4288ce;
            margin: 6px 0 0;
            font-weight: 400;
        }
        h3{
            margin: 12px;
            font-size: 16px;
            font-weight: bold;
        }
        abbr{
            cursor: help;
            text-decoration: underline;
            text-decoration-style: dotted;
        }
        a{
            color: #333;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        .line-error{
            background: #f8cbcb;
        }

        .echo table {
            width: 100%;
        }

        .echo pre {
            padding: 16px;
            overflow: auto;
            font-size: 85%;
            line-height: 1.45;
            background-color: #f7f7f7;
            border: 0;
            border-radius: 3px;
            font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
        }

        .echo pre > pre {
            padding: 0;
            margin: 0;
        }
        /* Layout */
        .col-md-3 {
            width: 25%;
        }
        .col-md-9 {
            width: 75%;
        }
        [class^="col-md-"] {
            float: left;
        }
        .clearfix {
            clear:both;
        }
        @media only screen
        and (min-device-width : 375px)
        and (max-device-width : 667px) {
            .col-md-3,
            .col-md-9 {
                width: 100%;
            }
        }
        /* Exception Info */
        .exception {
            /*margin-top: 20px;*/
        }
        .exception .message{
            padding: 12px;
            border: 1px solid #ddd;
            border-bottom: 0 none;
            line-height: 18px;
            font-size:16px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }

        .exception .code{
            float: left;
            text-align: center;
            color: #fff;
            margin-right: 12px;
            padding: 16px;
            border-radius: 4px;
            background: #999;
        }
        .exception .source-code{
            padding: 6px;
            border: 1px solid #ddd;

            background: #f9f9f9;
            overflow-x: auto;

        }
        .exception .source-code pre{
            margin: 0;
        }
        .exception .source-code pre ol{
            margin: 0;
            color: #4288ce;
            display: inline-block;
            min-width: 100%;
            box-sizing: border-box;
            font-size:14px;
            font-family: "Century Gothic",Consolas,"Liberation Mono",Courier,Verdana;
            padding-left: 40px;
        }
        .exception .source-code pre li{
            border-left: 1px solid #ddd;
            height: 18px;
            line-height: 18px;
        }
        .exception .source-code pre code{
            color: #333;
            height: 100%;
            display: inline-block;
            border-left: 1px solid #fff;
            font-size:14px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }
        .exception .trace{
            padding: 6px;
            border: 1px solid #ddd;
            border-top: 0 none;
            line-height: 16px;
            font-size:14px;
            font-family: Consolas,"Liberation Mono",Courier,Verdana,"微软雅黑";
        }
        .exception .trace ol{
            margin: 12px;
        }
        .exception .trace ol li{
            padding: 2px 4px;
        }
        .exception div:last-child{
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        /* Exception Variables */
        .exception-var table{
            width: 100%;
            margin: 12px 0;
            box-sizing: border-box;
            table-layout:fixed;
            word-wrap:break-word;
        }
        .exception-var table caption{
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            padding: 6px 0;
        }
        .exception-var table caption small{
            font-weight: 300;
            display: inline-block;
            margin-left: 10px;
            color: #ccc;
        }
        .exception-var table tbody{
            font-size: 13px;
            font-family: Consolas,"Liberation Mono",Courier,"微软雅黑";
        }
        .exception-var table td{
            padding: 0 6px;
            vertical-align: top;
            word-break: break-all;
        }
        .exception-var table td:first-child{
            width: 28%;
            font-weight: bold;
            white-space: nowrap;
        }
        .exception-var table td pre{
            margin: 0;
        }

        /* Copyright Info */
        .copyright{
            margin-top: 24px;
            padding: 12px 0;
            border-top: 1px solid #eee;
        }

        /* SPAN elements with the classes below are added by prettyprint. */
        pre.prettyprint .pln { color: #000 }  /* plain text */
        pre.prettyprint .str { color: #080 }  /* string content */
        pre.prettyprint .kwd { color: #008 }  /* a keyword */
        pre.prettyprint .com { color: #800 }  /* a comment */
        pre.prettyprint .typ { color: #606 }  /* a type name */
        pre.prettyprint .lit { color: #066 }  /* a literal value */
        /* punctuation, lisp open bracket, lisp close bracket */
        pre.prettyprint .pun, pre.prettyprint .opn, pre.prettyprint .clo { color: #660 }
        pre.prettyprint .tag { color: #008 }  /* a markup tag name */
        pre.prettyprint .atn { color: #606 }  /* a markup attribute name */
        pre.prettyprint .atv { color: #080 }  /* a markup attribute value */
        pre.prettyprint .dec, pre.prettyprint .var { color: #606 }  /* a declaration; a variable name */
        pre.prettyprint .fun { color: red }  /* a function name */
    </style>
    <style>
        .froyo-frame{width:800px;margin:auto}
        .froyo-article{width:800px;margin:auto;animation:cont .3s}
        .froyo-nav{margin-left:-45px;width:565px}
        .froyo-nav-button{width:170px}
        .about-show{margin-top:3em;margin-bottom:3em}
        @media (min-width:320px) and (max-width:567px){.froyo-frame{width:100%;margin:auto}
        .wantcom{font-size:17px}
        .froyo-article{width:100%;margin:auto}
        .froyo-nav-button{width:47%}
        .links h4{font-size:1.3em;font-weight:800;margin-top:3.3em;margin-bottom:0}
        .blogname{width:135px}
    }
            @media (min-width:412px) and (max-width:737px){.blogname{width:225px}
    }
                @media (min-width:360px) and (max-width:640px){.blogname{width:175px}
        .froyo-nav-button{width:42%}
    }
                    @media (min-width:375px) and (max-width:767px){.froyo-frame{width:100%;margin:auto}
        .wantcom{font-size:17px}
        .froyo-article{width:100%;margin:auto}
        .froyo-nav-button{width:57%}
        .links h4{font-size:1.3em;font-weight:800;margin-top:3.3em;margin-bottom:0}
        .blogname{width:25%}
        .froyo-nav{width:30%;margin-right:15px;display:none;-webkit-box-shadow:0 5px 23px 3px rgba(0,0,0,.15);box-shadow:0 5px 23px 3px rgba(0,0,0,.15);border:1px solid #f5f5f5}
    }
                        @media (min-width:768px) and (max-width:991px){.froyo-nav{width:67%;display:none}
        .froyo-article{width:95%}
        .froyo-frame{width:95%}
        .mobile-nav{display:block;width:7%}
        .froyo-nav-button{width:77%}
        .froyo-nav{position:absolute;width:50%;top:3em;background:#f9f9f9;margin-left:0;right:0}
        .froyo-nav li{display:block;list-style:none;margin-right:0;margin-top:1em;margin-bottom:1em;position:relative}
        .froyo-nav{width:30%;margin-right:15px;display:none;-webkit-box-shadow:0 5px 23px 3px rgba(0,0,0,.15);box-shadow:0 5px 23px 3px rgba(0,0,0,.15);border:1px solid #f5f5f5}
    }
                            @media (max-width: 767px) {
                                .froyo-nav {
                                    width: 30%;
                                }
                            }
    </style>
</head>
<body>
<style> .admin-login-tittle{font-size:21px;font-weight:300;}.admin-login-form div{margin-bottom:1em;}.login-body{text-align:center;padding-top:15%;}.admin-login-form input{width:350px;border:1px solid #ececec;padding:10px 15px;border-radius:0px;box-sizing:border-box;font-family:-apple-system,"Helvetica Neue",Helvetica,"Nimbus Sans L",Arial,"Liberation Sans","PingFang SC","Hiragino Sans GB","Source Han Sans CN","Source Han Sans SC","Microsoft YaHei","Wenquanyi Micro Hei","WenQuanYi Zen Hei","ST Heiti",SimHei,"WenQuanYi Zen Hei Sharp",sans-serif;}.admin-name{margin-top:2em;}#login-button{font-size:15px;width:350px;background:#02B875;color:#fff;border:1px solid #02B875;padding-top:5px;padding-bottom:5px;cursor:pointer;}.admin-face{text-align:-webkit-center;margin-bottom:3em;}.admin-face img{border-radius:50em;width:150px;}.admin-face img{margin:0 auto;-webkit-border-radius:110px;border-radius:110px;-webkit-transition:-webkit-transform 0.5s ease-out;-moz-transition:-moz-transform 0.5s ease-out;-o-transition:-o-transform 0.5s ease-out;-ms-transition:-ms-transform 0.5s ease-out;}.admin-face img:hover{cursor:pointer;-webkit-transform:rotateZ(360deg);-moz-transform:rotateZ(360deg);-o-transform:rotateZ(360deg);-ms-transform:rotateZ(360deg);transform:rotateZ(360deg);}.face-img{height: 150px;width:150px;border-radius:50em;-webkit-box-shadow:0px 14px 30px -15px rgba(0,0,0,0.75);-moz-box-shadow:0px 14px 30px -15px rgba(0,0,0,0.75);-ms-box-shadow:0px 14px 30px -15px rgba(0,0,0,0.75);-o-box-shadow:0px 14px 30px -15px rgba(0,0,0,0.75);box-shadow:0px 14px 30px -15px rgba(0,0,0,0.75);}</style>
<div class="wrapper">

    <div class="froyo-frame login-body">
        <div class="admin-face">
            <div class="face-img">
                <a href="/"><img src="<?php if ($this->options->logo): $this->options->logo();
else: $this->options->themeUrl('img/logo.png');endif; ?>" alt="<?php $this->options->title() ?>"></a>
            </div>
        </div>
        <div class="admin-login-form">



    <div class="echo">
            </div>
    
<div class="exception froyo-article post-contnet">


    <div class="post-show">
        <div class="post-author">
            <div class="article-title">
                <h1>页面错误！请稍后再试</h1>
                <p class="article-info">请截图联系<?php $this->author(); ?>：<a href="mailto:<?php $this->remember('mail'); ?>">admin@2002.world</a></p>
            </div>
        </div>

    </div>




</div>



</div>
</div>

</div>

</div>
</body>
</html>
