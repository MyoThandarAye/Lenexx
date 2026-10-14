<ul class="navbar-nav">
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