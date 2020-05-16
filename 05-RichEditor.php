<!DOCTYPE html>
<html lang="en">

<head>

<title>Rich Text Editor</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="CSS/JSLife.css">
<link rel="stylesheet" type="text/css" href="CSS/Home.css">
<link rel="stylesheet" type="text/css" href="CSS/RichText.css">
<link rel="stylesheet" type="text/css" href="Php-inserts/FinitoList.css">
<script src="https://kit.fontawesome.com/d2e9898f47.js" crossorigin="anonymous"></script>

	<style media="screen">
		.Btn01 {
			position: relative;
		}
	</style>

</head>



<body>

<?php include 'Menu.php'; ?>


	<script type="text/javascript">
	let output = document.getElementById("output");
	let buttons = document.getElementsByClassName("tool--btn");
	for (let btn of buttons) {
		btn.addEventListener("click", () => {
			let cmd = btn.dataset["command"];
			if (cmd === "createlink") {
				let url = prompt("Enter the link here: ", "http://");
				document.execCommand(cmd, false, url);
			} else {
				document.execCommand(cmd, false, null);
			}
		});
	}

	</script>


<div class="Msg">

	<div class="Date"> May 14th 2020 </div>

	<h1> Rich Text Editor </h1>
	<a href="https://codepen.io/pieter-biesemans/pen/BQBWXX"> CodePen </a>
	<p> Php Scroller for n div's </p>



	<div class="toolbar">
		<ul class="tool-list">
			<li class="tool">
				<button type="button" name="left" class="tool--btn" data-command='justifyLeft'>
					<i class="fas fa-align-left"></i>
				</button>
			</li><li class="tool"></li>

			<li class="tool">
				<button type="button" name="center" class="tool--btn" data-command='justifyCenter'>
					<i class="fas fa-align-center"></i>
				</button>
			</li>

			<li class="tool">
				<button type="button" name="bold" class="tool--btn" data-command='bold'>
					<i class="fas fa-bold"></i>
				</button>
			</li>

			<li class="tool">
				<button type="button" name="italic" class="tool--btn" data-command="italic">
					<i class="fas fa-italic"></i>
				</button>
			</li>

			<li class="tool">
				<button type="button" name="underline" class="tool--btn" data-command="underline">
					<i class="fas fa-underline"></i>
				</button>
			</li>

			<li class="tool">
				<button type="button" name="insertOrderedList" class="tool--btn" data-command="insertOrderedList">
					<i class="fas fa-list-ol"></i>
				</button>
			</li>

			<li class="tool">
				<button type="button" name="insertUnorderedList" class="tool--btn" data-command="insertUnorderedList">
					<i class="fas fa-list-ul"></i>
				</button>
			</li>


			<li class="tool">
				<button type="button" name="createlink" class="tool--btn" data-command="createlink">
					<i class="fas fa-link"></i>
				</button>
			</li>

		</ul>

	</div>

<div id="output" contenteditable="true"> </div>



















	<div class="Btn01">
		<a class="Btn01-A" href="Msg2.php">
			Click Me Duff
		</a>
	</div>

</div> <!-- End MSG -->


<?php include('Php-inserts/FinitoList.php'); ?>


</body>
</html>
