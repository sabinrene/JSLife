<!DOCTYPE html>
<html lang="en">

<head>

<title>Dark Msg</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="CSS/JSLife.css">
<link rel="stylesheet" type="text/css" href="CSS/Home.css">
<link rel="stylesheet" type="text/css" href="Php-inserts/FinitoList.css">

<style media="screen">

  .JS-One {
      position: relative;
      margin: 100px 0 200px 0;
      width: 400px;
      background-color: #1C2529;
      padding: 20px;
  }

  #Btn01-A {
    position: relative;
    left: 300px;
  }

</style>



<script>
  function Txt() {
    document.getElementById("TxtHere").innerHTML =
            "Hi Jules! You just inserted some new Text into the Page";
  }
</script>

</head>


<body>




<div class="Msg">

	<div class="Date"> Javascript </div>

	<h1> Text Insertion </h1>

	<p> Click the Button and <a href="#">New Text</a>
	Appears. This is the kind of stuff you can you with javascript.
  Pretty cool. Make Sections come in and out of sight. </p>

  <div class="JS-One">

      <p>Click "Try it" and a function will be called.</p>
      <p>The function will then display a message.</p>
      <div class="Btn01-A" id="Btn01-A" onclick="Txt()">
          Try it
      </div>

      <p id="TxtHere"> <p>
  </div>

		<div class="Btn01">
			<a class="Btn01-A" href="Msg2.php">
				Click Me Away
			</a>
		</div>

    <?php include('Php-inserts/FinitoList.php'); ?>
</div> <!-- End MSG -->



</body>
</html>
