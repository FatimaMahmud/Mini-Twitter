<head>

   <style>
                
                body {
				background-color: #eee;
                    margin:0px;
                    font-family:Verdana, Arial, helvetica, sans-serif;
                    font-size:12px;
                }

                span {
                    font-size:12px;
                }

  </style>
    <title>
      Mini - Twitter
    </title>

  </head>

  <h2>Mini - Twitter</h2>
  <div  ng-app="" >
 
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
	Enter ID: <input type = "text" name= "text" id = "text" ng-model="name">
	Enter you Tweet here: <input type = "tweet" name= "tweet" id = "tweet" ng-model="tweet">
	Submit Button: <input type ="submit" >
</form>
<br><br><br><br><br>
  Displaying the ID here<br><br> <h3 ng-bind = "name"></h3><br><br><br><br><br><br>
  Displaying the tweet here<br><br><span ng-bind = "tweet"></span>
 
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  </div>

	  <?php
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("<h2>Connection failed: </h2>" . $conn->connect_error);
		} 
		echo "<h2>Connected successfully</h2>";
		
		/*
		// Create database
		$sql = "CREATE DATABASE students";
		if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}
		
		// sql to create table
		$sql = "CREATE TABLE student (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		text VARCHAR(30) NOT NULL,
		tweet VARCHAR(30) NOT NULL
		)";*/
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['text']; 
		$tweet = $_POST['tweet']; 
		if (empty($name) || empty($tweet))
			echo "<h2>they are empty</h2>";
		else{
			echo "Name is: $name<br>";
			echo "Tweet is: $tweet";
		//	$sql = "INSERT INTO student (text, tweet)
			//	VALUES ($name, $tweet)";
				
		}
		}
		
		
		
		$conn->close();
	?>
	
