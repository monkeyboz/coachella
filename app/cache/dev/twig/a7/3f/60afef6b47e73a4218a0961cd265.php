<?php

/* CoachellaUserBundle:Artists:myLineupLink.html.twig */
class __TwigTemplate_a73f60afef6b47e73a4218a0961cd265 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"addToMylineup\">
\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_addToMylineup", array("id" => $this->getContext($context, 'id'), "date" => $this->getContext($context, 'date'))), "html");
        echo "\">+ Add To My Lineup</a>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:myLineupLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
