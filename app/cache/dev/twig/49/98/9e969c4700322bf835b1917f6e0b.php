<?php

/* CoachellaUserBundle:Pages:test.html.twig */
class __TwigTemplate_49989e969c4700322bf835b1917f6e0b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"layoutSing\">
<div class=\"holder\">";
        // line 2
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:Mylineup:getTopArtists", array("id" => "testing"), array());
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
