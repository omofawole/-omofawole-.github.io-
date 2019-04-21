<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:16631:"<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- head -->
        <base href="http://localhost/attendchain/index.php/en/component/users/" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Attendance Management System" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>ATTENDCHAIN</title>
	<link href="/attendchain/templates/shaper_helix3/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
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
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"2ee9f148da0bee9facb7da4d6a492f27","system.paths":{"root":"\/attendchain","base":"\/attendchain"},"system.keepalive":{"interval":840000,"uri":"\/attendchain\/index.php\/en\/component\/ajax\/?format=json"},"joomla.jtext":{"JLIB_FORM_FIELD_INVALID":"Invalid field:&#160"}}</script>
	<script src="/attendchain/media/system/js/core.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="/attendchain/media/system/js/polyfill.event.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script><![endif]-->
	<script src="/attendchain/media/system/js/keepalive.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/mootools-core.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery.min.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery-noconflict.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/jui/js/jquery-migrate.min.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/punycode.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/validate.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="/attendchain/media/system/js/html5fallback.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script><![endif]-->
	<script src="/attendchain/media/system/js/mootools-more.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/media/system/js/modal.js?3f137731dd969cb051c33a53d6497759" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/main.js" type="text/javascript"></script>
	<script src="/attendchain/templates/shaper_helix3/js/frontend-edit.js" type="text/javascript"></script>
	<script type="text/javascript">
jQuery(function($){ initPopovers(); $("body").on("subform-row-add", initPopovers); function initPopovers (event, container) { $(container || document).find(".hasPopover").popover({"html": true,"trigger": "hover focus","container": "body"});} });
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
		
var sp_preloader = '0';

var sp_gotop = '0';

var sp_offanimation = 'default';
jQuery(function($){ initTooltips(); $("body").on("subform-row-add", initTooltips); function initTooltips (event, container) { container = container || document;$(container).find(".hasTooltip").tooltip({"html": true,"container": "body"});} });
	</script>

            </head>

    <body class="site com-users view-registration no-layout no-task itemid-110 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">

        <div class="body-wrapper">
            <div class="body-innerwrapper">
                <section id="sp-top-bar"><div class="container"><div class="row"><div id="sp-top1" class="col-sm-6 col-md-6"><div class="sp-column "></div></div><div id="sp-top2" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="sp-contact-info"></ul></div></div></div></div></section><header id="sp-header"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3"><div class="sp-column "><div class="logo"><a href="/attendchain/"><img class="sp-default-logo" src="/attendchain/templates/shaper_helix3/images/presets/preset1/logo.png" alt="ATTENDCHAIN"><img class="sp-retina-logo" src="/attendchain/templates/shaper_helix3/images/presets/preset1/logo@2x.png" alt="ATTENDCHAIN" width="278" height="134"></a></div></div></div><div id="sp-menu" class="col-xs-4 col-sm-9 col-md-9"><div class="sp-column ">			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" href="#" aria-label="Helix Megamenu Options"><i class="fa fa-bars" aria-hidden="true" title="Helix Megamenu Options"></i></a>
				<ul class="sp-megamenu-parent menu-fade hidden-sm hidden-xs"><li class="sp-menu-item current-item active"><a  href="/attendchain/index.php/en/"  >LOGIN </a></li></ul>			</div>
		</div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "></div></div></div></section><section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<div class="registration">
			
			<form id="member-registration" action="/attendchain/index.php/en/component/users/?task=registration.register&amp;Itemid=110" method="post" class="form-validate" enctype="multipart/form-data">

																																			<div class="form-group">
									<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Required field</label></span><span class="after"></span></span>																		
									<div class="group-control">
										 									</div>
								</div>
																												<div class="form-group">
									<label id="jform_name-lbl" for="jform_name" class="hasPopover required" title="Name" data-content="Enter your full name.">
	Name<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="text" name="jform[name]" id="jform_name"  value="" class="required" size="30"       required aria-required="true"      />
									</div>
								</div>
																												<div class="form-group">
									<label id="jform_username-lbl" for="jform_username" class="hasPopover required" title="Username" data-content="Enter your desired username.">
	Username<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="text" name="jform[username]" id="jform_username"  value="" class="validate-username required" size="30"       required aria-required="true"      />
									</div>
								</div>
																												<div class="form-group">
									<label id="jform_password1-lbl" for="jform_password1" class="hasPopover required" title="Password" data-content="Enter your desired password.">
	Password<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="password" name="jform[password1]" id="jform_password1" value=""  autocomplete="off" class="validate-password required"   size="30" maxlength="99" required aria-required="true"  />									</div>
								</div>
																												<div class="form-group">
									<label id="jform_password2-lbl" for="jform_password2" class="hasPopover required" title="Confirm Password" data-content="Confirm your password.">
	Confirm Password<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="password" name="jform[password2]" id="jform_password2" value=""  autocomplete="off" class="validate-password required"   size="30" maxlength="99" required aria-required="true"  />									</div>
								</div>
																												<div class="form-group">
									<label id="jform_email1-lbl" for="jform_email1" class="hasPopover required" title="Email Address" data-content="Enter your email address.">
	Email Address<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="email" name="jform[email1]" class="validate-email required" id="jform_email1" value=""
 size="30"    autocomplete="email"    required aria-required="true"  />									</div>
								</div>
																												<div class="form-group">
									<label id="jform_email2-lbl" for="jform_email2" class="hasPopover required" title="Confirm Email Address" data-content="Confirm your email address.">
	Confirm Email Address<span class="star">&#160;*</span></label>
																		
									<div class="group-control">
										<input type="email" name="jform[email2]" class="validate-email required" id="jform_email2" value=""
 size="30"        required aria-required="true"  />									</div>
								</div>
																																																					<div class="form-group">
									<label id="jform_privacyconsent_privacy-lbl" for="jform_privacyconsent_privacy" class="hasPopover required" title="Privacy Policy" data-content="Read the full privacy policy">Privacy Policy<span class="star">&#160;*</span></label>																		
									<div class="group-control">
										<div class="alert alert-info">By signing up to this web site and agreeing to the Privacy Policy you agree to this web site storing your information.</div><fieldset id="jform_privacyconsent_privacy" class="required radio"
			required aria-required="true"	>

						
													<input type="radio" id="jform_privacyconsent_privacy0" name="jform[privacyconsent][privacy]" value="1" required aria-required="true" />			<label for="jform_privacyconsent_privacy0" >
				I agree			</label>
					
													<input type="radio" id="jform_privacyconsent_privacy1" name="jform[privacyconsent][privacy]" value="0" checked="checked" required aria-required="true" />			<label for="jform_privacyconsent_privacy1" >
				No			</label>
			</fieldset>
									</div>
								</div>
																						
				<div class="form-group">
					<button type="submit" class="btn btn-primary validate">Register</button>
					<a class="btn btn-danger" href="/attendchain/" title="Cancel">Cancel</a>
					<input type="hidden" name="option" value="com_users" />
					<input type="hidden" name="task" value="registration.register" />
				</div>
				<input type="hidden" name="2ee9f148da0bee9facb7da4d6a492f27" value="1" />			</form>
		</div>
	</div>
