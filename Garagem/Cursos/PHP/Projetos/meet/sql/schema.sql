CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    photo VARCHAR(255)
);

CREATE TABLE hoobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE ratings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    hoob_id INT,
    rating INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (hoob_id) REFERENCES hoobs(id)
);

INSERT INTO hoobs (name) VALUES
('Ler livros'),
('Cozinhar'),
('Tocar instrumentos'),
('Fotografia'),
('Corrida'),
('Pintura'),
('Assistir filmes'),
('Jardinagem'),
('Esportes'),
('Viajar');