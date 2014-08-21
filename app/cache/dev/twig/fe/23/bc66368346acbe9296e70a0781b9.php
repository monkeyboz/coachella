<?php

/* CoachellaUserBundle:CMS:test.html.twig */
class __TwigTemplate_fe23bc66368346acbe9296e70a0781b9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'adminnav' => array($this, 'block_adminnav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_navigation($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:navigation.html.twig")->display($context);
    }

    // line 11
    public function block_adminnav($context, array $blocks = array())
    {
        // line 12
        echo "<div style=\"clear: both; padding: 10px; float: right; font-size: 10px; position: fixed; right: 10px;\">
\t<div id=\"errors\"></div>
\t<div>
\t\t<label>Name</label><input type=\"text\" name=\"name\"/>
\t</div>
\t<div>
\t\t<lable>Menu Settings</label>
\t\t\t<select name=\"menu\">
\t\t\t\t<option>-SELECT-</option>
\t\t\t\t<option value=\"0\">Main Navigation</option>
\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'pages'));
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            // line 23
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "id", array(), "any", false), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "\t\t\t</select>
\t</div>
\t<div class=\"widget layout\" ref=\"single\">Single Layout</div>
\t<div class=\"widget layout\" ref=\"double\">Double Layout</div>
\t<div class=\"widget layout\" ref=\"triple\">Triple Layout</div>
\t<div class=\"widget classes\" ref=\"CoachellaUserBundle|Mylineup|getTopArtists^\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_topArtists"), "html");
        echo "\">Add Top Artists</a></div>
\t<div class=\"widget classes edit\" ref=\"CoachellaUserBundle|CMS|imageDrop^\">Image Module</div>
\t<div class=\"widget classes edit\" ref=\"CoachellaUserBundle|CMS|videoDrop^\">Video Module</div>
\t<div class=\"widget classes edit\" ref=\"CoachellaUserBundle|CMS|textDrop^\">Text Module</div>
\t<div style=\"clear: both;\"></div>
\t<input type=\"submit\" name=\"Submit\" class=\"submitWidget\"/>
</div>
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "<div style=\"font-size: 12px; width: 700px; margin: 0px auto; float: left;\">
\t<!-- start of area where we drag and drop widgets -->
\t<ul id=\"test\" style=\"min-height: 200px;\"></ul>
\t<!-- end of widget drop area -->
\t<div style=\"clear: both;\"></div>
</div>
<ul id=\"myMenu\" class=\"contextMenu\">
    <li class=\"editItem\"><a href=\"#edit\">Edit</a></li>
    <li class=\"deleteItem\"><a href=\"#delete\">Delete</a></li>
</ul>
</div>
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "\t";
        $this->env->loadTemplate("CoachellaUserBundle:Default:footer.html.twig")->display($context);
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "\t<style>
\t\t#myMenu{
\t\t\tposition: absolute;
\t\t\tdisplay: none;
\t\t\tpadding: 10px;
\t\t\tbackground: #fff;
\t\t}
\t\t#myMenu li{
\t\t\tfloat: left;
\t\t\tfont-size: 10px;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.addEdit{
\t\t\tdisplay: none;
\t\t}
\t\t.holder{
\t\t\tpadding: 8px;
\t\t\tbackground: #fff;
\t\t}
\t\t.holderDub{
\t\t\tfloat:left; 
\t\t\twidth: 313px;
\t\t\tmargin: 10px;
\t\t}
\t\t.holderSing{
\t\t\tfloat:left; 
\t\t\twidth: 662px;
\t\t\tmargin: 10px;
\t\t}
\t\t.holderTrip{
\t\t\tfloat:left;
\t\t\twidth: 197px;
\t\t\tmargin: 10px;
\t\t}
\t\t.add{
\t\t\tdisplay: none;
\t\t}
\t\t.droppableHover{
\t\t\tbackground:#CCFFFF;
\t\t}
\t\t.widget{
\t\t\tpadding: 10px;
\t\t\tmargin-left: 5px;
\t\t}
\t\t.widget a{
\t\t\ttext-decoration: none;
\t\t\tcolor: #000;
\t\t}
\t</style>
\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery-1.3.2.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/functions.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery-1.3.2.js"), "html");
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery.contextMenu.js"), "html");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery-1.2.6.min.js"), "html");
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/upload/swfupload.js"), "html");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/upload/swfupload.queue.js"), "html");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/upload/fileprogress.js"), "html");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/upload/handlers.js"), "html");
        echo "\"></script>
\t
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/jquery-1.6.2.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/admin/buttonfunctions.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.core.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.widget.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.mouse.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.draggable.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.droppable.js"), "html");
        echo "\"></script>
\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coachella/js/development-bundle/ui/jquery.ui.sortable.js"), "html");
        echo "\"></script>
\t<script>
\tvar dev = '";
        // line 128
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "';
\tvar widgetCount = ";
        // line 129
        echo twig_escape_filter($this->env, $this->getContext($context, 'widgetId'), "html");
        echo ";
