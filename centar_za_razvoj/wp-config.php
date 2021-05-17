<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'centar_za_razvoj' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', 'root' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-*JLAYa|//AAfGQ|#A!s,`Z-9a ;$cMt0@yc(=?,#-q?h4h?$&&d//F6>%lB(<6]');
define('SECURE_AUTH_KEY',  'l7Gn=+VG,.Up`++?6A<asZ]+v+-h.o>C?mt%EQQS>uMjeOpRaNvman3OW@5}Q|gi');
define('LOGGED_IN_KEY',    'lt^vBe0+Lc!.-avF<slgK0[40V3!Ryb<CyJFC`),}2taEC^F=zhOA]ixIXiw7ILx');
define('NONCE_KEY',        'cV,u@{z;Q|}?O|EH=sIVegkLhTcQx~a`_0Zr7wx-E+tk{,q4mV8]vTC)/Qsm8vlU');
define('AUTH_SALT',        'VnvhA kPz.c-)8Maei+/6Js@QnBpXkSj)@z~@8Ki eoRRgu!k|&<jZ+Y1S}S4RYx');
define('SECURE_AUTH_SALT', 'luzgJ&n++:&Q{B:6#,hQf5MT1ac-;6j&;OKuYHpgT,N/OmEtr4`HC+0)8j|9d>@r');
define('LOGGED_IN_SALT',   'W7ju?:B};A^$jl&U.&.&P=MRbF=rzvFgm>~gcvu%`bD$tBwyuh&^3c PVchbL751');
define('NONCE_SALT',       '[PQ/que*p #n<Wxm8frRu>|UMrKx|.h;s3p^]]g![oU8N.[,@b,r0R|/$Ig)l1)@');
/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'cr_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
