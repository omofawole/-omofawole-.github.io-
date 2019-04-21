<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:33237:"<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<meta charset="utf-8" />
	<base href="http://localhost/attendchain/index.php/en/" />
	<meta name="description" content="Attendance Management System" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Login Form</title>
	<link href="/attendchain/templates/beez3/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="/attendchain/components/com_breezingforms/libraries/jquery/tooltip.css" rel="stylesheet" />
	<link href="/attendchain/templates/system/css/system.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" />
	<link href="/attendchain/templates/beez3/css/position.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" />
	<link href="/attendchain/templates/beez3/css/layout.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" />
	<link href="/attendchain/templates/beez3/css/print.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" media="print" />
	<link href="/attendchain/templates/beez3/css/general.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" />
	<link href="/attendchain/templates/beez3/css/personal.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" />
	<!--[if IE 7]><link href="/attendchain/templates/beez3/css/ie7only.css?3f137731dd969cb051c33a53d6497759" rel="stylesheet" /><![endif]-->
	<style>


.bfClearfix:after {
content: ".";
display: block;
height: 0;
clear: both;
visibility: hidden;
}
.bfInline{
float:left;
}
.bfFadingClass{
display:none;
}
	</style>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"7853a9420df114e45378a0c7475c8e18","system.paths":{"root":"\/attendchain","base":"\/attendchain"},"joomla.jtext":{"TPL_BEEZ3_ALTOPEN":"is open","TPL_BEEZ3_ALTCLOSE":"is closed","TPL_BEEZ3_TEXTRIGHTOPEN":"Open info","TPL_BEEZ3_TEXTRIGHTCLOSE":"Close info","TPL_BEEZ3_FONTSIZE":"Font Size","TPL_BEEZ3_BIGGER":"Bigger","TPL_BEEZ3_RESET":"Reset","TPL_BEEZ3_SMALLER":"Smaller","TPL_BEEZ3_INCREASE_SIZE":"Increase size","TPL_BEEZ3_REVERT_STYLES_TO_DEFAULT":"Revert styles to default","TPL_BEEZ3_DECREASE_SIZE":"Decrease size","TPL_BEEZ3_OPENMENU":"Open Menu","TPL_BEEZ3_CLOSEMENU":"Close Menu"}}</script>
	<script src="/attendchain/media/system/js/mootools-core.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/media/system/js/core.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/media/system/js/mootools-more.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/media/jui/js/jquery.min.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/media/jui/js/jquery-noconflict.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/media/jui/js/jquery-migrate.min.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/components/com_breezingforms/libraries/jquery/jq.min.js"></script>
	<script src="/attendchain/components/com_breezingforms/libraries/jquery/tooltip.js"></script>
	<script src="/attendchain/media/jui/js/bootstrap.min.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/templates/beez3/javascript/md_stylechanger.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/templates/beez3/javascript/hide.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/templates/beez3/javascript/respond.src.js?3f137731dd969cb051c33a53d6497759"></script>
	<script src="/attendchain/templates/beez3/javascript/template.js?3f137731dd969cb051c33a53d6497759"></script>
	<!--[if lt IE 9]><script src="/attendchain/media/jui/js/html5.js?3f137731dd969cb051c33a53d6497759"></script><![endif]-->
	<script>
