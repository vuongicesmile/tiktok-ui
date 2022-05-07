<?php
/**
 * @package my_plg
 * @version 0.1
 */

/*
Plugin Name: demo_widget
Description: Its the frist time i write plugin
Author: Nguyen Quoc Vuong
Version: 0.1
Author URI: http://ma.tt/
*/



class Thachpham_widget extends WP_Widget
{
    //thong tin widget
    public function __construct()
    {

        //thong tin widget
        parent::__construct(
            'thachpham_widget',//id dai dien cho widget
            'TP Widget',
            array(
                'description' => 'Widget thuc hanh cua thachpham.com'
            )
        );
    }

    //thiet lap truong nhap lieu
    function form($instance)
    {
        $default = array(
            'mssv' => '',
            'ten' => '',
            'lop' => '',
            'ns' => ''
        );
        $instance = wp_parse_args($instance, $default);
        $mssv = esc_attr($instance['mssv']);
        $ten = esc_attr($instance['ten']);
        $lop = esc_attr($instance['lop']);
        $ns = esc_attr($instance['ns']);
        echo('MSSV: <input type="text" class="widefat" name="' . $this->get_field_name('mssv') . '"value="' . $mssv . '" />');
        echo('Ten: <input type="text" class="widefat" name="' . $this->get_field_name('ten') . '"value="' . $ten . '" />');
        echo('Lop: <input type="text" class="widefat" name="' . $this->get_field_name('lop') . '"value="' . $lop . '" />');
        echo('Nam sinh: <input type="text" class="widefat" name="' . $this->get_field_name('ns') . '"value="' . $ns . '" />');




    }

    //luu du lieu tu form
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['mssv'] = $new_instance['mssv'];
        $instance['ten'] = $new_instance['ten'];
        $instance['lop'] = $new_instance['lop'];
        $instance['ns'] = $new_instance['ns'];
        return $instance;
    }

    //hien thi widget ra ben ngoai
    function widget($args, $instance)
    {

        extract($args);
        $title = apply_filters('widget_title' , $instance['title']);
        echo $before_widget;
        echo $before_title;

$args = array(
    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
    'post_type' => 'sanpham', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
    'showposts' => 12, // số lượng bài viết
);
$getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>

<div clas="edit-css"></div>
<table>
            <tr>
                <td>ID</td>
                <td>Ten</td>
                <td>Nam sinh</td>
                <td>Lop</td>
            </tr>

<?php while($getposts->have_posts()) : $getposts->the_post(); ?>
<?php //các thành phần cần lấy?>
            <tr>

                <td><?php the_ID(); // lay tat ca tieu de cua bai viet ?></td>
                <td><?php the_title(); // lay tat ca tieu de cua bai viet ?></td>
                <td><?php the_meta(); // lay tat ca tieu de cua bai viet ?></td>
                <td><?php the_content(); // lay tat ca tieu de cua bai viet ?></td>

            </tr>

        <?php echo $after_title;

        echo $after_widget;

    endwhile;
        wp_reset_postdata();
    }

}
?>
        </table>
