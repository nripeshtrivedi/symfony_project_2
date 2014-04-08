<?php

/* AcmeTaskBundle:Default:login.html.twig */
class __TwigTemplate_48cd9a732901a62a9dce7c42bc866f006f1ab709ba5c0e1fc8da7ed7bf5f8705 extends Twig_Template
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
<head>
<style type=\"text/css\"> 
\t\t#mydiv 
\t\t{
\t\t\tposition:absolute;
\t\t\ttop: 50%;
\t\t\tleft: 50%;
\t\t\twidth:30em;
\t\t\theight:6em;
\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\tborder: 1px solid #ccc;
\t\t\tbackground-color: #f3f3f3;
\t\t}

\t</style>
\t<title>Login</title>
\t</head>
<body>
\t<div id=\"mydiv\">
\t\t";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 23
            echo "\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 25
        echo "
\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t<label for=\"username\">Email:</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

\t\t<label for=\"password\">Password:</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t</mydiv>
    ";
        // line 38
        echo "    <button type=\"submit\">login</button> <br>
\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register</a>
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  66 => 38,  58 => 28,  53 => 26,  50 => 25,  44 => 23,  42 => 22,  19 => 1,);
    }
}
