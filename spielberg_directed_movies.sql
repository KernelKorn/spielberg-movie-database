-- create the database
DROP DATABASE IF EXISTS spmovies;
CREATE DATABASE spmovies;

-- select the database
USE spmovies;

-- create the tables
CREATE TABLE movies
(
  movie_id        	INT            	PRIMARY KEY		AUTO_INCREMENT,
  movie_name   	    VARCHAR(50)    	NOT NULL,
  release_date	    DATE           	NOT NULL,
  movie_length      	TIME           	NOT NULL,
  movie_trailer		VARCHAR(50)		

);

CREATE TABLE actors
(
  actor_id              INT            PRIMARY KEY   AUTO_INCREMENT,
  actor_name		    VARCHAR(50)    NOT NULL
);

CREATE TABLE movie_characters
(
  character_id       INT            PRIMARY KEY		AUTO_INCREMENT,
  character_name   	 VARCHAR(50)    NOT NULL,
  movie_id        	 INT            NOT NULL,
  actor_id           INT            NOT NULL,
  CONSTRAINT character_fk_movies
    FOREIGN KEY (movie_id)
    REFERENCES movies (movie_id),
  CONSTRAINT character_fk_actors
    FOREIGN KEY (actor_id)
    REFERENCES actors (actor_id)
);

INSERT INTO movies VALUES
(DEFAULT, 'Firelight', '1964-03-24', '02:20:00', '7JXncFDlUzg'),
(DEFAULT, "Amblin'", '1968-12-18', '00:26:00', 'tK2S8o4O-yU'),
(DEFAULT, 'Duel', '1971-11-13', '01:30:00', '5MtAMc4i8OA'),
(DEFAULT, 'Something Evil', '1972-01-21', '01:13:00', 'mc3xO4JFl20'),
(DEFAULT, 'Savage', '1973-03-31', '01:13:00', ''),
(DEFAULT, 'The Sugarland Express', '1974-04-05', '01:50:00', 'DRsMXxfw0SI'),
(DEFAULT, 'Jaws', '1975-06-01', '02:04:00', '0zkYRD51I34'),
(DEFAULT, 'Close Encounters of the Third Kind', '1977-11-16', '02:12:00', 'bDSFfphswpY'),
(DEFAULT, '1941', '1979-12-14', '01:58:00', 'JdUCu-A7tgg'),
(DEFAULT, 'Raiders of the Lost Ark', '1981-06-12', '01:55:00', '0ZOcoxjeUYo'),
(DEFAULT, 'E.T. the Extra-Terrestrial', '1982-06-11', '01:55:00', '_7-2PB4jj2o'),
(DEFAULT, 'Twilight Zone: The Movie(Segment #2)', '1983-06-24', '01:41:00', 's'),
(DEFAULT, 'Indiana Jones and the Temple of Doom', '1984-05-23', '01:58:00', 'HOwWfns4qqw'),
(DEFAULT, 'The Color Purple', '1985-12-18', '02:34:00', 'd83NnlL83mc'),
(DEFAULT, 'Empire of the Sun', '1987-12-25', '02:32:00', 'IKbg7RmW8rY'),
(DEFAULT, 'Indiana Jones and the Last Crusade', '1989-05-24', '02:07:00', 'A7TaY8HWYd8'),
(DEFAULT, 'Always', '1989-12-22', '02:02:00', 'yACuYaIeEQU'),
(DEFAULT, 'Hook', '1991-12-11', '02:24:00', 'LxnR9e7M8Vw'),
(DEFAULT, 'Jurassic Park', '1993-06-11', '02:07:00', 'Bim7RtKXv90'),
(DEFAULT, "Schindler's List", '1993-12-15', '03:15:00', 'dwfIf1WMhgc'),
(DEFAULT, 'The Lost World: Jurassic Park', '1997-05-23', '02:09:00', 'E6Xf65X0JB8'),
(DEFAULT, 'Amistad', '1997-12-10', '02:35:00', 'KP0hwVVUTac'),
(DEFAULT, 'Saving Private Ryan', '1998-07-24', '02:49:00', 'zwhP5b4tD6g'),
(DEFAULT, 'A.I. Artificial Intelligence', '2001-06-29', '02:26:00', 'sqS83f-NUww'),
(DEFAULT, 'Minority Report', '2002-06-21', '02:25:00', 'QH-6UImAP7c'),
(DEFAULT, 'Catch Me If You Can', '2002-12-25', '02:21:00', 'hFj3OXVL_wQ'),
(DEFAULT, 'The Terminal', '2004-06-18', '02:08:00', 'ciByvddyHBs'),
(DEFAULT, 'War of the Worlds', '2005-06-29', '01:56:00', 'MJYnHA2OzfA'),
(DEFAULT, 'Munich', '2005-12-23', '02:44:00', 'doX2E1vNtY8'),
(DEFAULT, 'Indiana Jones and the Kingdom of the Crystal Skull', '2008-05-22', '02:02:00', '2BgyhHBoz50'),
(DEFAULT, 'The Adventures of Tintin', '2011-12-21', '01:47:00', 'Jnl6WlEjQWQ'),
(DEFAULT, 'War Horse', '2011-12-25', '02:26:00', 'QhueHIXbTF4'),
(DEFAULT, 'Lincoln', '2012-11-16', '02:30:00', 'qiSAbAuLhqs');

