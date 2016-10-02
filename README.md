# SC Codes Workshop

Demo code for the SC Codes workshop in Greenville, SC.

The HTML directory simply contains an example page in static markup. The theme directories contain fully-functioning themes that can be installed into the `themes` directory of your local WordPress installation.

You are free to use the code here as you see fitl. Please note, however, that these are just demos and not really intended for production. For the sake of simplicity, some best-practices (such as escaping) have been ommitted. See the Underscores starter theme for a more full-featured example and a production-ready starting point.


## Getting Started

If you're new to WordPress, there are a couple options to getting a local development environment up and running. The easiest way to get started would be to install a software stack, such as MAMP or WAMP. The WordPress Codex has a [detailed walkthrough](https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP) on how to get up and running wiht that.

Alternatively, you can take the route of a virtual development environment, using Vagrant. VVV is a popular Vagrant configuration for WordPress development. Note that this route may require a little bit more development warewithall to get up and running than something like MAMP would. That said, there is a [helpful guide](https://make.wordpress.org/core/handbook/tutorials/installing-a-local-server/installing-vvv/) in the WordPress.org development documentation for this as well.

Lastly, the aforementioned WordPress.org development documentation has a more detailed page dedicated to [Setting up a Development Environment](https://developer.wordpress.org/themes/getting-started/setting-up-a-development-environment/),if you'd like to read through that.

You can read more about getting started with WordPress on [this handy guide in the Codex](https://codex.wordpress.org/Getting_Started_with_WordPress).

### Installing The Themes

Once you have a local WordPress installation up and running, you can install the themes from this repository in one of two ways:

The first method would be to upload the theme folders (_not_ the `html` folder) to the **wp-content/ > themes/** directory in your local installation.
Alternatively, you can also install a theme via the WordPress Admin dashboard from the **Themes -> Install Themes** section. From there, click on the Upload link at the top of the page. Then, click the **Choose File** button, select the archive of your theme from your local computer and press the **Install Now** button.


## Demo Files

### Theme Demo

A demo showing the basics of a WordPress theme structure.

Resources:

- [Themeshaper - Theme Tutorial (2nd Edition)](https://themeshaper.com/2012/10/22/the-themeshaper-wordpress-theme-tutorial-2nd-edition/)
- [Tuts+ - Creating a WordPress Theme From Static HTML](https://code.tutsplus.com/series/creating-a-wordpress-theme-from-static-html--wp-34294)


### Child Theme Demo

A demo showing the basics of setting up a WordPress child theme.

Resources:

- [WordPress Codex](https://codex.wordpress.org/Child_Themes)
- [Smashing Magazine - How To Create And Customize A WordPress Child Theme](https://www.smashingmagazine.com/2016/01/create-customize-wordpress-child-theme)


### WP-API Demo

A very simple demo theme using the WP-API.

**Requirements:**
- [WP-API plugin](https://wordpress.org/plugins/rest-api/)
- [WP Basic Auth Plugin](https://github.com/WP-API/Basic-Auth) (Only if authentication is needed. Not used in this demo. Not meant for production!)


### Slides

[https://speakerdeck.com/danielwrobert/wordpress-sc-codes-workshop](https://speakerdeck.com/danielwrobert/wordpress-sc-codes-workshop)
