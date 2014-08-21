<?php

/* CoachellaUserBundle:Pages:imagedrop.html.twig */
class __TwigTemplate_e0e8fe1f3f0b0bee23aca9030d1cfd26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "\t<form id=\"form";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\" action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"fieldset flash\" id=\"fsUploadProgress\">
\t\t\t<div class=\"legend\">Upload Queue</div>
\t\t</div>
\t\t<div id=\"divStatus\">0 Files Uploaded</div>
\t\t<div>
\t\t\t<span id=\"spanButtonPlaceHolder\"></span>
\t\t\t<input id=\"btnCancel\" type=\"button\" value=\"Cancel All Uploads\" onclick=\"swfu.cancelQueue();\" disabled=\"disabled\" style=\"margin-left: 2px; font-size: 8pt; height: 29px;\" />
\t\t</div>
\t</form>
";
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "<script type=\"text/javascript\">
    //<![CDATA[
 
        var jsThumbWidth = \"100\"; //this is the thumb width after cropping the original image using jQuery
        var jsThumbHeight= \"100\"; //this is the thumb height after cropping the original image using jQuery
        var jsCurrentLargeImageWidth;
        var jsCurrentLargeImageHeight;
 
        var varX1= 0;
        var varY1= 0;
        var varX2= 0;
        var varY2= 0;
        var varW = 0;
        var varH = 0;
    //]]>
</script>
<script type=\"text/javascript\">
\t\t\tvar settings = {
\t\t\t\tflash_url : \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/media/swfupload.swf"), "html");
        echo "\",
\t\t\t\tupload_url: \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_imageUpload", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\",
\t\t\t\tpost_params: {\"id\" : \"";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"},
\t\t\t\tfile_size_limit : \"100 MB\",
\t\t\t\tfile_types : \"*.jpg\",
\t\t\t\tfile_types_description : \"All Files\",
\t\t\t\tfile_upload_limit : 100,
\t\t\t\tfile_queue_limit : 0,
\t\t\t\tcustom_settings : {
\t\t\t\t\tprogressTarget : \"fsUploadProgress\",
\t\t\t\t\tcancelButtonId : \"btnCancel\"
\t\t\t\t},
\t\t\t\tdebug: false,

\t\t\t\t// Button settings
\t\t\t\tbutton_image_url: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/images/upload/buton.png"), "html");
        echo "\",
\t\t\t\tbutton_width: \"100\",
\t\t\t\tbutton_height: \"33\",
\t\t\t\tbutton_placeholder_id: \"spanButtonPlaceHolder\",
\t\t\t\tbutton_text_style: \".theFont { font-size: 16; }\",
\t\t\t\tbutton_text_left_padding: 12,
\t\t\t\tbutton_text_top_padding: 3,
\t\t\t\t
\t\t\t\t// The event handler functions are defined in handlers.js
\t\t\t\tfile_queued_handler : fileQueued,
\t\t\t\tfile_queue_error_handler : fileQueueError,
\t\t\t\tfile_dialog_complete_handler : fileDialogComplete,
\t\t\t\tupload_start_handler : uploadStart,
\t\t\t\tupload_progress_handler : uploadProgress,
\t\t\t\tupload_error_handler : uploadError,
\t\t\t\tupload_success_handler : uploadSuccess,
\t\t\t\tupload_complete_handler : function(){
\t\t\t\t\tvar parent = \$('#form";
        // line 65
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "').parent();
\t\t\t\t\tparent.html('<img src=\"/uploads/";
        // line 66
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo ".jpg\" style=\"width: 100%;\" />');
\t\t\t\t\tparent.append('<div class=\"add\">CoachellaUserBundle|CMS|imageDisplay^id,";
        // line 67
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "</div>');
\t\t\t\t},
\t\t\t\tqueue_complete_handler : queueComplete\t// Queue plugin event
\t\t\t};
\t\t\tswfu = new SWFUpload(settings);
</script>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:Pages:imagedrop.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
