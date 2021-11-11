CREATE DATABASE `library`;
use `library`;
CREATE TABLE `users`
(
    id       INT PRIMARY KEY AUTO_INCREMENT,
    name     VARCHAR(255),
    phone    VARCHAR(255),
    address  VARCHAR(255),
    email    VARCHAR(255),
    password VARCHAR(255),
    image    VARCHAR(255),
    role     VARCHAR(255)
);
CREATE TABLE `books`
(
    id                INT PRIMARY KEY AUTO_INCREMENT,
    name              VARCHAR(255),
    description       VARCHAR(255),
    author            VARCHAR(255),
    image             VARCHAR(255),
    quantity          VARCHAR(255),
    publishingCompany VARCHAR(255)
);
CREATE TABLE `borrowers`
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT, FOREIGN KEY(user_id) REFERENCES users(id),
    book_id INT, FOREIGN KEY(book_id) REFERENCES books(id),
    dateStart DATE,
    datFinish DATE,
    status VARCHAR(255)
);
INSERT INTO library.users (id, name, phone, address, email, password, image, role)
VALUES (1, 'admin', '0987654321', 'admin', 'admin@gmail.com', 'admin', null, 'admin'),
       (2, 'Xuân Anh', '0123456789', 'Bắc Ninh', 'xuananh@gmail.com', 'xuananh', null, 'Người dùng'),
       (3, 'Hoàng QQ', '0234156789', 'Hàn Quắc', 'qq@gmail.com', 'hoang', null, 'Người dùng');

ALTER TABLE `books` RENAME COLUMN category TO category_id;
ALTER TABLE `books` CHANGE `category_id` `category_id` INT NULL DEFAULT NULL;
ALTER TABLE `books` ADD FOREIGN KEY(category_id) REFERENCES categories(id);

INSERT INTO library.categories (id, name) VALUES (1, 'Sách thiếu nhi'),
                                                 (2, 'Sách Truyện, tiểu thuyết'),
                                                 (3, 'Sách Giáo trình'),
                                                 (4, 'Sách phát triển bản thân'),
                                                 (5, 'Sách Văn hóa xã hội – Lịch sử'),
                                                 (6, 'Sách Chính trị – pháp luật'),
                                                 (7, 'Sách tham khảo');

INSERT INTO library.books (id, name, category_id, description, author, image, quantity, publishingCompany)
VALUES (1, 'Hoàng tử bé', 1, 'Chứa đựng nhiều bài học và triết lý về nghệ thuật sống, tình yêu, bản chất của con người', 'Antoine de Saint-Exupety', null, '100', 'NXB Dân Trí'),
       (2, 'Dế mèn phiêu lưu ký', 1, 'Là tác phẩm văn xuôi đặc sắc và nổi tiếng nhất của nhà văn Tô Hoài viết về loài vật, dành cho lứa tuổi thiếu nhi.', 'Tô Hoài', null, '100', 'NXB Báo Tân Dân'),
       (3, 'Ông già và biển cả', 2, 'Tác phẩm kinh điển trong lịch sử Nobel Văn học', 'Ernest Hemingway', null, '100', 'NXB Văn học'),
       (4, 'Trên đường băng', 4, 'Nội dung các bài được chọn lọc có chủ đích, nhằm chuẩn bị về tinh thần, kiến thức…cho các bạn trẻ vào đời', 'Tony Buổi sáng', null, '100', 'NXB Trẻ')

INSERT INTO library.borrowers (id, user_id, book_id, dateStart, datFinish, status)
VALUES (1, 1, 1, '2021-11-08', '2021-11-12', 'Đang cho mượn'),
    (2, 2, 2, '2021-11-01', '2021-11-05', 'Đã trả'),
    (3, 3, 3, '2021-11-04', '2021-11-08', 'Quá hạn');

select *
from borrowers;

select users.name, books.name, borrowers.dateStart, borrowers.datFinish, borrowers.status
from `borrowers`
         inner join users on users.id = borrowers.user_id
         inner join books on books.id = borrowers.book_id;


