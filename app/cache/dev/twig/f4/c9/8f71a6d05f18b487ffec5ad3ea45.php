<?php

/* CoachellaUserBundle::base.html.twig */
class __TwigTemplate_f4c98f71a6d05f18b487ffec5ad3ea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'adminnav' => array($this, 'block_adminnav'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Coachella - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
    \t<div style=\"background: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/headertop.png"), "html");
        echo ") center no-repeat; height: 195px; width: 1200px; margin: 0px auto;\">
    \t\t<div style=\"padding-top: 150px; float: right; margin-right: 80px;\">
    \t\t\t<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search"), "html");
        echo "\" method=\"POST\" style=\"background: #53888c; border: 1px solid #a2c2c4; float: left; margin-right: 10px;\">
    \t\t\t\t<input type=\"submit\" name=\"submit\" value=\"\" style=\"border: none; background: #53888c; height: 24px; width: 24px;\" /><input type=\"text\" name=\"search\" value=\"search\" style=\"border: none; font-size: 10px; color: #b0cbcc; background: #548a8d;\" />
    \t\t\t</form>
    \t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/facebook.png"), "html");
        echo "\" />
    \t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/twitter.png"), "html");
        echo "\" />
    \t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/youtube.png"), "html");
        echo "\" />
    \t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/digg.png"), "html");
        echo "\" />
    \t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/rss.png"), "html");
        echo "\" />
    \t\t</div>
    \t</div>
    \t<div id=\"adminNav\">
    \t\t";
        // line 23
        $this->displayBlock('adminnav', $context, $blocks);
        // line 24
        echo "    \t</div>
    \t<div class=\"content\">
    \t\t";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 27
        echo "        \t";
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        \t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        </div>
        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        <script>
    \t\t\$('input[name=search]').focus(function(){
    \t\t\t\$(this).val('');
    \t\t})
    \t\t\$('input[name=search]').blur(function(){
    \t\t\t\$(this).val('search');
    \t\t})
    \t</script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 23
    public function block_adminnav($context, array $blocks = array())
    {
    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
