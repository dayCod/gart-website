<!-- ===================
				///// Begin header /////
				========================
				* Use class "tt-header-fixed" to set header to fixed position.
				-->
				<header id="tt-header" class="tt-header-fixed">
					<div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

						<div class="tt-header-col">

							<!-- Begin logo
							================ -->
							<div class="tt-logo">
								<a href="{{ route('index') }}">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="{{ asset('gart-logo-0.png') }}" class="tt-logo-light magnetic-item" alt="Gart Studio - Photo Studio, Wedding Terbaik Di Bogor"> <!-- logo light -->
									<img src="" class="tt-logo-dark magnetic-item" alt="Gart Studio - Photo Studio, Wedding Terbaik Di Bogor"> <!-- logo dark -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin overlay menu toggle button -->
							<div id="tt-ol-menu-toggle-btn-wrap">
								<div class="tt-ol-menu-toggle-btn-text">
									<span class="text-menu" data-hover="Open">Menu</span>
									<span class="text-close">Close</span>
								</div>
								<div class="tt-ol-menu-toggle-btn-holder">
									<a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
								</div>
							</div>
							<!-- End overlay menu toggle button -->

							<!-- Begin overlay menu
							========================
							* Use class "tt-ol-menu-center" to align menu to center.
							* Use class "tt-ol-menu-count" to enable menu counter.
							-->
							<nav class="tt-overlay-menu tt-ol-menu-center tt-ol-menu-count">
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">

											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">

												<!-- <li><a href="">Single Link</a></li> -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap active">
													<a href="{{ route('gart.index') }}">Gart Studio</a>
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<a href="{{ route('gart.categories') }}">Category</a>
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<a href="{{ route('gart.galleries') }}">Gallery</a>
												</li>
												<!-- End submenu (sub-master) -->

												<li><a href="{{ route('contact-us') }}">Contact</a></li>

											</ul>
											<!-- End menu list -->

										</div> <!-- /.tt-ol-menu-content -->
									</div> <!-- /.tt-ol-menu-inner -->
								</div> <!-- /.tt-ol-menu-holder -->

								<!-- Begin noise background -->
								<div class="bg-noise"></div>
								<!-- End noise background -->

							</nav>
							<!-- End overlay menu -->

						</div> <!-- /.header-col -->
					</div> <!-- /.header-inner -->
				</header>
				<!-- End header -->
