<?php
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Peter Kariuki Mutuura CV, kariukipeter30@gmail.com, Curriculum Vitae">
    <meta name="author" content="Peter Kariuki Mutuura , Kariukipeter30@gmail.com ,KarisYgBorabora, karisYg">
	<title>Peter Kariuki Mutuura</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" href="images/heaven.jpg" >
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2  class="text-info"  style="line-height: 3;">Peter Kariuki Mutuura
				<span class="glyphicons glyphicons-heart"> </span>
				<small >Personal Portfolio</small></h2>
		</div>
		
		<nav class="col-md-4">
			<ul class="mynav">
		        <li class="active"><a class="headnav" href="">Home</a></li>
		        <li><a class="headnav" href="#about">About</a></li>
		        <li><a class="headnav" href="#personalcontact">Contact Me</a></li>
		    </ul>
		</nav>
		
	</div>
	<div class="row text-center">
		<img id="imgprofile" src="images/heaven.jpg"  class="img-responsive" alt="the heavens" > 

	</div><br>
	<div class="row">
		<h3 class="col-sm-12">
		 List of 	Projects Done
		</h3>
		<div class="col-sm-12">
			<p style="color: #0a6900;">Much as the list ends to infinity , i'll list a few</p>
			<section>
				<strong>1.Academic writing System</strong>
				<p>
					this is a system where users get academic writing services ,services as writing ,rewriting ,editing of academic assignment, php projects ,thesis, any academic paper.
					<a href="#" > This project is locally available on my machine. i'm yet to upload to and make it go viral</a>
				</p>
				
			</section>
			<section>
				<strong>2.Laravel Blog</strong>
				<p>
					This is a simple blog that uses php laravel technology. The project demonstrate
					The Create ,Read,Update, Delete Operations That occur in database Operations
					<a href=""> This project is locally available on my machine. i'm yet to upload to and make it go viral.</a>
				</p>
				
			</section>
			<section>
				<strong>3.Enterprise Resource Program</strong>
				<p>
					This is Hospital management  Web based System.
					<a href=""> This project is locally available on my machine. i'm yet to upload to and make it go viral.</a>
				</p>
				
			</section>


			
		</div>
	</div>
	<div class="row">
		<div class="container">
			
	
			<h3 class="col-sm-12" id="about">
				About Me
			</h3>
		<div class="well">
			<p class="alert alert-info" style="color: #051417;">
				My Name is Peter Kariuki Mutuura , Currently I'm broke, But i have a very rich mind.
				I am an upcoming programmer  and computer enthusiast. I have a very good  understanding in html&csss bootstrap Framework  .I can comfortably say i'm a ninja in them.
				I've used core php and mysqli and for this i'm a  <em style="color: #000;">sensei</em> 
				aka master. <br>
				I'm  well Conversant with Php  MVC framework i.e Laravel and Have been in love with it since for quite a while even though it gets complicated sometimes ... its awesome
				<br>
				I self taught myself python and i'm good at it, at that time word on the street was that Python was on high demand and was very lucrative. I've used Flask Framework to Create a simple CRUD operation web application.I'l also tried out  Django and found it ok!<br>
				Android Programming have been my love since like two years ago ,even though is not 
				easy dealing with the java part, creating the logic was just tedious but i liked it since its based on Java and i have always wanted to become a geek in Java.i created a few mediocre applications on my smartphone just for learning purposes
				<br>



			</p>
			
		</div>

		</div>
	</div>
 

	<div class="row">
		<h3 class="col-sm-12">
			My Hobbies
		</h3>
		<ul>
		    <li>Staying Overnight Just Playing with Sublime Text Editor</li>
		    <li>Practicing Programming </li>
		    <li> Watch Programming Tutorials ,I just love them</li>
		    <li> Sleeping but i don't sleep </li>
		    <li>Eating if is delicious meal</li>
		    <li>
		    	Traveling Only to places I've never been
		    </li>
		</ul>

	</div>
	<div class="row">
		<div class="col-sm-12">
		<h3 >
			My Computer Programming Skills
		</h3>
		<p>List of Languages i'm Conversant in as of <b>Friday October 13, 2017</b>;</p>		
	</div>

		<ul>
		    <li>HTML&CSS </li>
		    <li>Bootstrap Framework</li>
		    <li> Core PHP</li>
		    <li>PHP MVC - Laravel Framework</li>
		    <li>Javascript</li>
		    <li>
		    	Jquery - Javascript Library
		    </li>
		    <li>
		    	Ajax
		    </li>
		    <li>
		    	Nodejs - even though i'm working at it
		    </li>
		    <li>
		    	mongodb
		    </li>
		    <li>
		    	Java Programming , Java Fx ,Java Swing
		    </li>
		    <li>
		    	Android Programming with Java
		    </li>
		    <li>
		    	Python 
		    </li>
		</ul>

	</div><br>
	<div class="footer">
		<h3>My Contacts:</h3>
		<p> Call me i really need a Job</p>
		<p id="personalcontact">
			<a href="https://www.facebook.com/KarisYgBorabora"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>&nbsp&nbsp&nbsp <a href="https://github.com/karisYg"><i class="fa fa-github" aria-hidden="true"></i> Github</a>&nbsp&nbsp  Email <b class="text-info">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
 kariukipeter30@gmail.com</b>
		</p>
		            <?php 
           //Gets the IP address
           $ip = getenv("REMOTE_ADDR") ; 
           echo "<p id='tag'>Your IP is " . $ip.'</p>';


           
            $counter_name = "counter.txt";
            // Check if a text file exists. If not create one and initialize it to zero.
            if (!file_exists($counter_name)) {
              $f = fopen($counter_name, "w");
              fwrite($f,"0");
              fclose($f);
            }
            // Read the current value of our counter file
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            // Has visitor been counted in this session?
            // If not, increase counter value by one
            if(!isset($_SESSION['hasVisited'])){
              $_SESSION['hasVisited']="yes";
              $counterVal++;
              $f = fopen($counter_name, "w");
              fwrite($f, $counterVal);
              fclose($f); 
            }
            echo "<p id='tag'> You are visitor number ". $counterVal ."  to this site</p>";


           ?>
	</div><br><br><br><hr>


	</div>

</body>
</html>