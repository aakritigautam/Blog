<?php  
function comments_template($file = '/comments.php', $separate_comments = false){
    global $wp_query, $withcomments, $post, $wpdb, $id, $comment, $user_login, $user_ID, $user_identity, $overridden_cpage;
    if (!(is_single()|| $withcomments) || empty($post))
    return;

    if(empty($file))
    $file= '/comments.php';
    $req=get_option('require_name_email');
    $commenter= wp_get_current_commenter();

    $comment_author = $commenter['comment_author';]
    
}



?>