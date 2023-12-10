CREATE table createUser (
    user_id int not null auto_increment,
    fname varchar (255),
    lname varchar (255),
    phone VARCHAR(255),
    email VARCHAR(255),
    password varchar (255),
    confirm_password VARCHAR (255),
    primary key (user_id)
);


INSERT into createUser ( fname, lname, phone ,email, password, confirm_password )
VALUES ('Bob', 'Joe', '7051234567', 'bob@email.ca', 'xxxxxxxx', 'yyyyyyyy'),
    ('Janet', 'Doe','7051234567', 'janet@gmail.ca', 'xxxxxxx', 'yyyyyyy'),
    ('Jesus', 'Man', '7051234567','jesus@gmail.ca', 'xxxxxxx', 'yyyyyy'),
    ('Dua', 'Micheal','7051234567','dua@email.com', 'xxxxxx', 'yyyyyy'),
    ('Ben', 'Barnes','7051234567','ben@someemail.com', 'xxxxxxx', 'yyyyyy'),
    ('Randy', 'Spears', '7051234567','randy@gmail.com', 'xxxxxx', 'yyyyyy'),
    ('Tammy', 'Ringer', '7051234567','tammy@anemail.ca', 'xxxxxx', 'yyyyy');


CREATE table personInfo (
    ID int not null auto_increment,
    email varchar (255),
    password varchar (255),
    primary key (ID)
);

INSERT into personInfo (email, password)
VALUES ('bob@email.ca', 'xxxxxxxx'),
    ('janet@gmail.ca','xxxxxxx'),
    ('jesus@gmail.ca','xxxxxx'),
    ('dua@email.com','xxxxxxx'),
    ('ben@someemail.com','xxxxxxxx'),
    ('randy@gmail.com', 'xxxxxxx'),
    ('tammy@anemail.ca','xxxxxxx');
    
   
   