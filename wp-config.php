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
define('DB_NAME', 'eliteproxy_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'eliteproxy_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '2wsx@WSX');

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
define('AUTH_KEY',         '9xBN+!w/vQ-v>;inAY6LYlHR`N8I>+mH3>q=F+A)c3%)V0mg0,ptx)?9^I/`[oT&');
define('SECURE_AUTH_KEY',  '1AG2J^MgMmS?XtJgAA9%(pR?M>8vX(`f]X<2{[&Z{xH pk5S3A],r? 9`XB+Cn[b');
define('LOGGED_IN_KEY',    'r5m0s7=1G{ky/8Av:Kn-`%]| Bt t4SaJmw9r;~pd/(C&-W{8)EIERVw!MZaxHS:');
define('NONCE_KEY',        '@hl7[h*_R,tPdtgG^lhs_Gy!!h]|Jd=)r:dMSaamh{RCJK?%.^ewI.2Lw*-e`-hz');
define('AUTH_SALT',        '|)nGUs+5G,lA4sE:C=wcFiC{on:s4aKO}wW+%RB<#<wFWsj+0>Pr@rV!RX/^^sL@');
define('SECURE_AUTH_SALT', 'VW%rLauja)4|!]BcnYa{i}0!_W){$vy91N{ 610n$<? ~Iz~w5uC ^;X@o=ze$%]');
define('LOGGED_IN_SALT',   'GnN9-<b&K:CU^jz76o>s!^z#O>!|+,z+4izZs,aTecj|o5B0([c`1g=z5Qwam7Av');
define('NONCE_SALT',       '{N[IOLkw+Y+YDz/$iR=yxr:N#_]@ds&W@Sb_Kuuu|#yW*Sc6c|ZuI(~.s^Z/xW;.');

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
