<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Sales</title>

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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
								<a href="#">Sales</a>
							</li>
							<li class="active">New Sales</li>
						</ul><!-- /.breadcrumb -->

					</div>
					<div class="page-content">
@include('layouts.theme')
						<div class="row">
							<div class="col-xs-12">
                                <div class="widget-box">
											<div class="widget-header widget-header-small">
												<h5 class="widget-title lighter">Sales Form</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-search" method="post">
													<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
														<div class="row">
															<div class="col-xs-6 col-sm-6">
															<label>Product Name</label>
																<div class="input-group">
																
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-search"></i>
																	</span>
																	
																	<input id="name" type="text" class="form-control search-query" placeholder="Product Name"/>
																
																</div>
															</div>
                                                            
                                                            <div class="col-xs-6 col-sm-6">
															<label>Quantity</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-sort-amount-desc"></i>
																	</span>

																	<input id="quantity" type="number" min="1" class="form-control search-query" placeholder="Quantity"  onkeyup="myFunction()"/>
																	
																</div>
															</div>
														</div>
                                                        
                                                        <div class="space-4"></div>
														
														<div class="row">
															<div class="col-xs-4 col-sm-4">
															<label>Payable Amount</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-usd"></i>
																	</span>

																	<input type="text" id="payable" class="form-control search-query" placeholder="Payable Amount" disabled/>
																	
																</div>
															</div>
                                                            
                                                            <div class="col-xs-4 col-sm-4">
															<label>Single Price</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-usd"></i>
																	</span>

																	<input type="text" id="single" class="form-control search-query" placeholder="Single Price" disabled/>
																	
																</div>
															</div>
															<div class="col-xs-4 col-sm-4">
															<label>Category</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-qrcode"></i>
																	</span>

																<select id="category" class="form-control" name="category"  disabled>
                                                                <option value="0">Select Category</option>
                                                                @foreach($category as $row)
                                                                <option value="{{ $row->id }}" <?php if(!empty($searchCategory)){if($searchCategory == $row->id){echo "selected";}} ?>>{{ $row->name }}</option>
                                                                @endforeach
                                                                </select>
																</div>
															</div>
														</div>
                                                        
                                                        <div class="space-4"></div>

                                                        <div class="row">
															
                                                            
                                                            <div class="col-xs-4 col-sm-4">
															<label>Brand</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-list-alt"></i>
																	</span>

																	<select id="brand" class="form-control" name="brand" disabled>
                                                                    <option value="0">Select Brand</option>
                                                                    @foreach($brand as $row)
                                                                    <option value="{{ $row->id }}" <?php if(!empty($searchBrand)){if($searchBrand == $row->id){echo "selected";}} ?>>{{ $row->name }}</option>
                                                                    @endforeach
                                                                    </select>
																</div>
															</div>
															<div class="col-xs-4 col-sm-4">
															<label>Product Unit</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-qrcode"></i>
																	</span>

																	<input type="text" id="unit" class="form-control search-query" placeholder="Unit" disabled/>
																	
																</div>
															</div>
															<div class="col-xs-4 col-sm-4">
															<label>Status</label>
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-list-alt"></i>
																	</span>

																	<input type="text" id="status" class="form-control search-query" placeholder="Status" disabled/>
																	
																</div>
															</div>
														</div>                                                      

                                                        <div class="space-4"></div>
                                                        <div class="space-4"></div>
                                                        <div class="row">
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="col-md-12">
                                                           
														   <span class="input-icon btn-block">
															<input type="button" id="cart" value="Cart" class="btn btn-primary btn-md btn-block"  onclick="msg()">
															 </span>
														   </div>
                                                            </div>
                                                             <div class="col-xs-6 col-sm-6">
                                                            <div class="col-md-12">
                                                           <span class="input-icon btn-block">
                                                           <input type="button" value="Payment" class="btn btn-danger btn-md btn-block"  data-toggle="modal" data-target="#payment">
                                                            </span>
														</div>
                                                            </div>
														</div>
														
													</form>
												</div>
											</div>
                                    
                                <!-- Purchase Form End -->
                                    
                            <div class="col-xs-12">
                               <div class="space-4"></div> 
                                 <table class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<span class="lbl">SL No</span>
														</label>
													</th>
													<th class="center">Product Name</th>
													<th class="center">Single Price</th>
													<th class="center">Quantity</th>
													<th class="center">SubTotal</th>

													<th class="center">Unit</th>

													<th class="center">Action</th>
												</tr>
											</thead>

											<tbody id="tbody">


												
											</tbody>
										</table>
                                
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->    
                                    
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
 <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
           <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title" id="exampleModalLabel">Payment Form</h4>
          </div>
          <div class="modal-body">
            <form>
               <div class="row">
                 <div class="col-sm-12">
                     <label><b>Customer Name</b></label>
                       <input type="text" value="" class="btn-block">
                   </div>   
               </div>
                   <div class="space-4"></div>
              <div class="row">
                   <div class="col-sm-12">
                       <label><b>Amount</b></label>
                      <input type="text" value="" class="btn-block">
                   </div>
                
               </div>
                   <div class="space-4"></div>
            <div class="row">
                   <div class="col-sm-12">
                       <label><b>Subtotal</b></label>
                      <input type="text" value="" class="btn-block">
                   </div>
                
               </div>
                   <div class="space-4"></div>
            <div class="row">
                   <div class="col-sm-12">
                       <label><b>Dues</b></label>
                      <input type="text" value="" class="btn-block">
                   </div>
                
               </div>
                   <div class="space-4"></div>
            <div class="row">
                   <div class="col-sm-12">
                       <label><b>Received Date</b></label>
                      <input type="text" value="" class="btn-block">
                   </div>
            </div>
                <div class="space-4"></div>
            <div class="row">
                   <div class="col-sm-12">
                       <label><b>Collect By</b></label>
                      <input type="text" value="" class="btn-block">
             </div>
            </div>
            </form>  
           </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <button class="btn btn-primary">
         Submit
		 </button>
      </div>
    </div>
  </div>
