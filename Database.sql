create database codeChallenge;

use codeChallenge;

CREATE TABLE Cars (
  id int(11) NOT NULL auto_increment,
  make varchar(50) NOT NULL,
  model varchar(50) NOT NULL,
  year int(4) NOT NULL,
  plateNumber varchar(50) NOT NULL,
  color varchar(50) NOT NULL,
  state varchar(50) NOT NULL,
  mileage int(15) NOT NULL,
  autoTransmission boolean NOT NULL,
  drivers varchar(100) NULL,
  PRIMARY KEY  (id)
);

CREATE TABLE Drivers (
  id int(11) NOT NULL auto_increment,
  name varchar(50) NOT NULL,
  driveStick boolean NOT NULL,
  PRIMARY KEY (id)
);