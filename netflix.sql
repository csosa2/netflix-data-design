DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS media;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS helpful;

CREATE TABLE user (
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userEmail VARCHAR(128) NOT NULL,
	userName VARCHAR(32) NOT NULL,
	userSalt CHAR(64) NOT NULL,
	userHash CHAR(128) NOT NULL,
	UNIQUE (userEmail),
	PRIMARY KEY (userId)

);

CREATE TABLE media (
	mediaId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	mediaFilePath VARCHAR(100) NOT NULL , /*How do I populate file paths int his column?*/
	mediaTitle VARCHAR(200) NOT NULL,
	PRIMARY KEY (mediaId)
);

CREATE TABLE review (
	reviewContent VARCHAR(1999) NOT NULL, /*charchar min is 80. How do I insert this?*/
	FOREIGN KEY (reviewUserId) REFERENCES user(userId),
	FOREIGN KEY (reviewMediaId) REFERENCES media(mediaId),
	PRIMARY KEY (reviewId)
);

CREATE TABLE helpful (
	helpfulVote BOOLEAN,
	helpfulInappropriate BOOLEAN,
	FOREIGN KEY (helpfulUserId) REFERENCES user(userId),
	FOREIGN KEY (helpfulReviewId) REFERENCES review(reviewId),
	PRIMARY KEY (userId, reviewId)
);