</div>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
  $( function() {
    var availableTags =  <?php echo json_encode($arr); ?>;
    $( "#name" ).autocomplete({
      source: availableTags
    });
});
	$("#name").on("blur change", function () {
		if($("#name").val() !=""){
	    $.ajax({
                                        type: "GET",
                                        url: '{{ URL::to("/search") }}',
                                        data:{
                                            search:$("#name").val(),
                                            _token:$("#token").val()
                                        },
                                        success: function($array){
											var result=$array;
											var obj = JSON.parse(result);
											if(obj.category !=""){
											$("#category").val(obj.category);
											}else{
										    $("#category").val(0);	
											}
											if(obj.brand !=""){                                     
											$("#brand").val(obj.brand);
										     }else{
										    $("#brand").val(0);	
											}
											$("#unit").val(obj.unit);
											if(obj.status == 1){
											$("#status").val("Available");	
											}else{
											$("#status").val("Not Available");	
											}
											$("#single").val(obj.sell);
                                           // $("#msg").html(response);
                                    }
                                          });              
	}else{
		$("#category").val(0);                                       //window.location.href="{{URL::to('/')}
	    $("#brand").val(0);
		$("#status").val("Not Found");
		$("#single").val(0);
	}
	
	});
	function myFunction() {
	var single=document.getElementById("single");
	var quantity = document.getElementById("quantity");
    var payable = document.getElementById("payable");
	if(single != ""){
    payable.value = quantity.value*single.value;
	}
}
var id=1;
function msg() {
    if($("#name").val() !="" && $("#quantity").val() !=""){
			var name=$("#name").val();
			var single=$("#single").val();
			var quantity=$("#quantity").val();
			var payable=$("#payable").val();
			var unit=$("#unit").val();
			var tr='<tr> <td class="center">'+id+'</td> <td class="center">'+name+'</td> <td class="center">'+single+'</td> <td class="center">'+quantity+'</td> <td class="center">'+payable+'</td>  <td class="center">'+unit+'</td><td class="center"> <button class="btn btn-sm btn-danger btn-del"><i class="ace-icon fa fa-trash-o"></i></button></td></tr>';
			$("tbody").append(tr);
			$("#category").val(0);
	        $("#brand").val(0);
		    $("#status").val("Status");
		    $("#single").val(0);
			$('#name').val('');
			$('#payable').val('');
			$('#unit').val('');
			$('#quantity').val("");
			id++;
		}
}
	$(document).on("click",'.btn-del',function(){
		var _tr=$(this).closest("tr").remove();
		//var _id=$(_tr).find('td:eq(0)').text();
		//console.log(_id);
	});
  </script>
	</body>
</html>
