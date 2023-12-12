DROP TABLE IF EXISTS Note;
CREATE TABLE IF NOT EXISTS Note(
	identUser INT(10) NOT NULL,
    idSpecialite INT(10) NOT NULL,
    note INT(1)  NOT NULL,
    PRIMARY KEY(identUser,idSpecialite),
    FOREIGN KEY(identUser) REFERENCES User(ident),
    FOREIGN KEY(idSpecialite) REFERENCES Specialite(id)
)Engine=InnoDB;

select * from note;

select * from user;