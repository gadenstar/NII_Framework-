<?php 
//官方Gravatar头像调用ssl头像链接
function get_ssl_avatar($avatar) {
 $avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/','<img src="https://secure.gravatar.com/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">',$avatar);
 return $avatar;
}
add_filter('get_avatar', 'get_ssl_avatar');


function register_nii_menus() {
	register_nav_menus(
		array(
			'primary-menu' => 'Primary Menu',
			'footer-menu' => 'Footer Menu'
		)
	);
}
add_action( 'init', 'register_nii_menus' );