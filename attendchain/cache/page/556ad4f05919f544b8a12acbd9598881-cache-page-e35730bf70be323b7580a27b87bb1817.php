<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:29934:"<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- head -->
        <base href="http://localhost/attendchain/index.php/en/upload-credential" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Attendance Management System" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>UPLOAD CREDENTIAL</title>
	<link href="/attendchain/templates/shaper_helix3/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="/attendchain/components/com_contentbuilder/assets/css/system.css" rel="stylesheet" type="text/css" />
	<link href="/attendchain/media/system/css/modal.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="/attendchain/templates/shaper_helix3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/attendchain/templates/shaper_helix3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="/attendchain/templates/shaper_helix3/css/legacy.css" rel="stylesheet" type="text/css" />
	<link href="/attendchain/templates/shaper_helix3/css/template.css" rel="stylesheet" type="text/css" />
	<link href="/attendchain/templates/shaper_helix3/css/presets/preset1.css" rel="stylesheet" type="text/css" class="preset" />
	<link href="/attendchain/templates/shaper_helix3/css/frontend-edit.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
body{font-family:Open Sans, sans-serif; font-weight:300; }h1{font-family:Open Sans, sans-serif; font-weight:800; }h2{font-family:Open Sans, sans-serif; font-weight:600; }h3{font-family:Open Sans, sans-serif; font-weight:normal; }h4{font-family:Open Sans, sans-serif; font-weight:normal; }h5{font-family:Open Sans, sans-serif; font-weight:600; }h6{font-family:Open Sans, sans-serif; font-weight:600; }#sp-top-bar{ background-color:#f5f5f5;color:#999999; }
	</style>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"77e2fe5a54bb15c210676e85257cad5e","system.paths":{"root":"\/attendchain","base":"\/attendchain"},"system.keepalive":{"interval":840000,"uri":"\/attendchain\/index.php\/en\/component\/ajax\/?format=json"}}</script>
	<script src="/attendchain/media/system/js/mootools-core.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/core.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/mootools-more.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/modal.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery.min.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery-noconflict.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery-migrate.min.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/components/com_contentbuilder/assets/js/contentbuilder.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/main.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/frontend-edit.js" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="/attendchain/media/system/js/polyfill.event.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script><![endif]-->
	<script src="/attendchain/media/system/js/keepalive.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script type="text/javascript">

		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal').get(), {
				parse: 'rel'
			});
		});

		window.jModalClose = function () {
			SqueezeBox.close();
		};
		
		// Add extra modal close functionality for tinyMCE-based editors
		document.onreadystatechange = function () {
			if (document.readyState == 'interactive' && typeof tinyMCE != 'undefined' && tinyMCE)
			{
				if (typeof window.jModalClose_no_tinyMCE === 'undefined')
				{	
					window.jModalClose_no_tinyMCE = typeof(jModalClose) == 'function'  ?  jModalClose  :  false;
					
					jModalClose = function () {
						if (window.jModalClose_no_tinyMCE) window.jModalClose_no_tinyMCE.apply(this, arguments);
						tinyMCE.activeEditor.windowManager.close();
					};
				}
		
				if (typeof window.SqueezeBoxClose_no_tinyMCE === 'undefined')
				{
					if (typeof(SqueezeBox) == 'undefined')  SqueezeBox = {};
					window.SqueezeBoxClose_no_tinyMCE = typeof(SqueezeBox.close) == 'function'  ?  SqueezeBox.close  :  false;
		
					SqueezeBox.close = function () {
						if (window.SqueezeBoxClose_no_tinyMCE)  window.SqueezeBoxClose_no_tinyMCE.apply(this, arguments);
						tinyMCE.activeEditor.windowManager.close();
					};
				}
			}
		};
		jQuery(function($){ initPopovers(); $("body").on("subform-row-add", initPopovers); function initPopovers (event, container) { $(container || document).find(".hasPopover").popover({"html": true,"trigger": "hover focus","container": "body"});} });
var sp_preloader = '0';

