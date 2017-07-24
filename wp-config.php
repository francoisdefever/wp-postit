<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'CONSO');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'yojimbo');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '6666NAna6666');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k1h,rT^HS33jAPzR~vK08Y?(I~Y.gB:j9k6UB]:~j1*=hf,gr&O?(s]^7C(j>+Lf');
define('SECURE_AUTH_KEY',  '!J]h2C#N_UB?HJ1vEr+<?I#Az^uaFy=0C#XvvkUkO& c4mSJR]c#L=Mr@~b>IZ2H');
define('LOGGED_IN_KEY',    'Ab o;W%6k:Vk;G? :sCO#o_u)^ Z;;%qvc=}fiUodvkLSS1|=dhQIIw_@!xUlgO.');
define('NONCE_KEY',        'I[]z2L<Kjs#YKlXl0SK^gk(]Vj`mmXaKg4 ,4g$FwYFo0chrd|DQokE2Um|/YZ0s');
define('AUTH_SALT',        '#0Yudo,t+=Pg.G0isbD~P4HOg<;Os*:&RM]0(S?AvbleHy}[{4DUG/8YQ=nFe*](');
define('SECURE_AUTH_SALT', 'dS5l@xj+WG>Uv}],q0HpteH,sEnj_#!/YbzBc=VL.t5%3P2%26#-e 3*)_ru%D=#');
define('LOGGED_IN_SALT',   '7TPs6^Hb^p~p`<YL)PwxmFDHi9nbyo.;nL-o(%mdV@{XG#5uY(Q~l.Y8L8;v=;oc');
define('NONCE_SALT',       'N$BD^|9at:wT~R{5gT7=v|wIUSuD=x@g5/}%xNcb55DePYLfls#;T9%??rhP7$A6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');