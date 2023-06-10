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
