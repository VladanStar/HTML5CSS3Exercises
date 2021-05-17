<?php
/*
 * Copyright (c) 2008 Kimmo Suominen, 2010-2018 Milan Dinić
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer
 *    in the documentation and/or other materials provided with the
 *    distribution.
 * 3. The name of the author may not be used to endorse or promote
 *    products derived from this software without specific prior
 *    written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED.  IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 * GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN
 * IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */

/*
 * Plugin Name: Српски превод на латиници
 * Plugin URI:  https://sr.wordpress.org/latinisation/
 * Description: Овај додатак омогућује приказивање српског превода Вордпреса и његових додатака и тема на латиничном писму.
 * Author:      Српска Вордпрес заједница
 * Version:     1.3
 * Author URI:  https://sr.wordpress.org/
*/

class SrLatin {
	var $replace = array(
		"А" => "A",
		"Б" => "B",
		"В" => "V",
		"Г" => "G",
		"Д" => "D",
		"Ђ" => "Đ",
		"Е" => "E",
		"Ж" => "Ž",
		"З" => "Z",
		"И" => "I",
		"Ј" => "J",
		"К" => "K",
		"Л" => "L",
		"Љ" => "Lj",
		"М" => "M",
		"Н" => "N",
		"Њ" => "Nj",
		"О" => "O",
		"П" => "P",
		"Р" => "R",
		"С" => "S",
		"Т" => "T",
		"Ћ" => "Ć",
		"У" => "U",
		"Ф" => "F",
		"Х" => "H",
		"Ц" => "C",
		"Ч" => "Č",
		"Џ" => "Dž",
		"Ш" => "Š",
		"а" => "a",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"ђ" => "đ",
		"е" => "e",
		"ж" => "ž",
		"з" => "z",
		"и" => "i",
		"ј" => "j",
		"к" => "k",
		"л" => "l",
		"љ" => "lj",
		"м" => "m",
		"н" => "n",
		"њ" => "nj",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"ћ" => "ć",
		"у" => "u",
		"ф" => "f",
		"х" => "h",
		"ц" => "c",
		"ч" => "č",
		"џ" => "dž",
		"ш" => "š",
	);

	public function __construct() {
		add_filter( 'gettext',               array( &$this, 'convert_script' ), 9 );
		add_filter( 'gettext_with_context',  array( &$this, 'convert_script' ), 9 );
		add_filter( 'ngettext',              array( &$this, 'convert_script' ), 9 );
		add_filter( 'ngettext_with_context', array( &$this, 'convert_script' ), 9 );

		add_filter( 'load_script_translations',     array( &$this, 'convert_script_in_js_translations' ), 9 );
		add_filter( 'pre_load_script_translations', array( &$this, 'convert_script_in_js_translations' ), 9 );
	}

	public function SrLatin() {
		self::__construct();
	}

	public function convert_script( $text ) {
		return strtr( $text, $this->replace );
	}

	/**
	 * Convert script in JavaScript translations.
	 *
	 * @since 1.3
	 *
	 * @param string $json_translations JSON-encoded translation data.
	 * @return string
	 */
	public function convert_script_in_js_translations( $json_translations ) {
		if ( ! is_string( $json_translations ) ) {
			return $json_translations;
		}

		$translations = json_decode( $json_translations, true );

		if ( is_array( $translations ) && isset( $translations['locale_data'], $translations['locale_data']['messages'] ) && is_array( $translations['locale_data']['messages'] ) ) {
			foreach ( $translations['locale_data']['messages'] as $original_string => &$translated_strings ) {
				if ( ! $original_string || ! is_array( $translated_strings ) ) {
					continue;
				}

				foreach ( $translated_strings as &$translated_string ) {
					$translated_string = $this->convert_script( $translated_string );
				}
			}
		}

		return wp_json_encode( $translations );
	}
}

$wppSrLatin = new SrLatin;