<!--
			var inlineErrorElements = new Array();
			var bfSummarizers = new Array();
			var bfDeactivateField = new Array();
			var bfDeactivateSection = new Array();
			
                        
                        function bf_validate_nextpage(element, action)
                        {
                            if(typeof bfUseErrorAlerts != "undefined"){
                             JQuery(".bfErrorMessage").html("");
                             JQuery(".bfErrorMessage").css("display","none");
                            }

                            error = ff_validation(ff_currentpage);
                            if (error != "") {
                               if(typeof bfUseErrorAlerts == ""){
                                   alert(error);
                                } else {
                                   bfShowErrors(error);
                                }
                                ff_validationFocus("");
                            } else {
                                ff_switchpage(ff_currentpage+1);
                                self.scrollTo(0,0);   
                            }
                        } 

			function bfCheckMaxlength(id, maxlength, showMaxlength){
				if( JQuery("#ff_elem"+id).val().length > maxlength ){
					JQuery("#ff_elem"+id).val( JQuery("#ff_elem"+id).val().substring(0, maxlength) );
				}
				if(showMaxlength){
					JQuery("#bfMaxLengthCounter"+id).text( "(" + (maxlength - JQuery("#ff_elem"+id).val().length) + " chars left)" );
				}
			}
			function bfRegisterSummarize(id, connectWith, type, emptyMessage, hideIfEmpty){
				bfSummarizers.push( { id : id, connectWith : connectWith, type : type, emptyMessage : emptyMessage, hideIfEmpty : hideIfEmpty } );
			}
			function bfField(name){
				var value = "";
				switch(ff_getElementByName(name).type){
					case "radio":
						if(JQuery("[name=\""+ff_getElementByName(name).name+"\"]:checked").val() != "" && typeof JQuery("[name=\""+ff_getElementByName(name).name+"\"]:checked").val() != "undefined"){
							value = JQuery("[name=\""+ff_getElementByName(name).name+"\"]:checked").val();
							if(!isNaN(value)){
								value = Number(value);
							}
						}
						break;
					case "checkbox":
					case "select-one":
					case "select-multiple":
						var nodeList = document["ff_form5"][""+ff_getElementByName(name).name+""];
						if(ff_getElementByName(name).type == "checkbox" && typeof nodeList.length == "undefined"){
							if(typeof JQuery("[name=\""+ff_getElementByName(name).name+"\"]:checked").val() != "undefined"){
								value = JQuery("[name=\""+ff_getElementByName(name).name+"\"]:checked").val();
								if(!isNaN(value)){
									value = Number(value);
								}
							}
						} else {
							var val = "";
							for(var j = 0; j < nodeList.length; j++){
								if(nodeList[j].checked || nodeList[j].selected){
									val += nodeList[j].value + ", ";
								}
							}
							if(val != ""){
								value = val.substr(0, val.length - 2);
								if(!isNaN(value)){
									value = Number(value);
								}
							}
						}
						break;
					default:
						if(!isNaN(ff_getElementByName(name).value)){
							value = Number(ff_getElementByName(name).value);
						} else {
							value = ff_getElementByName(name).value;
						}
				}
				return value;
			}
			function populateSummarizers(){
				// cleaning first
                                
				for(var i = 0; i < bfSummarizers.length; i++){
					JQuery("#"+bfSummarizers[i].id).parent().css("display", "");
					JQuery("#"+bfSummarizers[i].id).html("<span class=\"bfNotAvailable\">"+bfSummarizers[i].emptyMessage+"</span>");
				}
				for(var i = 0; i < bfSummarizers.length; i++){
					var summVal = "";
					switch(bfSummarizers[i].type){
						case "bfTextfield":
						case "bfTextarea":
						case "bfHidden":
						case "bfCalendar":
						case "bfNumberInput":
                        case "bfCalendarResponsive":
						case "bfFile":
							if(JQuery("[name=\"ff_nm_"+bfSummarizers[i].connectWith+"[]\"]").val() != ""){
								JQuery("#"+bfSummarizers[i].id).text( JQuery("[name=\"ff_nm_"+bfSummarizers[i].connectWith+"[]\"]").val() ).html();
								var breakableText = JQuery("#"+bfSummarizers[i].id).html().replace(/\r/g, "").replace(/\n/g, "<br/>");
								
								if(breakableText != ""){
									var calc = null;
									eval( "calc = typeof bfFieldCalc"+bfSummarizers[i].id+" != \"undefined\" ? bfFieldCalc"+bfSummarizers[i].id+" : null" );
									if(calc){
										breakableText = calc(breakableText);
									}
								}
								
								JQuery("#"+bfSummarizers[i].id).html(breakableText);
								summVal = breakableText;
							}
						break;
						case "bfRadioGroup":
						case "bfCheckbox":
							if(JQuery("[name=\"ff_nm_"+bfSummarizers[i].connectWith+"[]\"]:checked").val() != "" && typeof JQuery("[name=\"ff_nm_"+bfSummarizers[i].connectWith+"[]\"]:checked").val() != "undefined"){
								var theText = JQuery("[name=\"ff_nm_"+bfSummarizers[i].connectWith+"[]\"]:checked").val();
								if(theText != ""){
									var calc = null;
									eval( "calc = typeof bfFieldCalc"+bfSummarizers[i].id+" != \"undefined\" ? bfFieldCalc"+bfSummarizers[i].id+" : null" );
									if(calc){
										theText = calc(theText);
									}
								}
								JQuery("#"+bfSummarizers[i].id).html( theText );
								summVal = theText;
							}
						break;
						case "bfCheckboxGroup":
						case "bfSelect":
							var val = "";
							var nodeList = document["ff_form5"]["ff_nm_"+bfSummarizers[i].connectWith+"[]"];
							
							for(var j = 0; j < nodeList.length; j++){
								if(nodeList[j].checked || nodeList[j].selected){
									val += nodeList[j].value + ", ";
								}
							}
							if(val != ""){
								var theText = val.substr(0, val.length - 2);
								if(theText != ""){
									var calc = null;
									eval( "calc = typeof bfFieldCalc"+bfSummarizers[i].id+" != \"undefined\" ? bfFieldCalc"+bfSummarizers[i].id+" : null" );
									if(calc){
										theText = calc(theText);
									}
								}
								JQuery("#"+bfSummarizers[i].id).html( theText );
								summVal = theText;
							}
						break;
					}
					
					if( ( bfSummarizers[i].hideIfEmpty && summVal == "" ) || ( typeof bfDeactivateField != "undefined" && bfDeactivateField["ff_nm_"+bfSummarizers[i].connectWith+"[]"] ) ){
                                            JQuery("#"+bfSummarizers[i].id).parent().css("display", "none");
					}
				}
			}
