<?php

/* CoachellaUserBundle:Default:search.html.twig */
class __TwigTemplate_3689b6208f0edd7b4f445fa159634db9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "CoachellaUserBundle::base.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_navigation($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:navigation.html.twig")->display($context);
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t<div>Search Term: ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'searchterm'), "html");
        echo "</div>
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'search'));
        foreach ($context['_seq'] as $context['key'] => $context['item']) {
            // line 14
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'key'), "html");
            echo "</h2>
\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'item'));
            foreach ($context['_seq'] as $context['_key'] => $context['term']) {
                // line 16
                echo "\t\t\t";
                if ($this->getAttribute(((array_key_exists("term", $context)) ? (twig_default_filter($this->getContext($context, 'term'))) : ("")), "name", array(), "any", true)) {
                    // line 17
                    echo "\t\t\t\t<div>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'term'), "name", array(), "any", false), "html");
                    echo "</div>
\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t<div>";
                    echo $this->getAttribute($this->getContext($context, 'term'), "data", array(), "any", false);
                    echo "</div>
\t\t\t";
                }
                // line 21
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
