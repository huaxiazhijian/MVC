<?php

/* index.html */
class __TwigTemplate_8feedaad0d70e23e2b40bf4506dec5c864668ed66352bbbe84c473f6fa9bbb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>这是视图文件</h1>

<h3><?php echo \$data ?></h3>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<h1>这是视图文件</h1>

<h3><?php echo \$data ?></h3>";
    }
}
