#!/bin/bash

commit=$(git rev-parse --short HEAD)
dir_name=ctd-wp-child-theme
filename=$dir_name-$commit.zip
rm -f $dir_name*.zip 
zip -r "$filename" ./ctd-wp-child-theme
