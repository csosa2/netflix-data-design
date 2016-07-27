<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Netflix Data Design Project</title>
	</head>
	<body>
		<header>
			<h1>Netflix Data Design</h1>
		</header>
		<main>
			<h2>Phase 1</h2>
			<h2>User Story</h2>
			<p>
				As a user, I want to leave a review on a movie called "The Hunt" that I watched.
			</p>
			<h2>Persona</h2>
			<h4>Name: Kendall McCoy</h4>
			<h4>Age: 27</h4>
			<h4>Profession:Law student looking for a stress releasing outlet to enjoy on her weekends when she is not busy
				studying for classes.</h4>
			<p>
				As a lover of TV and movies and not so much of a fan of high satellite service costs, Kendall has gotten
				rid oher her satellite telivision and has signed up for Netflix as a way to still enjoy the movies and shows
				she loves. She would like to comment,review and do research on media content she has previously watched and
				will watch in the future. Kendall loves watching horror movies and is very knowledgable in the genre. She
				would like to find more great horror movies as well as contribute to the review section in Netflix to
				recommend and critique horror movies for other Netflix users.
			</P>
			<h4>Technology:</h4>
			<p>Kendall uses her Netflix primarily on her streaming device (Amazon Firestick) and her Macbook Air laptop.
				She does not use other devices to access Netflix although it is available through mobile devices if ever
				needed.
			</p>
			<h2>Interaction Flow</h2>
			<h3>Use Case</h3>
			<p><strong>Goal:</strong> Kendall watched a film on Netflix and is now looking to leave a review on the
				film.</p>
			<ol>
				<li>Kendall will type "www.netflix.com" in her internet browser on her laptop.</li>
				<li>Kendall will sign into Netflix with her user name and password</li>
				<li>Kendall will select her profile upon signing into Netflix</li>
				<li>Kendall will type "The Hunt" in the search box at the uppder right hand corner.</li>
				<li>Kendall will then click on the movie she is searching.</li>
				<li>Kendall will click on "Details"</li>
				<li>Kendall will look at the member reviews and click on "See all reviews" and a window will pop up with
					all reviews included.
				</li>
				<li>Kendall will click the "Write a Review" button</li>
				<li>Kendall will rate the movie with stars and write a reivew</li>
				<li>Kendall will click the "Submit" button and publish her review for other Netflix users to see.</li>
			</ol>
			<h2>Conceptual Model</h2>
			<h3>Entities and Attributes:</h3>
			<h2>user</h2>
			<ul>
				<li>userId (primary key)</li>
				<li>userEmail</li>
				<li>userName</li>
				<li>userSalt</li>
				<li>userHash</li>
			</ul>
			<h2>media</h2>
			<ul>
				<li>mediaId (primary key)</li>
				<li>mediaTitle</li>
				<li>mediaFilePath</li>
			</ul>
			<h2>review (weak)</h2>
			<ul>
				<li>reviewId (primary key)</li>
				<li>reviewMediaId (foreign key)</li>
				<li>reviewUserId (foreign key)</li>
				<li>reviewContent</li>
			</ul>
			<h2>helpful (weak)</h2>
			<ul>
				<li>helpfulUserId (foreign key)</li>
				<li>helpfulReviewId (foreign key)</li>
				<li>helpfulVote</li>
				<li>helpfulInappropriate</li>
			</ul>
			<h3>Relationships</h3>
			<p>One user can watch many media <em>1-to-n</em></p>
			<p>One user can write many reviews <em>1-to-n</em></p>
			<p>One user can rate many reviews (helpful, not helpful, inappropriate <em>1-to-n</em></p>
			<p>Many media have many reviews <em>m-to-n</em></p>
			<p>Many reviews are voted (helpful, not helpful, inappropriate <em>m-to-n</em></p>
			<h2>phase 2</h2>
			<h3>Entity Relationship Diagram</h3>
			<img src="NetflixDataDesignERD.svg" alt="Netflix Entity Relationship diagram">
			<h3>Data Description Language (DDL) Scripts</h3>
			<!--SQL scripts formatted with HTML-->
				<code>
					DROP TABLE IF EXISTS user;<br>
					DROP TABLE IF EXISTS media;<br>
					DROP TABLE IF EXISTS review;<br>
					DROP TABLE IF EXISTS helpful;<br>
					<br>
					CREATE TABLE user (<br>
					userId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br>
					userEmail VARCHAR(128) NOT NULL,<br>
					userSalt CHAR(64) NOT NULL,<br>
					userHash CHAR(128) NOT NULL,<br>
					UNIQUE (userEmail),<br>
					PRIMARY KEY (userId)<br>
					);
					<br>
					CREATE TABLE media (<br>
					mediaFilePath VARCHAR(100) NOT NULL, <br>
					mediaTitle VARCHAR(200) NOT NULL,<br>
					PRIMARY KEY (mediaId)<br>
					);
					<br>
					CREATE TABLE review (<br>
					reviewContent VARCHAR(1999) NOT NULL,<br>
					FOREIGN KEY (reviewUserId) REFERENCES user(userId),<br>
					FOREIGN KEY (reviewMediaId) REFERENCES media(mediaId),<br>
					PRIMARY KEY (reviewId)<br>
					);
					<br>
					CREATE TABLE helpful (<br>
					helpfulVote BOOLEAN,<br>
					helpfulInappropriate BOOLEAN,<br>
					FOREIGN KEY (helpfulUserId) REFERENCES user(userId),<br>
					FOREIGN KEY (helpfulReviewId) REFERENCES review(reviewId),<br>
					PRIMARY KEY (userId, reviewId)<br>
					);
					<br>
				</code>
		</main>
	</body>
</html>