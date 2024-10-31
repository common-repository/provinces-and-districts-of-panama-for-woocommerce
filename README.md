=== Provinces and Districts of Panama for WooCommerce ===
Contributors: yordansoares
Tags: panama provinces and districts, provincias y distritos de panama
Donate link: https://yordansoar.es/
Requires at least: 4.6
Tested up to: 5.9
Requires PHP: 7.0
Stable tag: 1.0.4
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Provinces, Districts and Corregimientos of Panama for WooCommerce.

== Description ==
This plugin allows you to choose the **Provinces, Districts and Corregimientos of Panama** as a dropdown menu in the **WooCommerce address forms**. It also makes filterable the **Province** and **Districts - Corregimiento** fields to enhance the **user experience**.

Additionally it adds the **Provinces** to the **Shipping Zones** (The Districts and Corregimientos are not compatible with this area).

== Installation ==
= Automatic installation =
1. Go to your Dashboard » Plugins » Add new
2. In the search form write "Provinces and Districts of Panama for WooCommerce"
3. When the search return the result, click on the "Install Now" button
4. Finally, click on the "Activate" button
5. Enjoy the plugin!

= Manual Installation = 
1. Download the plugin from this page clicking on the "Download" button
2. Go to your Dashboard » Plugins » Add new
3. Now select "Upload Plugin" button
4. Click on "Select file" button and select the file you just download
5. Click on "Install Now" button and the "Activate Plugin"
6. Enjoy the plugin!

= FTP Installation =
1. Download the plugin from this page clicking on the "Download" button
2. Decompress the file in your desktop
3. Run your FTP client software and conect to your WordPress installation
4. Copy to [root folder]/wp-content/plugins/ the plugin directory you just descompress
5. Go to your Dashboard » Plugins » Find the plugin and click on "Activate" option
6. Enjoy the plugin!

== Frequently Asked Questions ==
= Where do you got the data of Provinces, Districts and Corregimientos of Panama? =
I found the information in Wikipedia:
- [Provinces of Panama](https://en.wikipedia.org/wiki/Provinces_of_Panama) [EN]
- [Districts of Panama](https://en.wikipedia.org/wiki/Districts_of_Panama) [EN]
- [Corregimientos of Panama](https://en.wikipedia.org/wiki/Corregimientos_of_Panama) [EN]
- [Anexo:Provincias y comarcas indígenas de Panamá](https://es.wikipedia.org/wiki/Anexo:Provincias_y_comarcas_ind%C3%ADgenas_de_Panam%C3%A1) [ES]
- [Anexo:Distritos de Panamá](https://es.wikipedia.org/wiki/Anexo:Distritos_de_Panam%C3%A1) [ES]
- [Anexo:Corregimientos de Panamá](https://es.wikipedia.org/wiki/Anexo:Corregimientos_de_Panam%C3%A1) [ES]

= How many Provinces, Districts and Corregimientos are in the list? =
There are 13 options in Provinces field (10 Provinces and 3 provincial-level indigenous regions called Comarcas), 80 Districts and 679 Corregimientos

= The name of a Province, District or Corregimiento its outdated, is it possible to update it? = 
Please open a ticket in the plugin support forum and let me know the name (the old and new one) of the Province, District or Corregimiento and I'll update as soon as possible.

= A Province, District or Corregimiento is missing in the plugin list, can you add it in the next update? =
Of course, just open a ticket in the plugin support forum and let the name(s) of the Province(s), District(s) or Corregimiento(s) and I'll update as soon as possible.

= I can't see the Postal Code field, where is it? =
By default, the Postal Code is disable in the plugin. In almost cases this field isn't needed, but if you need to activate it, please put this code in your theme `function.php` file or in a custom plugin:

`// Enable Postcode in WooCommerce
remove_action('init', 'pdpw_disable_postcodes');`

== Screenshots ==
1. See the plugin in action
2. Provinces are displayed in Shipping Zones
3. Districts and Corregimientos are displayed in Address forms in frontend

== Changelog ==
= 1.0.4 =
Tested up to WordPress 5.4 and WooCommerce 4.0.0
= 1.0.3 =
Tested up to WordPress 5.3.2 and WooCommerce 3.8.1
= 1.0.2 =
Tested up to WordPress 5.3 and WooCommerce 3.8.1
= 1.0.1 =
Tested up to WordPress 5.2.4 and WooCommerce 3.8.0
= 1.0 =
Initial Release