CREATE TABLE product (
    id int NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    price float,
    selector VARCHAR(255),
    stock int,
    primary key (id)
);

INSERT INTO product (name, price, selector, stock)
VALUES ("Water", 0.65, "F01", 20),("Juice", 1.00, "F02", 20),("Soda", 1.50, "F03", 20);