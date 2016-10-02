<?php

/* layout.html */
class __TwigTemplate_8915a7ab1f0196bfdb7e85d610ad9ea21e232b735ad6da2eeb2be987239db2a5 extends Twig_Template
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
        echo "<html>
\t<body>
\t\t<header>haeder</header>
\t\t  <content>
\t\t  \t";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "\t\t  </content>
\t\t<footer>footer</footer>
\t</body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t  \t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 7,  26 => 5,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
\t<body>
\t\t<header>haeder</header>
\t\t  <content>
\t\t  \t{% block content %}
\t\t  \t{% endblock %}
\t\t  </content>
\t\t<footer>footer</footer>
\t</body>
</html>";
    }
}
