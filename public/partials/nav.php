<header id="header" class="bg-white w-full">
	<div class="md-container lg-container md-flex md-items-center md-justify-between mx-auto">
		<h1 class="ml text-regular md-block">
			<a class="no-underline text-white block content-box ml-5" href="../index.php"><img src="../images/logo.svg" height="40em" alt=""></a>
		</h1>
		<button v-on:click="showMenu = !showMenu" class="md-hide text-white">
	            <i class="fas fa-2x fa-bars"></i>
	          </button>
		<nav :class="{ hide: showMenu }" class="md-block lg-container">
			
			
			<div class="hide md-block md-ml-5">
				<ul class="md-flex md-items-center md-justify-end list-reset">
					<li class="text-white"><a href="index.php" class="text-black block md-inline md-ml-5 no-underline text-light cool-link">
						Documentation
						
					</a></li>
					<li class="text-white"><a href="https://github.com/c-aleman/Snackpack" class="text-black block md-inline md-ml-5 no-underline text-light cool-link">
						About
					</a></li>
					<li class="text-white"><a href="#" class="text-black block md-inline md-ml-5 no-underline text-light cool-link">
						Download
					</a></li>
				</ul>
			</div>
		</nav>
	</div>
		
</header>