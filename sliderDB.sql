
CREATE DATABASE sliderDB;

USE sliderDB;

CREATE TABLE tabs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE slides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tab_id INT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    FOREIGN KEY (tab_id) REFERENCES tabs(id)
);
INSERT INTO tabs (name) VALUES ('Tab 1'), ('Tab 2'), ('Tab 3');

INSERT INTO slides (tab_id, title, description, image) VALUES
(1, 'Slide 1-1', 'Description for Slide 1-1', 'img1.jpg'),
(1, 'Slide 1-2', 'Description for Slide 1-2', 'img2.jpg'),
(2, 'Slide 2-1', 'Description for Slide 2-1', 'img3.jpg'),
(2, 'Slide 2-2', 'Description for Slide 2-2', 'img4.jpg'),
(3, 'Slide 3-1', 'Description for Slide 3-1', 'img5.jpg'),
(3, 'Slide 3-2', 'Description for Slide 3-2', 'img6.jpg');
