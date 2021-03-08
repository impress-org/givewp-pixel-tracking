=== Give - Pixel Tracking ===
Contributors: givewp, webdevmattcrom, henryholtgeerts, jason_the_adams, dlocc
Donate link: https://givewp.com/
Tags: givewp, facebook pixel, conversion, donations
Requires at least: 4.8
Tested up to: 5.7
Requires PHP: 5.6
Stable tag: 1.0.1
Requires Give: 2.8.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A GiveWP Add-on to help administrators gather data on donor interaction via Facebook Pixel.

== Description ==

The Facebook Pixel enables you to create custom audiences in Facebook Ad Manager to retarget your donor base or create look-alike audiences to reach out to new potential donors.

The Give Pixel Tracking add-on extends your core Facebook Pixel integration to add events to your GiveWP donation activity.

Activating this add-on on your website (with the Facebook pixel already implemented), you'll automatically have the following events triggered:

* The Donate event upon every successful donation
* The Purchase event upon every successful donation. This passes the currency and donation amount to your Ad Manager as well.
* The `CompleteRegistration` event if your form either forces user registration, or if your donor opts to have a user account created.

You can learn about this and other events via the [Facebook Business Help](https://www.facebook.com/business/help/402791146561655?id=1205376682832142) section.

**IMPORTANT INFORMATION**
This add-on does not implement the Facebook pixel on your website. It assumes you've already implemented the Facebook pixel in one form or another. Without the Facebook pixel on your website, this add-on does not function at all.

**ABOUT OUR FREE ADD-ONS**
Add-ons like "Give -- Pixel Tracking" are a way that we are giving back to the WordPress community.

[Learn more about this free add-on and all the free GiveWP add-ons.](https://go.givewp.com/wpfreeaddons)

== Installation ==

= Minimum Requirements =

* GiveWP core plugin, version 2.9+
* An existing Facebook Pixel implemented on your website
* WordPress 4.9 or greater
* PHP version 7.1 or greater
* MySQL version 5.6 or greater

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't need to leave your web browser. To do an automatic install of Give, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type "Give Pixel Tracking" and click Search Plugins. Once you have found the plugin you can view details about it such as the the point release, rating and description. Most importantly of course, you can install it by simply clicking "Install Now".

= Manual installation =

The manual installation method involves downloading our donation plugin and uploading it to your server via your favorite FTP application. The WordPress codex contains [instructions on how to do this here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Updating =

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.

== Frequently Asked Questions ==

= How do I install the Facebook Pixel on my website? =

There are many ways to do that:

* Here's [a few plugins that can help](https://wordpress.org/plugins/search/facebook+pixel/).
* Here's [a detailed guide from Facebook on how to install and test your pixel](https://www.facebook.com/business/m/pixel-platform-install/).

It is important to understand that this plugin only works if the Facebook Pixel is already installed on your website. This extends your pixel to include the donation activity coming from your GiveWP forms.

= I have a pixel on my site, and the add-on is activated, but I don't see my events happening in Facebook Ad Manager. What do I do? =

Most likely you have some sort of Javascript error on your website that is preventing the pixel from firing correctly. Here's a helpful support article on how to troubleshoot javascript errors on your WordPress website.

== Screenshots ==

1. When activated, this addon will help you trigger the "Donate", "Purchase", and "Complete Registration" events as seen in your Facebook Ad Manager account.

== Changelog ==

= 1.0.1: February 9th, 2021 =
* Adds a nifty link to the Installation Guide documentation

= 1.0.0: November 6, 2020 =
* Initial plugin release. Yippee!
* Adds Donate event
* Adds Purchase event with currency and donation amount
* Adds CompleteRegistration event if a user account is generated during the donation
