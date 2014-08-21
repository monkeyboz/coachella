<?php

/* CoachellaUserBundle:CMS:showlayouts.html.twig */
class __TwigTemplate_3fe0a26e6a621cdea6c3e2c82371c459 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'content'));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 2
            echo "\t<div style=\"padding: 10px; border-bottom: 1px solid #efefef;\">
\t\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_getLayout", array("id" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "</a>
\t\t<div style=\"float: right;\">
\t\t\t<a href=\"\">Edit</a> | <a href=\"\">Delete</a>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:CMS:showlayouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
