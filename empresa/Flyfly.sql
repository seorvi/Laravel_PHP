use mysql;
create user 'admin'@'localhost' identified by "1234@";
create database Flyfly;
use Flyfly;
grant all privileges on Flyfly.* to 'admin'@'localhost';
