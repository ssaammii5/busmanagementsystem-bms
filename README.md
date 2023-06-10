# busmanagementsystem-bms

Database name:
bus_management
 

Bus Table: 

bus_id
b_license_no
b_type
b_seat_no

```sql
CREATE TABLE bus (
    bus_id INT AUTO_INCREMENT PRIMARY KEY,
    b_license_no VARCHAR(50) UNIQUE,
    b_type VARCHAR(50),
    b_seat_no INT(100)    
) AUTO_INCREMENT = 1000;

```

```sql
CREATE TABLE user (
    username VARCHAR(50) PRIMARY KEY UNIQUE,
    password VARCHAR(50)
);

```

INSERT INTO user (username, password) VALUES ('admin', 'admin');

-- Create the driver table
```sql
CREATE TABLE driver (
    driver_id INT AUTO_INCREMENT PRIMARY KEY,
    d_name VARCHAR(50),
  	d_address VARCHAR(50),
    d_license_no VARCHAR(50) UNIQUE,
    d_join_date DATE    
) AUTO_INCREMENT = 1000;

```




INSERT INTO driver (d_name, d_address, d_license_no, d_join_date)
VALUES ('John Doe', '123 Main St', 'ABC123', '2023-06-10');

