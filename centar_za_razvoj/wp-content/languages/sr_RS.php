<?php
/**
 * Replace default secret key with localized one
 */
$wp_default_secret_key = 'ovde stavite svoj jedinstveni izraz';


/**
 * Family of functions for transliteration of Serbian Cyrillic characters in URL slugs to English Latin characters
 */

/**
 * Set default transliteration option
 *
 * Check if there is value for transliteration option,
 * and if there isn't, set to true
 */
function add_ser_cyr_to_lat_slug_default_value() {
	if ( ! $ser_cyr_to_lat_slug = get_option( 'ser_cyr_to_lat_slug' ) )
		add_option( 'ser_cyr_to_lat_slug', 1 );
}
add_action( 'admin_init', 'add_ser_cyr_to_lat_slug_default_value' );

/**
 * Register field for General Settings page
 *
 * @link http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
 */
function add_ser_cyr_to_lat_slug_settings_field() {

	/**
	 * The fields are:
	 * the id the form field will use
	 * name to display on the page
	 * callback function
	 * the name of the page
	 * the section of the page to add the field to
	 */
	add_settings_field( 'ser_cyr_to_lat_slug' , __( 'Пресловљавање подлошка' ) ,
			'ser_cyr_to_lat_slug_field_callback' , 'general' , 'default' );

	// Register the setting to make sure it gets checked
	register_setting( 'general', 'ser_cyr_to_lat_slug', 'ser_cyr_to_lat_slug_validate' );
}

/**
 * Add field on General Settings page
 *
 * @link http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
 */
function ser_cyr_to_lat_slug_field_callback() {
	$ser_cyr_to_lat_slug = get_option( 'ser_cyr_to_lat_slug' );
	//print checkox ?>
	<label for="ser_cyr_to_lat_slug"><input id="ser_cyr_to_lat_slug" name="ser_cyr_to_lat_slug" type="checkbox" value="1" 
	<?php checked('1', $ser_cyr_to_lat_slug); ?>
	/> <?php _e( 'Преслови српска ћирилична у енглеска латинична слова у сталним везама' ); ?></label><br />
	<span class="description"><?php _e( 'Уколико желите да се у сталним везама уместо српских ћириличних слова појављују енглеска латинична, овај квадратић треба да буде штиклиран' ); ?></span>

<?php }

/**
 * Sanitize and validate field input
 *
 * @link http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
 */
function ser_cyr_to_lat_slug_validate( $input ) {
	// Our first value is either 0 or 1
	$input = ( $input == 1 ? 1 : 0 );
	return $input;
}

/**
 * Add hook to enable field
 */
add_action( 'admin_init', 'add_ser_cyr_to_lat_slug_settings_field' );

/**
 * Transliterate Cyrillic letters to Latin one in slugs
 *
 * Check if slug is saving in database and
 * that user wants transliteration
 *
 * @param string $title The string to be sanitized.
 * @param string $fallback_title Used just because of third parameter
 * @param string $context Optional. The operation for which the string is sanitized
 * @return string The transliterated or original string..
 */
function ser_cyr_to_lat_slug_transliteration( $title, $fallback_title, $context ) {
	if ( $context != 'save' || ! $ser_cyr_to_lat_slug = get_option( 'ser_cyr_to_lat_slug' ) )
		return $title;

	$cyr2lat_table = array(
		"А"=>"a","Б"=>"b","В"=>"v","Г"=>"g","Д"=>"d",
		"Ђ"=>"dj","Е"=>"e","Ж"=>"z","З"=>"z","И"=>"i",
		"Ј"=>"j","К"=>"k","Л"=>"l","Љ"=>"lj","М"=>"m",
		"Н"=>"n","Њ"=>"nj","О"=>"o","П"=>"p","Р"=>"r",
		"С"=>"s","Т"=>"t","Ћ"=>"c","У"=>"u","Ф"=>"f",
		"Х"=>"h","Ц"=>"c","Ч"=>"c","Џ"=>"dz","Ш"=>"s",
		"а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
		"ђ"=>"dj","е"=>"e","ж"=>"z","з"=>"z","и"=>"i",
		"ј"=>"j","к"=>"k","л"=>"l","љ"=>"lj","м"=>"m",
		"н"=>"n","њ"=>"nj","о"=>"o","п"=>"p","р"=>"r",
		"с"=>"s","т"=>"t","ћ"=>"c","у"=>"u","ф"=>"f",
		"х"=>"h","ц"=>"c","ч"=>"c","џ"=>"dz","ш"=>"s",
		"„"=>" ","“"=>" ","”"=>" ","‘"=>" ","’"=>" ","→"=>"-","—"=>"-"
		);
	
	return strtr( $title, $cyr2lat_table );
}
add_filter( 'sanitize_title', 'ser_cyr_to_lat_slug_transliteration', 9, 3 );
?>