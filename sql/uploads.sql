CREATE TABLE uploads (
 id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 title TEXT NOT NULL,
 info LONGTEXT NOT NULL,
 downloadLink LONGTEXT NOT NULL,
 gta5modsLink LONGTEXT NOT NULL,
 category TEXT NOT NULL,
 photoLink LONGTEXT NOT NULL,
 downloads INT(100) NOT NULL
)