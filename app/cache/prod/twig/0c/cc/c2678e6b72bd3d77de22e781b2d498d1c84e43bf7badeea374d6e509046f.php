<?php

/* AcmeTaskBundle:Default:answer.html.twig */
class __TwigTemplate_0cccc2678e6b72bd3d77de22e781b2d498d1c84e43bf7badeea374d6e509046f extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
 <head>
\t<style type=\"text/css\"> 
\t\t#mydiv 
\t\t{
\t\t\tposition:absolute;
\t\t\ttop: 50%;
\t\t\tleft: 50%;
\t\t\twidth:30em;
\t\t\theight:8em;
\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\tborder: 1px solid #ccc;
\t\t\tbackground-color: #f3f3f3;
\t\t}

\t </style>
     <title>Take the survey</title>

 </head>
<body>
<div id=\"mydiv\">
";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 25
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
";
        }
        // line 27
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("answer");
        echo "\" method=\"post\">
\t\t\tWe would like you to take a small survey to make your experience better. Would you like to take it ? <br>
\t\t\t<input type=\"radio\" name=\"answer\" value=\"yes\">yes<br>
\t\t\t<input type=\"radio\" name=\"answer\" value=\"no\">no<br>
\t\t\t<button type=\"submit\" name=\"submit\" value=\"submit\">submit</button> <br>
\t\t</form>
\t</mydiv>
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 27,  46 => 25,  44 => 24,  19 => 1,);
    }
}
