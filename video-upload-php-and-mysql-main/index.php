
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<title>Wonderland</title>
<body>
	<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="view.php">Videos</a>
	<!-- <a class="nav-link active" aria-current="page" href="about.php">Registration</a> -->
</li>		
</ul>

		<p class="display-1 row g-1000" >Wonderland.com</>
		<p class="display-1 row g-1000"></>
		<p class="display-1 row g-1000"></>
		<a href="about.php" class="link-secondary">will join</a>
		<p class="display-1 row g-1000"></>
		<p class="display-1 row g-1000"></>
		<p class="display-1 row g-1000"></>
		<p class="display-1 row g-1000"></>
	<div>
			
		<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
		<?php } ?>
	 	<form action="upload.php"
	       method="post"
	       enctype="multipart/form-data"
		   >

	 		<input type="file"
	 	       name="my_video"
				class="btn btn-dark; d">

	 		<input type="submit"
	 	       name="submit" 
	 	       value="Upload"
				class="btn btn-secondary"	>
				
		 </form>
	</div>	
</body>
</html>