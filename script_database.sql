CREATE DATABASE crudPhp;

use crudPhp;

CREATE TABLE customers (
id int(11) NOT NULL,	 
 name varchar(255) NOT NULL,	  
 cpf_cnpj varchar(14) NOT NULL,	  
 birthdate date NOT NULL,	  
 address varchar(255) NOT NULL,	  
 hood varchar(100) NOT NULL,	  
 zip_code int(8) NOT NULL,	  
 city varchar(100) NOT NULL,	  
 state varchar(100) NOT NULL,	  
 phone int(13) NOT NULL,	  
 mobile int(13) NOT NULL,	  
 ie int(11) NOT NULL,	  
 created datetime NOT NULL,	  
 modified datetime NOT NULL	);	


ALTER TABLE customers ADD PRIMARY KEY (id);	  
ALTER TABLE customers MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`,`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 	
VALUES ('0', 'Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', '2016-05-24 00:00:00', '2016-05-24 00:00:00');

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, 	`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 	
VALUES ('0', 'kelvin', '444.452.789-00', '1992-09-05', 'Rua alfonso sanches simon, 3323', 'Internet', '1234568', 'franca', 'sao paulo', '533345', '51123555', '12556', '2016-05-24 00:00:00', '2016-05-24 00:00:00');