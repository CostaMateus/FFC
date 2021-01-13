CREATE DATABASE IF NOT EXISTS db_ffc;

USE db_ffc;

CREATE TABLE IF NOT EXISTS months (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(12) DEFAULT NULL,
  code varchar(3) DEFAULT NULL,
  number int(2) DEFAULT NULL,
  PRIMARY KEY (id)
);
INSERT INTO db_ffc.months (`name`, `code`, `number`) VALUES
('Janeiro',  'JAN', 1),
('Fev',      'FEV', 2),
('Março',    'MAR', 3),
('Abril',    'ABR', 4),
('Maio',     'MAI', 5),
('Junho',    'JUN', 6),
('Julho',    'JUL', 7),
('Agosto',   'AGO', 8),
('Setembro', 'SET', 9),
('Outubro',  'OUT', 10),
('Novembro', 'NOV', 11),
('Dezembro', 'DEZ', 12);
