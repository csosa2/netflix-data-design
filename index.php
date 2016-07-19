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
			<h2>User Story</h2>
			<p>
				As a user, I want to watch films and television shows.
			</p>
			<h2>Persona</h2>
			<h4>Name: Kendall McCoy</h4>
			<h4>Age: 27</h4>
			<h4>Profession:Law student looking for a stress releasing outlet to enjoy on her weekends when she is not busy studying for classes.</h4>
			<p>
				As a lover of TV and movies and not so much of a fan of high satellite service costs, Kendall has gotten
				rid oher her satellite telivision and has signed up for Netflix as a way to still enjoy the movies and shows
				she loves. She would like to comment,review and do research on media content she has previously watched and will watch in the future. Kendall loves watching horror movies and is very knowledgable in the genre. She would like to find more great horror movies as well as contribute to the review section in Netflix to recommend and critique horror movies for other Netflix users.
			</P>
				<h4>Technology:</h4>
				<p>Kendall uses her Netflix primarily on her streaming device (Amazon Firestick) and her Macbook Air laptop. She does not use other devices to access Netflix although it is available through mobile devices if ever needed.
				</p>
			<h2>Interaction Flow</h2>
			<h3>Use Case 1</h3>
			<p><strong>Goal:</strong> Kendall is looking for another movie to watch for her next horror movie night.</p>
			<ul>
				<li>Kendall will type "www.netflix.com" in her internet browser on her laptop. </li>
				<li>Kendall will sign into Netflix with her user name and password</li>
				<li>Kendall will select her profile upon signing into Netflix</li>
				<li>Kendall will type "horror movies" in the search box at the uppder right hand corner.</li>
				<li>Kendall will scroll down the list of movie options and</li>
				<li>Kendall will hover over the film that looks intersesting to her.</li>
				<li>Kendall will read the film description</li>
				<li>Kendall will click on "Detils"</li>
				<li>Kendall will look at the member reviews and click on "See all reviews" and a window will pop up with
					all reviews included.</li>
				<li>Kendall will read through all the reviews and contritube to the reviews by clicking the "helpful",
					"Not Helpful" and "Inappropriate" buttons.</li>
				<li>Kendall will decide if she wants	to watch the film.</li>
			</ul>
			<h3>Use Case 2</h3>
			<p><strong>Goal:</strong> Kendall watched a film on Netflix and is now looking to leave a review on the
				film.</p>
			<ol>
			<li>Kendall will type "www.netflix.com" in her internet browser on her laptop. </li><li>Kendall will sign into Netflix with her user name and password</li>
			<li>Kendall will select her profile upon signing into Netflix</li>
			<li>Kendall will type "The Hunt" in the search box at the uppder right hand corner.</li>
			<li>Kendall will then click on the movie she is searching.</li>
			<li>Kendall will click on "Details"</li>
			<li>Kendall will look at the member reviews and click on "See all reviews" and a window will pop up with
				all reviews included.</li>
			<li>Kendall will click the "Write a Review" button</li>
			<li>Kendall will rate the movie with stars and write a reivew</li>
			<li>Kendall will click the "Submit" button and publish her review for other Netflix users to see.</li>
			</ol>
			<h2>Conceptual Model</h2>
			<h3>Entities:</h3>
			<ul>
				<li>account</li>
				<li>profile</li>
				<li>reviews</li>
				<li>helpfulReview (weak entity)</li>
				<li>moreLikeThis</li>
				<li>similarMediaContent</li>
				<li>myList</li>
				<li>topPicks</li>
			</ul>
			<h3>Attributes:</h3>
			<ul>
				<li>phone</li>
				<li>email</li>
				<li>mediaContent</li>
				<li>overview</li>
				<li>details</li>
				<li>reviewContent</li>
				<li>rating</li>
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
			<p>Many media contents can have many reviews.</p>
			<p><strong>Weak Entity:</strong> Many profiles can rate many different reviews.</p>
			<!--<h2>Entities and Attributes</h2>
			<h4>Account:</h4>
			<table>
				<tr><th>Account</th></tr>
				<tr><td>My Profile</td></tr>
				<tr><td>Membership and Billing</td></tr>
				<tr><td>Plan Details</td></tr>
				<tr><td>Settings</td></tr>
				<tr><td>Gifts and Offers</td></tr>
			</table>
			<h4>Media Content:</h4>
			<table>
				<tr><th>Overview</th></tr>
				<tr><td>Title</td></tr>
				<tr><td>Star Rating</td></tr>
				<tr><td>Release Year</td></tr>
				<tr><td>Maturity Rating</td></tr>
				<tr><td>Length</td></tr>
				<tr><td>Summary</td></tr>
				<tr><td>Starring</td></tr>
				<tr><td>Genre</td></tr>
				<tr><td>"This movie is"</td></tr>
				<tr><td>Additional Notes</td></tr>
				<tr><td>Add to list option</td></tr>
				<tr><th>More Like This</th></tr>
				<tr><td><em>Media Options</em></td></tr>
				<tr><th>Details</th></tr>
				<tr><td>Director</td></tr>
				<tr><td>Cast</td></tr>
				<tr><td>Genres</td></tr>
				<tr><td>"This movie is"</td></tr>
				<tr><td>Member Reviews</td></tr>
				<tr><td>Maturity Rating</td></tr>
				<tr><td>Audio/Subtitle Options</td></tr>
			</table>
			<h4>Reviews:</h4>
			<table>
				<tr><th>Review</th></tr>
				<tr><td>Star Rating</td></tr>
				<tr><td>I found this review:</td></tr>
				<tr><td>Helpful</td></tr>
				<tr><td>Not Helpful</td></tr>
				<tr><td>Inappropriate</td></tr>
				<tr><td>Write a Review</td></tr>
				<tr><td>Submit Review</td></tr>
			</table>-->
		</main>
	</body>
	<footer>

	</footer>
</html>