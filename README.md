# busmanagementsystem-bms

Database name:
bus_management
 

Bus Table: 

bus_id
b_license_no
b_type
b_seat_no


CREATE TABLE bus (
    bus_id INT AUTO_INCREMENT PRIMARY KEY,
    b_license_no VARCHAR(50) UNIQUE,
    b_type VARCHAR(50),
    b_seat_no INT(100)    
) AUTO_INCREMENT = 1000;


CREATE TABLE user (
    username VARCHAR(50) PRIMARY KEY UNIQUE,
    password VARCHAR(50),
);

INSERT INTO user (username, password) VALUES ('admin', 'admin');

CREATE TABLE driver (
    driver_id INT AUTO_INCREMENT PRIMARY KEY,
    d_name VARCHAR(50),
  	d_address VARCHAR(50),
    d_license_no VARCHAR(50) UNIQUE,
    d_join_date DATE    
) AUTO_INCREMENT = 1000;


-- Create the driver table

CREATE TABLE driver (
    driver_id INT AUTO_INCREMENT PRIMARY KEY,
    d_name VARCHAR(50),
    d_address VARCHAR(50),
    d_license_no VARCHAR(50) UNIQUE,
    d_join_date DATE
) AUTO_INCREMENT = 1000;


INSERT INTO driver (d_name, d_address, d_license_no, d_join_date)
VALUES ('John Doe', '123 Main St', 'ABC123', '2023-06-10');

    //route table
    
CREATE TABLE route (
    route_name VARCHAR(100),
    route_id INT PRIMARY KEY
);
    //Bus_schedule table

CREATE TABLE bus_schedule (
    bus_id INT,
    day VARCHAR(20),
    time TIME,
    driver_id INT,
    route_id INT,
    FOREIGN KEY (bus_id) REFERENCES Bus(bus_id),
    FOREIGN KEY (driver_id) REFERENCES Driver(driver_id),
    FOREIGN KEY (route_id) REFERENCES Route(route_id)
);
