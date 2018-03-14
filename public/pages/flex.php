<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 md-container lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset md-w-1/4 lg-w-1/4 h-auto content-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py">
			<div class="mx-auto px-4 md-w-3/4 lg-w-3/4 border-box mb-8">
				<div class="bb-light-blue">
					<h1 class="text-black text-lg tracking-clean text-bold">Flex-box Layout</h1>
				
				</div>
				<div class="big-mt-1">
					<h3 class="text-md text-grey">Flex-Example</h3>
					<p class="leading-regular tracking-clean">Use classes such as <code>text-thin, text-md, text-bold, text-semibold </code> to change the weight of the fonts.</p>
					<div class="flex">
						<div class="w-full bg-green p-3 items-center text-white text-center">
							<div class="bg-blue p-4">w-full</div>
						</div>
					</div>
					<div class="flex">

						<div class="w-full md-w-1/3 text-center items-center p-3 bg-green text-white">
							<div class="bg-blue p-4">w-1/3</div>
						</div>
						<div class="w-full md-w-1/3 text-center items-center p-3 bg-green text-white">
							<div class="bg-blue p-4">w-1/3</div>
						</div>
						<div class="w-full md-w-1/3 text-center items-center p-3 bg-green text-white">
							<div class="bg-blue p-4">w-1/3</div>
						</div>
						
					</div>

					
				</div>

		</div>

	
		

		
	</div>
<?php include '../partials/footer.php'; ?>