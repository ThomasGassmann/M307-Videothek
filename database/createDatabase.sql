drop database video;
create database video;
use video;

create table membership(
    Id integer primary key AUTO_INCREMENT,
    Name varchar(50),
    BorrowDays smallint
);

insert into membership (Name, BorrowDays) values ('keine', 30);
insert into membership (Name, BorrowDays) values ('Bronze', 40);
insert into membership (Name, BorrowDays) values ('Silber', 50);
insert into membership (Name, BorrowDays) values ('Gold', 70);

create table customer(
    Id integer primary key AUTO_INCREMENT,
    FirstName varchar(100),
    LastName varchar(100),
    Mail varchar(100),
    Phone varchar(15) null,
    MembershipState integer,
    foreign key (MembershipState) references Membership(Id)
);

create table video(
    Id integer primary key AUTO_INCREMENT,
    Title varchar(150),
    Length integer null,
    ReleaseYear date null,
    IsBorrowed integer default false
);

create table videoborrowing(
    CustomerId integer,
    foreign key (CustomerId) references Customer(Id),
    VideoId integer,
    foreign key (VideoId) references Video(Id),
    BorrowDate datetime,
    primary key (CustomerId, VideoId, BorrowDate)
);

INSERT INTO customer (FirstName, LastName, Mail, MembershipState) VALUES 
    ('Thomas', 'Gassmann', 'thomas.gassmann@hotmail.com', 1),
    ('Simon', 'Gassmann', 'simon.gassmann@hotmail.com', 2),
    ('Simon', 'Baumeler', 'simon.baumeler@hotmail.com', 3),
    ('First', 'Last', 'first.last@hotmail.com', 4);

INSERT INTO video (Title) VALUES
    ('Die Reise zum Mond'),
    ('Der große Eisenbahnraub'),
    ('Geburt einer Nation'),
    ('Die Vampire'),
    ('Intoleranz'),
    ('Gebrochene Blüten'),
    ('Das Cabinet des Dr. Caligari'),
    ('Weit im Osten'),
    ('Within Our Gates'),
    ('Der Fuhrmann des Todes'),
    ('Zwei Waisen im Sturm'),
    ('Dr. Mabuse, der Spieler - Ein Bild der Zeit'),
    ('Nosferatu, eine Symphonie des Grauens'),
    ('Nanuk, der Eskimo'),
    ('Das Lächeln der Madame Beudet'),
    ('Die Hexe'),
    ('Närrische Weiber'),
    ('Die verflixte Gastfreundschaft'),
    ('Das Rad'),
    ('Der Dieb von Bagdad'),
    ('Streik'),
    ('Gier'),
    ('Sherlock Jr.'),
    ('The Great White Silence'),
    ('Der letzte Mann'),
    ('Buster Keaton, der Mann mit den 1000 Bräuten'),
    ('Der Adler'),
    ('Das Phantom der Oper'),
    ('Panzerkreuzer Potemkin'),
    ('Goldrausch'),
    ('Die große Parade'),
    ('Die Abenteuer des Prinzen Achmed'),
    ('Metropolis'),
    ('Sonnenaufgang - Lied von zwei Menschen'),
    ('Der General'),
    ('Der Unbekannte'),
    ('Oktober'),
    ('Der Jazzsänger'),
    ('Napoleon'),
    ('Der kleine Bruder'),
    ('Ein Mensch der Masse'),
    ('Die Docks von New York'),
    ('Ein andalusischer Hund'),
    ('Die Passion der Jungfrau von Orléans'),
    ('Steamboat Bill, Jr. - Wasser hat keine Balken'),
    ('Sturm über Asien'),
    ('Erpressung'),
    ('A Throw of Dice - Schicksalswürfel'),
    ('Der Mann mit der Kamera'),
    ('Die Büchse der Pandora'),
    ('Der blaue Engel'),
    ('Das goldene Zeitalter'),
    ('Erde'),
    ('Der kleine Cäsar'),
    ('Im Westen nichts Neues'),
    ('Es lebe die Freiheit'),
    ('Die Million'),
    ('Tabu'),
    ('Dracula'),
    ('Frankenstein'),
    ('Lichter der Großstadt'),
    ('Limit'),
    ('Der öffentliche Feind'),
    ('M - Eine Stadt sucht einen Mörder'),
    ('Die Hündin'),
    ('Vampyr - Der Traum des Allan Grey'),
    ('Schönste, liebe mich'),
    ('Boudu - aus den Wassern gerettet'),
    ('Ich bin ein entflohener Kettensträfling'),
    ('Ärger im Paradies'),
    ('Narbengesicht'),
    ('Shanghai Express'),
    ('Freaks - Mißgestaltete'),
    ('Me and My Gal'),
    ('Betragen ungenügend'),
    ('Die 42. Straße'),
    ('Parade im Rampenlicht'),
    ('Goldgräber von 1933'),
    ('Sie tat ihm unrecht'),
    ('Die Marx Brothers im Krieg'),
    ('Königin Christine'),
    ('Erde ohne Brot'),
    ('King Kong und die weiße Frau'),
    ('Das Verhängnis des General Yen'),
    ('Die Wüstensöhne'),
    ( 'Das ist geschenkt'),
    ('Triumph des Willens'),
    ( 'Atalante'),
    ( 'Die schwarze Katze'),
    ('Judge Priest'),
    ('Es geschah in einer Nacht'),
    ('Die Göttliche'),
    ('Der dünne Mann'),
    ('Peter Ibbetson'),
    ('Unter Piratenflagge'),
    ('Meuterei auf der Bounty'),
    ('Die Marx Brothers in der Oper'),
    ('Die 39 Stufen'),
    ('Frankensteins Braut'),
    ('Ich tanz mich in dein Herz hinein');