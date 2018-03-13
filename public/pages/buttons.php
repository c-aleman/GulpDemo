<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 md-container lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset md-w-1/4 lg-w-1/4 h-auto border-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py">
			<div class="mx-auto px-4 md-w-3/4 lg-w-3/4 border-box mb-8">
				<h1 class="text-black text-lg tracking-clean text-bold">Buttons</h1>
				<h3 class="text-grey-light text-regular tracking-clean">Simple, easy to style buttons</h3>
				<p class="text-black text-sm leading-regular tracking-clean">Style your button anyway you want to. Apply stylings to buttons any way you want to with easy to use utility classes for a complete customization at hand.


				</p>

					
					

						<h3 class="big-mt-1 text-regular text-md">Basic Buttons</h3>
						<?php include '../partials/button.php';?>
							<pre><code class="html text-sm x-of-none h-16 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/button.php'), ENT_QUOTES); ?></code></pre>

						
						<h3 class="big-mt-1 text-regular text-md">Pill Shaped Buttons</h3>
						<div class="flex justify-around bg-grey-lightest p-4 rounded">
							<button class="hover-bg-brand-blue-dark btn border-none bg-brand-blue md-block mb-2 rounded-all">
								<div class="p-2 text-white">Button</div>
							</button>
							<button class="btn border-brand-blue bc-blue  md-block mb-2 border-none rounded-all">
								<div class="p-2 text-brand-blue">Button</div>
							</button>

						</div>

							<pre><code class="html text-sm x-of-none h-32 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/pills.php'), ENT_QUOTES); ?></code></pre>
						<p class="text-black text-sm leading-regular tracking-clean">Use the class .rounded-all to style the buttons into a pill shape.</p>

						<h3 class="big-mt-1 text-regular text-md">Squared Corners</h3>

						<div class="flex justify-around bg-grey-lightest p-4 rounded">
							<button class="hover-bg-brand-blue-dark btn border-none bg-brand-blue md-block mb-2">
								<div class="p-2 text-white">Button</div>
							</button>
							<button class="btn border-brand-blue bc-blue  md-block mb-2 border-none">
								<div class="p-2 text-brand-blue">Button</div>
							</button>
						</div>
						<pre><code class="html text-sm x-of-none h-32 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/squareButton.php'), ENT_QUOTES); ?></code></pre>
						<p class="text-black text-sm leading-regular tracking-clean">Apply .border-none and omit the rounded classes to create regular cornered buttons.</p>

						<h3 class="big-mt-1 text-regular text-md">Full Circle Buttons</h3>

						<div class="flex justify-around bg-grey-lightest p-4 rounded">
							<button class="w-32 h-32 hover-bg-brand-blue-dark btn border-none bg-brand-blue md-block mb-2 rounded-all">
								<div class="p-2 text-white">Button</div>
							</button>
							<button class="w-32 h-32 btn border-brand-blue bc-blue  md-block mb-2 border-none rounded-all">
								<div class="p-2 text-brand-blue">Button</div>
							</button>
						</div>
						<pre><code class="html text-sm x-of-none h-32 y-scroll rounded"><?php echo htmlspecialchars(file_get_contents('../partials/circleB.php'), ENT_QUOTES); ?></code></pre>
						<p class="text-black text-sm leading-regular tracking-clean">Use the .rounded-full class and adjust the width and height to get the circle shaped buttons. </p>

				</div>

				

		</div>

	
		

		
	</div>
<?php include '../partials/footer.php'; ?>