INSERT INTO actors VALUES
(DEFAULT, 'Robert Robyn'),
(DEFAULT, 'Beth Weber'),
(DEFAULT, 'Lucky Lohr'),
(DEFAULT, 'Richard Levin'),
(DEFAULT, 'Pamela McMyler'),
(DEFAULT, 'Dennis Weaver'),
(DEFAULT, 'Jacqueline Scott'),
(DEFAULT, 'Eddie Firestone'),
(DEFAULT, 'Sandy Dennis'),
(DEFAULT, 'Darren McGavin'),
(DEFAULT, 'Ralph Bellamy'),
(DEFAULT, 'Martin Landau'),
(DEFAULT, 'Barbara Bain'),
(DEFAULT, 'Will Geer'),
(DEFAULT, 'Goldie Hawn'),
(DEFAULT, 'Ben Johnson'),
(DEFAULT, 'Michael Sacks'),
(DEFAULT, 'Roy Scheider'),
(DEFAULT, 'Robert Shaw'),
(DEFAULT, 'Richard Dreyfuss'),
(DEFAULT, 'François Truffaut'),
(DEFAULT, 'Teri Garr'),
(DEFAULT, 'Dan Aykroyd'),
(DEFAULT, 'Ned Beatty'),
(DEFAULT, 'John Belushi'),
(DEFAULT, 'Harrison Ford'),
(DEFAULT, 'Karen Allen'),
(DEFAULT, 'Paul Freeman'),
(DEFAULT, 'Ronald Lacey'),
(DEFAULT, 'John Rhys-Davies'),
(DEFAULT, 'Denholm Elliott'),
(DEFAULT, 'Henry Thomas'),
(DEFAULT, 'Drew Barrymore'),
(DEFAULT, 'Peter Coyote'),
(DEFAULT, 'Scatman Crothers'),
(DEFAULT, 'Kate Capshaw'),
(DEFAULT, 'Jonathan Ke Quan'),
(DEFAULT, 'Amrish Puri'),
(DEFAULT, 'Danny Glover'),
(DEFAULT, 'Whoopi Goldberg'),
(DEFAULT, 'Oprah Winfrey'),
(DEFAULT, 'Christian Bale'),
(DEFAULT, 'John Malkovich'),
(DEFAULT, 'Miranda Richardson'),
(DEFAULT, 'Sean Connery'),
(DEFAULT, 'Alison Doody'),
(DEFAULT, 'Julian Glover'),
(DEFAULT, 'Holly Hunter'),
(DEFAULT, 'Brad Johnson'),
(DEFAULT, 'John Goodman'),
(DEFAULT, 'Dustin Hoffman'),
(DEFAULT, 'Robin Williams'),
(DEFAULT, 'Julia Roberts'),
(DEFAULT, 'Sam Neill'),
(DEFAULT, 'Laura Dern'),
(DEFAULT, 'Jeff Goldblum'),
(DEFAULT, 'Richard Attenborough'),
(DEFAULT, 'Liam Neeson'),
(DEFAULT, 'Ben Kingsley'),
(DEFAULT, 'Ralph Fiennes'),
(DEFAULT, 'Julianne Moore'),
(DEFAULT, 'Pete Postlethwaite'),
(DEFAULT, 'Arliss Howard'),
(DEFAULT, 'Morgan Freeman'),
(DEFAULT, 'Nigel Hawthorne'),
(DEFAULT, 'Anthony Hopkins'),
(DEFAULT, 'Djimon Hounsou'),
(DEFAULT, 'Matthew McConaughey'),
(DEFAULT, 'Tom Hanks'),
(DEFAULT, 'Matt Damon'),
(DEFAULT, 'Tom Sizemore'),
(DEFAULT, 'Haley Joel Osment'),
(DEFAULT, 'Jude Law'),
(DEFAULT, "Frances O'Connor"),
(DEFAULT, 'Tom Cruise'),
(DEFAULT, 'Colin Farrell'),
(DEFAULT, 'Samantha Morton'),
(DEFAULT, 'Max von Sydow'),
(DEFAULT, 'Lois Smith'),
(DEFAULT, 'Leonardo DiCaprio'),
(DEFAULT, 'Christopher Walken'),
(DEFAULT, 'Catherine Zeta-Jones'),
(DEFAULT, 'Stanley Tucci'),
(DEFAULT, 'Chi McBride'),
(DEFAULT, 'Dakota Fanning'),
(DEFAULT, 'Tim Robbins'),
(DEFAULT, 'Justin Chatwin'),
(DEFAULT, 'Eric Bana'),
(DEFAULT, 'Daniel Craig'),
(DEFAULT, 'Ciarán Hinds'),
(DEFAULT, 'Mathieu Kassovitz'),
(DEFAULT, 'Hanns Zischler'),
(DEFAULT, 'Cate Blanchett'),
(DEFAULT, 'Shia LaBeouf'),
(DEFAULT, 'Ray Winstone'),
(DEFAULT, 'Jamie Bell'),
(DEFAULT, 'Andy Serkis'),
(DEFAULT, 'Jeremy Irvine'),
(DEFAULT, 'Peter Mullan'),
(DEFAULT, 'Emily Watson'),
(DEFAULT, 'Niels Arestrup'),
(DEFAULT, 'David Thewlis'),
(DEFAULT, 'Daniel Day-Lewis'),
(DEFAULT, 'Sally Field'),
(DEFAULT, 'David Strathairn');

