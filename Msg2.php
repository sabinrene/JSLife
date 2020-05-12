<!DOCTYPE html>
<html lang="en">

<head>

<title>Light Msg</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Php-inserts/FinitoList.css">


  <style media="screen">
      body {
        overflow-x: hidden;
      }

      a {
        color: #ff6600;
        transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        -o-transition: .5s;
        font-family: 'Muli', sans-serif;
      }
      h1 {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 48px;
        color: #333;
      }
      h1:hover {
        color: #ff6600;
        text-decoration: none;
      }
      p, li {
        color: #333;
        font-family: 'Lucida Sans', Arial, sans-serif;
        font-size: 16px;
        line-height: 26px;
        text-indent: 30px;
      }


      ul {
        list-style-type: none;
      }



    .Msg {
      position: relative;
      top: 120px;
      height: auto;
      width: 60%;
      max-width: 800px;
      margin: 0 auto;
    }

    .Date {
      background: #fe921f;
      color: #ffffff;
      display: inline-block;
      font-family: 'Lato', sans-serif;
    font-size: 12px;
    font-weight: bold;
    line-height: 12px;
    letter-spacing: 1px;
    margin: 0 0 30px;
    padding: 10px 15px 8px;
    text-transform: uppercase;
    }


    .Btn01 {
      position: relative;
      left: 80%;
      top: 20px;
    }

    .Btn01-A {
      font-family: 'Lato', sans-serif;
      font-size: 12px;
      font-weight: bold;
      line-height: 12px;
      letter-spacing: 1px;
      color: #fff;
      text-transform: uppercase;
      text-decoration: none;

      background: #fe921f;
      padding: 20px;
      border-radius: 5px;
      display: inline-block;
      border: none;
      transition: all 0.4s ease 0s;
    }

    .Btn01-A:hover {
      background: #434343;
      letter-spacing: 1px;
      width: 110px;
      text-align: center;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
      transition: all 0.4s ease 0s;
    }


  </style>

</head>


<body>

<?php include 'Menu.php'; ?>



<div class="Msg">

	<div class="Date"> Dec 16 1987 </div>

	<h1> The quick brown fox jumps over the lazy dog </h1>

	<p>Lorem ipsum dolor sit amet, <a href="#">Maleus Malesqueri</a>
	Cas congue quam ut tellus laicinia sit amet cusus dui molestie.</p>

	<p>Industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type
		specimen book. It has survived not only five centuries, but also the leap into
		electronic typesetting, remaining essentially unchanged. It was popularised
		in the 1960s with the release of Letraset sheets containing Lorem Ipsum
		passages, and more recently.. </p>


		<p> Contrary to popular belief, Lorem Ipsum is not simply random text. It
			has roots in a piece of classical Latin literature from 45 BC, making it
			over 2000 years old. Richard McClintock, a Latin professor at
			Hampden-Sydney College in Virginia, looked up one of the more obscure
			Latin words consectetur, from a Lorem Ipsum passage, and going through
			the cites of the word in classical literature, discovered literature. </p>


			<div class="Btn01">
				<a class="Btn01-A" href="index.php">
					Click Me Here
				</a>
			</div>


      <?php include('Php-inserts/FinitoList.php'); ?>


</div> <!-- End MSG -->


<?php include 'Footer.php'; ?>

</body>
</html>
