<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset lg-w-1/4 h-auto border-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py">
			<div class="mx-auto px-4 lg-w-2/3 border-box">
				<h1 class="text-black text-lg tracking-clean text-regular">Alerts</h1>
				<h3 class="text-grey-light text-regular tracking-clean">Create alerts with simple utility classes</h3>
				<p class="text-black text-sm leading-regular tracking-clean">Alerts are created by applying a background color class and border color class for contrast.

				</p>

					
					

						<h3 class="mt-5 text-regular text-md">Alert Styles</h3>
						<div class="border-solid bc-grey-lightest rounded border-box">
							<div class="mt-5">
								<?php include '../partials/alert.php';?>
							</div>
							
							<pre><code class="html text-sm x-of-none h-30v y-scroll"><?php echo htmlspecialchars(file_get_contents('../partials/alert.php'), ENT_QUOTES); ?></code></pre>

						</div>

						<div class=" mt-4 p-2 bg-green-lighter bc-green-darkest border-left mb-5">
							<div class="text-white">
								Walk the dog!
							</div>
							
						</div>

						<div class=" h-16 w-16 mt-4 p-2 border-solid bc-red bg-red-lightest mb-5 rounded-all p-4">
							<div class="text-white text-center mt-2">
								Walk the dog
							</div>
							
						</div>





						<div class="flex justify-center mt-5">
							<div class="">

							
								

							</div>

						</div>
					
						
			</div>

				

		</div>

			

		
	</div>
</div>
	<?php include '../partials/p_footer.php'; ?>
	<?php include '../partials/footer.php'; ?>

