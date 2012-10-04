<?php

/* layout.twig */
class __TwigTemplate_cc9219a5b3227c6253a9153a28a36be3 extends Twig_Template
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
        // line 2
        echo "<!doctype html>

<html lang=\"fr-FR\">
<head>
    <meta charset=\"UTF-8\">
    <title>SilexSkeleton</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap-responsive.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/css/bootstrap-notify.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "css/default.css\">
    
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-dropdown.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-transition.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-scrollspy.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-modal.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index.index"), "html", null, true);
        echo "bootstrap/js/bootstrap-tab.js\"></script>


</head>
<body>
<header>
    <body data-spy=\"scroll\" data-target=\".navbar\">

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <a class=\"brand\" href=\"#\">SilexSkeleton</a>

                <div class=\"nav-collapse collapse\">
                    <p class=\"navbar-text pull-right\">

                        <b>Nous sommes le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " </b>
                    </p>
                    <ul class=\"nav\" role=\"navigation\">
                        <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.index"), "html", null, true);
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index.info"), "html", null, true);
        echo "\">Info</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>


</header>
<div id=\"content\">

    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "
</div>

<footer>

</footer>

</body>
</html>";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  121 => 50,  109 => 52,  107 => 50,  92 => 38,  88 => 37,  82 => 34,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  38 => 11,  34 => 10,  30 => 9,  26 => 8,  18 => 2,);
    }
}
