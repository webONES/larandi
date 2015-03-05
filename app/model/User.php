<?php 

/**
* User abstraction
*/

class User extends Model {

    protected $table = 'users';
    protected $fillable =['firstName', 'lastName', 'email', 'password'];
}