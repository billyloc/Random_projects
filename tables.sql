create database wednesday;
use

create table user (
	id int auto_increment primary key,
	username varchar(255),
	password varchar(255)
);

insert into user values (12, "bob", "mypassword");
insert into user values (13, "chris", "mypassword");
insert into user values (14, "bob", "mypassword");
insert into user (username, password) values ("gail", "mypassword");
insert into user values ("", "billy", sha1("mypassword"));
