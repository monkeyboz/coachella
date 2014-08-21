<?php

/* CoachellaUserBundle:Pages:data.html.twig */
class __TwigTemplate_c1bae24e874d4d2352a2338fe8b63f74 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
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
        echo "\t";
        $template = $this->getContext($context, 'id');
        if (!$template instanceof Twig_Template) {
            $template = $this->env->loadTemplate($template);
        }
        $template->display($context);
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
