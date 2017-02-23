#!/bin/bash
 tcpdump -i eth0 -ne -c 100 > tcpdump
 grep "IPv4" tcpdump > IPv4
#~~~~~~~~~~~~~~~~~~~~~~~~~~IPv4 commands~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
cut -d " " -f1 IPv4 > timestamp
cut -d "." -f1 IPv4 > timestamp
cut -d " " -f2 IPv4 > sourcemacipv4

cut -d " " -f4 IPv4 > destinationmacipv4
cut -d "," -f1 destinationmacipv4 >destmacipv4

cut -d " " -f9 IPv4 > lengthipv4
cut -d ":" -f1 lengthipv4 > lengthip

cut -d " " -f10 IPv4 > sourceip
cut -d "." -f1,2,3,4 sourceip > sourceipadd
cut -d "." -f5 sourceip > sourceipportno
cut -d " " -f12 IPv4 > destinationip
cut -d "." -f1,2,3,4  destinationip > destinationipadd
cut -d "." -f5 destinationip > destinationportno
cut -d ":" -f1 destinationportno > destinationportlength
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

paste timestamp sourcemacipv4 destmacipv4 sourceipadd destinationipadd sourceipportno destinationportlength lengthip > IP



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