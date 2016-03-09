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
define('DB_NAME', 'consulting');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'a&i[M_e(i/[e>{QU{)clP25JoRN@k|qi.#hT!I9xZe7//r~;!7sJ`9K_mhpmHf?/');
define('SECURE_AUTH_KEY',  'G?sG=e[+ho;wfz/-KQc@#gNGUzK8 Ii$mP(g?Fz+l|_*|7#?Hm|-[.,|{1uPg*mQ');
define('LOGGED_IN_KEY',    'P);V4}c-c@evc(vG4FP623+m1U]t5gt|*;OkE&HdhPB;<TguE^ s7hmc{2?LE!9-');
define('NONCE_KEY',        'Q4+ (_IsnjA:wU73zg*{L#*-D+$*sr|6%!?u7UY<;{fG3fp8m}[=K(stX%RsCWm2');
define('AUTH_SALT',        '`0!L2FE^NHap~27(.$n8Eu6n>jy)m7y=kf.i<O>c<7+Fe!}XMg&H5Ts,8D7H?=f[');
define('SECURE_AUTH_SALT', '=u?e!5f.{^ok^flq5B:/b <0iAL56r0VUN:#5/tIXLc0R%M7O NxNoMs]OKN=n`O');
define('LOGGED_IN_SALT',   '.[a2Uly5WEHtBIHZYt[:b8?h-M-eY,qHVFUlP#ubT_>?.s_cpDPw,OV5$eZ}ejO(');
define('NONCE_SALT',       'o`a8G8V 4JrJ7/Ko7e$jZ:xlyhfJ(5?X+XLP.JG;(Ss..RUpbnDm<QQ=,:#6KHgC');

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
