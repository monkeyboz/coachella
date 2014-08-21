<?php

/* CoachellaUserBundle:Artists:createArtists.html.twig */
class __TwigTemplate_91994f78081152c5381748d22e3f2385 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t<h2>Create Artists</h2>
\t<form method=\"POST\" ";
        // line 15
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'attachment'));
        echo ">
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'attachment'));
        echo "
\t\t<input type=\"submit\" />
\t</form>
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/coachella/js/ckeditor/ckeditor.js"), "html");
        echo "\"></script>
\t<script>
\t\tCKEDITOR.replace( 'form_description',
\t{
\t\textraPlugins : 'docprops'
\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:createArtists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
