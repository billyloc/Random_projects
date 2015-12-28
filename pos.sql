drop database pos;
create database pos;
use pos;

create table items (

	itemid INT auto_increment primary key not null,
	Description varchar(255) not null,
	Cost numeric(5,2) not null
);

-- add data to customers

insert into items (description,cost) values ("tube",5);
insert into items (description,cost) values ("Long tube",7);
insert into items (description,cost) values ("dog",2);
insert into items (description,cost) values ("hairy spider",35);



create table Customers (
	customerID INT auto_increment primary key not null,
	Email varchar(255) not null,
	ShippingAddress varchar(255) not null,
	BillingAddress varchar(255) not null,
	FirstName varchar(255) not null,
	LastName varchar(255) not null

);

-- add data to customers

insert into Customers (Email,ShippingAddress,BillingAddress,FirstName,LastName) values ("coolguy@gmail.com","123 E Main Calexico","123 E Main Calexico","Jimmy","Cozza");
insert into Customers (Email,ShippingAddress,BillingAddress,FirstName,LastName) values ("hotmail@hotmail.com","345 E Main Mexicali","345 E Main Mexicali","Sean","Smith");
insert into Customers (Email,ShippingAddress,BillingAddress,FirstName,LastName) values ("billy@49erfan.com","69 W PIMP Daddy","69 W PIMP Daddy","Billy","Bird");



create table Orders (
	OrderID INT auto_increment primary key not null,
	orderdate DATE not null,
	customerID INT not null
);

insert into Orders (orderdate,customerid) values ("2015-01-01",1);
insert into Orders (orderdate,customerid) values ("2015-01-01",2);
insert into Orders (orderdate,customerid) values ("2015-01-02",1);
insert into Orders (orderdate,customerid) values ("2015-01-02",2);



create table orderitems (
	OrderID INT not null,
	itemid INT not null,
	itemqty INT not null

);

insert into orderitems (orderID,itemid,itemqty) values (1,10,12);
insert into orderitems (orderID,itemid,itemqty) values (1,11,6);
insert into orderitems (orderID,itemid,itemqty) values (2,18,5);
insert into orderitems (orderID,itemid,itemqty) values (3,11,1);
insert into orderitems (orderID,itemid,itemqty) values (3,66,1);
insert into orderitems (orderID,itemid,itemqty) values (4,66,1);



