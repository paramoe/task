<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z{2]tmq6wGWdFPjEvFD-]ViO+F:7!WaXK%zu5p_IYOMgFN<0T{2VI[7ukhZue2N>');
define('SECURE_AUTH_KEY',  ')}<E#Qbn#*`EO%YM*1ND>L5%@u`bTA}2pV/fft1<#~<gRFh)EBP{yxp253]p(S,h');
define('LOGGED_IN_KEY',    'uk!s3B1XD?hYF=_Q-$qOT_#NBE{MgGd~pg.sw#D*&Eo{rXJ)e64.eGHjOh=(S:cm');
define('NONCE_KEY',        'oDy~~1W[>cB+l2|,jEpPQ&73*WRJ+T~}!RIRbZHV=,XC,fx#FK,#D#;n7{nQ)Ri,');
define('AUTH_SALT',        '@%yax?fAW07z-daNA0dqnEWMQA5H?. BJEQMf+#-}^,X+.l|64>~?gI?t8TP{4f?');
define('SECURE_AUTH_SALT', 'a$WdgHmGLxy!}&]%./:ayy$` taU.@8Spo:[|CpW-h9#ZgPnhj0X>c~ezQB&G@@U');
define('LOGGED_IN_SALT',   '9yL]/WuF,~=/fD]r~Qp4>1n{P}1IMOv4!t$3k)6wLlFSKjp[P^jWc40n()@p8Yr1');
define('NONCE_SALT',       'X~?Bcr?pgYl7/b&v_3osWo?~OES(5X DA:vl{azO,%0S.Q]hQ95XpuX93,n #v:F');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
