# WordPress Support Forums using bbPress 2.x

Customized bbPress templates and CSS for WordPress Support Forums

## Setting up your WordPress development environment

* Create a local install (MAMP/XAMPP/VVV) with the latest WordPress version
* Delete the Twenty Twelve, Thirteen and Fourteen themes from `/wp-content/themes`
* Clone the repo `git clone https://github.com/ntwb/bbPress-GSoc2014.git` into `/wp-content/themes`
* Open `wp-config.php` and just before `/* That's all, stop editing! Happy blogging. */` add:
 * `define( 'WPORGPATH', __DIR__ . '/wp-content/themes/' );`
* Dashboard -> Appearance -> Themes -> Activate the `WPBBP` theme
* Dashboard -> Settings -> Permalink  -> Change the permalinks to 'Post name' (`/%postname%/`)

## bbPress 2.x Configuration

* Checkout the bbPress SVN repo into `/wp-content/plugins`
* Install and build bbPress from a terminal/command prompt `npm install` and `grunt build`
 * Full details in the [README.md](https://github.com/ntwb/bbPress/blob/master/README.md)
* Activate the bbPress plugin
* Dashboard -> Settings -> Forums -> Forum Root Slug -> Forum Root set to `support` <- `wordpress.org/support`
* Dashboard -> Settings -> Forums -> Topics & Replies set to 3 per page to invoke pagination
* Dashboard -> Settings -> Forums -> Topics & Replies RSS set to 3 per page invoke pagination
* Dashboard -> Tools -> Import -> Install the `WordPress` importer and `Activate Plugin & Run Importer`
* Select the `/wp-content/themes/wpbbp.wxr` file click `Upload file and import` (assign posts to an existing admin user)
* Dashboard -> Pages -> Edit the 'Forums' page and select the page template `bbPress - Support (Index)` and save the page
* Dashboard -> Settings -> Reading  -> Select a 'Static Page' for the 'Front Page' and select `Forums`

## bbPress 1.x Configuration

* Original bbPress 1.x theme templates `/bbpress-1x-dotorg-theme` (Supplied by @nacin)

## WordPress.org source files reference
* CSS Assets https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/style
* WordPress.org header https://wordpress.org/header.php == [/header.php](https://github.com/ntwb/bbPress-GSoc2014/blob/master/header.php)
* WordPress.org footer https://wordpress.org/footer.php == [footer.php](https://github.com/ntwb/bbPress-GSoc2014/blob/master/footer.php)

Note: Ensure `<link rel="stylesheet" href="//s.w.org/style/forum-wp4.css?13" />` is not removed in `header.php`
ToDo: See `wp_enqueue_styles in` `/wporg-forums/functions.php`

## Tasks

### Environment
* [ ] Test `WP_INTERNATIONAL_FORUMS` Constant
* [ ] Test `INTL_FORUMS_LOGIN` Constant
* [ ] Test `WPORGPATH` Constant (header.php, footer.php etc)

### bbPress Views
* [ ] Add bbPress View `support-forum-no`
* [x] Add bbPress View `modlook`
* [ ] Add bbPress Views `plugin-reviews`, `plugin`, `theme-reviews` and `theme`
* [ ] Per forum views, eg. 'no replies' or 'Not Resolved' for each forum
* [ ] Create a view of 'no replies' and 'open' (i.e. not closed)

### bbPress Moderation
* [ ] Add `resolved/not resolved/not a support question` support [bbPress #1720](https://bbpress.trac.wordpress.org/ticket/1720)

### bbPress Moderator Tools
* [ ] Tools for WordPress dot org forum moderators https://github.com/keesiemeijer/WordPress-moderator-tools
* [ ] Recent activity e.g http://www.stoerke.be/recentforumactivity/?profile=netweb&pages=2


* [ ] Add support for drop down form to add WordPress version to topic (see 1.x theme `version_dropdown()`)
* [ ] Add 'Mod Watch' see http://codex.wordpress.org/Forum_Welcome#Being_.27Mod_Watched.27_or_Banned

* [ ] `Hacks` forum is a sub forum of `Plugins and Hacks`
* [x] Added `bbp_forum_subscription_link` with RSS link to 'content-single-forum.php' template
* [ ] Adding tags eg. 'modlook' etc, can anyone add a new tag?
* [ ] Blocking users i.e. `?spammer=true`
* [ ] Give users the ability the convert a review to a support topic see https://twitter.com/chip_bennett/status/435477320628207616
* [ ] Add support for custom titles for Plugin/Theme authors ala 'Official Rep'
* [ ] Add a 'firehose' view, all topics and all replies sort by date/time created
* [ ] Do not 'bump' - Can we add a check for the content that if it is eg less than 3 words and contains bump? and/of in form-reply check if the current user was the last user reply and put up a notice outlining the bump rules.
* [ ] Having the option to add an "mod eyes only" note to the account is something that's been on the wish list since... forever.
* [ ] Template notice after subscribing to a topic or forum eg. 'You are now subscribed to this topic - unsubscribe or view your subscriptions'
* [x] Allow topics to be stuck to individual forums

### bbPress B-Tag
* [ ] Add b-tag bbPress [bbPress #459](https://bbpress.trac.wordpress.org/ticket/459)
* [ ] Add ability to automatically delete b-tagged users posts (topics and replies)
* [ ] Blacklist support aka b-tag'ing accounts e.g an auto-delete-post blacklist for really lame keywords (like 8grid)
* [ ] Ipstenu's 'button of power' <- Hitting that button on a user will mark the user as a b-tag on forums, ideas, plugins, themes i.e. Any of the sites in the multisite network

### bbPress Users
* [ ] Add revisions to user profile edits
* [ ] Allow moderators to edit users profiles

### Misc
* [ ] Fix/Redo/Update/Verify text_domain strings

## Decisions

* [ ] Who should be able to subscribe to entire forums? Everyone or Moderators only? (excluding plugin/theme authors)
* [ ] Single Forum and Single Topic Templates Notices (at the top of the page)
* [x] Should bbPress' own search and search form be used and if so where?

## Make Support Forums Tickets
https://meta.trac.wordpress.org/query?status=accepted&status=assigned&status=new&status=reopened&status=reviewing&component=Support+Forums&col=id&col=summary&col=status&col=owner&col=type&col=priority&col=component&order=priority

