<! DOCTYPE html>
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
			<h2>Entities and Attributes</h2>
			<h4>User</h4>
			<ul>
				<li>User</li>
			</ul>
			<h4>Media Content</h4>
			<h2>User Story</h2>
			<p>
				As a user, I want to watch films and television shows.
			</p>
			<h2>Persona</h2>
			<h4>Name: Kendall McCoy</h4>
			<h4>Age: 27</h4>
			<h4>Profession:</h4>
			<p>Law student looking for a stress releasing outlet to enjoy on her weekends when she is not busy studying
				for classes.</p>
			<p>
				As a lover of TV and movies as well as a hater of Comcast Satellite television, Kendall has gotten rid
				oher her satellite telivision and has signed up for Netflix as a way to still enjoy the movies and shows
				she loves. She would like to comment,review and do research on movies she has previously watched and will 				watch in the future. Kendall loves watching horror movies and is very knowledgable in the genre. She would 				like to find more great horror movies as well as contribute to the review section in Netflix to recommend and 				critique horror movies for other Netflix users.
				<h4>Technology:</h4>
				<p>Kendall uses her Netflix primarily on her streaming device (Amazon Firestick) and her Macbook Air laptop. 				She does not use other devices to access Netflix although it is available through mobile devices if ever 				needed.
				</p>
			<h3>Use Case 1</h3>
			<p><strong>Goal:</strong> Kendall is looking for another movie to watch for her next horror movie night.</p>
			<ul>
				<li>Kendall will go home and open the Netflix website on her laptop. </li>
				<li>Kendall will type "horror movies" in the search box at the uppder right hand corner.</li>
				<li>Kendall will scroll down the list of movie options and</li>
				<li>Kendall will hover over the film that looks intersesting to her.</li>
				<li>Kendall will read the film description</li>
				<li>Kendall will click on "Details"</li>
				<li>Kendall will look at the member reviews and click on "See all reviews" and a window will pop up with
					all reviews included.</li>
				<li>Kendall will read through all the reviews and contritube to the reviews by clicking the "helpful",
					"Not Helpful" and "Inappropriate" buttons.</li>
				<li>Kendall will decide if she wants	to watch the film.</li>
			</ul>
			<h3>Use Case 2</h3>
			<p><strong>Goal:</strong> Kendall watched a film on Netflix and is now looking to leave a review on teh
				film.</p>
			<li>Kendall will go home and open the Netflix website on her laptop. </li>
			<li>Kendall will type "The Hunt" in the search box at the uppder right hand corner.</li>
			<li>Kendall will then click on the movie she is searching.</li>
			<li>Kendall will click on "Details"</li>
			<li>Kendall will look at the member reviews and click on "See all reviews" and a window will pop up with
				all reviews included.</li>
			<li>Kendall will click the "Write a Review" button</li>
			<li>Kendall will rate the movie with stars and write a reivew</li>
			<li>Kendall will click the "Submit" button and publish her review for other Netflix users to see.</li>

			<h2>Conceptual Model</h2>
			<h3>Relationships</h3>
			<h4>One to One:</h4>
			<p>Each user can review one movie, show or episode once.</p>
			<p>Each user can rate each review once.</p>
			<p>Each User can rate a review once.</p>

			<h4>One to Many:</h4>
			<p>Each user can review multiple movies and shows.</p>
			<p>Each movie, show and episode can be reviewed by an unlimited number of users.</p>

			<h4>Many to Many:</h4>
			<p>Many media contents can have many reviews.</p>



			<p>The movie review table will have a <strong>One to Many Relationship</strong> with the... </p>
			<h2>Interaction Flow</h2>
		</main>
	</body>
	<footer>

	</footer>
</html>