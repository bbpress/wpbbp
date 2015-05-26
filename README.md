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


