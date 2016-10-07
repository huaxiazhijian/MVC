<?php

/* add.html */
class __TwigTemplate_6cddc52c1a98183058c8a835f52b736a795570f214d7a34132bacaf6b33ef345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action=\"/index.php/index/save\" method=\"post\" class=\"am-form\">
\t<filedest>
\t\t<legend>添加留言</legend>
\t\t<div class=\"am-form-group\">
\t\t\t<input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入Title\">
\t\t</div>
\t\t<div class=\"am-form-group\">
\t\t\t<textarea name=\"content\"cols=\"30\" rows=\"10\"></textarea>
\t\t</div>
\t\t<p><button type=\"submit\" class=\"am-btn-default\">提交</button></p>
\t</filedest>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<form action=\"/index.php/index/save\" method=\"post\" class=\"am-form\">
\t<filedest>
\t\t<legend>添加留言</legend>
\t\t<div class=\"am-form-group\">
\t\t\t<input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入Title\">
\t\t</div>
\t\t<div class=\"am-form-group\">
\t\t\t<textarea name=\"content\"cols=\"30\" rows=\"10\"></textarea>
\t\t</div>
\t\t<p><button type=\"submit\" class=\"am-btn-default\">提交</button></p>
\t</filedest>
</form>
{% endblock %}
";
    }
}
