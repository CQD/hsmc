#!/bin/bash
find public -name "*.php" \
    | sed 's/\.php$/.htm/g' \
    | sed 's/^public\//http:\/\/hw.hiigara.net\//g' \
    | grep -v '/index\.htm\|/home\.htm\|cqd\.htm' \
    | sort
