mysql -u root -e "
DROP DATABASE if exists packets;
CREATE DATABASE packets;
USE packets;
DROP table if exists ip_1;
CREATE table ip_1(
Time_Stamp VARCHAR(30),
Sourec_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Source_Port VARCHAR(30),
Destination_Port VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'IP' INTO TABLE ip_1;"