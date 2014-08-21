<?php

/* CoachellaUserBundle:PhotoGallery:create.html.twig */
class __TwigTemplate_248c2a51aec7a9573c1e6b599b1b6866 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form action=\"\" method=\"POST\">
\t";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t<input type=\"submit\" name=\"submit\" value=\"Submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:PhotoGallery:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
