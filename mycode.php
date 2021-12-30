~~~~ how to add menu by filter ~~~
<?php

            $menu_items['my-dashboard'] = array(
                'url'   => ( $my_dashboard_page != '' ) ? get_the_permalink($my_dashboard_page) : get_the_permalink(),
                'label' => esc_html__('My Dashboard', 'ld-dashboard'),
            );

            $menu_items['my-course'] = array(
                'url'   => ( ( $my_dashboard_page != '' ) ? get_the_permalink($my_dashboard_page) : get_the_permalink() ) . 'my-course',
                'label' => LearnDash_Custom_Label::get_label('courses'),
            );

            $menu_items = apply_filters( 'demo', $menu_items );   //filter position

            $menu_items['logout'] = array(
                'url'   => wp_logout_url(get_the_permalink()),
                'label' => __('Logout', 'ld-dashboard'),
            );


// ~~~~~~~~~~~~~~~~~ how to add filter by the function ~~~~~~~~~~~~~~~~~~
	public function custom_learndash_add_menu( $menu )
    	{
			$menu['my-courses'] = array(
			'url'   => site_url() . '/my-dashboard/?tab=my-courses',
			'label' => esc_html__('My Courses', 'ld-dashboard'),
			);
			$menu['my-lessons'] = array(
			'url'   => site_url() . '/my-dashboard/?tab=my-lessons',
			'label' => esc_html__('My Lessons', 'ld-dashboard'),
			);
			$menu['my-topics'] = array(
			'url'   => site_url() . '/my-dashboard/?tab=my-topics',
			'label' => esc_html__('My Topics', 'ld-dashboard'),
			);
			return $menu;
    	}
    add_filter('demo', $plugin_public, 'custom_learndash_add_menu');


