<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'DzaKyz01m');

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
define('AUTH_KEY',         'Kq)sH1@f+Qm75o5#D+[PR$Zp`Qj0=yS[-%gK=p!9j-K7e>V%$L Az`5w?<P|0.z-');
define('SECURE_AUTH_KEY',  'GV#m,gKjEM2^04%s;F`f7[,fK,+vC]8*39p-,d5Ko+#VsV>,Bd+k1k9>ZG6X%O@j');
define('LOGGED_IN_KEY',    'S`t|8L;)p=OR/!!YFUdja?XG#F!%02n7{c:=3%ZuRpB/P.0KH%8;YJ& qvS?YJHW');
define('NONCE_KEY',        '3>}W{5@1Oj^qn!{]4C~#7wP2Lj{!6|x!5d-|>r?4u{7;vq4K+m04J|!O&YT.nS9t');
define('AUTH_SALT',        'Qe+m955*+7Dv}*<=udzCEgUmz1R4&K{+;cL* tx/N5p!Jp-:z@H@pF suQ:^G6yt');
define('SECURE_AUTH_SALT', 'SPg?F[ycQ58kC!2-,2x&m*-K@,r7^bB{QMqpJ1d3#[H=SAnD/Y2|sw+#9_uc4zD`');
define('LOGGED_IN_SALT',   'tq`sZ=;_bD?jUv3Kg-0 ZHYZM+zW7E;q#a^(Z.W8u1%-NKcPgli$L]u1LQFrj|}-');
define('NONCE_SALT',       'gVHivVj$5ac,0?m;YehC!xFyRS78;`SAfYd,d;$@Ao{JP-0c;BR`1RpRw-WA)mAJ');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
