<?php
	#includes header.php    	   	 
	require "inc/header.php";
	#includes process functions.
	require "processes/process.php"; 
	#includes init.php(a setup);
	require "processes/init.php";
?>

<section class="container-fullhd has-background-light">
<div>
	<a href="test.php">Go to test.php</a>
	<a href="pages/dashboard.php">Go to Admin dashboard</a>
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
								<button id="get-started-button" class="button is-outlined is-dark">Get Started</button>
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
									class="input is-dark" 
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
									class="input is-dark" 
									name="password" 
									type="password" 
									placeholder="Enter your PIK">
							</div>
						</div>
						<div class="field is-grouped is-grouped-right">
							<div class="control">
								<button 
									class="button is-dark"
									name="submit"
									type="submit">
									Login
								</button>
							</div>
							<div class="control">
								<button 
									class="button is-danger is-outlined" 
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

<script src="<?php echo sourceLink("js","index"); ?>"></script>

<?php include "inc/footer.php"; ?>