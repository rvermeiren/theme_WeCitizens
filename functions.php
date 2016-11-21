<?php
add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
// $post = get_post( $post_id );
// if ('post' == $post->post_type)
$open = false;
return $open;
}

?>
