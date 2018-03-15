<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 md-container lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset md-w-1/4 lg-w-1/4 h-auto content-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py mb-8">
			<div class="mx-auto px-4 md-w-3/4 lg-w-3/4 border-box mb-8">
				<div class="bb-light-blue">
					<h1 class="text-brand-blue-dark text-lg tracking-clean text-bold">Flex-Box Layout</h1>
				
				</div>
				<div class="big-mt-1">
					<h3 class="text-md text-grey">Flex-Example</h3>
					<p class="text-grey-dark leading-regular tracking-clean">Use classes such as <code class="bg-grey-lightest rounded p">flex, wrap, w-full, w-1/3, w-1/4, w-1/2</code> to create a responsive flex grid. Add margin and padding to the inner content to create gutter margins between flex items.</p>
					
					<div class="flex wrap roboto">
						<div class="w-full bg-green items-center text-white text-center">
							<div class="bg-blue mx my p-2">w-full</div>
						</div>
					</div>
					
					<div class="flex wrap roboto">

						<div class="w-full md-w-1/3 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/3</div>
						</div>
						<div class="w-full md-w-1/3 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/3</div>
						</div>
						<div class="w-full md-w-1/3 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/3</div>
						</div>
						
					</div>

					<div class="flex roboto">
						<div class="w-full md-w-1/2 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/2</div>
						</div>
						<div class="w-full md-w-1/2 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/2</div>
						</div>

					</div>
					<div class="flex wrap roboto">
						<div class="w-full md-w-1/4 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/4</div>
						</div>
						<div class="w-full md-w-1/4 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/4</div>
						</div>
						<div class="w-full md-w-1/4 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/4</div>
						</div>
						<div class="w-full md-w-1/4 text-center items-center bg-green text-white">
							<div class="bg-blue mx p-2 my">w-1/4</div>
						</div>

					</div>
					
							<pre><code class="html x-of-none h-48 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/flex-example.php'), ENT_QUOTES); ?></code></pre>

					
				</div>

		</div>

	
		

		
	</div>
</div>
</div>
	<?php include '../partials/p_footer.php'; ?>
<?php include '../partials/footer.php'; ?>