<?php

/////////////// 测试用动行时间 ////////////////////
function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());   //microtime() 返回：毫秒 时间戳 0.63559400 1469065900
    return ((float)$usec + (float)$sec);
}
$d1 = microtime_float();



define('DS', DIRECTORY_SEPARATOR);                //目录分隔符,自动匹配。win:\, unix:/
//define('ROOT', __DIR__ . DS);                   //根目录 原1.0
define('ROOT',dirname(str_replace('\\','/',dirname(__FILE__).'/')) . DS);
define('FRAMEWORK', ROOT . 'framework' . DS);     //框架目录
define('VENDOR', ROOT . 'vendor' . DS);           // 第三方类库目录

/* ========================================================================
 *  URL 静态资源js, css, img 路径
 * ======================================================================== */
define('SITE_URL', '/');                                   //网址域名,注意修改。 可以是要目录
define('JS_URL', SITE_URL . 'assets/js/');                 //前台静态资源路径,默认不带平台名
define('CSS_URL', SITE_URL. 'assets/css/');
define('IMG_URL', SITE_URL. 'assets/img/');
define('ADMIN_JS_URL', SITE_URL . 'assets/admin/js/');     //后台静态资源路径
define('ADMIN_CSS_URL', SITE_URL. 'assets/admin/css/');
define('ADMIN_IMG_URL', SITE_URL. 'assets/admin/img/');
define('IMG_UPLOAD', SITE_URL . 'upload/');                //文件上传路径




// 初始化框架
include FRAMEWORK . 'init.php';

/////////////// 测试用动行时间 ////////////////////
$d2 = microtime_float();
//msg("动行消耗时间（index.php）：" . ($d2-$d1));

