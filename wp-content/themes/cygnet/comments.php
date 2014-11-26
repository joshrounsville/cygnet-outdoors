<?php
/*
The comments page for Bones
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

  <div class="comment-wrap" id="comments">

  <?php
    $fields =  array(
    'author' =>
      '<div class="form-third first"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">(Required)</span>' : '' ) .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></div>',

    'email' =>
      '<div class="form-third second"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">(Required but not shared)</span>' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . '></div>',

    'url' =>
      '<div class="form-third third"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30"></div>',
    );
  ?>
  <?php
    comment_form( array(
      'comment_notes_after' => '',
      'label_submit' => 'Submit',
      'comment_notes_before' => '',
      'title_reply' => '',
      'fields' => $fields,
      'comment_field' => '<div class="form-full"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></div>'
    ) );
  ?>

  <?php if ( have_comments() ) : ?>
    <?php
      wp_list_comments( array(
        'style'             => 'div',
        'short_ping'        => true,
        'avatar_size'       => 0,
        'callback'          => 'bones_comments',
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'reverse_top_level' => null,
        'reverse_children'  => ''
      ) );
    ?>
  <?php endif; ?>
  </div>