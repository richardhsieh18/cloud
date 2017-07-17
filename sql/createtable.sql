drop database if exists class;
create database class;
use class;
create table students
(
    cID tinyint(2) unsigned not null  auto_increment,
    cName varchar(20) not null,
    cSex Enum('F','M') not null default 'F',
    cBirthday Date not null,
    cEmail varchar(100) default null,
    cPhone varchar(50) default null,
    cAddress varchar(100) default null,
    constraint class_cid_pk PRIMARY KEY (cID)
)

ENGINE InnoDB DEFAULT CHARSET UTF8;