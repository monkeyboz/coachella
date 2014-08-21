<?php

/* CoachellaUserBundle:Pages:dropedit.html.twig */
class __TwigTemplate_66a7ac3245cf38963cc3eba442c85178 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:CMS:imageDrop", array("id" => "11"), array());
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:dropedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
