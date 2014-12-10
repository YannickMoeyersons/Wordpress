#!/usr/bin/env bats

@test "Check that Apache is installed" {
    run yum install httpd php php-xml php-mysql
    run dpkg -s httpd
    run dpkg -s php
    run dpkg -s php-xml
    run dpkg -s php-mysql
}

@test "Check that the apache service is running" {
    run systemctl status httpd
    [[ ${lines[2]} =~ "active" ]]
}

@test "Check if PHP is installed" {
    run php --version
}

@test "Check if Wordpress is installed" {
    run yum install wordpress
}

@test "Check if necessary files for SSL exist" {
    run stat /etc/pki/tls/certs/ca.crt
    run stat /etc/pki/tls/private/ca.key
    run stat /etc/pki/tls/private/ca.csr
}

@test "Check firewall port 443 and service http are allowed" {
    run sudo firewall-cmd --list-all
    [[ ${lines[0]} =~ "active" ]]
    [[ ${lines[3]} =~ "http" ]]
    [[ ${lines[4]} =~ "443/tcp" ]]
}