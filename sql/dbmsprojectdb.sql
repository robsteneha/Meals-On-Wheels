CREATE TABLE IF NOT EXISTS adminInfo(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(20),
    u_password VARCHAR(30)
); 
CREATE TABLE IF NOT EXISTS userinfo(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(20),
    u_password VARCHAR(30),
    u_email VARCHAR(20),
    u_phone INT(10),
    u_address VARCHAR(50),
    createdOn TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
); 
CREATE TABLE IF NOT EXISTS foodcategory(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(20),
    cat_image VARCHAR(30)
);
CREATE TABLE IF NOT EXISTS food(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category_id INT(5) REFERENCES foodcategory(id) ON DELETE CASCADE,
    title VARCHAR(20),
    price DECIMAL(7, 2),
    image VARCHAR(30),
    createdOn TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS cart(
    id INT(5) NOT NULL AUTO_INCREMENT,
    c_id INT(5) REFERENCES userinfo(id) ON DELETE CASCADE,
    totalAmount DECIMAL(7, 2),
    order_status CHAR(1),
    PRIMARY KEY(id,c_id)
);
create table if not EXISTS cartDesc(
    cart_id INT(5) REFERENCES cart(id) ON DELETE CASCADE,
    f_id int(5) references food(id) on delete CASCADE,
    f_title VARCHAR(20) REFERENCES food(title),
    f_price decimal(7,2) REFERENCES food(price),
    quantity int(5),
    PRIMARY KEY(cart_id,f_id)
);
CREATE TABLE if not EXISTS orderHistory(
    id int(5) NOT NULL AUTO_INCREMENT,
    c_id int(5) REFERENCES userinfo(id) ON DELETE CASCADE,
    f_id int(5) REFERENCES food(id),
    f_title varchar(20) REFERENCES food(title),    
    f_price DECIMAL(7, 2) REFERENCES food(price),
    PRIMARY KEY(id,c_id)
);
INSERT INTO `admininfo` (`id`, `u_name`, `u_password`) VALUES (NULL, 'neha', 'neha123');

INSERT INTO `userinfo` (`id`, `u_name`, `u_password`, `u_email`, `u_phone`, `u_address`, `createdOn`) VALUES (NULL, 'a', 'a', 'a@gmail.com', '1111122222', 'pune', current_timestamp()); 

INSERT INTO `food` (`id`, `category_id`, `title`, `price`, `image`, `createdOn`) VALUES (NULL, '1', 'Appetite broiled', '185.00', 'chinese/food1.jpg', current_timestamp());

INSERT INTO `food` (`id`, `category_id`, `title`, `price`, `image`, `createdOn`) VALUES 
(NULL, '1', 'Veggies', '140.00', 'chinese/food2.jpg', current_timestamp()),
(NULL, '1', 'Momos', '110.00', 'chinese/food3.jpg', current_timestamp()),
(NULL, '1', 'Sushi asla', '190.00', 'chinese/food4.jpg', current_timestamp()),
(NULL, '1', 'Vegetable wonton skin', '170.00', 'chinese/food5.jpg', current_timestamp());

INSERT INTO `cart` (`id`, `c_id`, `totalAmount`, `order_status`) VALUES (NULL, '1', NULL, 'P');

INSERT INTO `cartdesc` (`cart_id`, `f_id`, `f_title`, `f_price`, `quantity`) VALUES ('1', '1', 'Appetite broiled', '185', '1'), ('1', '3', 'Momos', '110', '1'), ('1', '5', 'Vegetable wonton skin', '170', '1');

ALTER TABLE `orderhistory` CHANGE `f_title` `f_title` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `food` CHANGE `title` `title` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `cartdesc` CHANGE `f_title` `f_title` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;

INSERT INTO `foodcategory` (`id`, `cat_name`, `cat_image`) VALUES (NULL, 'chinese', 'category/1.png'), (NULL, 'sea food', 'category/2.png');

--output the total price--
SELECT sum(f_price) from cartdesc cd,cart c where c.id=cd.cart_id
SELECT sum(f_price) from cartdesc GROUP BY cart_id;
SELECT sum(f_price) AS total_amount from cartdesc GROUP BY cart_id;
--insert into cart(totalAmount) VALUES (SELECT sum(f_price) FROM cart c, cartdescription cdesc--
--where c.id=cdesc.cart_id GROUP BY cart_id);--
--update cart set totalAmount = (sum(f_price) FROM cart c, cartdescription cdesc where c.id=cdesc.cart_id GROUP BY cart_id)--
INSERT INTO `foodcategory` (`id`, `cat_name`, `cat_image`) VALUES (NULL, 'non vegetarian', 'category/3.png'), (NULL, 'sandwich', 'category/4.png'), (NULL, 'vegetarian', 'category/5.png'), (NULL, 'italian', 'category/6.png'), (NULL, 'breakfast', 'category/7.png'), (NULL, 'snacks', 'category/8.png');
INSERT INTO `foodcategory` (`id`, `cat_name`, `cat_image`) VALUES (NULL, 'non vegetarian', 'category/3.png'), (NULL, 'sandwich', 'category/4.png'), (NULL, 'vegetarian', 'category/5.png'), (NULL, 'italian', 'category/6.png'), (NULL, 'breakfast', 'category/7.png'), (NULL, 'snacks', 'category/8.png');
ALTER TABLE `orderhistory` ADD `totalAmount` DECIMAL(7,2) NULL AFTER `quantity`;
ALTER TABLE `orderhistory` ADD `category_id` INT(5) NULL REFERENCES foodcategory(id) AFTER `c_id`
CREATE TRIGGER cal_totalAmount BEFORE INSERT ON orderhistory FOR EACH ROW BEGIN SET new.totalAmount=f_price*quantity; end
create table orderhistory(
    c_id int(5) REFERENCES userinfo(id) ON DELETE CASCADE,
    category_id int(5) REFERENCES foodcategory(id),
    f_id int(5) REFERENCES food(id),
    f_title varchar(20) REFERENCES food(title),    
    f_price DECIMAL(7, 2) REFERENCES food(price),
    quantity int(2),
    totalAmount DECIMAL(7, 2) Null,
    order_status char(1) DEFAULT 'p',
    PRIMARY KEY(c_id,category_id,f_id,order_status)
);

INSERT INTO `food` (`id`, `category_id`, `title`, `price`, `image`, `createdOn`) VALUES (NULL, '2', 'crab', '120.00', 'seafood/food1.jpg', current_timestamp()),
(NULL, '2', 'salmon', '90.00', 'seafood/food1.jpg', current_timestamp()),
(NULL, '2', 'appetizer', '170.00', 'seafood/food1.jpg', current_timestamp()),
(NULL, '2', 'prawn', '180.00', 'seafood/food1.jpg', current_timestamp()),
(NULL, '2', 'oyster', '120.00', 'seafood/food1.jpg', current_timestamp());

INSERT INTO `food` (`id`, `category_id`, `title`, `price`, `image`, `createdOn`) VALUES (NULL, '3', 'grill bbq', '150.00', 'nonveg/food1.jpg', current_timestamp()),
(NULL, '3', 'chicken nuggets fries', '200.00', 'nonveg/food2.jpg', current_timestamp()),
(NULL, '3', 'chicken biryani', '170.00', 'nonveg/food3.jpg', current_timestamp()),
(NULL, '3', 'chilli biryani', '110.00', 'nonveg/food4.jpg', current_timestamp()),
(NULL, '3', 'hyderabadi biryani', '220.00', 'nonveg/food5.jpg', current_timestamp()),
(NULL, '3', 'kolkata biryani', '180.00', 'nonveg/food4.jpg', current_timestamp()),
(NULL, '3', 'ambur biryani', '170.00', 'nonveg/food5.jpg', current_timestamp());


DELIMITER $$
CREATE PROCEDURE getCountAndTotal (IN CUST_ID INT, OUT COUNT INT(2),OUT TOTAL DECIMAL(7,2))
BEGIN
SELECT count(*) INTO COUNT,sum(totalAmount) INTO totalAmount
FROM orderhistory
where c_id = CUST_ID;
END $$
DELIMITER ;

-- this was executed
DELIMITER $$
CREATE or REPLACE PROCEDURE getCount (IN CUST_ID INT, OUT COUNT INT(2))
BEGIN
SELECT count(*) INTO COUNT
FROM orderhistory
where c_id = CUST_ID;
END $$
DELIMITER ;

-- TO CALL 
set @CUST_ID=1;
CALL getCount(@CUST_ID,@COUNT);
SELECT @COUNT;


BEGIN 
	select count(*) as count,sum(totalAmount) as total FROM orderhistory where c_id=user_id  and order_status='p';
END


-- final procedures
CREATE DEFINER=`root`@`localhost` PROCEDURE `getCountAndTotal`(IN `user_id` INT(5)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN select count(*) as count,sum(totalAmount) as total FROM orderhistory where c_id=user_id and order_status='p'; END
CREATE DEFINER=`root`@`localhost` PROCEDURE `confirmOrder`(IN `user_id` INT(5)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN UPDATE orderhistory set order_status='c' where c_id=user_id and order_status='p'; END