#!/bin/bash 
#capturing all the packets 
/usr/sbin/tcpdump -i eth0 -vv -c 200 ip6 > ipv6

grep "UDP" ipv6 > udpip6
grep "ICMP" ipv6 > icmpip6

cut -d " " -f1 udpip6 > timestampudp
cut -d "." -f1 timestampudp > timeudp
cut -d " " -f11 udpip6 > sourceip6
cut -d "." -f1 sourceip6 > sourceip66
cut -d " " -f13 udpip6 > destip66
cut -d "." -f1 destip66 > destip6
cut -d " " -f4 udpip6 > hoplimit1
cut -d "," -f1 hoplimit1 > hoplimit
cut -d " " -f6,7 udpip6 > nextheaderinfo
cut -d " " -f10 udpip6 > paylength
cut -d ")" -f1 paylength > payloadlength
cut -d " " -f19 udpip6 > lengthudp6
paste timeudp sourceip66 destip6 hoplimit nextheaderinfo payloadlength lengthudp6 > udp6
cut -d " " -f1 icmpip6 > timestampicmp
cut -d "." -f1 timestampicmp > timeicmp
cut -d " " -f11 icmpip6 > sourceicmp6
cut -d " " -f13 icmpip6 > desticmp6
cut -d " " -f4 icmpip6 > hoplimiticmp1
cut -d "," -f1 hoplimiticmp1 > hoplimiticmp
cut -d " " -f6,7 icmpip6 > nextheaderinfoicmp
cut -d " " -f10 icmpip6 > payload
cut -d ")" -f1 payload > payloadlengthicmp
cut -d " " -f20,21,24 icmpip6 > neighbour
paste timeicmp sourceicmp6 desticmp6 hoplimiticmp nextheaderinfoicmp payloadlengthicmp neighbour > icmp6
mysql --local-infile=1 -u root -e " 
drop database if exists packet; 
create database packet; 
use packet; 
drop table if exists udpip6; 
drop table if exists icmpip6; 
 
CREATE TABLE udpip6( Timestamp VARCHAR(30), Source_ip VARCHAR(30), Des_ip VARCHAR(30),hoplimit VARCHAR(30), nextheaderinfo VARCHAR(30),payloadlength VARCHAR(30),length VARCHAR(30)); 
CREATE TABLE icmpip6( Timestamp VARCHAR(30),Source_ip VARCHAR(30),Des_ip VARCHAR(30),hoplimit VARCHAR(30), nextheaderinfo VARCHAR(30),payloadlength VARCHAR(30),neighbour VARCHAR(100)); 
LOAD DATA LOCAL INFILE 'udp6' INTO TABLE udpip6;
LOAD DATA LOCAL INFILE 'icmp6' INTO TABLE icmpip6;"

