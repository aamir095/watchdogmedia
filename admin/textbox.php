<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from 198.74.61.72/themes/preview/ace/wysiwyg.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 28 Feb 2014 17:46:12 GMT -->
<head>
		<meta charset="utf-8" />
		<title>Wysiwyg &amp; Markdown Editor - Ace Admin</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>


					
										<h4 class="header blue">Inside Widget</h4>

										<div class="widget-box">
											<div class="widget-header widget-header-small  header-color-green">
												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="icon-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="wysiwyg-editor" id="editor2"></div>
												</div>

												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<button class="btn btn-sm btn-grey">
															<i class="icon-remove bigger-125"></i>
															Cancel
														</button>
													</div>

													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger">
															<i class="icon-save bigger-125"></i>
															Save
														</button>

														<button class="btn btn-sm btn-success">
															<i class="icon-globe bigger-125"></i>

															Publish
															<i class="icon-arrow-right icon-on-right bigger-125"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

        </body>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/markdown/markdown.min.js"></script>
		<script src="assets/js/markdown/bootstrap-markdown.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($){
	
					function showErrorAlert (reason, detail) {
						var msg='';
						if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
						else {
							console.log("error uploading file", reason, detail);
						}
						$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
						 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
					}

					//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

					//but we want to change a few buttons colors for the third style
					$('#editor1').ace_wysiwyg({
						toolbar:
						[
							'font',
							null,
							'fontSize',
							null,
							{name:'bold', className:'btn-info'},
							{name:'italic', className:'btn-info'},
							{name:'strikethrough', className:'btn-info'},
							{name:'underline', className:'btn-info'},
							null,
							{name:'insertunorderedlist', className:'btn-success'},
							{name:'insertorderedlist', className:'btn-success'},
							{name:'outdent', className:'btn-purple'},
							{name:'indent', className:'btn-purple'},
							null,
							{name:'justifyleft', className:'btn-primary'},
							{name:'justifycenter', className:'btn-primary'},
							{name:'justifyright', className:'btn-primary'},
							{name:'justifyfull', className:'btn-inverse'},
							null,
							{name:'createLink', className:'btn-pink'},
							{name:'unlink', className:'btn-pink'},
							null,
							{name:'insertImage', className:'btn-success'},
							null,
							'foreColor',
							null,
							{name:'undo', className:'btn-grey'},
							{name:'redo', className:'btn-grey'}
						],
						'wysiwyg': {
							fileUploadError: showErrorAlert
						}
					}).prev().addClass('wysiwyg-style2');

					

					$('#editor2').css({'height':'200px'}).ace_wysiwyg({
						toolbar_place: function(toolbar) {
							return $(this).closest('.widget-box').find('.widget-header').prepend(toolbar).children(0).addClass('inline');
						},
						toolbar:
						[
							'bold',
							{name:'italic' , title:'Change Title!', icon: 'icon-leaf'},
							'strikethrough',
							null,
							'insertunorderedlist',
							'insertorderedlist',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright'
						],
						speech_button:false
					});


					$('[data-toggle="buttons"] .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						var toolbar = $('#editor1').prev().get(0);
						if(which == 1 || which == 2 || which == 3) {
							toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
							if(which == 1) $(toolbar).addClass('wysiwyg-style1');
							else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
						}
					});


					

					//Add Image Resize Functionality to Chrome and Safari
					//webkit browsers don't have image resize functionality when content is editable
					//so let's add something using jQuery UI resizable
					//another option would be opening a dialog for user to enter dimensions.
					if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {
						
						var lastResizableImg = null;
						function destroyResizable() {
							if(lastResizableImg == null) return;
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
							lastResizableImg = null;
						}

						var enableImageResize = function() {
							$('.wysiwyg-editor')
							.on('mousedown', function(e) {
								var target = $(e.target);
								if( e.target instanceof HTMLImageElement ) {
									if( !target.data('resizable') ) {
										target.resizable({
											aspectRatio: e.target.width / e.target.height,
										});
										target.data('resizable', true);
										
										if( lastResizableImg != null ) {//disable previous resizable image
											lastResizableImg.resizable( "destroy" );
											lastResizableImg.removeData('resizable');
										}
										lastResizableImg = target;
									}
								}
							})
							.on('click', function(e) {
								if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
									destroyResizable();
								}
							})
							.on('keydown', function() {
								destroyResizable();
							});
					    }
						
						enableImageResize();

						/**
						//or we can load the jQuery UI dynamically only if needed
						if (typeof jQuery.ui !== 'undefined') enableImageResize();
						else {//load jQuery UI if not loaded
							$.getScript($path_assets+"/js/jquery-ui-1.10.3.custom.min.js", function(data, textStatus, jqxhr) {
								if('ontouchend' in document) {//also load touch-punch for touch devices
									$.getScript($path_assets+"/js/jquery.ui.touch-punch.min.js", function(data, textStatus, jqxhr) {
										enableImageResize();
									});
								} else	enableImageResize();
							});
						}
						*/
					}


				});
		</script>
	</body>

<!-- Mirrored from 198.74.61.72/themes/preview/ace/wysiwyg.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 28 Feb 2014 17:46:14 GMT -->
</html>
