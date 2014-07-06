<?php 

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Kabar gembira', 'custom_dashboard_help');
}

function custom_dashboard_help() {?>
    <img src="https://scontent-b-hkg.xx.fbcdn.net/hphotos-xpa1/t1.0-9/10417606_691011177602256_388743415465049660_n.jpg" /><br /> <strong>Harga mulai : Rp. xxxxxxxxxxxx </strong><br /><button class="btn">Order</button>
<?php }
