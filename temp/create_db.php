<?php
	//$dbh=new PDO('mysql:host=localhost;dbname=pth','root','ppp');
	mysql_connect("localhost","root","ppp") or die(mysql_error());
	//mysql_query("USE metal_gym") or die(mysql_error());
	//mysql_query("DROP DATABASE pth") or die(mysql_error());
	$sql="CREATE DATABASE pth";
	mysql_query($sql) or die(mysql_error());
	
	mysql_select_db('pth')or die(mysql_error());
	//mysql_query("DROP TABLE articles") or die(mysql_error());
	$sql="CREATE TABLE people(
			login 				VARCHAR(20) NOT NULL PRIMARY KEY,
			password 			VARCHAR(50) NOT NULL,
			role 				VARCHAR(30) DEFAULT 'user',
			last_name			VARCHAR(300),
			first_name			VARCHAR(300),
			mail				VARCHAR(300),
			avatar				VARCHAR(300),
			registration_date	VARCHAR(50),
			last_visiting		VARCHAR(50),
		UNIQUE(login, password))
	";
	mysql_query($sql) or die(mysql_error());

	$sql="CREATE TABLE articles(
			id 		INT NOT NULL auto_increment,
			login 	VARCHAR(20) NOT NULL,
			eng_head 	VARCHAR(200) DEFAULT 'Untitled',
      ukr_head 	VARCHAR(200) DEFAULT 'Без назви',
      eng_art TEXT NOT NULL,
      ukr_art TEXT NOT NULL,
			date	VARCHAR(50),
			
					PRIMARY KEY(id)
	)";
	mysql_query($sql) or die(mysql_error());
	
	$sql="CREATE TABLE languages(
			id 	INT NOT NULL auto_increment,
			eng TEXT NOT NULL,
			ukr TEXT NOT NULL,
			rus TEXT NOT NULL,
				PRIMARY KEY(id)
	)";
	mysql_query($sql) or die(mysql_error());
	
	/*$sql="CREATE TABLE main_articles(
			id 			INT NOT NULL PRIMARY KEY auto_increment,
			eng_art 	TEXT,
			ukr_art 	TEXT,
			rus_art 	TEXT
	)";
	mysql_query($sql)or die(mysql_error());*/
	
	$sql="CREATE TABLE comments(
			id 		INT NOT NULL auto_increment,
			language	VARCHAR(20) NOT NULL,
			login 		VARCHAR(20) NOT NULL,
			art_num		INT NOT NULL,
			subject 	VARCHAR(200),
			comment		VARCHAR(2000),
			date		VARCHAR(50),
				PRIMARY KEY(id)
	)";
	mysql_query($sql) or die(mysql_error());
  
  $sql="CREATE TABLE art_rating(
			id 		INT NOT NULL auto_increment,
			login 		VARCHAR(20) NOT NULL,
			art_num		INT NOT NULL,
			mark      INT NOT NULL,
				PRIMARY KEY(id)
	)";
	mysql_query($sql) or die(mysql_error());

	mysql_close();
	
	echo"<p>database succesfully create</p>";
?>
