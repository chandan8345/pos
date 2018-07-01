<?php
$searchName="";
$searchCategory="";
$searchBrand="";
if(!empty($compact)){
$searchName=$compact['n'];
$searchCategory=$compact['c'];
$searchBrand=$compact['b'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Stock</title>
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
								<a href="#">Product</a>
							</li>
							<li class="active">Manage Stock</li>
						</ul><!-- /.breadcrumb -->

					</div>
					<div class="page-content">
@include('layouts.theme')
						<div class="row">
							<div class="col-xs-12">
                                <div class="widget-box">
											<div class="widget-header widget-header-small">
												<h5 class="widget-title lighter">Manage Stock</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-search" action="{{ URL::to('/StockSearch') }}" method="post">
                                                     <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-12">
												                <div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-search"></i>
																	</span>
																	<input id="p" value="<?php if(!empty($searchName)){echo $searchName;} ?>" type="text" class="form-control search-query" placeholder="Product Name" name="name" />
																	
																</div>
                                                            </div>
                                                        </div>
                                                        <div class="space-4"></div>			
                                                        <div class="space-4"></div>			
                                                        <div class="row">
															<div class="col-xs-6 col-sm-6">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-tags"></i>
																	</span>
                                                                <select id="" class="form-control" name="category" >
                                                                <option value="0">Select Category</option>
                                                                @foreach($category as $row)
                                                                <option value="{{ $row->id }}" <?php if(!empty($searchCategory)){if($searchCategory == $row->id){echo "selected";}} ?>>{{ $row->name }}</option>
                                                                @endforeach
                                                                </select>
																	
																</div>  
															</div>
                                                            
                                                            
                                                            
                                                            <div class="col-xs-6 col-sm-6">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-calendar"></i>
																	</span>

                                                                    <select id="" class="form-control" name="brand" >
                                                                    <option value="0">Select Brand</option>
                                                                    @foreach($brand as $row)
                                                                    <option value="{{ $row->id }}" <?php if(!empty($searchBrand)){if($searchBrand == $row->id){echo "selected";}} ?>>{{ $row->name }}</option>
                                                                    @endforeach
                                                                    </select>
																</div>
															</div>
														</div>
                                                    
                                                        <div class="space-4"></div>
                                                        <div class="space-4"></div>
                                                        <div class="row">
                                                        <div class="col-xs-12 col-sm-12">
                                                            <div class="col-md-12">
                                                           <button class="btn btn-primary btn-block" type="submit">
												           <i class="ace-icon fa fa-search align-top bigger-125  icon-animated-vertical"></i>
												           Search
											               </button>
														   </div>
                                                            </div>
                                                        </div>
													</form>
												</div>
											</div>
                                    
                                <!-- Purchase Form End -->
<?php 
if(!empty($data)){ ?>

                            <div class="col-sm-12">
                               <div class="space-4"></div> 
                                 <table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<span class="lbl">Sl No</span>
														</label>
													</th>
													<th class="center">Products Name</th>
													<th class="center">Category</th>
													<th class="center">Brand</th>
													<th class="hidden-480 center">Purchase</th>
													<th class="center">Sell Price</th>

													<th class="center hidden-480">
														Status
													</th>
													<th class="center">Action</th>
												</tr>
											</thead>

											<tbody>
                                                 <?php $sl=0;?>
                                                @foreach($data as $row)
                                               
												<tr>
													<td class="center">
														<label class="pos-rel">
															<span class="lbl"><?php echo $sl+=1;?></span>
														</label>
													</td>

													<td class="center">
													{{ $row->name}}
													</td>
                                                    
													<td class="center">
														{{$row->category}}
													</td>
                                                    <td class="center">{{$row->brand}}</td>
													<td class="hidden-480 center">{{$row->purchase}}</td>
													<td class="center">{{$row->sell}}</td>

													<td class="center hidden-480">
														@if($row->status == '1')
                                                        <span class=" label label-md label-info">
                                                        Active
                                                         </span>
                                                        @else
                                                        <span class=" label label-md label-warning">
                                                        Inactive
                                                        </span>
                                                        @endif
													</td>

													<td>
														<div class="center">
															<button class="btn btn-sm btn-info"  data-toggle="modal" data-target="#<?php echo $row->id; ?>">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
                                                            <button class="btn btn-sm btn-danger"  data-toggle="modal" data-target="#delete">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
														</div>
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
           <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title" id="exampleModalLabel">Message Box</h4>
          </div>
          <div class="modal-body">
               Are sure want to Delete?
           </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <a href="{{ URL::to('ProductDelete/' . $row->id) }}" class="btn btn-primary">
    	<i class="ace-icon fa fa-check align-top bigger-125">Confirm</i>
        </a>
      </div>
    </div>
  </div>
</div>
													</td>
        <div class="modal fade" id="<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
           <div class="modal-content">
               <form action="{{ URL::to('/ProductUpdate/'.$row->id) }}" method="post">
                    <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
         <div class="modal-header">
             <h4 class="modal-title" id="exampleModalLabel">Product Update</h4>
          </div>
          <div class="modal-body">
               <div class="row">
                   <div class="col-xs-12">
                       <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="" name="name" value="{{$row->name}}">
                       <div class="space-4"></div> 
                       <label>Brand</label>
                    <select id="" class="form-control" name="brand" >
                    <option value="0">Select Brand</option>
                    @foreach($brand as $re)
                    <option value="{{ $re->id }}" <?php if($row->brand == $re->name){echo "selected";}?> >{{ $re->name }}</option>
                    @endforeach
                    </select> 
                       <div class="space-4"></div>
                       <label>Category</label>
                    <select id="" class="form-control" name="category" >
                    <option value="0">Select Category</option>
                    @foreach($category as $r)
                    <option value="{{ $r->id }}" <?php if($row->category_id == $r->id){echo "selected";}?> >{{ $r->name }}</option>
                    @endforeach
                    </select>
                       <div class="space-4"></div>   
                       <label>Purchase Rate</label>
                    <input type="text" class="form-control" placeholder="" name="purchase" value="{{$row->purchase}}">
                       <div class="space-4"></div>   
                       <label>Sell Price</label>
                    <input type="text" class="form-control" placeholder="" name="sell" value="{{$row->sell}}">
                       <div class="space-4"></div>   
                       <label>Unit</label>
                    <input type="text" class="form-control" placeholder="" name="unit" value="{{$row->unit}}">
                       <div class="space-4"></div>   
                       <label>Status</label>
                    <select id="" class="form-control" name="status" >
                    <option value="0" >Select Status</option>
                    <option value="1" <?php if($row->status ==1){echo "selected";}?> >Active</option>
                    <option value="2" <?php if($row->status ==2){echo "selected";}?> >Inctive</option>
                    </select>
                    </div>
                    
               </div>
           </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">
         <i class="ace-icon fa fa-arrow-down align-top bigger-125"></i>
         Update
		 </button>
      </div>
    </form>
    </div>
  </div>
</div>
												</tr>
                                                @endforeach
											</tbody>
										</table>
                                
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->    
                          <?php } ?>
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
    $( "#p" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
	</body>
</html>
