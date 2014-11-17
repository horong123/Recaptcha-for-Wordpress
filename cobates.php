<?php
/*
 *
 * Plugin Name: cobates
 * Plugin URI: https://github.com/horong123/wp-recaptcha
 * Description: This is a fork of wp-recaptcha, a recaptcha for wordpress plugin by Jorge Pena. Currently it only applies recaptcha without mailhide.
 * Version: 0.0.1
 * Author: Rusman Tambunan
 * Author URI: http://rusmantambunan.blogspot.com
 * License: GPL2
 *
 *  Copyright 2014  Rusman Tambunan  (email : rusman.tambunan-(at)-horong123-(dot)-com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

define('ALLOW_INCLUDE', true);

require_once('recaptcha.php');
//require_once('mailhide.php');

$recaptcha = new reCAPTCHA('recaptcha_options');
//$mailhide = new MailHide('mailhide_options');

?>
 
