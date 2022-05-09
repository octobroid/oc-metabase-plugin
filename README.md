OctoberCMS Plugin Embedding [Metabase](http://www.metabase.com/) Analytics

## Prerequisites
- PHP 7.4 >=.
- OctoberCMS 2.* >=.
- Metabase Admin Panel.
- wikimedia/composer-merge-plugin must be locked.

## How to Use
- Copy `octobro/config/metabase.php` into `config/metabase.php`.
- on your `composer.json` file, set merge plugin by wildcarding folder plugins, if they have `composer.json`. Then, begin to remove `composer.lock` and reinstall composer again.
- Go to Metabase Admin after that enable the embed mode - https://[metabase_url]/admin/settings/embedding_in_other_applications.
- Set ur Metabase Configuration into `config/metabase.php`.
- Also, add ur own `params` to reserve the visual data you want in `config/metabase.php`.
- go to menu Metabase, on the navigation backend dashboard.
