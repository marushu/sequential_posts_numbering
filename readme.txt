https://travis-ci.org/marushu/sequential_posts_numbering.svg?branch=master


=== Sequential posts numbering ===
Tags: posts, lists
Requires at least: 4.4
Tested up to: 4.9.5
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin will serialize your posts. Since this plugin simply outputs numbers only, it's up to you to incorporate it into html or styling with CSS. :)

== Description ==

This plugin will serialize your posts. Since this plugin simply outputs numbers only, it's up to you to incorporate it into html or styling with CSS. :)
It demonstrates its power with archives and single pages in the loop. :P

== Installation ==
- A plug-in installation screen is displayed on the WordPress admin panel.
- It installs it in `wp-content/plugins`.
- The plug-in is made effective.
- Place `<?php if ( function_exists( 'sequential_posts_numberting' ) ) { echo sequential_posts_numberting(); } ?>` in your templates(archive, single, etc...)

= Parameters =
- post_type: WordPress post type. Default is post.
- posts_per_page: Number of posts to include on one page. Default is -1.
- post_status: Post status. Default is publish.( private, pending, draft, auto-draft.... )

== Changelog ==

= 0.1.0 =
- First release :)

== Contact ==
Twitter: @marushu
email: shuhei.nishimura[at]gmail.com

