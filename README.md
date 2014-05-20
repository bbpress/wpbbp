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
* Select the `/wp-content/themes/wpbb.wxr` file click `Upload file and import` (assign posts to an existing admin user)
* Dashboard -> Pages -> Edit the 'Forums' page and select the page template `bbPress - Support (Index)` and save the page
* Dashboard -> Settings -> Reading  -> Select a 'Static Page' for the 'Front Page' and select `Forums`

## bbPress 1.x Configuration

* Original bbPress 1.x theme templates `/bbpress-1x-dotorg-theme` (Supplied by @nacin)

## Tasks

* [ ] Test WP\_INTERNATIONAL\_FORUMS Constant
* [ ] Test INTL_FORUMS_LOGIN Constant
* [ ] Add bbPress View `support-forum-no`
* [x] Add bbPress View `modlook`
* [ ] Add bbPress Views `plugin-reviews`, `plugin`, `theme-reviews` and `theme`
* [ ] Add legacy `header.php` and `footer.php` to repo
* [ ] Test WPORGPATH Constant (header.php, footer.php etc)

* [ ] Add `resolved/not resolved/not a support question` support bbPress #1720
* [ ] Add support for 'moderator' only posted forum see http://wordpress.org/support/forum/wp-advanced
* [ ] Add support for drop down form to add WordPress version to topic
* [ ] Add 'Mod Watch' see http://codex.wordpress.org/Forum_Welcome#Being_.27Mod_Watched.27_or_Banned
* [ ] Fix/Redo/Update text_domain strings
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


## Decisions

* [ ] Who should be able to subscribe to entire forums? Everyone or Moderators only? (excluding plugin/theme authors)
* [x] Depreciated `untagged` view http://wordpress.org/support/view/untagged
* [ ] Single Forum and Single Topic Templates Notices (at the top of the page)
* [ ] Should bbPress' own search and search form be used and if so where?

## WordPress Support Forums Moderator Wish List
* [ ] Add bozo bbPress [#459](https://bbpress.trac.wordpress.org/ticket/459)
* [ ] Add ability to automatically delete bozo's users posts (topics and replies)
* [ ] Ipstenu's 'button of power' <- Hitting that button on a user will mark the user as a bozo on forums, ideas, plugins, themes i.e. Any of the sites in the multisite network
* [ ] Per forum views, eg. 'no replies' or 'Not Resolved' for each forum
