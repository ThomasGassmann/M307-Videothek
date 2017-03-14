drop database video;
create database video;
use video;

create table Membership(
    Id integer primary key AUTO_INCREMENT,
    Name varchar(50),
    BorrowDays smallint
);

insert into Membership (Name, BorrowDays) values ('keine', 30);
insert into Membership (Name, BorrowDays) values ('Bronze', 40);
insert into Membership (Name, BorrowDays) values ('Silber', 50);
insert into Membership (Name, BorrowDays) values ('Gold', 70);

create table Customer(
    Id integer primary key AUTO_INCREMENT,
    FirstName varchar(100),
    LastName varchar(100),
    Mail varchar(100),
    Phone varchar(15) null,
    MembershipState integer,
    foreign key (MembershipState) references Membership(Id)
);

create table Video(
    Id integer primary key AUTO_INCREMENT,
    Title varchar(150),
    Length integer null,
    ReleaseYear date null,
    IsBorrowed bit default false
);

create table VideoBorrowing(
    CustomerId integer,
    foreign key (CustomerId) references Customer(Id),
    VideoId integer,
    foreign key (VideoId) references Video(Id),
    BorrowDate datetime,
    primary key (CustomerId, VideoId, BorrowDate)
);
