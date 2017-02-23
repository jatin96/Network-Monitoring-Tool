#!/bin/bash
 tcpdump -i eth0 -ne -c 100 > tcpdump
grep "IPv4" tcpdump > IPv4
grep "ARP" tcpdump > arppackets
grep "UDP" tcpdump > udppackets
