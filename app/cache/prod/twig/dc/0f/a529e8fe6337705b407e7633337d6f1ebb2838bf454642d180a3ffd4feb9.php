<?php

/* AcmeTaskBundle:Default:question1.html.twig */
class __TwigTemplate_dc0fa529e8fe6337705b407e7633337d6f1ebb2838bf454642d180a3ffd4feb9 extends Twig_Template
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
\tposition:absolute;
\t\t\ttop: 5%;
\t\t\tleft: 50%;
\t\t\twidth:30em;
\t\t\theight:630em
\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\tborder: 1px solid #ccc;
\t\t\tbackground-color: #f3f3f3;
\t\t}
\t</style>
     <title>All Quesitons</title>

   </head>
\t<body>
\t\t<div id=\"mydiv\">
\t\t<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("process");
        echo "\" method=\"post\">
\t\t";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 25
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 4)) {
                // line 29
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"checkbox\" name=\"q4[]\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"checkbox\" name=\"q4[]\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"checkbox\" name=\"q4[]\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"checkbox\" name=\"q4[]\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"checkbox\" name=\"q4[]\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "<br>
\t\t\t";
            }
            // line 36
            echo "\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 5)) {
                // line 37
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q5\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q5\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
\t\t\t\t<b>if yes</b><br>
\t\t\t\t<input type=\"radio\" name=\"yes\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"yes\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"yes\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "<br>
\t\t\t";
            }
            // line 45
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 6)) {
                // line 46
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"{ item.option_4}}\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "<br>
\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "<br>
\t\t\t\t\t<input type=\"radio\" name=\"q6\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_6"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_6"), "html", null, true);
                echo " <br>
\t\t\t";
            }
            // line 54
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t<button type=\"submit\">submit</button> <br>
\t </form>
   </mydiv>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:question1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 55,  182 => 54,  175 => 52,  169 => 51,  165 => 50,  159 => 49,  153 => 48,  147 => 47,  142 => 46,  139 => 45,  132 => 43,  126 => 42,  120 => 41,  113 => 39,  107 => 38,  102 => 37,  99 => 36,  92 => 34,  86 => 33,  80 => 32,  74 => 31,  68 => 30,  63 => 29,  60 => 28,  55 => 27,  49 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }
}
