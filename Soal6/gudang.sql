CREATE DATABASE  IF NOT EXISTS `gudang`;
USE `gudang`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
);
ALTER TABLE `categories` ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Peralatan Mandi'),
(2, 'Mie Instan'),
(3, 'Olahan Daging');

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
);
ALTER TABLE `product` ADD PRIMARY KEY (`id`), ADD KEY `category_id` (`category_id`);
ALTER TABLE `product` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `product` ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

INSERT INTO `product` (`id`, `name`, `category_id`) VALUES
(1, 'Sampo', 1),
(2, 'Sikat Gigi', 1),
(3, 'Indomie goreng spesial', 2),
(4, 'Mie sedap soto', 2),
(5, 'Rock mie baso', 2),
(6, 'Nuget', 3);

SELECT categories.id, categories.name AS name_c, GROUP_CONCAT(product.name) AS product_c, COUNT(product.name) AS total FROM categories, product WHERE product.category_id = categories.id GROUP BY categories.id;
