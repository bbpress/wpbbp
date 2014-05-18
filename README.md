# WordPress Support Forums using bbPress 2.x

Customized bbPress templates and CSS for WordPress Support Forums

## bbPress 2.x Configuration

* Forum Root Slug -> Forum Root set to `support` <- Must be to match current WP setup
*
* Topics & Replies set to 3 per page to invoke pagination
* Topics & Replies RSS set to 3 per page invoke pagination
* Define WPORGPATH EG. `define( 'WPORGPATH', dirname( __DIR__ ) . '/wp-content/themes/wporg-support/' );`

## bbPress 1.x Configuration

* Original bbPress 1.x theme templates `/bbpress-1x-dotorg-theme` (Supplied by @nacin)

## Sample Data

* Sample data is contained within `wpbb.wxr`
** WordPress page: Title `Forums`, Slug `support` and content per `http://wordpress.org/support/`
** bbPress Forums per forum list at `http://wordpress.org/support/`

## Tasks

* [ ] Test WP\_INTERNATIONAL\_FORUMS Constant
* [ ] Test INTL_FORUMS_LOGIN Constant
* [ ] Add bbPress View `support-forum-no`
* [x] Add bbPress View `modlook`
* [ ] Add bbPress Views `plugin-reviews`, `plugin`, `theme-reviews` and `theme`
* [ ] Add legacy `header.php` and `footer.php` to repo
* [ ] Test WPORGPATH Constant (header.php, footer.php etc)
* [ ] Add bozo bbPress #459
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

* [ ] Template notice after subscribing to a topic or forum eg. 'You are now subscribed to this topic - unsubscribe or view your subscriptions'
* [x] Allow topics to be stuck to individual forums
* [ ] Add ability to automatically delete bozo's users posts (topics and replies)

## Decisions

* [ ] Who should be able to subscribe to entire forums? Everyone or Moderators only? (excluding plugin/theme authors)
* [x] Depreciated `untagged` view http://wordpress.org/support/view/untagged
* [ ] Single Forum and Single Topic Templates Notices (at the top of the page)
* [ ] Should bbPress' own search and search form be used and if so where?
