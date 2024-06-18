-- Tabela com os dados do filme
CREATE DATABASE IF NOT EXISTS bd_filmes;

-- Tabela tb_filme
CREATE TABLE tb_filme (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano_lancamento INT NOT NULL,
    diretor VARCHAR(100) NOT NULL
);

-- Inserindo alguns filmes
INSERT INTO tb_filme (nome, genero, ano_lancamento, diretor) VALUES
('Pulp Fiction', 'Drama', 1994, 'Quentin Tarantino'),
('Inception', 'Sci-Fi', 2010, 'Christopher Nolan'),
('The Matrix', 'Sci-Fi', 1999, 'The Wachowskis'),
('Forrest Gump', 'Drama', 1994, 'Robert Zemeckis'),
('The Shawshank Redemption', 'Drama', 1994, 'Frank Darabont'),
('Interstellar', 'Sci-Fi', 2014, 'Christopher Nolan'),
('Titanic', 'Romance', 1997, 'James Cameron'),
('The Dark Knight', 'Action', 2008, 'Christopher Nolan'),
('Avatar', 'Sci-Fi', 2009, 'James Cameron'),
('The Godfather', 'Crime', 1972, 'Francis Ford Coppola'),
('Schindler''s List', 'Biography', 1993, 'Steven Spielberg'),
('Gladiator', 'Action', 2000, 'Ridley Scott'),
('The Silence of the Lambs', 'Crime', 1991, 'Jonathan Demme'),
('The Lord of the Rings: The Fellowship of the Ring', 'Fantasy', 2001, 'Peter Jackson'),
('Inglourious Basterds', 'Adventure', 2009, 'Quentin Tarantino'),
('Fight Club', 'Drama', 1999, 'David Fincher'),
('The Departed', 'Crime', 2006, 'Martin Scorsese'),
('The Dark Knight Rises', 'Action', 2012, 'Christopher Nolan'),
('Goodfellas', 'Biography', 1990, 'Martin Scorsese'),
('The Green Mile', 'Crime', 1999, 'Frank Darabont'),
('The Revenant', 'Adventure', 2015, 'Alejandro González Iñárritu'),
('Forrest Gump', 'Drama', 1994, 'Robert Zemeckis'),
('The Prestige', 'Drama', 2006, 'Christopher Nolan'),
('The Usual Suspects', 'Crime', 1995, 'Bryan Singer'),
('Léon: The Professional', 'Crime', 1994, 'Luc Besson'),
('The Sixth Sense', 'Drama', 1999, 'M. Night Shyamalan'),
('American History X', 'Drama', 1998, 'Tony Kaye'),
('Saving Private Ryan', 'Drama', 1998, 'Steven Spielberg'),
('City of God', 'Crime', 2002, 'Fernando Meirelles'),
('The Intouchables', 'Biography', 2011, 'Olivier Nakache');

-- Tabela tb_artista
CREATE TABLE tb_artista (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    ano_nascimento INT NOT NULL
);

-- Inserindo alguns artistas
INSERT INTO tb_artista (nome, ano_nascimento) VALUES
('John Travolta', 1954),
('Uma Thurman', 1970),
('Leonardo DiCaprio', 1974),
('Ellen Page', 1987),
('Keanu Reeves', 1964),
('Laurence Fishburne', 1961),
('Anne Hathaway', 1982),
('Tom Hanks', 1956),
('Morgan Freeman', 1937),
('Al Pacino', 1940),
('Quentin Tarantino', 1963),
('Christopher Nolan', 1970),
('James Cameron', 1954),
('Robert Zemeckis', 1952),
('Steven Spielberg', 1946),
('Martin Scorsese', 1942),
('Frank Darabont', 1959),
('Peter Jackson', 1961),
('David Fincher', 1962),
('Jonathan Demme', 1944),
('Ridley Scott', 1937),
('Alejandro González Iñárritu', 1963),
('Luc Besson', 1959),
('M. Night Shyamalan', 1970),
('Tony Kaye', 1952),
('Bryan Singer', 1965),
('Fernando Meirelles', 1955),
('Olivier Nakache', 1973);

-- Tabela tb_filme_artista (relacionamento muitos para muitos)
CREATE TABLE tb_filme_artista (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_filme INT,
    id_artista INT,
    FOREIGN KEY (id_filme) REFERENCES tb_filme(id),
    FOREIGN KEY (id_artista) REFERENCES tb_artista(id)
);

-- Inserindo relacionamentos entre filmes e artistas
INSERT INTO tb_filme_artista (id_filme, id_artista) VALUES
(1, 11), -- Quentin Tarantino em Pulp Fiction
(1, 12), -- Christopher Nolan em Pulp Fiction
(2, 13), -- James Cameron em Inception
(2, 3),  -- Leonardo DiCaprio em Inception
(3, 14), -- The Wachowskis em The Matrix
(3, 5),  -- Keanu Reeves em The Matrix
(4, 15), -- Robert Zemeckis em Forrest Gump
(4, 7),  -- Anne Hathaway em Forrest Gump
(5, 16), -- Frank Darabont em The Shawshank Redemption
(5, 9),  -- Morgan Freeman em The Shawshank Redemption
(6, 12), -- Christopher Nolan em Interstellar
(6, 17), -- Matthew McConaughey em Interstellar
(7, 13), -- James Cameron em Titanic
(7, 18), -- Kate Winslet em Titanic
(8, 12), -- Christopher Nolan em The Dark Knight
(8, 19), -- Christian Bale em The Dark Knight
(9, 13), -- James Cameron em Avatar
(9, 20), -- Sam Worthington em Avatar
(10, 14),-- The Wachowskis em The Matrix
(10, 21),-- Hugo Weaving em The Matrix
(11, 11),-- Quentin Tarantino em The Godfather
(11, 22);-- Marlon Brando em The Godfather

