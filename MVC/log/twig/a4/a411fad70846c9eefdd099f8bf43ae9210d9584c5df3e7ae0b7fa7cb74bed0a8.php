<?php

/* layout.html */
class __TwigTemplate_d171f3dd508136470113cbd1493db91cf6a80dd0469b9e4889756615cc7b56e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<!-- <meta charset=\"UTF-8\">
\t<title></title>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"Viewport\" content=\"width=device-width,initial-scale=1\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"renderer\" content=\"webkit\">
\t<meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
\t<link rel=\"stylesheet\" href=\"/assets/css/amazeui.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/assets/css/app.css\"/> -->
</head>
  
<body>
\t<header class=\"am-topbar am-text-center\">
\t <h1 class=\"am-sm-12\">超简单留言板</h1>
\t <div class=\"am-g\">
\t \t<a class=\"am-btn-default\" href=\"/\">所有留言</a>
\t \t<a class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
\t </div>
\t</header> \t
\t <div class=\"am-g content\">
\t ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t 
\t </div>
\t<footer class=\"footer\">
\t\t<p>&copy; 2016 超简单留言板</p>
\t</footer>
\t
\t<!-- <script scr=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
\t// <script scr=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
\t// <script scr=\"assets/js/amazeui.ie&polyfill.min.js\"></script>
\t// <script scr=\"assets/js/jquery.min.js\"></script>
\t// <script scr=\"assets/js/amazeui.min.js\"></script> -->
\t
</body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 24,  47 => 25,  45 => 24,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<!-- <meta charset=\"UTF-8\">
\t<title></title>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"Viewport\" content=\"width=device-width,initial-scale=1\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t<meta name=\"renderer\" content=\"webkit\">
\t<meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
\t<link rel=\"stylesheet\" href=\"/assets/css/amazeui.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/assets/css/app.css\"/> -->
</head>
  
<body>
\t<header class=\"am-topbar am-text-center\">
\t <h1 class=\"am-sm-12\">超简单留言板</h1>
\t <div class=\"am-g\">
\t \t<a class=\"am-btn-default\" href=\"/\">所有留言</a>
\t \t<a class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
\t </div>
\t</header> \t
\t <div class=\"am-g content\">
\t {% block content %}
\t {% endblock %}\t 
\t </div>
\t<footer class=\"footer\">
\t\t<p>&copy; 2016 超简单留言板</p>
\t</footer>
\t
\t<!-- <script scr=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
\t// <script scr=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
\t// <script scr=\"assets/js/amazeui.ie&polyfill.min.js\"></script>
\t// <script scr=\"assets/js/jquery.min.js\"></script>
\t// <script scr=\"assets/js/amazeui.min.js\"></script> -->
\t
</body>
</html>";
    }
}
