#!/bin/bash

commit=$(git rev-parse --short HEAD)
dir_name=ctd-wp-child-theme
filename=$dir_name-$commit.zip
rm -fv $dir_name*.zip 
zip -rj "$filename" ./ctd-wp-child-theme