var bfUseErrorAlerts = false;

				function bfShowErrors(error){
                                        JQuery(".bfErrorMessage").html("");
					JQuery(".bfErrorMessage").css("display","none");
					JQuery(".bfErrorMessage").fadeIn(1500);
					var allErrors = "";
					var errors = error.split("\n");
					for(var i = 0; i < errors.length; i++){
						allErrors += "<div class=\"bfError\">" + errors[i] + "</div>";
					}
					JQuery(".bfErrorMessage").html(allErrors);
					JQuery(".bfErrorMessage").css("display","");

                                        if(JQuery.bfvalidationEngine)
                                        {
                                            JQuery("#ff_form5").bfvalidationEngine({
                                              promptPosition: "bottomLeft",
                                              success :  false,
                                              failure : function() {}
                                            });

                                            for(var i = 0; i < inlineErrorElements.length; i++)
                                            {
                                                if(inlineErrorElements[i][1] != "")
                                                {
                                                    var prompt = null;
                                                    
                                                    if(inlineErrorElements[i][0] == "bfCaptchaEntry"){
                                                        prompt = JQuery.bfvalidationEngine.buildPrompt("#bfCaptchaEntry",inlineErrorElements[i][1],"error");
                                                    }
                                                    else if(inlineErrorElements[i][0] == "bfReCaptchaEntry"){
                                                        // nothing here yet for recaptcha, alert is default
                                                        alert(inlineErrorElements[i][1]);
                                                    }
                                                    else if(typeof JQuery("#bfUploader"+inlineErrorElements[i][0]).get(0) != "undefined")
                                                    {
                                                        alert(inlineErrorElements[i][1]);
                                                        //prompt = JQuery.bfvalidationEngine.buildPrompt("#"+JQuery("#bfUploader"+inlineErrorElements[i][0]).val(),inlineErrorElements[i][1],"error");
                                                    }
                                                    else
                                                    {
                                                        if(ff_getElementByName(inlineErrorElements[i][0])){
                                                            prompt = JQuery.bfvalidationEngine.buildPrompt("#"+ff_getElementByName(inlineErrorElements[i][0]).id,inlineErrorElements[i][1],"error");
                                                        }else{
                                                            alert(inlineErrorElements[i][1]);
                                                        }
                                                    }
                                                    
                                                    JQuery(prompt).mouseover(
                                                        function(){
                                                            var inlineError = JQuery(this).attr("class").split(" ");
                                                            if(inlineError && inlineError.length && inlineError.length == 2){
                                                                var result = inlineError[1].split("formError");
                                                                if(result && result.length && result.length >= 1){
                                                                    JQuery.bfvalidationEngine.closePrompt("#"+result[0]);
                                                                }
                                                            }
                                                        }
                                                    );
                                                }
                                                else
                                                {
                                                    if(typeof JQuery("#bfUploader"+inlineErrorElements[i][0]).get(0) != "undefined")
                                                    {
                                                        //JQuery.bfvalidationEngine.closePrompt("#"+JQuery("#bfUploader"+inlineErrorElements[i][0]).val());
                                                    }
                                                    else
                                                    {
                                                        if(ff_getElementByName(inlineErrorElements[i][0])){
                                                            JQuery.bfvalidationEngine.closePrompt("#"+ff_getElementByName(inlineErrorElements[i][0]).id);
                                                        }
                                                    }
                                                }
                                            }
                                            inlineErrorElements = new Array();
                                        }
				}
					var bfElemWrapBg = "";
					function bfSetElemWrapBg(){
						bfElemWrapBg = JQuery(".bfElemWrap").css("background-color");
					}
					function bfRollover() {
						JQuery(".ff_elem").focus(
							function(){
								var parent = JQuery(this).parent();
								if(parent && parent.attr("class").substr(0, 10) == "bfElemWrap"){
									parent.css("background","#ffc");
								} else {
									parent = JQuery(this).parent().parent();
									parent.css("background","#ffc");
								}
                                                                parent.addClass("bfRolloverBg");
							}
						).blur(
							function(){
								var parent = JQuery(this).parent();
								if(parent && parent.attr("class").substr(0, 10) == "bfElemWrap"){
									parent.css("background",bfElemWrapBg);
								} else {
									parent = JQuery(this).parent().parent();
									parent.css("background",bfElemWrapBg);
								}
                                                                parent.removeClass("bfRolloverBg");
							}
						);
					}
					function bfRollover2() {
						JQuery(".bfElemWrap").mouseover(
							function(){
								JQuery(this).css("background","#ffc");
                                                                JQuery(this).addClass("bfRolloverBg");
							}
						);
						JQuery(".bfElemWrap").mouseout(
							function(){
								JQuery(this).css("background",bfElemWrapBg);
                                                                JQuery(this).removeClass("bfRolloverBg");
							}
						);
					}
				
			JQuery(document).ready(function() {
				if(typeof bfFade != "undefined")bfFade();
				if(typeof bfSetElemWrapBg != "undefined")bfSetElemWrapBg();
				if(typeof bfRollover != "undefined")bfRollover();
				if(typeof bfRollover2 != "undefined")bfRollover2();
				if(typeof bfRegisterToggleFields != "undefined")bfRegisterToggleFields();
				if(typeof bfDeactivateSectionFields != "undefined")bfDeactivateSectionFields();
                                if(JQuery.bfvalidationEngine)
                                {
                                    JQuery.bfvalidationEngineLanguage.newLang();
                                    JQuery(".ff_elem").change(
                                        function(){
                                            JQuery.bfvalidationEngine.closePrompt(this);
                                        }
                                    );
                                }
				JQuery(".bfQuickMode .hasTip").css("color","inherit"); // fixing label text color issue
				JQuery(".bfQuickMode .bfTooltip").css("color","inherit"); // fixing label text color issue
    
                                JQuery("input[type=text]").bind("keypress", function(evt) {
                                    if(evt.keyCode == 13) {
                                        evt.preventDefault();
                                    }
                                });
			});
		//-->
	var big        = '72%';
	var small      = '53%';
	var bildauf    = '/attendchain/templates/beez3/images/plus.png';
	var bildzu     = '/attendchain/templates/beez3/images/minus.png';
	var rightopen  = 'Open info';
	var rightclose = 'Close info';
	var altopen    = 'is open';
	var altclose   = 'is closed';

	</script>
	<link rel="stylesheet" href="/attendchain/components/com_breezingforms/themes/quickmode/system.css" />
	<!--[if IE 7]>
