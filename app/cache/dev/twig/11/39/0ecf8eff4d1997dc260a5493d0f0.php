<?php

/* CoachellaUserBundle:Pages:textdrop.html.twig */
class __TwigTemplate_11390ecf8eff4d1997dc260a5493d0f0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<form method=\"POST\" class=\"text";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\">
\t<textarea name=\"form[data]\" class=\"data";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\" style=\"width: 100%; border: none;\">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'data'), "html");
        echo "</textarea>
\t<input type=\"submit\" value=\"Submit\" name=\"submit\"/>
</form>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/ckeditor/ckeditor.js"), "html");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/ckeditor/adapters/jquery.js"), "html");
        echo "\"></script>
<script>
\t\$('.data";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "').ckeditor();
\tvar currStyle = 'Content';
\t\$('input[name=submit]').click(function(){
\t\tvar id = ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo ";
\t\t\$.ajax({
\t\t\turl: \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_textDrop", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\",
\t\t\tdata: 'data='+\$('textarea.data";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "').val()+'&id='+id+'&style='+currStyle,
\t\t\ttype: 'POST',
\t\t\tsuccess: function(html){
\t\t\t\tvar parent = \$('.text";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "').parent();
\t\t\t\tparent.html(html);
\t\t\t\tparent.append('<div class=\"add\">CoachellaUserBundle|CMS|showText^id,";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "</div>');
\t\t\t}
\t\t})
\t\treturn false;
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:textdrop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
