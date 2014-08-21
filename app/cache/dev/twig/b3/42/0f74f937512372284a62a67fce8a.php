<?php

/* CoachellaUserBundle:Pages:testTemplate43.html.twig */
class __TwigTemplate_b3420f74f937512372284a62a67fce8a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"layoutTrip\">
<div class=\"holder position0\">";
        // line 2
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "7"), array());
        echo "</div>
<div class=\"holder position1\">";
        // line 3
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "6"), array());
        echo "</div>
<div class=\"holder position2\">";
        // line 4
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "5"), array());
        echo "</div>
</div>
<div class=\"layoutTrip\">
<div class=\"holder position0\">";
        // line 7
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "10"), array());
        echo "</div>
<div class=\"holder position1\">";
        // line 8
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "9"), array());
        echo "</div>
<div class=\"holder position2\">";
        // line 9
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "8"), array());
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:testTemplate43.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
