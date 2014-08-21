<?php

/* CoachellaUserBundle:Default:options.html.twig */
class __TwigTemplate_c29153366069d4572efba0589e73c367 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['i'] => $context['item']) {
            // line 2
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, 'item'), "link", array(), "any", false), array("id" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false))), "html");
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
