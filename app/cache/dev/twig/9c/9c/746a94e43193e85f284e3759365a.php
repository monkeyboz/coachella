<?php

/* CoachellaUserBundle:Pages:testTemplate41.html.twig */
class __TwigTemplate_9c9c746a94e43193e85f284e3759365a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"layoutSing\">
<div class=\"holder position0\">";
        // line 2
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "0"), array());
        echo "</div>
</div>
<div class=\"layoutDub\">
<div class=\"holder position0\">";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "2"), array());
        echo "</div>
<div class=\"holder position1\">";
        // line 6
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "1"), array());
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:testTemplate41.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
