
create database onlineShopPharma;
use onlineShopPharma;

create table userlogin(loginid INT NOT NULL AUTO_INCREMENT PRIMARY KEY , email varchar(255) , password varchar(255),priority  varchar(255));
ALTER TABLE userlogin AUTO_INCREMENT=100;

create table userInfo(loginid INT not null , firstname varchar(255), lastname varchar(255), userage int(2), phone int(10), email varchar(255),address1 varchar(255), address2 varchar(255), city varchar(255), area varchar(255), pincode varchar(255));

create table category(categoryid int NOT NULL AUTO_INCREMENT PRIMARY KEY, categoryname varchar(255), categoryImage varchar(255));
ALTER TABLE category AUTO_INCREMENT=100;

create table product(productid int NOT NULL AUTO_INCREMENT PRIMARY KEY, categoryid int, productname varchar(255), productImage varchar(255), productprice double,description text);
ALTER TABLE product AUTO_INCREMENT=100;

create table orders(orderid int NOT NULL AUTO_INCREMENT PRIMARY KEY, loginid INT not null , orderdesc TEXT);
ALTER TABLE orders AUTO_INCREMENT=100;

create table orderitems(orderid int , productid int );

create table contactDetails(contactid INT not null AUTO_INCREMENT PRIMARY KEY, firstname varchar(255), lastname varchar(255), email varchar(255), subject varchar(255), message TEXT);
ALTER TABLE contactDetails AUTO_INCREMENT=100;



insert into userlogin(loginid,email, password,priority) values(1001,"sk@gmail.com","shri","2");
insert into userlogin(loginid,email, password,priority) values(1002,"admin@gmail.com","admin","1");
insert into userInfo(loginid,firstname,lastname,userage,phone,email,address1,address2,city,area,pincode)
 values(1001,"Shiva","Mahashiv",23,0123456789,"sk@gmail.com","address1", "address2", "city", "area", "pincode");

insert into contactDetails(firstname,lastname,email,subject,message)
 values('1234','5678','qwerty@gmail.com','asdfghjkl','zxcvbnm');





insert into userlogin(email, password,priority) values("sk21@gmail.com","shri","2");
SELECT LAST_INSERT_ID();
insert into userInfo(loginid, firstname, lastname, userage, phone, email,address1, address2, city, area, pincode)
values((SELECT LAST_INSERT_ID()),"Shiva","Mahashiv",23,0123456789,"sk@gmail.com","address1", "address2", "city", "area", "pincode");


insert into category(categoryid, categoryname, categoryImage) values(100,"capsule types","resources/images/category/category1.jpg");
insert into category(categoryid, categoryname, categoryImage) values(101,"liquid type","resources/images/category/category2.jpg");
insert into category(categoryid, categoryname, categoryImage) values(102,"tablet types","resources/images/category/category3.jpg");



