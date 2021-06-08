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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'progress_worpdress' );

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
define( 'AUTH_KEY',         'zxo}e}Nm-m #2Xq53*0g-<kzy<$#IQK?^XOZ7wfiz?p^~+D?LPOudH$G(OJ~;uTb' );
define( 'SECURE_AUTH_KEY',  '@K$w{Hl1oD-|q?UPFm7@}ASpCD#T_U:>]jPjWTfFPGg2RO,7m[la 90|L!b_0;()' );
define( 'LOGGED_IN_KEY',    'QAEs7JYKdmuuMvU)IKs)./LHw,]6Yh;g+G9O&py4yupX&ytx9_N?I{~W-_EF$]IN' );
define( 'NONCE_KEY',        'DYZV1a(R%,>#7ZqF{Xq]DXseLGG:cT+r,ir!c$q -;<N@8iG&e7rnA^YvUk@q,<S' );
define( 'AUTH_SALT',        'fKwqB/@4ZV7@qC-rb-1f8Y=itiJP=rORP6P8t#,|M||jn%TV%&^qkjUj4S4M73)Z' );
define( 'SECURE_AUTH_SALT', 'fZ3&FO`vfmu3o2]O!*SfuQ9J9m($PMx[WD!:G 2tv+s*c@tkw0xXKVe5CAdTpj)5' );
define( 'LOGGED_IN_SALT',   'dkn)1HFe83J5bZ<SG56qBSiDq*<}1S#D?MB6|ZH4c/`(uKH)qHHzv;xHLh@ZWfar' );
define( 'NONCE_SALT',       '}V+aYWx:eL&68kD<1$Jhq:Orrud7D%`pm iZAc[j#3811vZZU6LaRR5<yBM27f!|' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
