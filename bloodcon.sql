CREATE DATABASE bloodCon;

CREATE TABLE donor(
	donorID int NOT NULL AUTO_INCREMENT,
	userName varchar(30) NOT NULL,
    phoneNumber varchar(13) UNIQUE,
    region varchar(10) NOT NULL,
    bloodGroup varchar (3) NOT NULL,
    lastDonationDate date,
   	previousCondition varchar(20),
    donationCriteria varchar (20),
    PRIMARY KEY (donorID) 
    
);

CREATE TABLE patient(
	patientID int NOT NULL AUTO_INCREMENT,
	userName varchar(30) NOT NULL,
    phoneNumber varchar(13) UNIQUE,
    region varchar(10) NOT NULL,
    bloodGroup varchar (3) NOT NULL,
    necessity varchar(10) NOT NULL,
    PRIMARY KEY (patientID) 
);

CREATE TABLE hospital(
	name varchar(20),
    number varchar (13) UNIQUE,
    region varchar(10),
    PRIMARY KEY (name)
);

CREATE TABLE blood(
 	donorName varchar(30) NOT NULL,
    bloodGroup varchar(3) NOT NULL,
    donorID int,
    FOREIGN KEY (donorID) REFERENCES donor(donorID) 
);

CREATE TABLE plasma(
 	donorName varchar(30) NOT NULL,
    bloodGroup varchar(3) NOT NULL,
    donorID int,
    FOREIGN KEY (donorID) REFERENCES donor(donorID) 
);

CREATE TABLE platelet(
 	donorName varchar(30) NOT NULL,
    bloodGroup varchar(3) NOT NULL,
    donorID int,
    FOREIGN KEY (donorID) REFERENCES donor(donorID)
    
)
