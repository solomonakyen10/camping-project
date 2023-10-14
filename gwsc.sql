create database gwsc;

use gwsc;

CREATE TABLE IF NOT EXISTS users (                
    id int(8) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    user_name varchar(55) NOT NULL,
    email varchar(255) NOT NULL,
    postcode int(255) NOT NULL,
    phonenumber int(20) NOT NULL,
    user_password varchar(12) NOT NULL,
    display_name varchar(55) NOT NULL,
    city varchar(255) NOT NULL,
    country varchar(255) NULL 
  );


CREATE TABLE IF NOT EXISTS failed_login (                
    ip_address varchar(255) NOT NULL,
    date datetime NOT NULL
  );


CREATE TABLE IF NOT EXISTS visitor_counter (                
    counts int(10)  PRIMARY KEY NOT NULL AUTO_INCREMENT
  );