<?php

/* AcmeTaskBundle:Default:question.html.twig */
class __TwigTemplate_221d6791e5718e82da222dc4e34ee046550abb31811b24a646470bf26ca088e7 extends Twig_Template
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
   <style type=\"text/css\"> 
\t\t#mydiv 
\t\t{
\t\t\tposition:absolute;
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
 <body>
  <div id=\"mydiv\">
\t<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("process");
        echo "\" method=\"post\">
\t";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 25
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
\t";
        }
        // line 27
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 1)) {
                // line 29
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q1\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_6"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_6"), "html", null, true);
                echo "<input type=\"text\" name=\"other\"><br>
\t\t";
            }
            // line 37
            echo "\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 2)) {
                // line 38
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q2\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q2\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"radio\" name=\"q2\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t";
            }
            // line 43
            echo "\t\t";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "qid") == 3)) {
                // line 44
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "q_name"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"checkbox\" name=\"q3[]\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_1"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"checkbox\" name=\"q3[]\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_2"), "html", null, true);
                echo "<br>
            <input type=\"checkbox\" name=\"q3[]\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_3"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"checkbox\" name=\"q3[]\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_4"), "html", null, true);
                echo "<br>
\t\t\t<input type=\"checkbox\" name=\"q3[]\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "option_5"), "html", null, true);
                echo "<br>
\t\t";
            }
            // line 51
            echo "\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t<button type=\"submit\" name=\"next\" value=\"next\">next</button> <br>
\t</form>
  </mydiv>
 </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  171 => 51,  164 => 49,  158 => 48,  152 => 47,  146 => 46,  140 => 45,  135 => 44,  132 => 43,  125 => 41,  119 => 40,  113 => 39,  108 => 38,  105 => 37,  98 => 35,  92 => 34,  86 => 33,  80 => 32,  74 => 31,  68 => 30,  63 => 29,  60 => 28,  55 => 27,  49 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }
}
