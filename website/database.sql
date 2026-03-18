-- Database schema for Everace (MySQL)
CREATE DATABASE IF NOT EXISTS everace CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE everace;

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price INT NOT NULL,
  image VARCHAR(255),
  excerpt TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(50),
  message TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  data TEXT,
  total INT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Example product inserts
INSERT INTO products (name,price,image,excerpt) VALUES
('Organic Almonds',599,'/images/Page-images/almonds.jpg','Premium organic almonds, 500g.'),
('Natural Honey',399,'/images/Page-images/honey.jpg','Raw local honey, 250g.'),
('Dry Fruits Mix',749,'/images/Page-images/dryfruits.jpg','Assorted dry fruits, 1kg.');
