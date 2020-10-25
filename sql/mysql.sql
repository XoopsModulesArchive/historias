# MySQL-Front Dump 2.4
#
# Host: localhost Database: xoops
#--------------------------------------------------------
# Server version 3.23.40-nt
#
# Table structure for table 'xoops_historias'
#
CREATE TABLE historias (
    historias_id INT(11) NOT NULL AUTO_INCREMENT,
    historias    LONGTEXT,
    PRIMARY KEY (historias_id)
)
    ENGINE = ISAM;
INSERT INTO historias
VALUES (1, 'historias');
