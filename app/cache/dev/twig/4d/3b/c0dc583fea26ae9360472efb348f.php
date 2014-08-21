<?php

/* CoachellaUserBundle:Mylineup:url.html.twig */
class __TwigTemplate_4d3bc0dc583fea26ae9360472efb348f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_createMylineup"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
\t";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t<input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Mylineup:url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
