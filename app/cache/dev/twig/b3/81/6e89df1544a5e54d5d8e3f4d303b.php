<?php

/* CoachellaUserBundle:Default:footer.html.twig */
class __TwigTemplate_b3816e89df1544a5e54d5d8e3f4d303b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div style=\"clear: both; background: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/footerbottom.jpg"), "html");
        echo ") center bottom no-repeat;\">
\t\t<div style=\"width: 962px; margin: 0px auto;\">
\t\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/email.png"), "html");
        echo "\" />
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/images/coachellauser.png"), "html");
        echo "\" />
\t\t</div>
\t\t<div style=\"height: 340px; width: 1000px; margin: 0px auto;\">
\t\t\tplace holder for footer menus
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
