<?php include 'partials/header.php';?>


	<header class="bg-pink">
		
		<nav class="flex lg-container mx-auto">
			<h1 class="ml text-regular"><a class="no-underline text-white" href="index.php">Snackpack</a></h1>
			<ul class="flex items-center list-reset ml-auto">
				<li class=""><a href="#" class="ml no-underline"></a>Link 1</li>
				<li class=""><a href="#" class="ml no-underline"></a>Link 2</li>
				<li class=""><a href="#" class="ml no-underline"></a>Link 3</li>
			</ul>
		</nav>
		

	</header>
	<div class="mt-5 lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx bg-grey-lightest flex-col list-reset lg-w-1/4 h-auto border-box py">
			
			
			<?php include 'partials/sideNav.php';?>

		</div>
		<div class="w-full py">
			<div class="mx-auto px-4 lg-w-2/3">
			<h1 class="text-black text-lg tracking-clean text-regular">What is Snackpack?</h1>
			<h2 class="text-grey-light text-regular tracking-clean">Snackpack is an easy to use HTML and CSS component Library</h2>
			<p class="text-black text-sm leading-regular tracking-clean">Snackpack is designed for a mobile first responsive enviornment. 
				Simple and easy to use, Snackpack focuses on the design first with many options to create a visually captivating
				layout and styles. Choose whatever you crave and start styling according to your appetite.


			</p>
			
			<div class="mt-5 mb-5 rounded overflow-hidden w-full md-w-1/3 lg-w-1/3 box-shadow">
				<img class="w-full" src="http://via.placeholder.com/300x350" alt="">
				<div class="px-4 mt-4 text-medium tracking-clean">Card</div>
				<p class="px-4 pb-4 text-xs leading-regular text-light tracking-clean">Lorem ipsum dolor sit amet. Sapiente animi ipsa suscipit, eum voluptates consequuntur provident, unde, tempora!</p>


			</div>
			
			</div>


		</div>



		
	</div>
	
	

	
	<h2 class="mx text-regular">Cards</h2>
	<div class="mt mb-5 rounded overflow-hidden bg-grey w-1/5 box-shadow">
		<img class="w-full" src="http://via.placeholder.com/300x350" alt="">
		<p class="p-4 text-xs leading-regular text-white text-light tracking-clean">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente animi ipsa suscipit, eum voluptates consequuntur provident, unde, voluptas possimus ut nemo odio ipsum nisi magni sequi tenetur expedita reiciendis tempora!</p>
	</div>

	<div class="lg-w-1/4">

	<h2 class="mx text-regular">Buttons</h2>
	<button class="btn border-box bc-pink md-block mb-2 rounded"><div class="p-2 text-pink">This is a button</div></button>
	<button class="btn border-box bg-blue md-block"><div class="p-2 text-white">This is a button</div></button>
		<!-- <button class="btn bg-pink ml mb-5"> This is a button </button> <button class="btn-border-pink ml mb-5">button</button> -->
	</div>
	<h2 class="text-regular">Forms</h2>	
	<div class="lg-w-1/4 w-full p-4 mb-5 box-shadow">
		<form class="">
			<!-- <h4 class="text-regular">First Name</h4> -->
			<label class="md-block mb-1" for="Username">Username</label>
			<input class="border-none rounded mb-3" type="text">
			<label class="md-block mb-1" for="Password">Password</label>
			<input class="border-none rounded" type="text">
			<input class="md-block mt-3 rounded border-none px-5 p-2 bg-blue text-white" type="submit">
		</form>
	</div>
	<div class="p-2 bg-blue-light border-left mb-5">
		<div class="text-white">Be careful walking across the brige!</div>
		
	</div>

	
</div>
	
</body>
</html>