\t\$('.submitWidget').click(function(){
\t\tvar add = '{\"testing\":[';
\t\tvar count = 0;
\t\t\$('#test').find('.layoutTest').each(function(){
\t\t\tadd += '{\"layout\":\"layout'+count+'\", \"value\":';
\t\t\tvar layout = \$(this);
\t\t\tadd += '[';
\t\t\tlayout.find('.holder').each(function(){
\t\t\t\t\$(this).find('.add').each(function(){
\t\t\t\t\tadd += '{\"widget\":\"'+\$(this).html()+'\"},';
\t\t\t\t})
\t\t\t})
\t\t\tadd = add.substring(0, add.length-1);
\t\t\tadd += '],';
\t\t\tadd = add.substring(0, add.length-1);
\t\t\tadd += '},';
\t\t\t++count;
\t\t});
\t\tadd = add.substring(0, add.length-1);
\t\tadd += ']}';
\t\tvar num = 0;
\t\tif(\$('input[name=name]').val() == ''){
\t\t\t\$('#errors').html('Please Enter Name for this layout');
\t\t} else {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_updateCMS"), "html");
        echo "',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'data='+add+'&name='+\$('input[name=name]').val(),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(html){
\t\t\t\t\tvar location = \"/app_dev.php/getLayout/\"+html;
\t\t\t\t\twindow.location = location;
\t\t\t\t},
\t\t\t});
\t\t}
\t\treturn false;
\t})
\t\$('.widget').draggable({
\t\thelper: \"clone\",
\t});
\tvar layouts = 0;
\tvar hideEditTimeout;
\t\$('#test').droppable({ 
\t\taccept: '.layout',
\t\thoverClass: \"droppableHover\",
\t\tdrop: function(event, ui){
\t\t\tswitch(ui.draggable.attr('ref')){
\t\t\t\tcase 'single':
\t\t\t\t\t\$(this).append('<li class=\"layoutTest\" ref=\"'+layouts+'\"><div class=\"holder holderSing\"></div><div style=\"clear: both;\"></div></li>');
\t\t\t\t\tbreak;
\t\t\t\tcase 'double':
\t\t\t\t\t\$(this).append('<li class=\"layoutTest\" ref=\"'+layouts+'\"><div class=\"holder holderDub\"></div><div class=\"holder holderDub\"></div><div style=\"clear: both;\"></div></li>');
\t\t\t\t\tbreak;
\t\t\t\tcase 'triple':
\t\t\t\t\t\$(this).append('<li class=\"layoutTest\" ref=\"'+layouts+'\"><div class=\"holder holderTrip\"></div><div class=\"holder holderTrip\"></div><div class=\"holder holderTrip\"></div><div style=\"clear: both;\"></div></li>');\t
\t\t\t\t\tbreak;
\t\t\t}
\t\t\t\$('.layoutTest .holder').droppable({
\t\t\t\taccept:\t'.widget',
\t\t\t\thoverClass: \"droppableHover\",
\t\t\t\tdrop:\tfunction(event, ui){
\t\t\t\t\tvar droppable = \$(this);
\t\t\t\t\tif(ui.draggable.getClass('edit')){
\t\t\t\t\t\tvar data = 'data='+ui.draggable.attr('ref')+'id,'+widgetCount;
\t\t\t\t\t\t++widgetCount;
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: '";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_dropEdit"), "html");
        echo "',
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tsuccess: function(html){
\t\t\t\t\t\t\t\tdroppable.append('<div class=\"widgetDisplay'+widgetCount+' widgetDisplay\">'+html+'<div class=\"addEdit\">'+ui.draggable.attr('ref')+'id,'+widgetCount+'</div></div>');
\t\t\t\t\t\t\t\t\$('.widgetDisplay').createHover();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: ui.draggable.find('a').attr('href'),
\t\t\t\t\t\t\tsuccess: function(html){
\t\t\t\t\t\t\t\tdroppable.append(html);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\tdroppable.append('<div class=\"add\">'+ui.draggable.attr('ref')+'</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t++layouts;
\t\t\tvar id = ui.draggable.attr('ref');
\t\t}
\t});
\t
\tvar currHover = '';
\t\$.fn.createHover = function(){
\t\t\$(this).hover(function(){
\t\t\tvar widgetDisplay = \$(this);
\t\t\t\$('#myMenu').css('top', widgetDisplay.position().top-35).css('left', widgetDisplay.position().left-8).css('display', 'block');
\t\t\tcurrHover = widgetDisplay;
\t\t},
\t\tfunction(){  }
\t);}
\t
\t\$('.editItem').click(function(){
\t\tvar link = 'data='+currHover.find('.addEdit').html();
\t\t\$.ajax({
\t\t\turl: '";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_dropEdit"), "html");
        echo "',
\t\t\tdata: link,
\t\t\tsuccess: function(html){
\t\t\t\tcurrHover.parent().find('.widgetDisplay').html(html);
\t\t\t}
\t\t})
\t})
\t
\t\$('.deleteItem').click(function(){
\t\tcurrHover.html('');
\t})
\t
\t\$.fn.getClass = function(classCheck){
\t\tvar classList = \$(this).attr('class').split(/\\s+/);
\t\tvar available = false;
\t\tfor(var i = 0; i < classList.length; ++i){
\t\t\tif(classCheck == classList[i]){
\t\t\t\treturn true;
\t\t\t}
\t\t}
\t\treturn false;
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "CoachellaUserBundle:CMS:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
