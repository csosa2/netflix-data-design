DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS media;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS helpful;

CREATE TABLE user (
	userId,
	userName,
	userPassHash,
	userPassSalt,
);