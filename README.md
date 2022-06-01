# Disable Lazy Loading for IFRAMES

* Plugin Name: Disable Lazy Loading for IFRAMES
* Contributors: davidbaumwald
* Tags: iframe, lazy, loading
* License: MIT
* Requires PHP: 7.4
* Tested up to: 6.0
* Stable tag: 0.1.0

A small plugin to quickly disable the lazy loading for iframes in WordPress 5.7 and beyond.

## Description

After WordPress 5.7 is released, iframes will have the `loading="lazy"` attribute added by default.  See Trac ticket [50756](https://core.trac.wordpress.org/ticket/50756), and changeset [49808](https://core.trac.wordpress.org/changeset/49808) for the actual implementations in core.

This plugin, for the short term, is a global disabling of lazy loading for all iframes, no matter their context.

# Changelog

= 0.1.0 =
* Initial pre-release.