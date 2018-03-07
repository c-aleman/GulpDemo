<header id="header" class="bg-brand-blue bg-multiply bg-iso w-full">
	<div class="md-container md-p-3 lg-container md-flex md-items-center md-justify-between mx-auto">
		<h1 class="ml text-regular md-block">
			<a class="no-underline text-white" href="../index.php">Snackpack</a>
		</h1>
		<button v-on:click="showMenu = !showMenu" class="md-hide text-white">
	            <i class="fas fa-2x fa-bars"></i>
	          </button>
		<nav :class="{ hide: showMenu }" class="md-block lg-container">
			<ul :class="{ hide: showMenu }" class="list-reset p-2">
				<li class="mb-2"><a class="no-underline text-white" href="#">Installation</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Documentation</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Buttons</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Forms</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Cards</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Alerts</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">Support</a></li>
				<li class="mb-2"><a class="no-underline text-white" href="#">GitHub</a></li>
			</ul>
			
			<div class="hide md-block">
				<ul class="md-flex md-items-center md-justify-end list-reset">
					<li class="text-white"><a href="#" class="block md-inline md-ml-5 no-underline">
						
					</a>Documentation</li>
					<li class="text-white"><a href="#" class="block md-inline md-ml-5 no-underline">
						
					</a>About</li>
					<li class="text-white"><a href="#" class="block md-inline md-ml-5 no-underline">
						
					</a>Download</li>
				</ul>
			</div>
		</nav>
	</div>
		
</header>