var sp_gotop = '0';

var sp_offanimation = 'default';
jQuery(function($){ initTooltips(); $("body").on("subform-row-add", initTooltips); function initTooltips (event, container) { container = container || document;$(container).find(".hasTooltip").tooltip({"html": true,"container": "body"});} });
	</script>

            </head>

    <body class="site com-contentbuilder view-list no-layout no-task itemid-121 en-gb ltr  layout-boxed off-canvas-menu-init">

        <div class="body-wrapper">
            <div class="body-innerwrapper">
                <section id="sp-top-bar"><div class="container"><div class="row"><div id="sp-top1" class="col-sm-6 col-md-6"><div class="sp-column "></div></div><div id="sp-top2" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="sp-contact-info"></ul></div></div></div></div></section><header id="sp-header"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3"><div class="sp-column "><div class="logo"><a href="/attendchain/"><img class="sp-default-logo" src="/attendchain/templates/shaper_helix3/images/presets/preset1/logo.png" alt="ATTENDCHAIN"><img class="sp-retina-logo" src="/attendchain/templates/shaper_helix3/images/presets/preset1/logo@2x.png" alt="ATTENDCHAIN" width="278" height="134"></a></div></div></div><div id="sp-menu" class="col-xs-4 col-sm-9 col-md-9"><div class="sp-column ">			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" href="#" aria-label="Helix Megamenu Options"><i class="fa fa-bars" aria-hidden="true" title="Helix Megamenu Options"></i></a>
				<ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs"><li class="sp-menu-item"><a  href="/attendchain/index.php/en/"  >LOGIN </a></li><li class="sp-menu-item current-item active"><a  href="/attendchain/index.php/en/upload-credential"  >UPLOAD CREDENTIAL</a></li></ul>			</div>
		</div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "></div></div></div></section><section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>
<style type="text/css">
    .cbFieldFix{
        margin-bottom: 9px;
    }
    .cbPagesCounter{
        float: left;
        padding-right: 10px;
        padding-top: 4px;
    }
    #limit{
        max-width: 50px;
    }
