#/bin/sh

# script to set the file and directory permissions for the
# Portal source tree
# usage is setrepoperms.sh directory_name


if [ "$#" -ne 1 ]
then echo "Usage: $0 directory_name"
     exit
fi

find $1 -type d -exec chmod 755 {} \; 
find $1 -type f -exec chmod 644 {} \;
find $1 -name setrepoperms.sh -exec chmod 744 {} \;