insert into product(productid,categoryid,productname,productImage,productprice) values(100,100,"Health Power Capsules.","resources/images/product/prodCapsule1.jpg",100);
insert into product(productid,categoryid,productname,productImage,productprice) values(101,100,"Energy Capsules.","resources/images/product/prodCapsule2.jpg",150);
insert into product(productid,categoryid,productname,productImage,productprice) values(102,100,"Tacrolimus Capsule.","resources/images/product/prodCapsule3.jpg",200);
insert into product(productid,categoryid,productname,productImage,productprice) values(103,100,"Fat Burning Capsules.","resources/images/product/prodCapsule4.jpg",250);
insert into product(productid,categoryid,productname,productImage,productprice) values(104,100,"Pre & Probiotic Capsule.","resources/images/product/prodCapsule5.jpg",300);
insert into product(productid,categoryid,productname,productImage,productprice) values(105,100,"Hair Care Capsules.","resources/images/product/prodCapsule6.jpg",350);
insert into product(productid,categoryid,productname,productImage,productprice) values(106,100,"Lenalidomide Capsules.","resources/images/product/prodCapsule7.jpg",400);
insert into product(productid,categoryid,productname,productImage,productprice) values(107,100,"Sirolimus Tablets.","resources/images/product/prodCapsule8.jpg",450);
insert into product(productid,categoryid,productname,productImage,productprice) values(108,101,"Clenbuterol Tablet.","resources/images/product/prodTablet1.jpg",100);
insert into product(productid,categoryid,productname,productImage,productprice) values(109,101,"Forte Tablets.","resources/images/product/prodTablet1.jpg",150);
insert into product(productid,categoryid,productname,productImage,productprice) values(110,101,"Fexofenadine Hcl Tablet.","resources/images/product/prodTablet1.jpg",200);
insert into product(productid,categoryid,productname,productImage,productprice) values(111,101,"Disulfiram Drug.","resources/images/product/prodTablet1.jpg",250);
insert into product(productid,categoryid,productname,productImage,productprice) values(112,101,"Finpecia Tablet.","resources/images/product/prodTablet1.jpg",300);
insert into product(productid,categoryid,productname,productImage,productprice) values(113,101,"Naltrexone.","resources/images/product/prodTablet1.jpg",350);
insert into product(productid,categoryid,productname,productImage,productprice) values(114,101,"Thyroxine Sodium Tablets.","resources/images/product/prodTablet1.jpg",450);
insert into product(productid,categoryid,productname,productImage,productprice) values(115,101,"Diclofenac Sodium Tablet.","resources/images/product/prodTablet1.jpg",500);
insert into product(productid,categoryid,productname,productImage,productprice) values(116,102,"Lambrou Agro Ltd. Paphos.","resources/images/product/prodCyprus1.png",100);
insert into product(productid,categoryid,productname,productImage,productprice) values(117,102,"Omega Alpharm Ltd. Nicosia.","resources/images/product/prodCyprus2.png",150);
insert into product(productid,categoryid,productname,productImage,productprice) values(118,102,"Limnatis Promitheftiki Eteria.","resources/images/product/prodCyprus3.png",200);
insert into product(productid,categoryid,productname,productImage,productprice) values(119,102,"Gjk Healthpharma Services Ltd.","resources/images/product/prodCyprus4.png",250);
insert into product(productid,categoryid,productname,productImage,productprice) values(120,102,"Ionion Pharmaceutical House.","resources/images/product/prodCyprus5.png",300);
insert into product(productid,categoryid,productname,productImage,productprice) values(121,102,"Boehringer Ingelheim.","resources/images/product/prodCyprus6.png",350);

UPDATE product SET description="The American Association of Colleges of Pharmacy recommends that consumers choose a pharmacy at which they can have a consulting relationship with the pharmacist. Anyone using drugs benefits when they have easier access to a pharmacist. Being timely includes both processing the request quickly and having drug stock available to fill the prescription. Some consumers need drugs delivered to their home, perhaps by mail, and may select a pharmacy which offers that service. Different pharmacies may charge different prices for the same drugs, so shopping for lower prices may identify a pharmacy offering better value. In addition to fulfilling prescriptions, a pharmacy might offer preventive healthcare services like vaccinations. Up-to-date technology at a pharmacy can assist a patient with prescription reminders and alerts about potential negative drug interactions, thereby reducing medical errors." WHERE description IS NULL;



select loginid,email,password,priority from userlogin;
select loginid,firstname,lastname,userage,phone,email,address1,address2,city,area,pincode from userInfo;
select categoryid,categoryname,categoryImage from category;
select productid,categoryid,productname,productImage,productprice,description from product;
select orderid,loginid,orderdesc from orders;
select orderid,productid from orderitems;
select contactid,firstname,lastname,email,subject,message from contactDetails;




select productid,categoryid,productname,productImage,productprice from product where categoryid=101;
select productid,categoryid,productname,productImage,productprice from product where productid=100;
select loginid,email,password,priority from userlogin where email="sk@gmail.com" AND password="shri";


insert into orders(orderid,loginid,orderdesc) values(1011,1001,'Deliver Date 20-12-2012');
insert into orderitems(orderid,productid) values(1011,121);
insert into orderitems(orderid,productid) values(1011,115);
insert into orderitems(orderid,productid) values(1011,105);
insert into orderitems(orderid,productid) values(1011,109);
select orderid,productid from orderitems where orderid=1011;








