<div id="sidebar" class="sidebar                  responsive                    ace-save-state compact sidebar-fixed">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <a  href="{{ url('/Purchase') }}">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-shopping-cart"></i>
						</button> </a>
                        <a  href="{{ url('/Sales') }}">
						<button class="btn btn-info">
							<i class="ace-icon fa fa-balance-scale"></i>
						</button>
                        </a>
                            </div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="{{ url('/') }}">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-product-hunt"></i>
							<span class="menu-text">
								Products
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{ url('/Product') }}" class="">
									Add Products
								</a>
							</li>

							<li class="">
								<a href="{{ url('/Category') }}">
									Manage Category
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="{{ url('/Stock') }}">
									Stock
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-shopping-cart"></i>
							<span class="menu-text"> Purchase </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{ url('/Purchase') }}">
									
									New Purchase
								</a>
							</li>

							<li class="">
								<a href="{{ url('/managePurchase') }}">
									Manage Purchase
								</a>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-balance-scale"></i>
							<span class="menu-text"> Sales </span>
						</a>


						<ul class="submenu">
							<li class="">
								<a href="{{ url('/Sales') }}">
									New Sales
								</a>

							</li>
                            <li class="">
								<a href="{{ url('/manageSales') }}">
									Manage Sales
								</a>
							</li>


						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-usd"></i>
							<span class="menu-text"> Transaction </span>
						</a>

						<ul class="submenu">
							<li class="">
								<a href="{{ url('/Supplier') }}" class="">
									Supplier
								</a>
							</li>

							<li class="">
								<a href="{{ url('/Customer') }}">
									Customer
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="{{ url('/manageTransaction') }}">
									Manage Transaction
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
                    <li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-money"></i>

							<span class="menu-text">
								Expense
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>
                        
						<ul class="submenu">
                            <li class="">
								<a href="{{ url('/Expense') }}">
									Add Expense
								</a>
								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="{{ url('/ExpenseHead') }}">
									Add Expense Head
								</a>
							</li>
							<li class="">
								<a href="{{ url('/ManageExpense') }}">
									Manage Expense
								</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>

							<span class="menu-text">
								User Settings
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>
                        
						<ul class="submenu">
                            <li class="">
								<a href="{{ url('/Profile') }}">
									My Profile
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="{{ url('/Users') }}">
									Manage Users
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-file"></i>
							<span class="menu-text"> Reports </span>
						</a>
                        <ul class="submenu">
							<li class="">
								<a href="{{ url('/Supplier') }}" class="">
									Products Report
								</a>
							</li>
							<li class="">
								<a href="{{ url('/Customer') }}">
									Purchase Report
								</a>
							</li>
                            <li class="">
								<a href="{{ url('/Customer') }}">
									Sales Report
								</a>
							</li>
						</ul>
						
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-comments"></i>
							<span class="menu-text"> Massenger </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="profile.html">
									User Profile
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>