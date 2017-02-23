#!/bin/bash
tcpdump -i eth0 -ne -c 100 > tcpdump
grep "UDP" tcpdump > udppackets
#grep -v "::" udppackets1 > udppackets
cut -d " " -f1 udppackets > timeudp
cut -d "." -f1 timeudp > timestampudp
cut -d " " -f2 udppackets > sourcemacudp
cut -d " " -f4 udppackets > destinationudp
cut -d "," -f1 destinationudp > destinationmacudp
cut -d " " -f9 udppackets > lengthudp
cut -d ":" -f1 lengthudp > lenudp
cut -d " " -f10 udppackets> sourceipaddudp
cut -d "." -f1,2,3,4 sourceipaddudp > sourceipudp
cut -d "." -f5 sourceipaddudp > sourceportnoudp
cut -d " " -f12 udppackets > destinationipaddudp
cut -d ":" -f1 destinationipaddudp > destiipaddudp
cut -d "." -f1,2,3,4 destiipaddudp >destinationipudp
cut -d "." -f5 destiipaddudp > destinationportnoudp

paste timestampudp sourcemacudp destinationmacudp sourceipudp destinatipudp sourceportnoudp destinationportnoudp lenudp> UDP

mysql -u root -e "
DROP DATABASE if exists packets;
CREATE DATABASE packets;
USE packets;
DROP table if exists udp_1;
CREATE table udp_1(
Time_Stamp VARCHAR(30),
Sourec_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Source_Port VARCHAR(30),
Destination_Port VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'UDP' INTO TABLE udp_1;"
