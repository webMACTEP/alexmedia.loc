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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '6z_]*`?QVx8uB8YhArn(UIrY1hmo*yqDXi?qRh$c;Dx6u?m9p !yX%qUN<,rzc%`' );
define( 'SECURE_AUTH_KEY',  ' D5eopD-l.nGS[w19+rgejgX~1hME|tZnFu>>{P<yU$hr(513H$IZ[xN`KfmH7dA' );
define( 'LOGGED_IN_KEY',    'g1%0i%T.hW}<<oGv<@%QxpteB=G8E6Bq1XNl|c u$f,7Wu.Z6jazp=RfxJs45$v@' );
define( 'NONCE_KEY',        '*zHweEve`dt4}7t~)f5xu4D ?i<a(n)8{])3$wjO.[U&C2-|I73:G_.pVL-@[JfI' );
define( 'AUTH_SALT',        'GV4ll#%i.ln;,;xd7JN#z+^A.M+h]n!Tp~M^X+l}`%4e20R**IfFD,.d$eu{{v3Z' );
define( 'SECURE_AUTH_SALT', '#2]{42I2vjnghpTO:j)l~Bvq@:d*kr~A+_BM&!mf3GKF9s2]d2PeT]Zc&RGg}@Uq' );
define( 'LOGGED_IN_SALT',   'fyI-uX]lpD;{SCS $^uPDYDAa#QiucqDlloC%5b^EmRb?%5@ikqeK6VWG{I$.Sa=' );
define( 'NONCE_SALT',       '{whjLg/9Mfca3djl^Ct|{%jE19T0Ilv+.|)2N_4^]c;d&*JQV@Q$io(Xp!ek!r&6' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'amedia_';

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