INSERT INTO movie_characters VALUES
(DEFAULT, 'Tony Karcher', 1, 1),
(DEFAULT, 'Debbie Karcher', 1, 2),
(DEFAULT, 'Howard Richards', 1, 3),
(DEFAULT, 'character1', 2, 4),
(DEFAULT, 'character2', 2, 5),
(DEFAULT, 'David Mann', 3, 6),
(DEFAULT, 'Mrs. Mann', 3, 7),
(DEFAULT, 'Cafe Owner', 3, 8),
(DEFAULT, 'Marjorie Worden', 4, 9),
(DEFAULT, 'Paul Worden', 4, 10),
(DEFAULT, 'Harry Lincoln', 4, 11),
(DEFAULT, 'Paul Savage', 5, 12),
(DEFAULT, 'Gail Abbott', 5, 13),
(DEFAULT, 'Joel Ryker', 5, 14),
(DEFAULT, 'Lou Jean', 6, 15),
(DEFAULT, 'Captain Tanner', 6, 16),
(DEFAULT, 'Slide', 6, 17),
(DEFAULT, 'Brody', 7, 18),
(DEFAULT, 'Quint', 7, 19),
(DEFAULT, 'Hooper', 7, 20),
(DEFAULT, 'Roy Neary', 8, 20),
(DEFAULT, 'Claude Lacombe', 8, 21),
(DEFAULT, 'Ronnie Neary', 8, 22),
(DEFAULT, 'Sgt. Frank Tree', 9, 23),
(DEFAULT, 'Ward Douglas', 9, 24),
(DEFAULT, 'Capt. Wild Bill Kelso', 9, 25),
(DEFAULT, 'Indiana Jones', 10, 26),
(DEFAULT, 'Marion Ravenwood', 10, 27),
(DEFAULT, 'Dr. René Belloq', 10, 28),
(DEFAULT, 'Major Arnold Toht', 10, 29),
(DEFAULT, 'Sallah', 10, 30),
(DEFAULT, 'Dr. Marcus Brody', 10, 31),
(DEFAULT, 'Elliott', 11, 32),
(DEFAULT, 'Gertie', 11, 33),
(DEFAULT, 'Keys', 11, 34),
(DEFAULT, 'Mr. Bloom', 12, 35),
(DEFAULT, 'Indiana Jones', 13, 26),
(DEFAULT, 'Willie Scott', 13, 36),
(DEFAULT, 'Short Round', 13, 37),
(DEFAULT, 'Mola Ram', 13, 38),
(DEFAULT, 'Albert', 14, 39),
(DEFAULT, 'Celie Johnson', 14, 40),
(DEFAULT, 'Sofia', 14, 41),
(DEFAULT, "Jim 'Jamie' Graham", 15, 42),
(DEFAULT, 'Basie', 15, 43),
(DEFAULT, 'Mrs. Victor', 15, 44),
(DEFAULT, 'Indiana Jones', 16, 26),
(DEFAULT, 'Professor Henry Jones', 16, 45),
(DEFAULT, 'Dr. Marcus Brody', 16, 31),
(DEFAULT, 'Dr. Elsa Schneider', 16, 46),
(DEFAULT, 'Sallah', 16, 30),
(DEFAULT, 'Walter Donovan', 16, 47),
(DEFAULT, 'Pete Sandich', 17, 20),
(DEFAULT, 'Dorinda Durston', 17, 48),
(DEFAULT, 'Ted Baker', 17, 49),
(DEFAULT, 'Al Yackey', 17, 50),
(DEFAULT, 'Capt. Hook', 18, 51),
(DEFAULT, 'Peter Banning', 18, 52),
(DEFAULT, 'Tinkerbell', 18, 53),
(DEFAULT, 'Dr. Alan Grant', 19, 54),
(DEFAULT, 'Dr. Ellie Sattler', 19, 55),
(DEFAULT, 'Dr. Ian Malcolm', 19, 56),
(DEFAULT, 'John Hammond', 19, 57),
(DEFAULT, 'Oskar Schindler', 20, 58),
(DEFAULT, 'Itzhak Stern', 20, 59),
(DEFAULT, 'Amon Goeth', 20, 60),
(DEFAULT, 'Dr. Ian Malcolm', 21, 56),
(DEFAULT, 'Sarah Harding', 21, 61),
(DEFAULT, 'Roland Tembo', 21, 62),
(DEFAULT, 'Peter Ludlow', 21, 63),
(DEFAULT, 'John Hammond', 21, 57),
(DEFAULT, 'Theodore Joadson', 22, 64),
(DEFAULT, 'Martin Van Buren', 22, 65),
(DEFAULT, 'John Quincy Adams', 22, 66),
(DEFAULT, 'Cinque', 22, 67),
(DEFAULT, 'Roger Sherman Baldwin', 22, 68),
(DEFAULT, 'Holabird', 22, 62),
(DEFAULT, 'Captain Miller', 23, 69),
(DEFAULT, 'Private Ryan', 23, 70),
(DEFAULT, 'Sergeant Horvath', 23, 71),
(DEFAULT, 'David', 24, 72),
(DEFAULT, 'Gigolo Joe', 24, 73),
(DEFAULT, 'Monica Swinton', 24, 74),
(DEFAULT, 'Officer John Anderton', 25, 75),
(DEFAULT, 'Danny Witwer', 25, 76),
(DEFAULT, 'Agatha', 25, 77),
(DEFAULT, 'Director Lamar Burgess', 25, 78),
(DEFAULT, 'Dr. Iris Hineman', 25, 79),
(DEFAULT, 'Frank Abagnale Jr.', 26, 80),
(DEFAULT, 'Carl Hanratty', 26, 69),
(DEFAULT, 'Frank Abagnale', 26, 81),
(DEFAULT, 'Viktor Navorski', 27, 69),
(DEFAULT, 'Amelia Warren', 27, 82),
(DEFAULT, 'Frank Dixon', 27, 83),
(DEFAULT, 'Mulroy', 27, 84),
(DEFAULT, 'Ray Ferrier', 28, 75),
(DEFAULT, 'Rachel Ferrier', 28, 85),
(DEFAULT, 'Harlan Ogilvy', 28, 86),
(DEFAULT, 'Robbie Ferrier', 28, 87),
(DEFAULT, 'Avner', 29, 88),
(DEFAULT, 'Steve', 29, 89),
(DEFAULT, 'Carl', 29, 90),
(DEFAULT, 'Robert', 29, 91),
(DEFAULT, 'Hans', 29, 92),
(DEFAULT, 'Indiana Jones', 30, 26),
(DEFAULT, 'Irina Spalko', 30, 93),
(DEFAULT, 'Marion Ravenwood', 30, 27),
(DEFAULT, 'Mutt Williams', 30, 94),
(DEFAULT, "'Mac' George Michale", 30, 95),
(DEFAULT, 'Tintin', 30, 96),
(DEFAULT, 'Captain Haddock/Sir Francis Haddock', 31, 97),
(DEFAULT, 'Rackham/Sakharine', 31, 89),
(DEFAULT, 'Albert Narracott', 32, 98),
(DEFAULT, 'Ted Narracott', 32, 99),
(DEFAULT, 'Rosie Narracott', 32, 100),
(DEFAULT, 'Grandfather', 32, 101),
(DEFAULT, 'Lyons', 32, 102),
(DEFAULT, 'Abraham Lincoln', 33, 103),
(DEFAULT, 'Mary Todd Lincoln', 33, 104),
(DEFAULT, 'William Seward', 33, 105);