<?php

/* CoachellaUserBundle:Stages:showStages.html.twig */
class __TwigTemplate_c343b76e3cd6ee914a85a518322f6078 extends Twig_Template
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
        echo "\t<h2>Show Stages</h2>
\t<div style=\"float: right; clear: both;\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_createStage"), "html");
        echo "\">Create Stage</a></div>
\t<div style=\"clear: both;\"></div>
\t<ul id=\"showHolder\"  style=\"margin: 0px; padding: 0px; margin-top: 10px;\">
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'stages'));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['id'] => $context['item']) {
            // line 19
            echo "\t<li class=\"show\" ref=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "
\t\t\t<div style=\"float: right; font-size: 10px;\">";
            // line 21
            $this->env->loadTemplate("CoachellaUserBundle:Default:options.html.twig")->display(array_merge($context, array("options" => $this->getAttribute($this->getContext($context, 'item'), "options", array(), "any", false))));
            echo "</div>
\t\t\t<ul style=\"margin: 0px; padding: 0px; margin-top: 10px;\">
\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'item'), "artists", array(), "any", false));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['_key'] => $context['art']) {
                // line 24
                echo "\t\t\t<li class=\"artist\" ref=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'art'), "id", array(), "any", false), "html");
                echo "\">
\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'art'), "name", array(), "any", false), "html");
                echo "
\t\t\t\t<div style=\"float: right; font-size: 10px;\">";
                // line 26
                $this->env->loadTemplate("CoachellaUserBundle:Default:options.html.twig")->display(array_merge($context, array("options" => $this->getAttribute($this->getContext($context, 'art'), "options", array(), "any", false))));
                echo "</div>
\t\t\t</li>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "\t\t\t</ul>
\t</li>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "\t</ul>
\t<div style=\"clear: both;\"></div>
";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery-1.6.2.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/admin/buttonfunctions.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.core.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.widget.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.mouse.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.draggable.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.droppable.js"), "html");
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.sortable.js"), "html");
        echo "\"></script>
<script>
\t\$('.artist').draggable({
\t\trevert: 'invalid',
\t});
\t\$('#showHolder').sortable().disableSelection();
\t\$('.show').droppable({ 
\t\taccept: '.artist',
\t\tdrop: function(event, ui){
\t\t\tui.draggable.fadeOut();
\t\t\t\$(this).append('<div class=\"artist\" ref=\"'+ui.draggable.attr('ref')+'\">'+ui.draggable.html()+\"</div>\");
\t\t\t\$('.artist').draggable({
\t\t\t\trevert: 'invalid',
\t\t\t});
\t\t\tvar id = ui.draggable.attr('ref');
\t\t\tvar stage_id = \$(this).attr('ref');
\t\t\t\$.ajax({
\t\t\t\turl:'/app_dev.php/updateStage/'+stage_id+'/'+id,
\t\t\t\ttype: 'POST',
\t\t\t\tsuccess: function(html){
\t\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t}
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Stages:showStages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
