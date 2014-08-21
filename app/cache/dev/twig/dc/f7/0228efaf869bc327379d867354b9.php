<?php

/* CoachellaUserBundle:Default:usernav.html.twig */
class __TwigTemplate_dcf70228efaf869bc327379d867354b9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "isXmlHttpRequest", array(), "any", false))) {
            echo " 
<div id=\"navigation\">
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_userpage", array("id" => $this->getAttribute($this->getContext($context, 'user'), "id", array(), "any", false))), "html");
            echo "\">MyLineup</a>
\t<a href=\"\"></a>
\t<div class=\"clear\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:usernav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
