<?php

/* index.html */
class __TwigTemplate_3868d9a3d0a87e6ea7253cc690741622ef78e477d1739cd2e7b3addd8903195b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo "  <ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "  \t<li class=\"am-u-sm-3\">
  \t\t<div>
  \t\t\t<h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</h1>
  \t\t\t<p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
  \t\t\t<p><span>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "creattime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
  \t\t\t<a href=\"/index/del/id/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">删除留言</a>
  \t\t</div>
  \t</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
  <ul>
    {% for val in data %}
  \t<li class=\"am-u-sm-3\">
  \t\t<div>
  \t\t\t<h1>{{val.title}}</h1>
  \t\t\t<p>{{val.content}}</p>
  \t\t\t<p><span>{{val.creattime|date('Y-m-d H:i:s')}}</span></p>
  \t\t\t<a href=\"/index/del/id/{{val.id}}\">删除留言</a>
  \t\t</div>
  \t</li>
    {% endfor %}
  </ul>
{% endblock %}
";
    }
}
