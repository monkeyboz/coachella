<?php

/* CoachellaUserBundle:Default:form.html.twig */
class __TwigTemplate_d16c154c71b039ca2d34f91aa9b58500 extends Twig_Template
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
        $this->env->loadTemplate("CoachellaUserBundle:Default:navigation.html.twig")->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<div id=\"fb-root\"></div>
\t<script src=\"http://connect.facebook.net/en_US/all.js\"></script>
\t<script>
\t\tFB.init({ 
\t\t\tappId:'193167388116', cookie:true, 
\t\t\tstatus:true, xfbml:true 
\t\t});
\t\tFB.Event.subscribe('auth.login', function(response) {
\t\t\talert('testing');
\t        window.location.reload();
\t    });
\t</script>
\t";
        // line 26
        if (array_key_exists("facebook", $context)) {
            // line 27
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'facebook'), "name", array(), "any", false), "html");
            echo "
\t\t<form method=\"post\" ";
            // line 28
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
            echo ">
\t\t    ";
            // line 29
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "
\t\t    <input type=\"submit\" />
\t\t</form>
\t";
        } else {
            // line 33
            echo "\t\t<fb:login-button>Login with Facebook</fb:login-button>
\t\t<form method=\"post\" ";
            // line 34
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
            echo ">
\t\t    ";
            // line 35
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "
\t\t    <input type=\"submit\" />
\t\t</form>
\t";
        }
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
