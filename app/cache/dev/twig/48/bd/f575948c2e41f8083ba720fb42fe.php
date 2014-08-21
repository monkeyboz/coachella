<?php

/* CoachellaUserBundle:Pages:testTemplate42.html.twig */
class __TwigTemplate_48bdf575948c2e41f8083ba720fb42fe extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"layoutDub\">
<div class=\"holder position0\">";
        // line 2
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDisplay", array("id" => "31"), array());
        echo "</div>
<div class=\"holder position1\">";
        // line 3
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:showText", array("id" => "32"), array());
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:testTemplate42.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
