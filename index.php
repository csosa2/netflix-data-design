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
				<li>userPassHash</li>
				<li>userPassSalt</li>
			</ul>
			<h2>review (weak)</h2>
			<ul>
				<li>reviewId (primary key)</li>
				<li>reviewMediaId (foreign key)</li>
				<li>reviewUserId (foreign key)</li>
				<li>reviewContent</li>
			</ul>
			<h2>media</h2>
			<ul>
				<li>mediaId (primary key)</li>
				<li>mediaUserId (foreign key)</li> <!--Do only weak entities contain foreign keys?-->
				<li>mediaTitle</li>
			</ul>
			<h2>helpful (weak)</h2>
			<ul>
				<li>helpfulId (primary key)</li>
				<li>helpfulUserId (foreign key)</li>
				<li>helpfulMediaId (foreign key)</li>
				<li>helpfulH</li>
				<li>helpfulI</li>
				<li>helpfulN</li>
			</ul>
			<h2>star (weak)</h2>
			<ul>
				<li>starId (primary key)</li>
				<li>starUserId (foreign key)</li>
				<li>starMediaId (foreign key)</li>
				<li>star1</li>
				<li>star2</li>
				<li>star3</li>
				<li>star3</li>
				<li>star4</li>
			</ul>
			<!--Are primary keys the entity or named after the entity?-->
			<!--Do foreign keys start with the many entity first and then conitnue with the 1 entity second?-->
			<h3>Relationships</h3>
			<p>Each user can write many reviews. <em>1-to-m</em></p>
			<p>Each user can watch many media contents. <em>1-to-m</em></p>
			<p>Each user can leave one review per media conent. <em>1-to-1</em></p>
			<p>Each user can star rate a review once per media content. <em>1-to-1</em></p>
			<p>Each user can vote one review helpful per media content. <em>1-to-1</em></p>
			<p>Each review can be voted helfpful by many users. <em>1-to-m</em></p>
			<p>Each review can only have one star rating per individual review. <em>1-to-1</em></p>
			<p>Each media content can be reviewed by many users. <em>1-to-m</em></p>
			<p>Each media content can be star rated by many users <em>1-to-m</em></p>
			<p>Each media content can be voted helpful by many users <em>1-to-m</em></p>
			<p>Many users can vote helpful on many reivews. <em>(weak entity) m-to-n</em></p>
			<p>Many media contents can have many reviews <em>m-to-n</em></p>
		</main>
		<footer>

		</footer>
	</body>
</html>