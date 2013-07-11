This Laravel 4 package extends the built in Twitter Bootstrap styled pagination slider HTML markup to provide MRC styled pagination slider HTML markup.
Just a learning process to build a small usable customer package for Laravel

## Installation

Fiest install the package via Composer. Edit `composer.json` file and add require `maldicore/mrc-pagination`.
eg:

    "require": {
        "laravel/framework": "4.0.*",
        "maldicore/mrc-pagination": "dev-master"
    }

Next, update Composer via Command Line:

    composer update

Once update and package file downloaded, the next add service provider. Edit `app/config/app.php`, and add to the providers array.

    'Maldicore\MRCPagination\MRCPaginationServiceProvider',

Last reference the pagination style. Open `app/config/view.php`, and modify pagination item in the array.

    'pagination' => 'mrcpagination::slider',

That's it!

## Usage

Use pagination just as you would normally and the markups generated for the links will be styled customized for MRC Website.

For more info on Laravel 4 Pagination, please check out http://laravel.com/docs/pagination