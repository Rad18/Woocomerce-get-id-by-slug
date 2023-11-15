<?
$category_slugs = array('slug1', 'slug2', 'slug3'); // Replace with your actual category slugs

foreach ($category_slugs as $category_slug) {
    $category = get_term_by('slug', $category_slug, 'product_cat');

    if ($category) {
        $category_id = $category->term_id;
        echo "Category ID for '$category_slug' is $category_id<br>";
    } else {
        echo "Category not found for slug '$category_slug'<br>";
    }
}
?>
