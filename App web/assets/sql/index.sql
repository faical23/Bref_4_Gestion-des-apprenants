Create Database getion_apprenents;    /*  create databe*/
drop Database if exists getion_apprenents; /* delete  database */

create table 2student (  /* create student tabel */

    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_student VARCHAR(255) NOT NULL,
    Html int default "0",
    Css int default "0",
    Javascript int default "0",
    Php int default "0"
)


CREATE TABLE formateur AS   /* create table from abther exist table */
SELECT id ,nom, prenom , email
FROM student;

ALTER TABLE formateur_youcode   /* change name of table */
RENAME TO formateur;  

DROP tabel formateur; /* delete a table */

ALTER TABLE formateur  /* add attrubite to  exists table */
ADD password_formateur VARCHAR(255) NOT NULL ;

ALTER TABLE student /* delete attrubite for exist table */
DROP id;


/* add a row from a table */
INSERT INTO student (nom,prenom,email,password_student,Html,Css,Javascript,Php) VALUES("faical","bahsis","faissalabr@gmail.com","faical99",16,15,14,13)


/* update a attrubite from a eow table */
UPDATE student
SET email = 'faical@gmail.com', /* update */
    password_student = 'faicalbahsisbahsis'  /* update */
WHERE nom = "faical"; /* condition should exists */


/* delete a row from a table */

DELETE FROM student
WHERE nom = "faical" AND prenom = "bahsis";