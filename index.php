<?php

	include 'inc/db_connect.php';

	if($_GET['logout'] == 'true'){
		session_destroy();
	}

	$query = "SELECT * FROM about";
	//We have a var called query with our query in it
	$result = mysql_query($query);
	//We now have a mysql object called result!
	if(!$result){
		die('Query error: ' . mysql_error());
		//this will print off our error, if one happens;
	}

	while ($row = mysql_fetch_assoc($result)) { 
		$section = $row["section"];
		$rows[$section] = $row['content'];
		// $rows['header'] = 'Our lives take us on many journeys; with our careers, families, sports teams, schools, etc...  At Sojourn, our desire is to provide a safe and fun environment to Sojourn from these life journeys for a brief period of time in order to reflect, gain new insight, and enter back into our journeys with new perspective.';


		// $rows is an array!!!

		// $rows['header']
		// $rows['video_caption']
		// $rows['body1']


	}
// exit;
	// print "<pre>";
	// print_r ($rows);
	// exit;


	$header_content = $rows[0]['content'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="page-header col-sm-12">
				<div class="col-sm-6"></div>
				<h4 id="header-font" class="col-sm-2"><small>Prepare for Your Adventure</small></h4>
				<img class="col-sm-0.5" src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/tw_32x32.png">
				<img class="col-sm-0.5" src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/fb_32x32.png">
				<img class="col-sm-0.5" src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/ig_32x32.png">
				<h4 class="col-sm-1" id="header-feedback"><small>Feedback</small></h4>
				<div class="col-sm-1.5"></div>
			</div>
		</div>
		<div class="row">
			<nav id="top-nav" class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header col-sm-12">
						<a class="navbar-brand col-sm-6" href="#">
							<img id="sojourn-adven-header-img" src="http://pq.b5z.net/i/u/10099375/i/sojourn_logo_header.png">
						</a>
						<ul id="sojourn-nav" class="nav navbar-nav col-sm-6">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Programs</a></li>
							<li><a href="#">Leadership</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="row col-sm-12">
			<div class="col-sm-2"></div>
			<div class="about-wrapper col-sm-8">
				<div class="left-wrapper col-sm-9">
					<div class="col-sm-12">
						<img id="about-title-image" class="col-sm-1" src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/tico1.png">
						<h2 class="col-sm-11" id="about-header">
							<?php print $rows['header']; ?>
						</h2>
					</div>
					<img id="sojourn-image" class="col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/About_Sojourn_Header.jpg">
					<p class="col-sm-8">
						<?php print $rows['header-text']; ?>
					</p>
					<div class="image-box col-sm-4">
						<img class="left-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/Fox_5_Video_of_Sojourn.png">
						<p class="left-image-descrip col-sm-12">
						<?php print $rows['vidcaption']; ?>
						</p>
					</div>
					<h2 class="col-sm-12 header-titles"><?php print $rows['location-title']; ?></h2>
					<p class="col-sm-8"><?php print $rows['location-text']; ?></p>
					<div class="image-box col-sm-4">
						<img class="left-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/Get_Directions_to_Ropes_Course_Button.png">
					</div>
					<h2 class="header-titles col-sm-12"><?php print $rows['acct-title']; ?></h2>
					<p class="col-sm-8"><?php print $rows['acct-text']; ?></p>
					<div class="image-box col-sm-4">
						<img class="left-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/ACCT_Logo_Button.png">
					</div>
					<h2 class="header-titles col-sm-12"><?php print $rows['pricing-title']; ?></h2>
					<p class="col-sm-12"><?php print $rows['pricing-text']; ?></p>
					<p id="note-text" class="col-sm-12"><?php print $rows['note-text']; ?></p>

				</div>

				<div class="right-wrapper col-sm-3">
					<img class="right-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/Get_a_Quote.png">
					<img class="right-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/Photo_Gallery_Button.png">
					<img class="right-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/video_tour_button.png">
					<img class="right-rail-image col-sm-12" src="http://pq.b5z.net/i/u/10099375/i/Prepare_for_Your_Event_Sidebar_Button.png">
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-12" id="footer">
				<p class="col-sm-12"><?php print $rows['address']; ?></p>
				<img id="footer-img1" src="http://q.b5z.net/i/u/10099375/i/acct_logo_footer.png">
				<img id="footer-img2" src="http://q.b5z.net/i/u/10099375/i/staff_login_button_footer.png">
			</div>
		</div>

	</div>
</body>
</html>