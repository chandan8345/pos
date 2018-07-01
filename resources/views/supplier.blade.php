<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Transaction</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-2">
@include('layouts.navbar')		

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
@include('layouts.sidebar')

			<div class="main-content">
				<div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Transaction</a>
							</li>
							<li class="active">Supplier</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
					<div class="page-content">
@include('layouts.theme')
						<div class="row">
							<div class="col-xs-12">
                                <div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title">Advance/Due Transaction   </h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<form>
                                                        <div class="space-4"></div>
                                                        <div class="space-4"></div>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                              <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Supplier Name</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                      <span class="input-group-addon">
																		<i class="ace-icon fa fa-search"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Amount</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                     <span class="input-group-addon">
																		<i class="ace-icon fa fa-usd"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Last Dues</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                      <span class="input-group-addon">
																		<i class="ace-icon fa fa-minus-circle"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Balance</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                      <span class="input-group-addon">
																		<i class="ace-icon fa fa-plus-circle"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Received Date</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                      <span class="input-group-addon">
																		<i class="ace-icon fa fa-calendar"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                    <label for="InputName">Received BY</label>
                                                                    <div class="input-group">
                                                                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                                                      <span class="input-group-addon">
																		<i class="ace-icon fa fa-user"></i>
																	</span></div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="space-4"></div>
                                                        <div class="space-4"></div>
														<div class="form-actions center">
															<button type="button" class="btn btn-sm btn-success btn-block">
																Submit
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>  
                                
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

@include('layouts.footer')

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
        <script src="assets/js/wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/jquery-additional-methods.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
				<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
	</body>
</html>
