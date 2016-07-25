<?php
/**
 * Accessor medthod for user id
 * @return int|null value of user id
 **/
public function getUserId() {
	return ($this->userId);
}
//verify the user id is positive
if($newUserId <= 0) {
	throw(new \RangeException("user id is not positive"));
}


/**
 * mutator method for review id
 *
 * @param int|null $newUserId creates new value of user id
 * @throws \RangeException if $newUserId is not positive
 * @throws \TypeError if $newUserId is not an integer
**/

public function setUserId (int $newUserId = null){
	//when this is null, this is a new user that hasn't been assigned a mySQL user id yet
	if ($newUserId === null){
		$this->UserId = null;
		return;
	}
}