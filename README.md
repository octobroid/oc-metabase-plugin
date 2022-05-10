OctoberCMS Plugin Embedding [Metabase](http://www.metabase.com/) Analytics

## Prerequisites
- PHP 7.4 >=.
- OctoberCMS 2.* >=.
- Metabase Admin Panel.
- [wikimedia/composer-merge-plugin](https://github.com/wikimedia/composer-merge-plugin) must be locked.
- [ipeevski/metabase-php](https://github.com/ipeevski/metabase-php) Module

## How to Use
- Copy `octobro/config/metabase.php` into `config/metabase.php`.
- on your `composer.json` file, set merge plugin by wildcarding folder plugins, if they have `composer.json`. Then, begin to remove `composer.lock` and reinstall composer again.
- Go to Metabase Admin after that enable the embed mode - https://[metabase_url]/admin/settings/embedding_in_other_applications.
- Publish ur Metabase Dashboard who want to embed. The procedure should be : 
  - On the top right, click sharing icon
  - Then, click Section "Embed this dashboard in an application"
  - Finally, click Blue Button "Publish"
- Set ur Metabase Configuration into `config/metabase.php`.
- Also, add ur own `params` to reserve the visual data you want in `config/metabase.php`.
- go to menu Metabase, on the navigation backend dashboard.
