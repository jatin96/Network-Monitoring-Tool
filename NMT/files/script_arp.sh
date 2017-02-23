#!/bin/bash
tcpdump -i eth0 -ne -c 100 > tcpdump

grep "ARP" tcpdump > arppackets1
grep "(..:..:..:..:..:..)" arppackets1 > arppackets2
cut -d " " -f1,2,3,4,5,5,6,7,8,9,10,11,12,14- arppackets2 > arppackets
grep -v "(..:..:..:..:..:..)" arppackets1 >> arppackets


cut -d " " -f1 arppackets > timearp
cut -d "." -f1 timearp > timearpstamparp
cut -d " " -f2 arppackets > sourcemacarp
cut -d " " -f4 arppackets > destinationmacarp
cut -d "," -f1 destinationmacarp > destinationarp1
cut -d " " -f9 arppackets > length
cut -d ":" -f1 length > lengtharp
cut -d " " -f12 arppackets > sourceipaddarp
cut -d " " -f14 arppackets > destinationipaddarp
cut -d "," -f1 destinationipaddarp > destinationipaddarp1
paste timearpstamparp sourcemacarp destinationarp1 sourceipaddarp destinationipaddarp1 lengtharp > ARP

mysql -u root -e "
DROP DATABASE if exists packets;
CREATE DATABASE packets;
USE packets;
DROP table if exists arp_1;
CREATE table arp_1(
Time_Stamp VARCHAR(30),
Sourec_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'ARP' INTO TABLE arp_1;"
