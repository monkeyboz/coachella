<?php

/* CoachellaUserBundle:Artists:editArtists.html.twig */
class __TwigTemplate_bee1a5d84fd2700af7226323df3f6df5 extends Twig_Template
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
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t<h2>Edit Artists</h2>
\t<form method=\"POST\" >
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t\t<input type=\"submit\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:editArtists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
