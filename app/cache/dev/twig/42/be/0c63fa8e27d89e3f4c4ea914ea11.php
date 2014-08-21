<?php

/* CoachellaUserBundle:Artists:mylineup.html.twig */
class __TwigTemplate_42be0c63fa8e27d89e3f4c4ea914ea11 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"artistsMylineup\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'artists'));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 3
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_addToMylineup", array("id" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "date" => $this->getContext($context, 'date'))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "\t<div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:mylineup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
