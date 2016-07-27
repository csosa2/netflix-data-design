<?php
namespace  Edu\Cnm\CSosa4\Netflix;
	/**
	 * Small cross section of a Netflix User
	 *
	 * This user class can be considered a small example of what attributes like Netflix store when creating a user who will be reviewing content.
	 *
	 * @author Chrisitna Sosa <csosa4@cnm.edu>
	 **/

	class User implements \JsonSerializable {
		/**
		 * id for this user; this is the primary key @var int $userID
		 */
		private $userId;

		/**
		 * email for this user; this is unique key @var string $userEmail
		 */
		private $userEmail;

		/**
		 * name for this user; this a username @var string $userName
		 */
		private $userName;

		/**
		 * hash for the user password; @var $userHash
		 */
		private $userSalt;

		/**
		 * salt for the user password; @var $userSalt
		 */
		private $userHash;


		/**
		 * constructor for this user
		 *
		 * @param int|null $newUserId id for this user
		 * @param string $newUserEmail that contains email
		 * @param string $newUserName that contains username
		 * @param string $newUserHash contains hash for password
		 * @param string $newUserSalt contains salt for password
		 * @throws \RangeException if data types are out of bounds
		 * @throws \TypeError if data types violate type hints
		 * @throws \Exception if some other exception occurs
		 */

	public function __construct(int $newUserId = null, string $newUserEmail, string $newUserName, string $newUserHash,
										 string $newUserSalt) {
	try{
	$this->setUserId($newUserId);
	$this->setUserEmail($newUserEmail);
	$this->setUserName($newUserName);
	$this->setUserHash($newUserSalt);
	$this->setUserSalt($newUserHash);

	}catch(\InvalidArgumentException $invalidArgument)
		{
			//rethrow the exception to the caller
			throw (new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range){
		//rethrow the exception to the caller
		throw(new \RangeException($range->getMessage(), 0, $range));
	} catch(\TypeError $typeError) {
		//rethrow the exception to the caller
		throw(new \TypeError($typeError->getMessage(), 0, $typeError));
	} catch(\Exception $exception) {
		//rethrow the exception to the caller
		throw(new \Exception($exception->getMessage(), 0, $exception));
	}
}

/**
 * Accessor medthod for user id
 * @return int|null value of user id
 **/

public function getUserId() {
		return ($this->userId);
	}


/**
 * mutator method for user id
 *
 * @param int|null $newUserId creates new value of user id
 * @throws \RangeException if $newUserId is not positive
 * @throws \TypeError if $newUserId is not an integer
 **/

public function setUserId(int $newUserId = null) {
		//base case: when user is null, this is a new user that hasn't been assigned a mySQL user id (yet)
		if($newUserId === null) {
			$this->userId = null;
			return;
		}

		//verify the user id is positive
		if($newUserId <= 0) {
			throw(new \RangeException("user id is not positive"));
		}

		//convert and store the user id
		$this->userId = $newUserId;
	}

/**
 * accessor method for user email
 *
 * @return string value of an email
 */

public function getUserEmail() {
		return ($this->userEmail);
}

/**
 * mutator method for user email
 * @param string @newUserEmail creates new value for user email
 * @throws \InvalidArgumentException if $newUserEmail is not valid or is insecure
 * @throws \RangeException if $newUserEmail is greater than 128 characters
 */

public function setUserEmail(string $newUserEmail) {
		//verify that the user email is valid and secure
		$newUserEmail = trim($newUserEmail);
		$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL);
		if(empty($newUserEmail) === true) {
			throw(new \InvalidArgumentException("Email is empty or is insecure"));
		}

//verify that the email will fit in the database
		if(strlen($newUserEmail) > 128) {
			throw(new \RangeException("Email is too long"));
		}

//store the email
		$this->userEmail = $newUserEmail;
	}

/**
 * accessor method for user name
 *
 * @return string value for user name
 */

public function getUserName() {
		return ($this->userName);
	}

/**
 * mutator method for user name
 * @param string $newUserName new value for user name
 * @throws \RangeException if user name is greater than 32 characters long
 * @throws \InvalidArgumentException if user name is not a string, or is insecure
 */

public function setUserName(string $newUserName) {
		//verify the username is valid and/or secure
		$newUserName = trim($newUserName, "\t\n\r\0\x0b");
		$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING);
		if(empty($newUserName) === true) {
			throw(new \InvalidArgumentException("Username is empty or is insecure"));
		}

		//verify that the username will fit in the database
		if(strlen($newUserName) > 32) {
			throw(new \RangeException("Username is too long"));
		}

		//store username
		$this->userName = $newUserName;
	}

/**
 * accessor method for user salt
 *
 * @return string value of user salt
 */

public function getUserSalt() {
		return ($this->userSalt);
	}

/**
 * mutator method for user salt
 *
 * @param string $newUserSalt new value for the user salt
 * @throws \RangeException if $newUserSalt is the wrong length
 */

public function setUserSalt(string $newUserSalt) {
		//verify that the salt contains valid characters
		$newUserSalt = ctype_xdigit($newUserSalt);
		//verify that the salt is of correct length
		if(strlen($newUserSalt) !== 64) {
			throw(new \RangeException("user salt is too long"));
	}
		//store the salt
		$this->userSalt = $newUserSalt;
	}

/**
 * accessor method for user hash
 *
 * @return string value of user hash
 */

public function getUserHash() {
		return ($this->userHash);
	}

/**
 * mutator method for user hash
 *
 * @param string $newUserHash new value for the user hash
 * @throws \RangeException if $newUserHash is the wrong length
 */

public function setUserHash(string $newUserHash) {
		//verify that the hash contains valid characters
		$newUserHash = ctype_xdigit($newUserHash);
		//verify that the hash will fit in database
		if(strlen($newUserHash) !== 128) {
			throw(new \RangeException("User hash is too long"));
		}
		//store new user hash
		$this->userHash = $newUserHash;
	}

		/**
		 * inserts user into mySQL
		 *
		 * @param \PDO $pdo PDO connection object
		 * @throws \PDOException when mySQL related errors occur
		 *
		 * @throws \TypeError if $pdo is not a PDO connection object
		 */

		public function insert(\PDO $pdo){
			//enforce the userId is null (i.e., don't insert a user that already exists)
			if($this->userId !== null) {
				throw(new \PDOException("not a new user"));
			}

			//create query template
		}
/**
 * formats the state variables for JSON serialization
 *
 * @return array resulting state variables to serialize
 */

public function jsonSerialize() {
	$fields = get_object_vars($this);
		Unset($fields["userSalt"]);
		Unset($fields["userHash"]);
		return($fields);
	}
}