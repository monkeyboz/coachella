<?php

/* CoachellaUserBundle:Artists:page.html.twig */
class __TwigTemplate_2fa31223e6d99c07da294006c83a160d extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/coachella/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div>
\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "name", array(), "any", false), "html");
        echo "</h1>
\t<div><img src=\"/uploads/documents/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "id", array(), "any", false), "html");
        echo ".jpg\" style=\"width: 100%;\"/></div>
\t<h2>Performing at ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'artist'), "getStage", array(), "any", false), "getName", array(), "any", false), "html");
        echo " Stage - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'artist'), "starttime", array(), "any", false), "d h:i"), "html");
        echo "</h2>
\t<div>";
        // line 12
        echo $this->env->getExtension('actions')->renderAction("CoachellaUserBundle:Artists:addArtistsMylineup", array("id" => $this->getAttribute($this->getContext($context, 'artist'), "id", array(), "any", false), "date" => twig_date_format_filter($this->getAttribute($this->getContext($context, 'artist'), "starttime", array(), "any", false), "Y-m-d")), array());
        echo "</div>
\t<div class=\"artistDescription\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artist'), "description", array(), "any", false), "html");
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Artists:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
