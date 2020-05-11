<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage roimblog
 * @since 1.0
 * @version 1.0
 */

?>

<form method="get" class="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
  <input type="text" placeholder="search..." name="s" class="searchfield" value="" />
	<button type="submit" name="button" class="submit-button">
		<i class="fas fa-search"></i>
	</button>
</form>
