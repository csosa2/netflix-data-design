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
			<h2>User Story</h2>
			<p>
				As a user, I want to leave a review on a movie I watched.
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
				<li>userName</li>
				<li>userEmail</li>
				<li>userPassHash</li>
				<li>userPassSalt</li>
			</ul>
			<h2>review (weak)</h2>
			<ul>
				<li>reviewContent</li>
			</ul>
			<h2>media</h2>
			<ul>
				<li>mediaTitle</li>
			</ul>
			<h2>helpful (weak)</h2>
			<ul>
				<li>helpfulH</li>
				<li>helpfulU</li>
				<li>helpfulI</li>
			</ul>
			<h2>star (weak)</h2>
			<ul>
				<li>starOne</li>
				<li>starTwo</li>
				<li>starThree</li>
				<li>starFour</li>
				<li>starFive</li>
			</ul>

			<h3>Relationships</h3>
			<h4>One to One:</h4>
			<p>Each account can only belong to one primary user (billing person/entity).</p>
			<p>Each media content can have one review per profile.</p>
			<p>Each profile can rate a review once.</p>

			<h4>One to Many:</h4>
			<p>Each account can have multiple profiles.</p>
			<p>Each profile can review multiple media content.</p>
			<p>Each media content can be reviewed by an unlimited number of users.</p>

			<h4>Many to Many:</h4>
			<p>test!</p>
			<p>Many media contents can have many reviews.</p>
			<p><strong>Weak Entity:</strong> Many profiles can rate many different reviews.</p>
		</main>
	</body>
	<footer>

	</footer>
</html>