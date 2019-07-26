<?php
/**
* @link: http://callmenick.com/post/custom-wordpress-loop-with-pagination
* Create this as a separate file function-pagination.php
*/
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
  
  if (empty($pagerange)) {
    $pagerange = 2;
  }
  
  /**
  * This first part of our function is a fallback
  * for custom pagination inside a regular loop that
  * uses the global $paged and global $wp_query variables.
  *
  * It's good because we can now override default pagination
  * in our theme, and use this function in default quries
  * and custom queries.
  */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
      $numpages = 1;
    }
  }
  
  /**
  * We construct the pagination arguments to enter into our paginate_links
  * function.
  */
 $pagination_args = array(
    // 'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))), # Uncomment this line to enable dynamic query_string @divine
    'base'            => get_pagenum_link(1) . '%_%', # Comment out this line to enable dynamic query_string
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => 0, #$paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => "PREV",
    'next_text'       => "NEXT",
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
    );

  $paginate_links = paginate_links($pagination_args);
  
  // if ($paginate_links) {
  //   // echo "<div class='pagination'>";
  //   # This is how your span looks like once rendered
  //   # echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
  //   echo $paginate_links;
  //   // echo "</div>";
  // }
  // 
  return $paginate_links;
  
}
?>