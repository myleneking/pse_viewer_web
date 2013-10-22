#!/bin/sh -x
#******************************#
# USAGE:                       #
# ./composer_update.sh project #
#******************************#

cd ./../pse_viewer_web

# download composer.phar if does not exist.
if [ ! -f composer.phar ];
then
   echo "composer.phar does not exist."
   curl -s https://getcomposer.org/installer | php
fi

# get libraries and dependencies.
php composer.phar update --no-scripts

#create .gitignore
touch ../.gitignore
echo "pse_viewer_web/composer.lock" >> ../.gitignore
echo "pse_viewer_web/composer.phar" >> ../.gitignore
echo "pse_viewer_web/vendor" >> ../.gitignore