<link rel="stylesheet" href="/attendchain/components/com_breezingforms/themes/quickmode/system.ie7.css" />
<![endif]-->
	<!--[if IE 6]>
<link rel="stylesheet" href="/attendchain/components/com_breezingforms/themes/quickmode/system.ie6.css" />
<![endif]-->
	<!--[if IE]>
<link rel="stylesheet" href="/attendchain/components/com_breezingforms/themes/quickmode/system.ie.css" />
<![endif]-->
	<link rel="stylesheet" href="/attendchain/media/breezingforms/themes/breeze/theme.css" />

	</head>
	<body id="shadow">
		<div id="all">
			<div id="back">
				<header id="header">
					<div class="logoheader">
						<h1 id="logo">
													<img src="/attendchain/images/joomla_black.png"  alt="Joomla!" />
																		<span class="header1">
						Open Source Content Management						</span></h1>
					</div><!-- end logoheader -->
					<ul class="skiplinks">
						<li><a href="#main" class="u2">Skip to content</a></li>
						<li><a href="#nav" class="u2">Jump to main navigation and login</a></li>
											</ul>
					<h2 class="unseen">Nav view search</h2>
					<h3 class="unseen">Navigation</h3>
					
					<div id="line">
						<div id="fontsize"></div>
						<h3 class="unseen">Search</h3>
						
					</div> <!-- end line -->
				</header><!-- end header -->
				<div id="contentarea">
					<div id="breadcrumbs">
						
