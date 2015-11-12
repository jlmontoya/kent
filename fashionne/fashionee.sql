#####################################################
#  fashionne db creation script.sql
# author: Jose L. Montoya
# code: u140318
##################################################
DROP DATABASE IF EXISTS fashionne;
CREATE DATABASE fashionne;
GRANT ALL PRIVILEGES ON fashionne.* TO 'usr_fashionne'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
USE fashionne;

CREATE TABLE tbl_staff (
     id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     first_name VARCHAR( 25 ) NOT NULL ,
     last_name VARCHAR( 25 ) NOT NULL ,
     email VARCHAR( 25 ) NOT NULL UNIQUE,
     password VARCHAR(100) NOT NULL,
     date_created DATE NOT NULL
);

INSERT INTO tbl_staff (email,first_name, last_name , password , date_created) values ('admin@fashionne.com','John','Doe',md5('password'), now() );

CREATE TABLE tbl_customer (
     id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     first_name VARCHAR( 100 ) NOT NULL ,
     last_name VARCHAR( 100 ) NOT NULL ,
     email VARCHAR( 100 ) NOT NULL UNIQUE,
     gender VARCHAR(4) NOT NULL,
     country VARCHAR (100) NOT NULL,
     address VARCHAR (100) NOT NULL,
     phone_number VARCHAR (100) NOT NULL,
     date_of_birth DATE NOT NULL,
     password VARCHAR (100) NOT NULL,
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

INSERT INTO tbl_category (parent_id, name) values (0, 'Corporate');
INSERT INTO tbl_category (parent_id, name) values (0, 'Sports');
INSERT INTO tbl_category (parent_id, name) values (0, 'Work');

INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 1', 'Small', 'Blue', 'uploads/corporate1.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 2', 'Small', 'Blue', 'uploads/corporate2.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 3', 'Small', 'Blue', 'uploads/corporate3.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 4', 'Small', 'Blue', 'uploads/corporate4.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 5', 'Small', 'Blue', 'uploads/corporate5.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (1, 'Corporate 6', 'Small', 'Blue', 'uploads/corporate6.jpg', 10.99 );

INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 1', 'Small', 'Blue', 'uploads/work1.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 2', 'Small', 'Blue', 'uploads/work2.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 3', 'Small', 'Blue', 'uploads/work3.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 4', 'Small', 'Blue', 'uploads/work4.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 5', 'Small', 'Blue', 'uploads/work5.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (2, 'Work 6', 'Small', 'Blue', 'uploads/work6.jpg', 10.99 );

INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 1', 'Small', 'Blue', 'uploads/sports1.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 2', 'Small', 'Blue', 'uploads/sports2.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 3', 'Small', 'Blue', 'uploads/sports3.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 4', 'Small', 'Blue', 'uploads/sports4.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 5', 'Small', 'Blue', 'uploads/sports5.jpg', 10.99 );
INSERT INTO tbl_product (category_id, name, size, color, photo_path, price ) values (3, 'Sports 6', 'Small', 'Blue', 'uploads/sports6.jpg', 10.99 );
