

/* DataBase File */


/* servername:Localhost , username="root",password ="",databasename="realestate" */



/* create database */


create database realestate;


/* Create table */

create table admin(Username varchar(255),Password varchar(255));

create table sellor_member(Name varchar(255),Gmail varchar(255),Username varchar(255),password varchar(255),place varchar(255));

create table buyer_member(Name varchar(255),Gmail varchar(255),Username varchar(255),password varchar(255),place varchar(255));

create table sellorpropertydetails(SellorName varchar(255),SellorMobile bigint,SellorPropertyLocation varchar(255),SellorPropertyRate varchar(255),SellorPropertySqft varchar(255),SellorTypeProperty varchar(255));

create table buyerdetails(BuyerName varchar(255),BuyerMobile bigint,BuyerLocation varchar(255),BuyerProExeRate varchar(255),BuyerProExeLoc varchar(255),BuyerProExeSqft varchar(255),BuyerExeTypePro varchar(255));


/* --------- */