<div class = "breadcrumbs">
<span class="showHere">You are here: </span><span>Home</span></div>

					</div>

											<nav class="left1 leftbigger" id="nav">
									<div class="moduletable_menu">
					<h3>Main Menu</h3>
				<ul class="nav menu mod-list">
<li class="item-110 default current active"><a href="/attendchain/index.php/en/" >LOGIN </a></li></ul>
</div>
	
							
							
						</nav><!-- end navi -->
					
					<div id="wrapper2" >
						<div id="main">

							
							<div id="system-message-container">
	</div>

							

<!-- BreezingForms VFree (build 931) Copyright(c) 2008-2013 by Markus Bopp | FacileForms Copyright 2004-2006 by Peter Koch, Chur, Switzerland.  All rights reserved. -->
<div class="bfClearfix">
<script type="text/javascript">
<!--
ff_processor=new Object();ff_processor.okrun=true;ff_processor.ip='::1';ff_processor.agent='Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/18.17763';ff_processor.browser='Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/18.17763';
ff_processor.opsys='win';ff_processor.provider='Unknown';ff_processor.submitted='2019-04-19 14:12:18';ff_processor.form=5;ff_processor.form_id='ff_form5';ff_processor.page=1;ff_processor.target=1;ff_processor.runmode=0;ff_processor.inframe=0;ff_processor.inline=0;
ff_processor.template=0;ff_processor.homepage='http://localhost/attendchain';ff_processor.mossite='http://localhost/attendchain';ff_processor.images='http://localhost/attendchain/components/com_breezingforms/images';ff_processor.border=0;ff_processor.align=1;
ff_processor.top=0;ff_processor.suffix='';ff_processor.status=null;ff_processor.message=null;ff_processor.record_id=null;ff_processor.showgrid=false;ff_processor.traceBuffer=null;
//-->
</script>
<script type="text/javascript" src="/attendchain/components/com_breezingforms/facileforms.js"></script>
<table style="display:none;width:100%;" id="bfReCaptchaWrap"><tr><td><div id="bfReCaptchaDiv"></div></td></tr></table><div id="ff_formdiv5" class="bfFormDiv"><div class="bfPage-tl"><div class="bfPage-tr"><div class="bfPage-t"></div></div></div><div class="bfPage-l"><div class="bfPage-r"><div class="bfPage-m bfClearfix">
<script type="text/javascript">
<!--

