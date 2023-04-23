create table utente (
    username varchar(40),
    email varchar(40), 
    paswd varchar(60) not null,
    primary key (email)
);