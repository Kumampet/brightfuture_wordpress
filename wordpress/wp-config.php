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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'brightfuture' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QRnt6n{O;B9lK$Cu~{LtY6hpUZb27v(9[JI:/ 9z{!/3i~7%w&Z]b2#C8,`e*M-+' );
define( 'SECURE_AUTH_KEY',  '|FEX4$?DOW(d$;k&AQDH<s^fT~u9U}#_iab^4sM7D.$GNmvS`>95)hQ>/`^H*Ydi' );
define( 'LOGGED_IN_KEY',    '^e!X_dr7)JPd@mx)44qmHfh#C5]Rmp*Gbs8|W>jHfaljDGb8mO($+m=#,Ra9imOA' );
define( 'NONCE_KEY',        'H_J|c6yi9Q/[raDSBEP0/E`SU~I0HrW2x]^Hq0M34oq,zg/g(78IkLFnb[^3jPf8' );
define( 'AUTH_SALT',        't.Q<vIsl4+]vKgX{#sZ2QUl!OcyjwMPULFL`-;M[ZP1^QZvUX/3M!5IT0x{/g+n ' );
define( 'SECURE_AUTH_SALT', 'NsDE8aV#&-`Z|y_<1^u7P*(~HJVAuBaeDUYoo#vTYr:u?pg1sFgFc%r4vxhh AvS' );
define( 'LOGGED_IN_SALT',   '}ae_6T8AV_%dW&4h%$xdJ`Lk,%ydY?b?g]9WpiCRVXEY=Z[jX;#2<<K_0%O,uIAG' );
define( 'NONCE_SALT',       'qS*~DY#6?9Lf.}PCaoq*$J/[_8[9[&0]nlYspI|]~G]Z/t=hHR6&i6#r<!*U{5J^' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'bf_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