function checkFileExtensions(){
			return true;
		}
		function bfCheckCaptcha(){if(checkFileExtensions())ff_submitForm2();}function ff_initialize(condition)
{}
onload=function()
{ff_initialize('formentry');ff_initialize('pageentry');if(ff_processor&&ff_processor.traceBuffer)ff_traceWindow();}
var ff_currentpage=1;
function ff_switchpage(page){if(document.getElementById("bfPage1"))document.getElementById("bfPage1").style.display="none";if(document.getElementById("bfPage2"))document.getElementById("bfPage2").style.display="none";if(document.getElementById("bfPage"+page))document.getElementById("bfPage"+page).style.display="";
ff_currentpage=page;ff_initialize("pageentry");}
function ff_loginform_submitted(status,message){if(status==0){ff_switchpage(2);}else{alert(message);}}
function ff_submitForm()
{if(document.getElementById('bfSubmitButton')){document.getElementById('bfSubmitButton').disabled=true;}if(typeof JQuery!='undefined'){JQuery('.bfCustomSubmitButton').prop('disabled',true);}bfCheckCaptcha();}function ff_submitForm2()
{if(document.getElementById('bfSubmitButton')){document.getElementById('bfSubmitButton').disabled=true;}if(typeof JQuery!='undefined'){JQuery('.bfCustomSubmitButton').prop('disabled',true);}if(typeof bf_ajax_submit!='undefined'){bf_ajax_submit()}else{document.ff_form5.submit();}
}
var ff_validationFocusName='';
var ff_elements=[['ff_elem168','ff_div168','bfFakeName',1,168],['ff_elem169','ff_div169','bfFakeName2',1,169],['ff_elem170','ff_div170','bfFakeName3',1,170],['ff_elem171','ff_div171','bfFakeName4',1,171],['ff_elem89','ff_div89','username',1,89],['ff_elem90','ff_div90','password',1,90],
['ff_elem91','ff_div91','remember',1,91]
];
function ff_getElementByName(name)
{if(name.substr(0,6)=='ff_nm_')name=name.substring(6,name.length-2);for(var i=0;i<ff_elements.length;i++)
if(ff_elements[i][2]==name)
return eval('document.ff_form5.'+ff_elements[i][0]);return null;}
function ff_getPageByName(name)
{if(name.substr(0,6)=='ff_nm_')name=name.substring(6,name.length-2);for(var i=0;i<ff_elements.length;i++)
if(ff_elements[i][2]==name)
return ff_elements[i][3];return 0;}
function ff_validationFocus(name)
{if(name==undefined||name==''){if(ff_validationFocusName!=''){ff_switchpage(ff_getPageByName(ff_validationFocusName));if(ff_getElementByName(ff_validationFocusName).focus){ff_getElementByName(ff_validationFocusName).focus();}}}else{if(ff_validationFocusName=='')
ff_validationFocusName=name;}}
function ff_valuenotempty(element,message)
{if(element.value!='')return '';if(message=='')message="Please enter "+element.name+".\n";ff_validationFocus(element.name);return message;}
function ff_validation(page)
{if(typeof inlineErrorElements!='undefined')inlineErrorElements=new Array();error='';ff_validationFocusName='';if(page==1||page==0){if(typeof bfDeactivateField=='undefined'||!bfDeactivateField['ff_nm_username[]']){errorout=ff_valuenotempty(document.ff_form5['ff_nm_username[]'],"Please enter your username\n");
error+=errorout
if(typeof inlineErrorElements!='undefined'){inlineErrorElements.push(["username",errorout]);}}if(typeof bfDeactivateField=='undefined'||!bfDeactivateField['ff_nm_password[]']){errorout=ff_password_validation(document.ff_form5['ff_nm_password[]'],"");error+=errorout
if(typeof inlineErrorElements!='undefined'){inlineErrorElements.push(["password",errorout]);}}}if(error!=""&&document.getElementById('ff_capimgValue')){document.getElementById('ff_capimgValue').src='/attendchain/components/com_breezingforms/images/captcha/securimage_show.php?bfMathRandom='+Math.random();
document.getElementById('bfCaptchaEntry').value="";}if(error!=""&&document.getElementById("bfSubmitButton")){document.getElementById("bfSubmitButton").disabled=false;}if(error!=""&&typeof JQuery!="undefined"){JQuery(".bfCustomSubmitButton").prop("disabled",false);}
return error;}
function ff_validate_submit(element,action)
{if(typeof bfUseErrorAlerts!='undefined'){JQuery(".bfErrorMessage").html('');JQuery(".bfErrorMessage").css("display","none");}error=ff_validation(0);if(error!=''){if(typeof bfUseErrorAlerts=='undefined'){swal(error);}else{bfShowErrors(error);}ff_validationFocus();
}else
ff_submitForm();}
function ff_resetForm(element,action)
{eval('document.'+ff_processor.form_id).reset();}
function ff_validate_prevpage(element,action)
{if(typeof bfUseErrorAlerts!='undefined'){JQuery(".bfErrorMessage").html('');JQuery(".bfErrorMessage").css("display","none");}error=ff_validation(ff_currentpage);if(error!=''){if(typeof bfUseErrorAlerts=='undefined'){swal(error);}else{bfShowErrors(error);
}ff_validationFocus('');}else{if(ff_currentpage>1){ff_switchpage(ff_currentpage-1);self.scrollTo(0,0);}}}
function ff_validate_nextpage(element,action)
{if(typeof bfUseErrorAlerts!='undefined'){JQuery(".bfErrorMessage").html('');JQuery(".bfErrorMessage").css("display","none");}error=ff_validation(ff_currentpage);if(error!=''){if(typeof bfUseErrorAlerts=='undefined'){swal(error);}else{bfShowErrors(error);
}ff_validationFocus('');}else{ff_switchpage(ff_currentpage+1);self.scrollTo(0,0);}}
function ff_password_validation(element,message)
{if(JQuery.trim(element.value)=='')return 'Please enter your password'+"\n";if(JQuery.trim(ff_getElementByName('username').value)==''){return '';}var myreturn='';JQuery.ajaxSetup({async:false});JQuery.post('index.php',{option:'com_breezingforms',ff_form:ff_processor.form,Itemid:0,format:'html',username:ff_getElementByName('username').value,password:element.value,remember:ff_getElementByName('remember').checked?'1':'0'},function(data){if(data!=''){message==''?myreturn=data+"\n":myreturn=message;element.value='';}});
return myreturn;}
//-->
</script>
<form data-ajax="false"  action="http://localhost/attendchain/index.php/en/?tp=1&templateStyle=4" method="post" name="ff_form5" id="ff_form5" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="return false;" class="bfQuickMode">
<div id="bfPage1" class="bfPage">
<span class="bfErrorMessage" style="display:none"></span>
<div class="bfFieldset-wrapper bfWrapperBlock bfClearfix"><div class="bfFieldset-tl"><div class="bfFieldset-tr"><div class="bfFieldset-t"></div></div></div><div class="bfFieldset-l"><div class="bfFieldset-r"><div class="bfFieldset-m bfClearfix"><fieldset class="bfBlock" id="login">
<legend><span class="bfLegend-l"><span class="bfLegend-r"><span class="bfLegend-m">Login</span></span></span></legend>
<section class="bfElemWrap bfLabelLeft" id="bfElemWrap89">
<label id="bfLabel89" for="ff_elem89">Username<span class="bfRequired">*</span> 
</label>
<input class="ff_elem" style="width:150px" type="text" name="ff_nm_username[]" value="" id="ff_elem89"/>
</section>
<section class="bfElemWrap bfLabelLeft" id="bfElemWrap90">
<label id="bfLabel90" for="ff_elem90">Password<span class="bfRequired">*</span> 
</label>
<input class="ff_elem" style="width:150px" type="password" name="ff_nm_password[]" value="" id="ff_elem90"/>
</section>
<section class="bfElemWrap bfLabelLeft" id="bfElemWrap91">
<label id="bfLabel91" for="ff_elem91">Keep me logged in</label>
<input class="ff_elem" type="checkbox" name="ff_nm_remember[]" value="1" id="ff_elem91"/>
</section>
<div class="bfNoSection" id="reginfo">
<section class="bfSectionDescription">
<a href="/attendchain/index.php/en/component/users/?view=reset&amp;Itemid=110">Forgot your password?</a>
<br/>
<a href="/attendchain/index.php/en/component/users/?view=remind&amp;Itemid=110">Forgot your username?</a>
<br/>
<a href="/attendchain/index.php/en/component/users/?view=registration&amp;Itemid=110">Create an account</a>
</section>
</div>
</fieldset></div></div></div><div class="bfFieldset-bl"><div class="bfFieldset-br"><div class="bfFieldset-b"></div></div></div></div><!-- bfFieldset-wrapper end -->
<button type="button" id="bfSubmitButton" class="bfSubmitButton button" onclick="if(typeof bf_htmltextareainit != 'undefined'){ bf_htmltextareainit() }if(document.getElementById('bfPaymentMethod')){document.getElementById('bfPaymentMethod').value='';};ff_validate_submit(this, 'click');" value="Login"><span>Login</span></button>
</div><!-- bfPage end -->
<div id="bfPage2" class="bfPage" style="display:none;">
<section class="bfPageIntro">
<p style="padding-left: 30px;"> </p>
<p style="padding-left: 30px;"><span style="font-size: 18pt;"><strong><span style="font-family: book antiqua,palatino,serif;"><img src="/attendchain/images/visu_document.png" alt="" /></span></strong></span></p>
<p style="padding-left: 30px;"> </p>
<p style="padding-left: 30px;"><span style="font-size: 18pt;"><strong><span style="font-family: book antiqua,palatino,serif;">Welcome to Vitchain!!!</span></strong></span></p>
<p style="padding-left: 30px;"><span style="font-family: book antiqua,palatino,serif; font-size: 14pt;">Thank you for signing up for the credential management system. Please Upload your documents by clicking on credential upload.</span></p>
</section>
<span class="bfErrorMessage" style="display:none"></span>
</div>
<noscript>Please turn on javascript to submit your data. Thank you!</noscript>
<input type="hidden" name="ff_contentid" value="0"/>
<input type="hidden" name="ff_applic" value=""/>
<input type="hidden" name="ff_record_id" value=""/>
<input type="hidden" name="ff_module_id" value="0"/>
<input type="hidden" name="ff_form" value="5"/>
<input type="hidden" name="ff_task" value="submit"/>
<input type="hidden" name="option" value="com_breezingforms"/>
<input type="hidden" name="Itemid" value="110"/>
</form>
</div></div></div><div class="bfPage-bl"><div class="bfPage-br"><div class="bfPage-b"></div></div></div></div><!-- form end -->
<div style="clear:both; display: block; text-align: center; margin-top: 20px;"><span style="margin: 0 auto;">Powered by BreezingForms</span></div></div>


						</div><!-- end main -->
					</div><!-- end wrapper -->

					
					
					<div class="wrap"></div>
				</div> <!-- end contentarea -->
			</div><!-- back -->
		</div><!-- all -->

		<div id="footer-outer">
			
			<div id="footer-sub">
				<footer id="footer">
					
				</footer><!-- end footer -->
			</div>
		</div>
		
	</body>
</html>
";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:6:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}i:1;a:2:{s:4:"name";s:12:"Content-Type";s:5:"value";s:24:"text/html; charset=utf-8";}i:2;a:2:{s:4:"name";s:7:"Expires";s:5:"value";s:29:"Wed, 17 Aug 2005 00:00:00 GMT";}i:3;a:2:{s:4:"name";s:13:"Last-Modified";s:5:"value";s:29:"Fri, 19 Apr 2019 14:12:18 GMT";}i:4;a:2:{s:4:"name";s:13:"Cache-Control";s:5:"value";s:62:"no-store, no-cache, must-revalidate, post-check=0, pre-check=0";}i:5;a:2:{s:4:"name";s:6:"Pragma";s:5:"value";s:8:"no-cache";}}}