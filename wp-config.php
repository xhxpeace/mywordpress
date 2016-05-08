<?php
/**
 *WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '911006');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'axd2Or*K%Fdd;CXkOcne[}I)WnqY=hHwW1}AG7&(W%Z53.fG/fe6U}}aWfV)w)pW');
define('SECURE_AUTH_KEY',  'p|l3rv31S1~de)99%&5[HOf/M=]mYs`FpRA~Yn2AZ~Qu_5(q}C,OJ1/6cr8-L?`T');
define('LOGGED_IN_KEY',    'Pp%<J]:L4&yw-@;>WUY;ofzMzUNmgRA.:Q$Jigz;X!}[!}#$wgK1U)E>~EbR!Qc,');
define('NONCE_KEY',        '!GJd;jxb$0dEG:~Yt1|azIL$O!.9(3;p$.%OuBP}BX7~#P#-5(N#1p*/{L-f-8ge');
define('AUTH_SALT',        'kcx:k6i=w`M#Bn<T=in7I?=1n9;j.b96SkBxNpL!1}AnROoxM Y%SRAB*DZ(Z`P6');
define('SECURE_AUTH_SALT', '4<bHuck6qhVK^8wyk1/:/M{P.~>CJlz,G1S/BVs)3Toxmc5lcSgKa+9`5n{5ZYr-');
define('LOGGED_IN_SALT',   'o!6cZbK|bj <1b;5U${AKUxv~cQy!=s$YR-O[`Ed;`zp {P,)b^k|C9UA_lGi:^^');
define('NONCE_SALT',       'M!ubFMU*f8+bXY%Lm@:R?2z!<_Bg-&>hM~MD*}T@bF&0jLu+/3$sqaMad7+;Z}/T');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
