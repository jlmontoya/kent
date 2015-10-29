#####################################################
#  fashionne db creation script.sql
# author: Jose L. Montoya
# code: u140318
##################################################
DROP DATABASE IF EXISTS fashionne;
CREATE DATABASE fashionne;
GRANT ALL PRIVILEGES ON fashionne.* TO 'fashionne'@'localhost' IDENTIFIED BY 'usr_fashionne';
FLUSH PRIVILEGES;
USE fashionne;
CREATE TABLE tbl_customer (
     id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     first_name VARCHAR( 25 ) NOT NULL ,
     last_name VARCHAR( 25 ) NOT NULL ,
     email VARCHAR( 25 ) NOT NULL UNIQUE,
     date_created DATE NOT NULL
);
CREATE TABLE tbl_order (
     id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     customer_id INT  NOT NULL,
     date_placed DATE,
     total DECIMAl(10,2) NOT NULL,
     FOREIGN KEY (customer_id) REFERENCES tbl_customer(id)
);
CREATE TABLE tbl_order_item (
  id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  order_id INT  NOT NULL,
  product_id INT  NOT NULL,
  quantity DECIMAL(10,2) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (order_id) REFERENCES tbl_order(id),
  FOREIGN KEY (product_id) REFERENCES tbl_product(id)
);
CREATE TABLE tbl_product (
  id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  category_id INT  NOT NULL,
  name VARCHAR( 255 ) NOT NULL ,
  size VARCHAR( 30 ) NOT NULL ,
  color VARCHAR( 30 ) NOT NULL ,
  photo_path VARCHAR( 255 ) NOT NULL ,
  price DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (category_id) REFERENCES tbl_category(id)
);
CREATE TABLE tbl_category (
  id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  parent_id INT  NOT NULL,
  name VARCHAR( 255 ) NOT NULL ,
  FOREIGN KEY (parent_id) REFERENCES category(id)
);
