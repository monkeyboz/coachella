<?php

/* CoachellaUserBundle:Default:userpage.html.twig */
class __TwigTemplate_5bc91c9ca8761b76da3eec99cd1df861 extends Twig_Template
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
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:Default:login", array(), array());
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<h2>Welcome back ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false), "html");
        echo "</h2>
\t<div style=\"clear: both;\">
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_showStages"), "html");
        echo "\">Show Stages</a>
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_createMylineup", array("id" => $this->getAttribute($this->getContext($context, 'user'), "id", array(), "any", false))), "html");
        echo "\">Create Lineup</a>\t
\t</div>
\t";
        // line 19
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:MyLineup:mylineup", array("id" => $this->getAttribute($this->getContext($context, 'user'), "id", array(), "any", false), "startdate" => $this->getAttribute($this->getContext($context, 'mylineup'), "startdate", array(), "any", false), "enddate" => $this->getAttribute($this->getContext($context, 'mylineup'), "enddate", array(), "any", false)), array());
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:userpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
