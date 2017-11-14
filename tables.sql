-- Here I'll go about mapping the tables from the er model

create database MessManagement;

use MessManagement;

/*
Diner holds the data
#TODO
* Should we make a Course table so people can select instead of having a
string? This could also be front-end.
* Add RollNo to ER model.
*/

create table Diner (
  Name varchar(32) NOT NULL,
  UserID varchar(32) NOT NULL,
  RollNo varchar(10) NOT NULL,
  EmailID varchar(32) NOT NULL,
  PhoneNo varchar(12) NOT NULL,
  DOB date,
  Year date NOT NULL,
  Course varchar(20) NOT NULL,
  primary key (UserID)
);

/*
Plans are decided by the institute and can be of the form Monthly, semester wise
, daily, per-meal.
*/

create table Plan (
  PlanID int NOT NULL AUTO_INCREMENT,
  PlanName varchar(30) NOT NULL,
  primary key (PlanID)
);


/*
Caterer,
This table will also be managed by the institute, and will hold all active
Caterers.
*/

create table Caterer (
  CatererID int NOT NULL AUTO_INCREMENT,
  CatererName varchar(32) NOT NULL,
  primary key (CatererID)
);

/*
Product : Is just a list of food items that can be served.
*/

create table Product (
  ProductID int NOT NULL AUTO_INCREMENT,
  ProductName varchar(32) NOT NULL,
  primary key (ProductID)
);


/* Timing: This was a bit of a hack, I decided it would be better to have a table
which tells me which meal on which day I'm talking about.
Maybe we shouldn't do this,  but wth.
Added StartTime and EndTime so that we can easily compare which TimingID to select
#TODO
Update ER model to reflect StartTime and EndTime.
*/

create table  Timing (
  TimingID int NOT NULL AUTO_INCREMENT,
  Day varchar(10) NOT NULL,
  StartTime time NOT NULL,
  EndTime time NOT NULL,
  primary key (TimingID)
);

/* Entities done. Relations below.
*/

/*
Menu:
I made the whole tuple as the primary key, so as to prevent duplicates,not really
sure if that's how you do it.
*/

create table Menu (
  TimingID int,
  CatererID int,
  ProductID int,
  foreign key  (TimingID) references Timing(TimingID)
    on delete cascade
    on update cascade,
  foreign key  (CatererID) references Caterer(CatererID)
    on delete cascade
    on update cascade,
  foreign key (ProductID) references Product(ProductID)
    on delete cascade
    on update cascade,
  primary key (ProductID, CatererID, TimingID)
);

create table Pricing (
	CatererID int,
    PlanID int,
    TimingID int,
    Price real,
	foreign key (CatererID) references Caterer(CatererID)
		on delete cascade
        on update cascade,
	foreign key (PlanID) references Plan(PlanID)
		on delete cascade
        on update cascade,
    foreign key (TimingID) references Timing(TimingID)
		on delete cascade
        on update cascade,
	primary key (CatererID, PlanID, TimingID)
);

create table Subscribes (
	PlanID int,
    UserID int,
    CatererID int,
    SubscribedOn date,
    foreign key (PlanID) references Plan(PlanID)
		on delete cascade
        on update cascade,
	foreign key (CatererID) references Caterer(CatererID)
		on delete cascade
        on update cascade,
	foreign key (UserID) references Diner(UserID)
		on delete cascade
        on update cascade,
	primary key (UserID, CatererID)
);

create table Opinions (
	Description text,
    Rating int,
    Time datetime,
    Date date,
    UserID int,
    ProductID int,
    CatererID int,
    foreign key (CatererID) references Caterer(CatererID)
		on delete cascade
        on update cascade,
	foreign key (UserID) references Diner(UserID)
		on delete cascade
        on update cascade,
	foreign key (ProductID) references Product(ProductID)
		on delete cascade
		on update cascade,
	primary key (ProductID, CatererID, UserID)
);

-- I haven't yet figured out how to add the table for transactions as it contains derived attributes also.
-- Also it contains a multivalued attribute.

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	
























