<?php

/* AcmeTaskBundle:Default:index.html.twig */
class __TwigTemplate_291e0709cd8005ae07024bd1cb2bd98a60ecc20de2a2d5b0d9512e5a8f275a71 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t<style type=\"text/css\"> 
\t\t\t\t#mydiv 
\t\t\t\t{
\t\t\t\t\tposition:absolute;
\t\t\t\t\ttop: 30%;
\t\t\t\t\tleft: 50%;
\t\t\t\t\twidth:30em;
\t\t\t\t\theight:9em
\t\t\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\t\t\tborder: 1px solid #ccc;
\t\t\t\t\tbackground-color: #f3f3f3;
\t\t\t\t}

\t\t</style>
\t<title> Register </title></head>
   <body>
\t   <div id=\"mydiv\">
\t\t";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
\t\t\t";
        // line 22
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 23
            echo "\t\t\t\t<div>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login</a>
\t\t</mydiv>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 25,  47 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }
}