</div>
</div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright">© 2019 VITCHAIN, Managing all your credentials!</span></div></div></div></div></footer>            </div> <!-- /.body-innerwrapper -->
        </div> <!-- /.body-innerwrapper -->

        <!-- Off Canvas Menu -->
        <div class="offcanvas-menu">
            <a href="#" class="close-offcanvas" aria-label="Close"><i class="fa fa-remove" aria-hidden="true" title="HELIX_CLOSE_MENU"></i></a>
            <div class="offcanvas-inner">
                                  <div class="sp-module "><h3 class="sp-module-title">Login Form</h3><div class="sp-module-content"><form action="http://localhost/attendchain/index.php/en/component/users/?view=registration&Itemid=110" method="post" id="login-form">
		
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
	<input type="hidden" name="return" value="aHR0cDovL2xvY2FsaG9zdC9hdHRlbmRjaGFpbi9pbmRleC5waHAvZW4vY29tcG9uZW50L3VzZXJzLz92aWV3PXJlZ2lzdHJhdGlvbiZJdGVtaWQ9MTEw" />
	<input type="hidden" name="2ee9f148da0bee9facb7da4d6a492f27" value="1" />
	</form>
</div></div>
                            </div> <!-- /.offcanvas-inner -->
        </div> <!-- /.offcanvas-menu -->

        
        
        
        <!-- Preloader -->
        

        <!-- Go to top -->
        
    </body>
</html>";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:6:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}i:1;a:2:{s:4:"name";s:12:"Content-Type";s:5:"value";s:24:"text/html; charset=utf-8";}i:2;a:2:{s:4:"name";s:7:"Expires";s:5:"value";s:29:"Wed, 17 Aug 2005 00:00:00 GMT";}i:3;a:2:{s:4:"name";s:13:"Last-Modified";s:5:"value";s:29:"Sat, 20 Apr 2019 01:22:10 GMT";}i:4;a:2:{s:4:"name";s:13:"Cache-Control";s:5:"value";s:62:"no-store, no-cache, must-revalidate, post-check=0, pre-check=0";}i:5;a:2:{s:4:"name";s:6:"Pragma";s:5:"value";s:8:"no-cache";}}}