</style>
<script language="javascript" type="text/javascript">
<!--
Joomla.tableOrdering = function( order, dir, task ) {
	var form = document.adminForm;
        form.limitstart.value = 0; 
	form.filter_order.value 	= order;
	form.filter_order_Dir.value	= dir;
	document.adminForm.submit( task );
}
function contentbuilder_selectAll(checker){
    for(var i = 0; i < document.adminForm.elements.length; i++){
        if(  document.adminForm.elements[i].name == 'cid[]' ){
            if(checker.checked){
                document.adminForm.elements[i].checked = true;
            }else{
                document.adminForm.elements[i].checked = false;
            }
        }
    }
}
function contentbuilder_state(){
    document.getElementById('controller').value='edit';
    document.getElementById('view').value='edit';
    document.getElementById('task').value='state';
    document.adminForm.submit();
}
function contentbuilder_publish(){
    document.getElementById('controller').value='edit';
    document.getElementById('view').value='edit';
    document.getElementById('task').value='publish';
    document.adminForm.submit();
}
function contentbuilder_language(){
    document.getElementById('controller').value='edit';
    document.getElementById('view').value='edit';
    document.getElementById('task').value='language';
    document.adminForm.submit();
}
function contentbuilder_delete(){
    var confirmed = confirm('Are you sure you want to delete the selected entries?');
    if(confirmed){
        document.getElementById('controller').value='edit';
        document.getElementById('view').value='edit';
        document.getElementById('task').value='delete';
        document.adminForm.submit();
    }
}
jQuery(document).ready(function(){
    jQuery(function() {
        jQuery("#contentbuilder_filter").keypress(function (e) {
        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
            jQuery('#cbSearchButton').click();
            return false;
        } else {
            return true;
        }
        });
    });
});
-->
</script>
<div class="cbListView">
<form action="" method="post" name="adminForm" id="adminForm">
        
            
        
    <div style="float: right; text-align: right;">
        <a class="button btn btn-primary cbButton cbNewButton" href="/attendchain/index.php/en/upload-credential/edit/2/entry?backtolist=1&amp;start=0">New</a>
            <div style="padding-bottom: 10px;"></div>
        </div>
    <div style="clear: both;"></div>
     
                                <div id="cbFilterTitleWrap" style="float: left; padding-right: 5px;">
                Filter&nbsp;                </div>
                <div id="cbFilterWrap" style="float: left; padding-right: 5px;">
                <input style="max-width: 150px;" type="text" id="contentbuilder_filter" name="filter" value="" class="inputbox" onchange="document.adminForm.submit();"/>
                </div>
                                <div id="cbSearchButtonWrap" style="float: left; padding-right: 5px;">
                <button type="submit" class="button btn btn-secondary cbButton cbSearchButton" id="cbSearchButton" onclick="document.adminForm.submit();">Search</button>
                
                <button class="button btn btn-secondary cbButton cbResetButton" onclick="document.getElementById('contentbuilder_filter').value='';if(document.getElementById('list_publish_filter')) document.getElementById('list_publish_filter').selectedIndex=0;document.adminForm.submit();">Reset</button>
                </div>
                    
    <table class="category table table-striped" width="100%" border="0" cellspacing="0" cellpadding="2">
    <thead>
        <tr>
                        <th class="sectiontableheader hidden-phone" width="5">
                <a href="#" onclick="Joomla.tableOrdering('colRecord','asc','');return false;" class="hasPopover" title="ID" data-content="Select to sort by this column" data-placement="top">ID</a>            </th>
                        <th class="sectiontableheader">
                <a href="#" onclick="Joomla.tableOrdering('col4','asc','');return false;" class="hasPopover" title="Document Name" data-content="Select to sort by this column" data-placement="top">Document Name</a>            </th>
                        <th class="sectiontableheader hidden-phone">
                <a href="#" onclick="Joomla.tableOrdering('col5','asc','');return false;" class="hasPopover" title="Year Obtained" data-content="Select to sort by this column" data-placement="top">Year Obtained</a>            </th>
                        <th class="sectiontableheader hidden-phone">
                <a href="#" onclick="Joomla.tableOrdering('col6','asc','');return false;" class="hasPopover" title="Issued By" data-content="Select to sort by this column" data-placement="top">Issued By</a>            </th>
                        <th class="sectiontableheader hidden-phone">
                <a href="#" onclick="Joomla.tableOrdering('col7','asc','');return false;" class="hasPopover" title="Image" data-content="Select to sort by this column" data-placement="top">Image</a>            </th>
                    </tr>
    </thead>
    <tbody>
            <tr class="row0">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/1/upload-credential-ssce-certificate?start=0">1</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/1/upload-credential-ssce-certificate?start=0">SSCE Certificate</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/1/upload-credential-ssce-certificate?start=0">2004</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/1/upload-credential-ssce-certificate?start=0">WAEC</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/1/upload-credential-ssce-certificate?start=0"></a>
                            </td>
                    </tr>
                <tr class="row1">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/2/upload-credential-ssce?start=0">2</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/2/upload-credential-ssce?start=0">SSCE</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/2/upload-credential-ssce?start=0">2004</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/2/upload-credential-ssce?start=0">WAEC</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/2/upload-credential-ssce?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=405e73c6057637fffc27384740a9ef6447fbd995" class="modal" rel="{handler:'iframe',size:{x:351,y:321}}"><img border="0" width="100" height="100" alt="logo2.png" title="logo2.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=34ceeca3c85a24f149c6d67b7a9ab9184b6d27f0"/></a></a>
                            </td>
                    </tr>
                <tr class="row0">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/3/upload-credential-ssce?start=0">3</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/3/upload-credential-ssce?start=0">ssce</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/3/upload-credential-ssce?start=0">2004</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/3/upload-credential-ssce?start=0">waec</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/3/upload-credential-ssce?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=640343b8c5b44e3e12cd39162e6061c56f3b83c1" class="modal" rel="{handler:'iframe',size:{x:351,y:321}}"><img border="0" width="100" height="100" alt="5dd33c26031ad2a85b2470f57e5f2029_logo2.png" title="5dd33c26031ad2a85b2470f57e5f2029_logo2.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=c18689398e2a23c012d0f75240aa236a505a6c40"/></a></a>
                            </td>
                    </tr>
                <tr class="row1">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/4/upload-credential-waec?start=0">4</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/4/upload-credential-waec?start=0">waec</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/4/upload-credential-waec?start=0">ssce</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/4/upload-credential-waec?start=0">234</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/4/upload-credential-waec?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=3b41b3654d74e23dcc2c027929f662f97c6a2588" class="modal" rel="{handler:'iframe',size:{x:165,y:68}}"><img border="0" width="100" height="100" alt="logo.png" title="logo.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=31efcd2ede98b62ed99601c139b90e424bbe51b0"/></a></a>
                            </td>
                    </tr>
                <tr class="row0">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/5/upload-credential-waec?start=0">5</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/5/upload-credential-waec?start=0">waec</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/5/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/5/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/5/upload-credential-waec?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=44ea59338a39aed2307bbbbed585ed21ad1706e2" class="modal" rel="{handler:'iframe',size:{x:351,y:321}}"><img border="0" width="100" height="100" alt="8a6d10a7f508f8c8e7d7eb599d230bd7_logo2.png" title="8a6d10a7f508f8c8e7d7eb599d230bd7_logo2.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=5e2d66e27253bb39f897a7e1b51694c85dc8ab68"/></a></a>
                            </td>
                    </tr>
                <tr class="row1">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/6/upload-credential-waec?start=0">6</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/6/upload-credential-waec?start=0">waec</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/6/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/6/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/6/upload-credential-waec?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=2359ca53f63426891cdb76d835dd72b95a08c4a1" class="modal" rel="{handler:'iframe',size:{x:351,y:321}}"><img border="0" width="100" height="100" alt="e017aba1a337fee5591ad0e8b524fc15_logo2.png" title="e017aba1a337fee5591ad0e8b524fc15_logo2.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=d6b4cdce933d9d0a3561562b0c12dbc50b06362b"/></a></a>
                            </td>
                    </tr>
                <tr class="row0">
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/7/upload-credential-waec?start=0">7</a>
                            </td>
                                                                                                                                    <td>
                                <a href="/attendchain/index.php/en/upload-credential/details/2/7/upload-credential-waec?start=0">waec</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/7/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/7/upload-credential-waec?start=0">1993</a>
                            </td>
                        <td class="hidden-phone">
                                <a href="/attendchain/index.php/en/upload-credential/details/2/7/upload-credential-waec?start=0"><a href="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display_detail=1&contentbuilder_detail_file=0f19cd0aa13fa81970885d1756fde1ecf8a4a759" class="modal" rel="{handler:'iframe',size:{x:351,y:321}}"><img border="0" width="100" height="100" alt="3b15b67227db0b454f358edf3d0cd0af_logo2.png" title="3b15b67227db0b454f358edf3d0cd0af_logo2.png" src="http://localhost/attendchain/index.php/en/upload-credential?contentbuilder_display=1&contentbuilder_field=c637dff8a1d83138b5484b521ec9c2f1a00fe7d2"/></a></a>
                            </td>
                    </tr>
            </tbody>    
            <tfoot>
            <tr>
                <td colspan="1000" valign="middle" align="center">
                    <div class="pagination pagination-toolbar">
                                        <div class="cbPagesCounter hidden-phone">
                                                &nbsp;&nbsp;&nbsp;Display&nbsp;<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()">
	<option value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20" selected="selected">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="50">50</option>
	<option value="100">100</option>
	<option value="0">All</option>
