#!/bin/bash
tcpdump -i  eth0 -ne -c 100 > tcpdump


grep "IPv4" tcpdump > IPv

cut -d" " -f1 IPv > timetamp
cut -d"." -f1 timetamp > timestamp
cut -d" " -f2 IPv > sourcemacipv4
cut -d" " -f4 IPv > destinationmacipv4
cut -d"," -f1 destinationmacipv4 > dstmacipv4
cut -d" " -f9 IPv > lengthipv4
cut -d":" -f1 lengthipv4 > lengthip
cut -d" " -f10 IPv > sourceip
cut -d"." -f1,2,3,4 sourceip > sourceipadd
cut -d"." -f5 sourceip > sourceiportno
cut -d" " -f12 IPv > destionip
cut -d"." -f1,2,3,4 destionip > destionipadd
cut -d"." -f5 destionip > destionportno
cut -d":" -f1 destionportno > destionportleng


paste timestamp sourcemacipv4 dstmacipv4 sourceipadd destionipadd sourceiportno destionportleng lengthip > ip

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

LOAD DATA LOCAL INFILE 'ip' INTO TABLE ip_1;

"
