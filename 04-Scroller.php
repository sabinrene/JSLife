<!DOCTYPE html>
<html lang="en">

<head>

<title>Scroller by Jules</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="CSS/JSLife.css">
<link rel="stylesheet" type="text/css" href="CSS/Home.css">
<link rel="stylesheet" type="text/css" href="CSS/Scroller.css">
<link rel="stylesheet" type="text/css" href="Php-inserts/FinitoList.css">


	<style media="screen">
		.Btn01 {
			position: relative;
		}
	</style>
</head>



<body>

<?php include 'Menu.php'; ?>



<div class="Msg">

	<div class="Date"> May 8th 2020 </div>

	<h1> Div Scroller </h1>
	<p> Php Scroller for n div's </p>

		<div class="horizontal-scroll-wrapper squares">
			<div> <h1> item 1 </h1> </div>
			<div>item 2</div>
			<div>item 3</div>
			<div>item 4</div>
			<div>item 5</div>
			<div>item 6</div>
			<div>item 7</div>
			<div>item 8</div>
		</div>


	<div class="Btn01">
		<a class="Btn01-A" href="Msg2.php">
			Click Me Duff
		</a>
	</div>

</div> <!-- End MSG -->


<?php include('Php-inserts/FinitoList.php'); ?>


</body>
</html>