</select>
                        of                        7                    </div>
                                                            </div>
                </td>
            </tr>
        </tfoot>
        </table>
<input type="hidden" name="option" value="com_contentbuilder" />
<input type="hidden" name="task" id="task" value="" />
<input type="hidden" name="controller" id="controller" value="list" />
<input type="hidden" name="view" id="view" value="list" />
<input type="hidden" name="Itemid" value="121"/>
<input type="hidden" name="limitstart" value="" />
<input type="hidden" name="id" value="2" />
<input type="hidden" name="filter_order" value="" />
<input type="hidden" name="filter_order_Dir" value="" />
<input type="hidden" name="77e2fe5a54bb15c210676e85257cad5e" value="1" /></form>
    
</div>


</div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright">© 2019 VITCHAIN, Managing all your credentials!</span></div></div></div></div></footer>            </div> <!-- /.body-innerwrapper -->
        </div> <!-- /.body-innerwrapper -->

        <!-- Off Canvas Menu -->
        <div class="offcanvas-menu">
            <a href="#" class="close-offcanvas" aria-label="Close"><i class="fa fa-remove" aria-hidden="true" title="HELIX_CLOSE_MENU"></i></a>
            <div class="offcanvas-inner">
                                  <div class="sp-module "><h3 class="sp-module-title">Login Form</h3><div class="sp-module-content"><form action="http://localhost/attendchain/index.php/en/upload-credential" method="post" id="login-form">
		
	<div id="form-login-username" class="form-group">
					<div class="input-group">
				<span class="input-group-addon">
					<i class="icon-user hasTooltip" title="Username"></i>
				</span>
				<input id="modlgn-username" type="text" name="username" class="form-control" tabindex="0" size="18" placeholder="Username" />
			</div>
			</div>
	<div id="form-login-password" class="form-group">
		<div class="controls">
							<div class="input-group">
					<span class="input-group-addon">
						<i class="icon-lock hasTooltip" title="Password"></i>
					</span>
					<input id="modlgn-passwd" type="password" name="password" class="form-control" tabindex="0" size="18" placeholder="Password" />
				</div>
					</div>
	</div>
	
		<div id="form-login-remember" class="form-group">
		<div class="checkbox">
			<label for="modlgn-remember"><input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes">Remember Me</label>
		</div>
	</div>
	
	<div id="form-login-submit" class="form-group">
		<button type="submit" tabindex="0" name="Submit" class="btn btn-primary">Log in</button>
					<a class="btn btn-success" href="/attendchain/index.php/en/component/users/?view=registration">Create an account <span class="icon-arrow-right"></span></a>
			</div>

	<ul class="form-links">
		<li>
			<a href="/attendchain/index.php/en/component/users/?view=remind">
			Forgot your username?</a>
		</li>
		<li>
			<a href="/attendchain/index.php/en/component/users/?view=reset">
			Forgot your password?</a>
		</li>
	</ul>
	
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="aHR0cDovL2xvY2FsaG9zdC9hdHRlbmRjaGFpbi9pbmRleC5waHAvZW4vdXBsb2FkLWNyZWRlbnRpYWw=" />
	<input type="hidden" name="77e2fe5a54bb15c210676e85257cad5e" value="1" />
	</form>
</div></div>
                            </div> <!-- /.offcanvas-inner -->
        </div> <!-- /.offcanvas-menu -->

        
        
        
        <!-- Preloader -->
        

        <!-- Go to top -->
        
    </body>
</html>";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:6:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}i:1;a:2:{s:4:"name";s:12:"Content-Type";s:5:"value";s:24:"text/html; charset=utf-8";}i:2;a:2:{s:4:"name";s:7:"Expires";s:5:"value";s:29:"Wed, 17 Aug 2005 00:00:00 GMT";}i:3;a:2:{s:4:"name";s:13:"Last-Modified";s:5:"value";s:29:"Sat, 20 Apr 2019 05:38:45 GMT";}i:4;a:2:{s:4:"name";s:13:"Cache-Control";s:5:"value";s:62:"no-store, no-cache, must-revalidate, post-check=0, pre-check=0";}i:5;a:2:{s:4:"name";s:6:"Pragma";s:5:"value";s:8:"no-cache";}}}