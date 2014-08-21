<?php

/* CoachellaUserBundle:Mylineup:mylineup.html.twig */
class __TwigTemplate_915857333767a9ad6594483905540722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'mylineup'));
        foreach ($context['_seq'] as $context['key'] => $context['item']) {
            // line 2
            echo "<div>
\t<div style=\"padding: 10px;\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getContext($context, 'key'), "html");
            echo "</div>
\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'item'));
            foreach ($context['_seq'] as $context['_key'] => $context['artist']) {
                // line 5
                echo "\t<div class=\"artist\" style=\"border-bottom: #fff solid 4px; width: 300px; float: left; margin-right: 10px;\">
\t\t<div style=\"float: left; width: 100px; height: 100px; overflow: hidden; margin-right: 10px; border: #fff solid 5px;\"><img src=\"/uploads/documents/";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "id", array(), "any", false), "html");
                echo ".jpg\" style=\"width: 100%;\"/></div>
\t\t<h2>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "name", array(), "any", false), "html");
                echo "</h2>
\t\t<div style=\"font-size: 10px;\">";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "description", array(), "any", false), "html");
                echo "</div>
\t\t<div style=\"clear: both;\"></div>
\t\t<div class=\"mylineupOptions\">
\t\t\t<div>
\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'artist'), "starttime", array(), "any", false), "h:i"), "html");
                echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_removeMylineup", array("id" => $this->getAttribute($this->getContext($context, 'artist'), "id", array(), "any", false))), "html");
                echo "\">remove</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_artistPage", array("id" => $this->getAttribute($this->getContext($context, 'artist'), "id", array(), "any", false))), "html");
                echo "\">info</a>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "\t<div style=\"clear: both;\"></div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/css/mylineup.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Mylineup:mylineup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
