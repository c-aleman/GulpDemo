<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx  bg-grey-lightest flex-col list-reset lg-w-1/4 h-auto border-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py">
			<div class="mx-auto px-4 lg-w-2/3 border-solid border-box">
				<h1 class="text-black text-lg tracking-clean text-regular">Buttons</h1>
				<h3 class="text-grey-light text-regular tracking-clean">Simple, easy to style buttons</h3>
				<p class="text-black text-sm leading-regular tracking-clean">Style your button anyway you want to. Apply stylings to buttons any way you want to with easy to use utility classes for a complete customization at hand.


				</p>

					
					

						<h3 class="mt-5 text-regular text-md">Basic Buttons</h3>
						<?php include '../partials/button.php';?>
							<pre><code class="html"><?php echo htmlspecialchars(file_get_contents('../partials/button.php'), ENT_QUOTES); ?></code></pre>

						<div class="flex justify-center mt-5">
							<div class="">

							
								<button class="btn border-box border-none bg-pink-light hover-bg-pink md-block mb-2 rounded-md">
									<div class="p-2 text-white">Button</div>
								</button>

							</div>

						</div>
					
						
				</div>

				

		</div>

			

		
	</div>
