DROP TABLE IF EXISTS BIRTH_REG;
DROP TABLE IF EXISTS DEATH_REG;
DROP TABLE IF EXISTS MARRIAGE_REG;
DROP TABLE IF EXISTS USER;

CREATE TABLE USER (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    security_qn VARCHAR(255) NOT NULL,
    security_answer VARCHAR(255) NOT NULL,
    admin BOOLEAN default 0,
    UNIQUE (email)
);
    	

CREATE TABLE BIRTH_REG (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    date_of_birth DATE NOT NULL,
    child_name VARCHAR(30) NOT NULL,
    child_sex VARCHAR(6),
    place_of_birth VARCHAR(20) NOT NULL,
    birth_weight FLOAT NOT NULL,
    mother_name VARCHAR(30) NOT NULL,
    mother_age INT NOT NULL,
    father_name VARCHAR(30) NOT NULL,
    father_age INT NOT NULL,
    birth_housename VARCHAR(20) NOT NULL,
    birth_city VARCHAR(20) NOT NULL,
    birth_district VARCHAR(20) NOT NULL,
    birth_state VARCHAR(20) NOT NULL,
    delivery_method VARCHAR(20) NOT NULL,
    birth_proof VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES USER(id)
);


CREATE TABLE DEATH_REG (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    deceased_name VARCHAR(30) NOT NULL,
    deceased_sex VARCHAR(6) NOT NULL,
    deceased_age INT NOT NULL,
    deceased_housename VARCHAR(20) NOT NULL,
    deceased_city VARCHAR(20) NOT NULL,
    deceased_district VARCHAR(20) NOT NULL,
    deceased_state VARCHAR(20) NOT NULL,
    deceased_pin BIGINT NOT NULL,
    father_name VARCHAR(20) NOT NULL,
    mother_name VARCHAR(20) NOT NULL,
    date_of_death DATE NOT NULL,
	place_of_death VARCHAR(30) NOT NULL,
    cause_certificate_id VARCHAR(3),
    actual_cause VARCHAR(20),
    death_document VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES USER(id)
);


CREATE TABLE MARRIAGE_REG (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    place_of_marriage VARCHAR(20) NOT NULL,
    date_of_marriage DATE NOT NULL,
    bride_name VARCHAR(30) NOT NULL,
    bride_dob DATE NOT NULL,
    bride_housename VARCHAR(20) NOT NULL,
    bride_city VARCHAR(20) NOT NULL,
    bride_district VARCHAR(20) NOT NULL,
    bride_state VARCHAR(20) NOT NULL,
    bride_phno BIGINT,
    bride_email VARCHAR(40),
    bride_signature VARCHAR(255) NOT NULL,
    bride_photo VARCHAR(255) NOT NULL,
    bride_groom_name VARCHAR(30) NOT NULL,
    bride_groom_dob DATE NOT NULL,
    bride_groom_housename VARCHAR(20) NOT NULL,
    bride_groom_city VARCHAR(20) NOT NULL,
    bride_groom_district VARCHAR(20) NOT NULL,
    bride_groom_state VARCHAR(20) NOT NULL,
    bride_groom_phno BIGINT,
    bride_groom_email VARCHAR(40),
    bride_groom_signature VARCHAR(255) NOT NULL,
    bride_groom_photo VARCHAR(255) NOT NULL,
    proof VARCHAR(255) NOT null,
    FOREIGN KEY (user_id) REFERENCES USER(id)
);
