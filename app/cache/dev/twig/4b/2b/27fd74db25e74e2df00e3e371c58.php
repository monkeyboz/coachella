<?php

/* CoachellaUserBundle:Default:navigation.html.twig */
class __TwigTemplate_4b2b27fd74db25e74e2df00e3e371c58 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div id=\"mainNav\">
\t<div id=\"weekends\">
\t\t";
        // line 3
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:Default:weekends", array(), array());
        // line 4
        echo "\t</div>
\t<div class=\"countdown\">
\t\t<h2>COUNTDOWN</h2>
\t\t<h1>";
        // line 7
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:Default:countdown", array(), array());
        echo "</h1>
\t</div>
\t<div class=\"menu\">
\t\t";
        // line 10
        $this->env->loadTemplate("CoachellaUserBundle:Default:mainNav.html.twig")->display($context);
        // line 11
        echo "\t\t<div style=\"clear: both;\"></div>
\t</div>
\t<div style=\"clear: both;\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
