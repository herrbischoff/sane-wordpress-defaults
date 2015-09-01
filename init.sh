#!/bin/bash
wp core download && \
rm -r ./wp/wp-content && \
git clone https://github.com/solarissmoke/disable-comments-mu.git ./content/mu-plugins/disable-comments-mu && \
rm -rf ./content/mu-plugins/disable-comments-mu/.git
