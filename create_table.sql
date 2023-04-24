create table utente (
    username varchar(40),
    email varchar(40), 
    paswd varchar(255) not null,
    primary key (email)
);