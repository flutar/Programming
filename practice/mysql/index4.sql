-- 创建普通索引

CREATE TABLE test4(
id TINYINT UNSIGNED,
username VARCHAR(20),
INDEX in_id(id),
KEY in_username(username)
);

DROP INDEX in_id ON test4;
DROP INDEX in_username ON test4;
CREATE INDEX in_id ON test4(id);
ALTER TABLE test4 ADD INDEX in_username(username);

-- 创建唯一索引
CREATE TABLE test5(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
card CHAR(18) NOT NULL,
UNIQUE KEY uni_card(card)
);
ALTER TABLE test5 DROP INDEX uni_card;
DROP INDEX username ON test5;
CREATE UNIQUE INDEX uni_username ON test5(username);
ALTER TABLE test5 ADD UNIQUE INDEX uni_card(card);

-- 创建全文索引
CREATE TABLE test6(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
userDesc VARCHAR(20) NOT NULL,
FULLTEXT INDEX full_userDesc(userDesc)
);
DROP INDEX full_userDesc ON test6;
CREATE FULLTEXT INDEX full_userDesc ON test6(userDesc);

-- 创建单列索引
CREATE TABLE test7(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
test1 VARCHAR(20) NOT NULL,
test2 VARCHAR(20) NOT NULL,
test3 VARCHAR(20) NOT NULL,
test4 VARCHAR(20) NOT NULL,
INDEX in_test1(test1)
);

-- 创建多列索引
CREATE TABLE test8(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
test1 VARCHAR(20) NOT NULL,
test2 VARCHAR(20) NOT NULL,
test3 VARCHAR(20) NOT NULL,
test4 VARCHAR(20) NOT NULL,
INDEX mul_t1_t2_t3(test1,test2,test3)
);
ALTER TABLE test8 DROP INDEX mul_t1_t2_t3;
ALTER TABLE test8 ADD INDEX mul_ti_t2_t3(test1,test2,test3);

CREATE TABLE test9(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
test1 VARCHAR(20) NOT NULL,
test2 VARCHAR(20) NOT NULL,
test3 VARCHAR(20) NOT NULL,
test4 VARCHAR(20) NOT NULL,
UNIQUE KEY mul_t1_t2_t3(test1,test2,test3)
);

-- 创建空间索引
CREATE TABLE test10(
id TINYINT UNSIGNED AUTO_INCREMENT KEY,
test GEOMETRY NOT NULL,
SPATIAL INDEX spa_test(test)
)ENGINE=MyISAM;

DROP INDEX spa_test ON test10;

CREATE SPATIAL INDEX spa_test ON test10(test);





