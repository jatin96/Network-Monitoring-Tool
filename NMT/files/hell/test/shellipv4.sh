cd /var/www/html/test
tcpdump -i eth0 -ne -c 250 > tcpdump1

sed "/IPv6/d" tcpdump1 > tcpdump
grep "IPv4" tcpdump > IPv4
grep "ARP" tcpdump > ARP
grep "UDP" tcpdump > UDP

cut -d" " -f1 IPv4 > timestamp
cut -d"." -f1 IPv4 > timestamp
cut -d" " -f2 IPv4 > sourcemacipv4
cut -d" " -f4 IPv4 > destinationmacipv4
cut -d"," -f1 destinationmacipv4 > destmacipv4
cut -d" " -f9 IPv4 > lengthipv4
cut -d":" -f1 lengthipv4 > lengthip
cut -d" " -f10 IPv4 > sourceip
cut -d"." -f1,2,3,4 sourceip > sourceipadd
cut -d"." -f5 sourceip > sourceiportno
cut -d" " -f12 IPv4 > destip
cut -d"." -f1,2,3,4 destip > destipadd
cut -d"." -f5 destip > destportno
cut -d":" -f1 destportno > destportleng

cut -d" " -f1 ARP > timestamparp
cut -d"." -f1 ARP > timestamparp
cut -d" " -f2 ARP > sourcemacarp
cut -d" " -f4 ARP > destinationmacarp
cut -d"," -f1 destinationmacarp > destmacarp
cut -d" " -f9 ARP > lengtharp
cut -d":" -f1 lengtharp > lengthap
cut -d" " -f12 ARP > sourceap
cut -d" " -f14 ARP > destap
cut -d"," -f1 destap > destarp


cut -d" " -f1 UDP > timestampup
cut -d"." -f1 UDP > timestampup
cut -d" " -f2 UDP > sourcemacudp
cut -d" " -f4 UDP > destinationmacudp
cut -d"," -f1 destinationmacudp > destmacudp
cut -d" " -f9 UDP > lengthudp
cut -d":" -f1 lengthudp > lengthup
cut -d" " -f10 UDP > sourceup
cut -d"." -f1,2,3,4 sourceup > sourceupadd
cut -d"." -f5 sourceup > sourceuportno
cut -d" " -f12 UDP > destup
cut -d"." -f1,2,3,4 destup > destupadd
cut -d"." -f5 destup > destportnoudp
cut -d":" -f1 destportnoudp > destportudp

paste timestamp sourcemacipv4 destmacipv4 sourceipadd destipadd sourceiportno destportleng lengthip > IP
paste timestamparp sourcemacarp destmacarp sourceap destarp lengthap > ARP
paste timestampup sourcemacudp destmacudp sourceupadd destupadd sourceuportno destportudp lengthup > UDP

mysql --local-infile=1 -u root -e"
DROP DATABASE if exists packets;
CREATE DATABASE packets;
USE packets;

DROP table if exists ip;
CREATE table ip(
Time_Stamp VARCHAR(30),
Source_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Source_Port VARCHAR(30),
Destination_Port VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'IP' INTO TABLE ip;

DROP table if exists arp;
CREATE table arp(
Time_Stamp VARCHAR(30),
Source_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'ARP' INTO TABLE arp;

DROP table if exists udp;
CREATE table udp(
Time_Stamp VARCHAR(30),
Source_Mac_Address VARCHAR(30),
Destination_Mac_Address VARCHAR(30),
Source_IpAddress VARCHAR(30),
Destination_IpAddress VARCHAR(30),
Source_Port VARCHAR(30),
Destination_Port VARCHAR(30),
Length VARCHAR(30));
LOAD DATA LOCAL INFILE 'UDP' INTO TABLE udp;"

