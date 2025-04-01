CREATE TABLE manager_codes (
    manager_code INT NOT NULL,
    PRIMARY KEY (manager_code)
);

INSERT INTO manager_codes 
(manager_code) VALUES 
(5385);

CREATE TABLE managers (
    manager_id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255),
    username VARCHAR(255),
    manager_code INT NOT NULL,
    PRIMARY KEY (manager_id),
    FOREIGN KEY (manager_code) REFERENCES manager_codes(manager_code) 
        ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE products (
    product_id INT NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(255),
    description TEXT,
    stock INT,
    PRIMARY KEY (product_id)
);
