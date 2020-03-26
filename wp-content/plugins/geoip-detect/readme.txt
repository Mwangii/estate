=== GeoIP Detection ===
Contributors: benjaminpick
Tags: geoip, maxmind, geolocation, locator
Requires at least: 4.0
Tested up to: 5.2
Requires PHP: 5.4
Stable tag: trunk
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BSYUZHS8FH3CL

Retrieving Geo-Information using one the Maxmind GeoIP2 databases.

== Description ==

Provides geographic information detected by an IP adress. This can be used in themes or other plugins,
as a shortcode, or via CSS body classes. The city & country names are translated in different languages ([supported languages](https://dev.maxmind.com/geoip/geoip2/web-services/#Languages-8)).

= Features: =

* Provides these 5 functions (see [API Documentation](https://github.com/yellowtree/geoip-detect/wiki/API:-PHP)):
  * `geoip_detect2_get_info_from_ip($ip, $locales = array('en'), $options = array())`: Lookup Geo-Information of the specified IP
  * `geoip_detect2_get_info_from_current_ip($locales = array('en'), $options = array())`: Lookup Geo-Information of the current website user
  * `geoip_detect2_get_current_source_description(...)`: Return a human-readable label of the currently chosen source.
  * `geoip_detect2_get_external_ip_adress()`: Fetch the internet adress of the webserver
  * `geoip_detect2_get_client_ip()`: Get client IP (even if it is behind a reverse proxy)
* You can use one of these data sources (see [comparison](https://github.com/yellowtree/geoip-detect/wiki/FAQ#which-data-source-should-i-choose)):
  * Free: [Maxmind GeoIP2 Lite City](http://dev.maxmind.com/geoip/geoip2/geolite2/), automatically updated every month (licensed CC BY-SA. See [FAQ](https://github.com/yellowtree/geoip-detect/wiki/FAQ).)
  * Commercial: [Maxmind GeoIP2 City](https://www.maxmind.com/en/geoip2-country-database) or [Maxmind GeoIP2 Country](https://www.maxmind.com/en/geoip2-city)
  * Commercial Web-API: [Maxmind GeoIP2 Precision](https://www.maxmind.com/en/geoip2-precision-services) (City, Country or Insights)
  * Free (default source): [HostIP.info](http://www.hostip.info/) (IPv4 only)
  * Hosting-Provider dependent: [Cloudflare](https://support.cloudflare.com/hc/en-us/articles/200168236-What-does-CloudFlare-IP-Geolocation-do-) or [Amazon AWS CloudFront](https://aws.amazon.com/blogs/aws/enhanced-cloudfront-customization/) (Country)
  * Free or Commercial Web-API: [Ipstack](https://ipstack.com)
* For the property names, see the results of a specific IP in the wordpress backend (under *Tools > GeoIP Detection*).
* You can include these properties into your posts and pages by using the shortcode `[geoip_detect2 property="country.name" default="(country could not be detected)" lang="en"]` (where 'country.name' can be one of the other property names as well, and 'default' and 'lang' are optional).
* You can show or hide content by using a shortcode `[geoip_detect2_show_if country="FR, DE" not_city="Berlin"]TEXT[/geoip_detect2_show_if]`. See [Shortcode Documentation](https://github.com/yellowtree/geoip-detect/wiki/API:-Shortcodes#show-or-hide-content-depending-on-the-location).
* When enabled on the options page, it adds CSS classes to the body tag such as `geoip-province-HE`, `geoip-country-DE` and `geoip-continent-EU`.
* When enabled on the options page, the client IP respects a reverse proxy of the server.
* If you are using [Contact Form 7](https://wordpress.org/plugins/contact-form-7/), you can use these shortcodes:
  * A select input with all countries, the detected country being selected by default: `[geoip_detect2_countries mycountry]`
  * A text input that is pre-filled with the detected city (or other property): `[geoip_detect2_text_input city property:city lang:fr id:id class:class default:Paris]`
  * GeoIP information for the email text: `[geoip_detect2_user_info]`

See [Documentation](https://github.com/yellowtree/geoip-detect/wiki) for more info.

= How can I use these functions? =

* You could choose the currency of the store based on the country name
* You could suggest an timezone to use when displaying dates
* You could show the store nearest to your customer
* You show or hide content specific to a geographic target group
* Etc. ... You tell me! I'm rather curious what you'll do with this plugin!
* Be careful to comply to the applicable laws. For example Regulation (EU) 2018/302 (going into effect 03 Dec 2018)...

**System Requirements**: You will need at least PHP 5.4.

*GDPR: This plugin does not store any cookie or user-dependent data. If you use a web-based source (hostip.info, Maxmind Precision, ipstack), the plugin stores all IPs that visited the site in a cache (by default for 7 days) for performance reasons. If you want to disable this behavior, add `define('GEOIP_DETECT_READER_CACHE_TIME', 0);` in your theme's `function.php`. Be especially careful when using geographic information to change prices or selling options, as this might not be legal.*

*This extension is "charity-ware". If you are happy with it, please [leave a tip](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BSYUZHS8FH3CL) for the benefit of [this charity](http://www.jmem-hainichen.de/homepage). (See [FAQ](https://github.com/yellowtree/geoip-detect/wiki/FAQ#what-you-mean-by-this-plugin-is-charity-ware) for more infos.)*

*This product can provide GeoLite2 data created by MaxMind, available from http://www.maxmind.com.*

== Installation ==

* Install the plugin
* Go to the plugin's option page and choose a data source.
* Test it by clicking on "Lookup" on the lookup page.

=== Troubleshooting ===

Does `geoip_detect2_get_info_from_current_ip()` return the same country, regardless of where you are visiting the site from? Maybe your server has a reverse proxy configured. You can check this: Go to the options page and look for "reverse proxy". Are there 2 IPs listed there? If so, which one corresponds to your [public IP](https://www.whatismyip.com/)?

== Frequently Asked Questions ==

[Technically speaking, how could I verify if my visitor comes from Germany?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#technically-speaking-how-could-i-verify-if-my-visitor-comes-from-germany)

[How can I show text only if the visitor is coming from Germany?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#how-can-i-show-text-only-if-the-visitor-is-coming-from-germany)

[How can I add the current country name as text in my page?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#how-can-i-add-the-current-country-name-as-text-in-my-page)

[Which data source should I choose?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#which-data-source-should-i-choose)

[Can I change the time period how long the data is cached?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#can-i-change-the-time-period-how-long-the-data-is-cached)

[The Maxmind Lite databases are licensed Creative Commons ShareAlike-Attribution. When do I need to give attribution?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#the-maxmind-lite-databases-are-licensed-creative-commons-sharealike-attribution-when-do-i-need-to-give-attribution)

[Does this plugin work in a MultiSite-Network environment?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#does-this-plugin-work-in-a-multisite-network-environment)

[What do you mean by "This plugin is charity-ware"?](https://github.com/yellowtree/geoip-detect/wiki/FAQ#what-do-you-mean-by-this-plugin-is-charity-ware)

**Further documentation**

[PHP Functions](https://github.com/yellowtree/geoip-detect/wiki/API:-PHP)

[JS Functions for AJAX mode](https://github.com/yellowtree/geoip-detect/wiki/API%3A-AJAX)

[Shortcodes](https://github.com/yellowtree/geoip-detect/wiki/API:-Shortcodes)

[Shortcodes for Contact Form 7](https://github.com/yellowtree/geoip-detect/wiki/API:-Shortcodes-for-Contact-Form-7)

[Record Properties](https://github.com/yellowtree/geoip-detect/wiki/Record-Properties)

[API usage examples](https://github.com/yellowtree/geoip-detect/wiki/API-Usage-Examples)

== Screenshots ==

1. Lookup page (under Tools > GeoIP Lookup)
2. Options page (under Preferences > GeoIP Detection)

== Upgrade Notice ==

= 2.12.0 =

New: Ipstack.com can be used as data source

= 2.11.0 =

The Download code of the automatically updated Maxmind file was rewritten for better performance. Also, AJAX support is now in beta (see documentation).

= 2.9.2 =

Hotfix: In 2.9.1, this plugin was incompatible with other Contact Form 7-Special Mailtags (https://contactform7.com/special-mail-tags/).

= 2.9.1 =

Online Shops: Be careful to comply to (EU) 2018/302 (going into effect 03 Dec 2018) in how you use this plugin !

= 2.9.0 =

There have been changes to the reverse proxy logic. If you have enabled a reverse proxy, check if the detected IP is correct.
New: Shortcode for showing/hiding content!

== Changelog ==

= 2.12.0 =
* NEW: It is now possible to use ipstack.com as a data source.
* The Backup Lookup UI now can show all properties and you can choose if you want to see the PHP, Shortcode or JS syntax.

= 2.11.2 = 
* The auto-updater of the Maxmind City Lite source now updates more often (every 1-2weeks) in order to get more accurate data.

= 2.11.1 =
* FIX: When activating the plugin on Wordpress MultiSite, an error was thrown before
* NEW: Add body class "geoip-country-is-in-european-union" if the detected country is inside of the European Union
* JS/AJAX support for cached pages (Public BETA now. See https://github.com/yellowtree/geoip-detect/wiki/API%3A-AJAX)
* NEW: If AJAX and body classes are enabled, body classes are added via AJAX.

= 2.11.0 =
* NEW: JS/AJAX support for cached pages (This is in **BETA**. Read https://github.com/yellowtree/geoip-detect/wiki/API%3A-AJAX on how to activate it)
* FIX: Improve performance of unpacking the Maxmind file (Source: Automatic download) - important for hosts with a low max_execution_time
* NEW: On removal (in the Backend), the plugin will delete its options from the database and the downloaded Maxmind file

= 2.10.0 =
* NEW: The whitelisted proxies can now be subnets such as `11.11.11.0/24`
* NEW: Add a ContactForm7-Tag `geoip_detect2_text_input` (see https://github.com/yellowtree/geoip-detect/wiki/API:-Shortcodes-for-Contact-Form-7#create-a-text-input-that-is-prefilled-with-a-geodetected-property)
* NEW: A new wordpress filter allows overriding of the detected geo-information inside the `geoip_detect2_shortcode_show_if`-Shortcode. Use the already-existing filter `geoip_detect2_record_information` instead if you want to override this information for all shortcodes and API calls.
* Updated Maxmind vendor code
* Increased WP minimum version to 4.0

= 2.9.2 =
* FIX: ContactForm7-Mailtag disabled mailtags from other plugins.

= 2.9.1 =
* NEW: Add ContactForm7-Mailtags so that the user information formatting can be customized: `geoip_detect2_get_client_ip`, `geoip_detect2_get_current_source_description`, `geoip_detect2_property_country`, `geoip_detect2_property_state`, `geoip_detect2_property_city`. Of course you can still use `geoip_detect2_user_info` as shortcode for all these informations.
* FIX: On some server, the plugin had wrongly assumed that PHP was compiled without IPv6-support.

= 2.9.0 =
* Add default Privacy text for GDPR compliance.
* The reverse proxy logic was heavily changed. If you run into configuration errors, try the debug panel (see link after the reverse proxy option).
* NEW: Reverse proxies can now be whitelisted - all non-whitelisted proxies are treated as user IP.
* NEW: Shortcode to show/hide content dynamically. (`[geoip_detect2_show_if country="US" not_state="Texas"]TEXT[/geoip_detect2_show_if]`) (Thanks to @DynAggelos!)
* NEW: All shortcodes now support multiple subdivisions (`[geoip_detect2 property="subdivisions.0.isoCode"]`)
* NEW: The CSS classes that are added to the body-tag (if enabled in the options) now also include the most specific subdivision (`geoip-province-HE`).
* Maxmind vendor code was updated to the current version (2.9.0).

[Older changelog](https://github.com/yellowtree/geoip-detect/blob/master/CHANGELOG.md)
