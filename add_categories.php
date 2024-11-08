// Add the category taxonomy to the page object type
function add_categories_to_pages() {
  register_taxonomy_for_object_type('category', 'page');
}

// Display categories for pages in WordPress admin
add_action( 'init', 'add_categories_to_pages' );
