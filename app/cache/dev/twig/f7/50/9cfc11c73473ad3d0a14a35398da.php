<?php

/* CoachellaUserBundle:Artists:showArtists.html.twig */
class __TwigTemplate_f7509cfc11c73473ad3d0a14a35398da extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'adminnav' => array($this, 'block_adminnav'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:usernav.html.twig")->display($context);
        // line 11
        echo "\t<div class=\"clear\"></div>
";
    }

    // line 14
    public function block_adminnav($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:adminnav.html.twig")->display($context);
        // line 16
        echo "\t<div class=\"clear\"></div>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "\t<h2>Show Artists</h2>
\t<h3><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_showStages"), "html");
        echo "\">Show Stages</a></h3>
\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'artists'));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 23
            echo "\t\t<div style=\"padding: 5px; background: #efefef; margin-top: 5px;\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "
\t\t\t<div style=\"float: right;\">
\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_editArtists", array("id" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false))), "html");
            echo "\">Edit</a>
\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_deleteArtists", array("id" => $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false))), "html");
            echo "\">Delete</a>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:showArtists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
