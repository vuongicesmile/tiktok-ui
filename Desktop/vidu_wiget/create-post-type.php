<?php

function tao_custom_post_type()
{

    /*
    * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
    */
    $label = array(
        'name' => 'sinhvien', //Tên post type dạng số nhiều
        'singular_name' => 'sanpham' //Tên post type dạng số ít
    );

    /*
    * Biến $args là những tham số quan trọng trong Post Type
    */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng sản phẩm', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array('category', 'post_tag'), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-smiley', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );

    register_post_type('sanpham', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên

}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type');
$args = array(
    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
    'post_type' => 'sanpham', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
    'showposts' => 12, // số lượng bài viết
);
$getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <?php //các thành phần cần lấy  ?>
    <h2>
        <?php the_title(); // lấy tiêu đề ?>
        <?php the_content(); // lấy link của bài viết ?>">


    </h2>
<?php endwhile; wp_reset_postdata(); ?>