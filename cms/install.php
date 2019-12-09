<?php
$array_sql = ["CREATE TABLE `mscp`.`tab_admin` ( `id` VARCHAR(11) NOT NULL , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `access` VARCHAR(1) NOT NULL , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`), UNIQUE (`username`)) ENGINE = MyISAM;", "CREATE TABLE `mscp`.`tab_article` ( `id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_author` VARCHAR(60) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_issue` VARCHAR(30) NOT NULL , `ct_content` LONGTEXT NOT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;", "CREATE TABLE `mscp`.`tab_case` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_area` VARCHAR(60) NOT NULL , `ct_address` VARCHAR(120) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_team` VARCHAR(60) NOT NULL , `ct_company` VARCHAR(60) NOT NULL , `ct_description` TEXT NOT NULL , `ct_image` LONGTEXT NULL DEFAULT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;", "CREATE TABLE `mscp`.`tab_class` ( `tabname` VARCHAR(30) NOT NULL , `jsonPath` TEXT NOT NULL , `htmlPath` TEXT NOT NULL , `tempPath` TEXT NOT NULL , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`tabname`), UNIQUE (`tabname`)) ENGINE = MyISAM;"];

$link = mysqli_connect('localhost', 'mscp', 'mscp_admin', 'mscp');

// $sql_create_admin = "CREATE TABLE `mscp`.`tab_admin` ( `id` VARCHAR(11) NOT NULL , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `access` VARCHAR(1) NOT NULL , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`), UNIQUE (`username`)) ENGINE = MyISAM;";

// mysqli_query($link, $sql_create_admin);

// $sql_create_article = "CREATE TABLE `mscp`.`tab_article` ( `id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_author` VARCHAR(60) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_issue` VARCHAR(30) NOT NULL , `ct_content` LONGTEXT NOT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;";

// mysqli_query($link, $sql_create_article);

// $sql_create_case = "CREATE TABLE `mscp`.`tab_case` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_area` VARCHAR(60) NOT NULL , `ct_address` VARCHAR(120) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_team` VARCHAR(60) NOT NULL , `ct_company` VARCHAR(60) NOT NULL , `ct_description` TEXT NOT NULL , `ct_image` LONGTEXT NULL DEFAULT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;";

// mysqli_query($link, $sql_create_case);

// $sql_create_class = "CREATE TABLE `mscp`.`tab_class` ( `tabname` VARCHAR(30) NOT NULL , `jsonPath` TEXT NOT NULL , `htmlPath` TEXT NOT NULL , `tempPath` TEXT NOT NULL , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`tabname`), UNIQUE (`tabname`)) ENGINE = MyISAM;";

// mysqli_query($link, $sql_create_class);

for($i = 0; $i < count($array_sql); $i++) {
  mysqli_query($link, $array_sql[$i]);
}

//CREATE TABLE `mscp`.`tab_class` ( `tabname` VARCHAR(30) NOT NULL , `jsonPath` TEXT NOT NULL , `htmlPath` TEXT NOT NULL , `tempPath` TEXT NOT NULL , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`tabname`), UNIQUE (`tabname`)) ENGINE = MyISAM;

// CREATE TABLE `mscp`.`tab_case` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_area` VARCHAR(60) NOT NULL , `ct_address` VARCHAR(120) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_team` VARCHAR(60) NOT NULL , `ct_company` VARCHAR(60) NOT NULL , `ct_description` TEXT NOT NULL , `ct_image` LONGTEXT NULL DEFAULT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;

// CREATE TABLE `mscp`.`tab_article` ( `id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT , `st_title` VARCHAR(120) NOT NULL , `st_keywords` VARCHAR(120) NOT NULL , `st_description` VARCHAR(400) NOT NULL , `st_path` TEXT NULL DEFAULT NULL , `ct_title` VARCHAR(120) NOT NULL , `ct_author` VARCHAR(60) NOT NULL , `ct_class` VARCHAR(2) NOT NULL , `ct_issue` VARCHAR(30) NOT NULL , `ct_content` LONGTEXT NOT NULL , `b_recommends` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_posted` VARCHAR(1) NOT NULL DEFAULT 'F' , `b_end` VARCHAR(8) NOT NULL DEFAULT 'TAB_END' , PRIMARY KEY (`id`)) ENGINE = MyISAM;

// CREATE TABLE `mscp`.`tab_admin` ( `id` VARCHAR(11) NOT NULL , `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `access` VARCHAR(1) NOT NULL , `b_end` VARCHAR(8) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`username`)) ENGINE = MyISAM;
?>