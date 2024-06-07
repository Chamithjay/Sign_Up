CREATE DATABASE Sign_Up;

use sign_up;
CREATE TABLE sign_up(
	firstname VARCHAR(10),
    lastname VARCHAR(10),
    pwd VARCHAR(100),
    date_of_birth DATE,
    gender VARCHAR(10)
);
select * from sign_up;
