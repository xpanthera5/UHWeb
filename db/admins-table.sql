CREATE TABLE admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(300),
    prenom VARCHAR(300),
    email VARCHAR(300),
    telephone VARCHAR(20),
    password VARCHAR(100),
    type_admin ENUM('super', 'simple') DEFAULT 'simple',
    etat ENUM('0', '1', '2') DEFAULT '2',
    craeted DATETIME DEFAULT CURRENT_TIMESTAMP
)