/* 
Задание: в БД myproject создать таблицу 
с полями для задачи CSV loader 
*/

/* Увидим список баз данных */
/* SHOW DATABASES; */

/* Выберем для работы БД myproject */
USE myproject; 
 
/* Создадим таблицу users */ 
CREATE TABLE users 
(
	name				VARCHAR(20),
	last_name			VARCHAR(20),
	birthday			VARCHAR(50),
	birth_location		VARCHAR(20),
	current_location	VARCHAR(20)   
)
ENGINE InnoDB;

/* Увидим описание таблицы users */
/* DESCRIBE users; */

/* Добавим в таблицу первичный ключ */
ALTER TABLE users ADD id_user INT UNSIGNED NOT NULL AUTO_INCREMENT KEY;

/* Увидим описание таблицы users */ 
/* DESCRIBE users; */

/* Заполним таблицу users данными */
INSERT INTO users (name, last_name, birthday, birth_location, current_location)
VALUES 
	('Ivan', 'Ivanov', '11 Dec 1989', 'Moscow', 'Novosibirsk'),
	('Name2', 'Surname2', '10 Jan 1990', 'Moscow', 'Nsk'),
	('Vova', 'Putin', '06 Feb 1952', 'Sankt Pet', 'Moscow');
	
/* Выберем все поля в таблице users  */
SELECT * FROM users; 
