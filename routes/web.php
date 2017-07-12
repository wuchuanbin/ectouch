<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', 'IndexController@actionIndex');
Route::any('activity.php', 'ActivityController@actionIndex');
Route::any('affiche.php', 'AfficheController@actionIndex');
Route::any('affiliate.php', 'AffiliateController@actionIndex');
Route::any('api.php', 'ApiController@actionIndex');
Route::any('article.php', 'ArticleController@actionIndex');
Route::any('article_cat.php', 'ArticleCatController@actionIndex');
Route::any('auction.php', 'AuctionController@actionIndex');
Route::any('brand.php', 'BrandController@actionIndex');
Route::any('captcha.php', 'CaptchaController@actionIndex');
Route::any('catalog.php', 'CatalogController@actionIndex');
Route::any('category.php', 'CategoryController@actionIndex');
Route::any('certi.php', 'CertiController@actionIndex');
Route::any('comment.php', 'CommentController@actionIndex');
Route::any('compare.php', 'CompareController@actionIndex');
Route::any('cycle_image.php', 'CycleImageController@actionIndex');
Route::any('exchange.php', 'ExchangeController@actionIndex');
Route::any('feed.php', 'FeedController@actionIndex');
Route::any('flow.php', 'FlowController@actionIndex');
Route::any('gallery.php', 'GalleryController@actionIndex');
Route::any('goods.php', 'GoodsController@actionIndex');
Route::any('goods_script.php', 'GoodsScriptController@actionIndex');
Route::any('group_buy.php', 'GroupBuyController@actionIndex');
Route::any('message.php', 'MessageController@actionIndex');
Route::any('myship.php', 'MyshipController@actionIndex');
Route::any('package.php', 'PackageController@actionIndex');
Route::any('pick_out.php', 'PickOutController@actionIndex');
Route::any('pm.php', 'PmController@actionIndex');
Route::any('quotation.php', 'QuotationController@actionIndex');
Route::any('receive.php', 'ReceiveController@actionIndex');
Route::any('region.php', 'RegionController@actionIndex');
Route::any('respond.php', 'RespondController@actionIndex');
Route::any('search.php', 'SearchController@actionIndex');
Route::any('sitemaps.php', 'SitemapsController@actionIndex');
Route::any('snatch.php', 'SnatchController@actionIndex');
Route::any('tag_cloud.php', 'TagCloudController@actionIndex');
Route::any('topic.php', 'TopicController@actionIndex');
Route::any('user.php', 'UserController@actionIndex');
Route::any('vote.php', 'VoteController@actionIndex');
Route::any('wholesale.php', 'WholesaleController@actionIndex');
