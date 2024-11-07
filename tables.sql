DROP TABLE IF EXISTS node;

CREATE TABLE node
(
    id INT NOT NULL AUTO_INCREMENT,
    parent_id INT DEFAULT 0,
    name VARCHAR(50) NOT NULL,
    type ENUM('folder', 'file') NOT NULL,
    PRIMARY KEY (id) 
);
