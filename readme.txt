=== Advanced Ads Ad Server ===
Contributors: webzunft
Tags: ads, ad server
Requires at least: 4.9
Tested up to: 4.9
Requires PHP: 5.3
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows to load ads from your WordPress site on external pages, like your personal ad server.

== Description ==

This plugin is based on the also free [Advanced Ads ad management plugin](https://wordpress.org/plugins/advanced-ads/).

= Installation =

1. install Advanced Ads
3. install this plugin
2. create an ad in Advanced Ads > Ads
4. get the ad URL
5. use one of the following codes to retrieve the ad on the other sites

Using an iFrame is the most simple way. Don’t forget to set the width and height attributes.

```
<iframe src="LINKTOAD" width="300" height="250"></iframe>
```

Using JavaScript could be a bit more flexible, but the call could be blocked by some browsers.

```
<div id="ad-box"></div>
<script>
	jQuery(document).ready(function(){ jQuery('#ad-box').load('LINKTOAD #ad > *'); });
</script>
```

== Changelog ==

= 0.1 =

* first version
