# Disable generated image sizes plugin for WordPress

[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://github.com/vshymanskyy/StandWithUkraine)&nbsp;
[![GitHub @andriilive](https://img.shields.io/github/followers/andriilive?label=@andriilive&style=social)](https://www.github.com/andriilive)

## Regular plugin vs mu-plugin

- as mu-plugin (recommended): [main branch](https://github.com/andriilive/wp-disable-generated-image-sizes)
- as regular plugin: [plugin branch](https://github.com/andriilive/wp-disable-generated-image-sizes/tree/plugin)

To install as regular plugin use `composer require andriilive/wp-disable-generated-image-sizes:dev-plugin`

`wp-disable-generated-image-sizes` plugin completely and for real disables WordPress &amp; plugins image sizes generation with no need for configuration

+  Last update: June 2021
+  Supports `woocommerce` and any other plugins
+  No need for configuration. Activate and go
+  Tested with `Wordpress 5.7.2` & `php 8.0`
+  Only 3 lines of code
+  Supports [Bedrock](https://roots.io/bedrock) `WordPress` installs

## Requirements

- Requires WP at least: `4.5`
- Tested up to WP: `5.7.2`
- Requires PHP: `7.1`

## Install & Activate plugin

### Composer (Bedrock Install)

`composer require andriilive/wp-disable-generated-image-sizes` at root

### ZIP Upload

1. Download `wp-disable-generated-image-sizes.zip` from [here](https://github.com/andriilive/wp-disable-generated-image-sizes/archive/refs/tags/0.1.0.zip)
2. Login to Wordpress Admin Dashboard
2. Navigate to `Plugins` > `Add new`
3. Press `Upload Plugin` and chose `wp-disable-generated-image-sizes.zip`
2. `Activate` the plugin through the `Plugins` menu in WordPress

### FTP

1. Upload folder `wp-disable-generated-image-sizes` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Regenerate thumbnails

You probably will need to [regenerate thumbnails](https://wordpress.org/search/regenerate+thumbnails) after install.
