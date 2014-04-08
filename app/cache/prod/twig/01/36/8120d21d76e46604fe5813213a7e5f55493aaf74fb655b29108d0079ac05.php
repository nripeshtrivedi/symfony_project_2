<?php

/* AcmeTaskBundle:Default:home.html.twig */
class __TwigTemplate_01368120d21d76e46604fe5813213a7e5f55493aaf74fb655b29108d0079ac05 extends Twig_Template
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
\t\t\t#mydiv 
\t\t\t{
\t\t\tposition:absolute;
\t\t\ttop: 30%;
\t\t\tleft: 50%;
\t\t\twidth:30em;
\t\t\theight:9em
\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\tborder: 1px solid #ccc;
\t\t\tbackground-color: #f3f3f3;
\t\t\t}

\t\t</style>
\t\t<title>Welcome </title>
    </head>
    <body>
\t\t<div id=\"mydiv\">
\t\t<h1> WELCOME TO THE HOME PAGE </h1>
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">LOGOUT</a>
\t    </mydiv>
   </body>
</html>
   ";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 23,  19 => 1,);
    }
}
