<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
/** Имя базы данных для WordPress */
define( 'DB_NAME', "mqdfpzmy_propertiestable" );


/** Имя пользователя MySQL */
//define( 'DB_USER', "indiamou_wpuser" );
define( 'DB_USER', "mqdfpzmy_wp_user" );


/** Пароль к базе данных MySQL */
//define( 'DB_PASSWORD', "WgfNrleK6fU}" );
define( 'DB_PASSWORD', "Clu&ol2Bz0fl" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}!Bd-DET%a1r,Z#.2yTh,y$n:p#M_q`#S.}wF&F=lc1h{=a)q@^j}a79QoKL@K*P' );

define( 'SECURE_AUTH_KEY',  'Qs{yn)@?R.z(gri P ;$Q!(DNYNp@,?j4(`fLZYyCI2wBNBJa#?Tw/P*>dn1mp))' );

define( 'LOGGED_IN_KEY',    '}%~8sOqTi2uQCh,8fcu1g-sIvDd?%([;.72$!F#~vYp4cf3x;{l--}udZ3.n^|Rq' );

define( 'NONCE_KEY',        'M{$!SLUzPAEQ(xoukSpdr:AK;u0TkeAZ(AJc0hT#a[CN1`zzO_F`(S[Pw>{kC8O^' );

define( 'AUTH_SALT',        'Q*Yj<5TsN(B$ *Z_mgn6o<ftx!E]Abt_ &aIo(3O@FhTR~tfk*d_<I.E}~;aF^%>' );

define( 'SECURE_AUTH_SALT', 'F`7 g-~Ng?3}JaJk<[Vz/*X5nn^%4UZyTp?d7hK}7PlMOX~B^G,8(|ITc:q+9D[+' );

define( 'LOGGED_IN_SALT',   'VZ%%Sd{Y__.&_imiP[k/tk`X%cUYhB8M{j_f9)(PKyU >nPg0*]`aX]djfbFbV1l' );

define( 'NONCE_SALT',       ':,mT%KQM#x8AvTL^-N0pQVH|E_ W{0-.`ffII$mm84+d/H8b4V5->s}]HzK.kr^F' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
