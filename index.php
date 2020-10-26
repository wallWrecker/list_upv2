<?php
	#includes header.php    	#includes process functions.   	 #includes init.php(a setup);
	require "inc/header.php"; require "processes/process.php"; require "processes/init.php";	
?>

<section class="container-fullhd has-background-light">
<div>
	<a href="test.php">Go to test.php</a>
	<a href="pages/profile.php">Go to profile.php</a>
</div>

	<div class="container hero">
		<div class="hero-body">

		<!-- Parent Column for Left & Right Panes -->
			<div class="columns is-vcentered px-4">
				<!-- Left Pane -->
				<div class="column">
					<div class="py-2">
						<h1 class="title">/Listup.io</h1>
					</div>
					<p class="subtitle">
						some description of listup.io here..
					</p>
					<div class="py-3">
						<p class="subtitle">If you're ready click the get started.</p>
						<div class="field is-grouped">
							<div class="control">
								<button id="get-started-button" class="button is-outlined is-link">Get Started</button>
							</div>

							<div class="control">
								<button id="reloadbutton" class="button is-text">Reload Page</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Right Pane -->
				<div class="right-pane column is-5">
					<!-- When the user clicks "get started" button it gets focused on this form. -->
					<!-- This is the form you want to take your login on. -->
					<form id="form" autocomplete="false" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
						<div class="my-3">
						<?php
							if (isset($_GET["submit"])) {
								validateLoginInputs($_GET["userid"], $_GET["password"]);
							}
						?>
						</div>
						<div class="field">
							<div class="control">
								<label class="label">ID</label>
								<input 
									class="input is-info" 
									name="userid" 
									type="text"
									autocomplete="off"
									placeholder="ID">
							</div>
						</div>
						<div class="field">
							<div class="control">
								<label class="label">PIK:</label>
								<input
									class="input is-info" 
									name="password" 
									type="password" 
									placeholder="Enter your PIK">
							</div>
						</div>
						<div class="field is-grouped is-grouped-centered">
							<div class="control">
								<button 
									class="button is-success is-outlined"
									name="submit"
									type="submit">
									Login
								</button>
							</div>
							<div class="control">
								<button 
									class="button is-danger" 
									type="reset">
									Reset
								</button>
							</div>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Sent us your thoughts section. -->
<section class="container section">
	<h3 id="demo" class="subtitle is-3 has-text-centered">Sent us your thoughts</h3>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
		<div class="field has-addons">
			<div class="control">
				<input 
					class="input input-outlined is-link" 
					name="name" 
					type="text" placeholder="Enter your Email">
			</div>

			<div class="control">
				<button 
					class="button btn-outlined is-info" 
					name="submit" 
					type="submit">
						Submit
				</button>
			</div>
		</div>
	</form>
</section>

<script src="<?php echo sourceLink("js","index"); ?>"></script>

<?php 
	include "inc/footer.php";
?>