use f33ee;
drop table if exists Sales;
create table Sales
(	id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    shot VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    price DECIMAl(4,2) NOT NULL,
    quantity INT(6) UNSIGNED);