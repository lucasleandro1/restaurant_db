create table abs_rest (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_rest VARCHAR(45),
    type_rest VARCHAR(45),
    price_rest FLOAT,
    vaga_rest INT,
    addr_rest VARCHAR(45),
    time_rest VARCHAR(30),
    PRIMARY KEY(id)
);

INSERT INTO abs_rest (name_rest, type_rest, price_rest, vaga_rest,addr_rest, time_rest)
VALUES("The Legend of Sanduíches", "Hamburgueria", 300.00, 22, "Rua Francisco Bezerra, 77", "17:00 - 02:00");

INSERT INTO abs_rest (name_rest, type_rest, price_rest, vaga_rest,addr_rest, time_rest)
VALUES("Constelações", "Pastelaria", 150.00, 7, "Rua São Paulo, Centro 77", "17:00 - 02:00");

INSERT INTO abs_rest (name_rest, type_rest, price_rest, vaga_rest,addr_rest, time_rest)
VALUES("Churrascaria Donleoni", "Churrascaria", 300.00, 25, "Rua do logadouro, 242", "8:00 - 00:00");


SELECT * FROM abs_rest;

create table abs_food (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_food VARCHAR(45),
    desc_food VARCHAR(255),
    price_food FLOAT,
    catg_food VARCHAR(45),
    rate_food FLOAT,
	abs_rest_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(abs_rest_id) references abs_rest (id) 
);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Ocarina Burguer", "Pão da Casa, Molho de Tomate Le Pinguê, Hambúrguer com queijos Mussarela, Provolone, Catupiry e Gorgonzola", 14.50, "Prato Principal", 5.0, 1);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Majoras Burguer", "Pão da Casa, Maionese de Bacon, Hambúrguer, Queijo Muçarela, Cebola Roxa, Alface e Tomate", 20.00, "Prato Principal", 3.6, 1);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Twilight Burguer", "Pão Especial, Maionese da Casa, Hambúrguer prensado, Queijo Cheddar, Ovo frito e Bacon em tiras", 18.50, "Prato Principal", 4.4, 1);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Júpiter", "Pastel com mussarela, presunto, tomate, orégano, ovo, frango, catupiry, bacon e calabresa com cebola", 19.50, "Prato Principal", 4.8, 2);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Terra", "Carne moída com pedaços de ovo cozido", 8.00, "Prato Principal", 3.9, 2);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Marte", "Banana com pedaços de chocolate branco ou preto", 12.50, "Prato Principal", 4.2, 2);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Batata Frita com Maminha", "Batata Frita com porçoes de maminha e cebola", 40.99, "Petisco", 4.8, 3);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Filé de costela com Queijo", "Maminha, queijo, tempero da casa", 54.99, "Petisco", 4.5, 3);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Picanha a moda da casa", "Picanha(ao ponto do cliente) e tempero da casa", 100.00, "Petisco", 5.0, 3);

INSERT INTO abs_food(name_food, desc_food, price_food, catg_food, rate_food, abs_rest_id)
VALUES("Filé de costela com Queijo", "Maminha, queijo, tempero da casa", 54.99, "Petisco", 4.5 , 3);

CREATE TABLE abs_requests (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_request VARCHAR(255),
    valor_request FLOAT,
    
);

CREATE TABLE abs_receipt (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pay_receipt VARCHAR(255),
    client_receipt VARCHAR(255),
    cpf_receipt FLOAT,
    PRIMARY KEY(id)
);