<header>
	<div id="top_header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-3 col-12">
					<div class="web-logo">
						<a href="/"><img src="/img/lenexx.png" class="img-fluid"></a>
					</div>
				</div>
				<div class="col-md-9 col-12">
					<div class="responsive-menu-wrap">
						<button id="my-icon" class="hamburger hamburger--spin d-block d-lg-none" type="button">
							<span class="hamburger-box"></span>
							<span class="hamburger-inner"></span>
						</button>
					</div>
					<nav id="topMenu" class="home-menu navbar navbar-expand-lg navbar-light">
						<div class="container-fluid">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item <?php if ($page == "" || $page == NULL || $page == "home") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/">Home</a>
									</li>
									<li class="nav-item <?php if ($page == "engineering") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/engineering/">Engineering</a>
									</li>
									<li class="nav-item <?php if ($page == "integrations") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/integrations/">Integrations</a>
									</li>
									<li class="nav-item <?php if ($page == "lifecycle") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/lifecycle/">Lifecycle</a>
									</li>
									<li class="nav-item <?php if ($page == "systems") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/systems/">Systems</a>
									</li>
									<li class="nav-item <?php if ($page == "people") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/people/">People</a>
									</li>
									
									
									<li class="nav-item contact-us-with-icon <?php if ($page == "contact-us") {
										echo ' active';
									} ?>">
										<a class="nav-link" href="/contact-us/">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<nav id="menu" class="d-lg-none">
						<ul>
							<li class="nav-item <?php if ($page == "" || $page == NULL || $page == "home") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/">Home</a>
							</li>
							<li class="nav-item <?php if ($page == "about-us") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/about-us/">About Us</a>
							</li>
							<li class="nav-item <?php if ($page == "engineering") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/engineering/">Engineering</a>
							</li>
							<li class="nav-item <?php if ($page == "online-application") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/online-application/">Online Application</a>
							</li>
							<li class="nav-item <?php if ($page == "vacancy") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/vacancy/">Vacancy</a>
							</li>
							<li class="nav-item contact-us-with-icon <?php if ($page == "contact-us") {
								echo ' active';
							} ?>">
								<a class="nav-link" href="/contact-us/">Contact Us</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>