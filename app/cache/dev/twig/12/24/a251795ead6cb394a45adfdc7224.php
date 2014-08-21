<?php

/* CoachellaUserBundle:Default:facebooksignup.html.twig */
class __TwigTemplate_1224a251795ead6cb394a45adfdc7224 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"fb-root\"></div>
\t<script src=\"http://connect.facebook.net/en_US/all.js\"></script>
\t<script>
\t\tFB.init({ 
\t\t\tappId:'193167388116', cookie:true, 
\t\t\tstatus:true, xfbml:true 
\t\t});
\t\tFB.Event.subscribe('auth.login', function(response) {
\t        window.location.reload();
\t    });
\t</script>
\t";
        // line 21
        if ($this->getContext($context, 'user')) {
            // line 22
            echo "\t\tPlease complete this signup to create a new Coachella account.
\t\t<form action=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_signup"), "html");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
            echo ">
\t\t    ";
            // line 24
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "
\t\t    <input type=\"submit\" />
\t\t</form>
\t";
        } else {
            // line 28
            echo "\t\t<fb:login-button>Login with Facebook</fb:login-button>
\t\t<form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_signup"), "html");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
            echo ">
\t\t    ";
            // line 30
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "
\t\t    <input type=\"submit\" />
\t\t</form>
\t";
        }
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:facebooksignup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
