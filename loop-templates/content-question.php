<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<tr class="question">
	<td><?php the_title(); ?></td>
	<td><button class="btn btn-primary show-answer">Show Answer</button></td>
</tr>
<tr class="answer">
	<td colspan="2" class="d-none">
		<?php the_content(); ?>
	</td>
</tr>