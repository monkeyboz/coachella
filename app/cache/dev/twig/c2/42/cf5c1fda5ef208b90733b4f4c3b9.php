<?php

/* CoachellaUserBundle:Mylineup:topArtists.html.twig */
class __TwigTemplate_c242cf5c1fda5ef208b90733b4f4c3b9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h2>Top Artists</h2>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'artists'));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 3
            echo "\t<div style=\"text-align: left; border: #efefef solid 1px; padding: 10px;\">
\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_artistPage", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, 'i'), "artist", array(), "any", false), "getId", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'i'), "artist", array(), "any", false), "getName", array(), "any", false), "html");
            echo "</a><div style=\"float: right;\">Total: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'i'), "count", array(), "any", false), "html");
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Mylineup:topArtists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
