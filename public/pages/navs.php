<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 md-container lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset md-w-1/4 lg-w-1/4 h-auto border-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py mb-8">
			
			<div class="mx-auto px-4 md-w-3/4 lg-w-3/4 border-box">
				
				<div class="bb-light-blue">
					<h1 class="text-black text-lg tracking-clean text-bold">Navigation</h1>
				</div>
				<h3 class="big-mt text-grey-light text-regular tracking-clean">Responsive and customizable Nav bar.</h3>
				<p class="text-black text-sm leading-regular tracking-clean">The Navigation bar is built...

				</p>

				<h3 class="mt-5 text-regular text-md">Responsive Navigation</h3>
			
					<pre><code class="html x-of-none h-48 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/nav.php'), ENT_QUOTES); ?></code></pre>


			</div>
		</div>
	</div>
</div>


				

	</div>

			

		
</div>
</div>
<?php include '../partials/p_footer.php'; ?>
	
	<?php include '../partials/footer.php'; ?>
