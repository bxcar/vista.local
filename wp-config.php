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
define('DB_NAME', 'vista');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R6uh;f:W0$?xYnc2OcDnAwo[=oM(b_.Z}m>XE4p~FFJU`uQFcXl*ufIlK(KU,Ew{');
define('SECURE_AUTH_KEY',  'uaZ2~G0fP7?ss=-Cc,K=me0WCQ7ZD8K9S9w&.- 4s1u7gY2JegK8[2>)[Ar)_~}?');
define('LOGGED_IN_KEY',    'bQqYyKm+ V9=JE4;RpHxzto1S]?V}e}LWB@ZRwVyQj6JrWqqR|xsE==~xs]TZXOb');
define('NONCE_KEY',        'W#VP}=.[>&wJoY4a,5&T&.VMoYzjEZ*EO72&M0Y`0>i|s^ 3wyx@Lj0PvKZ6kWT*');
define('AUTH_SALT',        'S+#{nLA_M0af;4~NaP6#!f`#MRUT<:fEC><5q ^i0US5 !`eU4i$[1}a)d9+fHPG');
define('SECURE_AUTH_SALT', 'k_nh[q&`Z_?50k/,)zpQNN6J6ZY2yn6e[^**(ikvd39]=;Z)5,YhEq5]/Rk%3Aq@');
define('LOGGED_IN_SALT',   '2^3;`m1/uH57Q1F`20z<lf0^7XXD3eOY^mHa[9bN!cpWdsb)6^fo,OD8p<Z X!0N');
define('NONCE_SALT',       'EPLC&RcDcOn_kU1Y!Q!`JpvCvZ9~,]HtX7AeOE5tr/b/I>=fs~`64:KCrXtOBSU4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
