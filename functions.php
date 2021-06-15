<?php 


    add_theme_support('Menu');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-formats',['audio','video','gallery']);
    add_theme_support('post-thumbnails');


    register_nav_menus([

    	'main_menu'    => 'Main Menu',


    ]);
    register_post_type('notic',[

        'public'   => true,
        'labels'    => [
            'name'   => 'Notic Board',
            'all_items'  => 'All Notic',
            'add_new'   => 'Add new Notic',
            'add_new_item'  => 'Add new Notic',

        ],

          'supports'  => ['title'],
          'menu_icon'  => 'dashicons-sticky',


    ]);
      register_post_type('slider',[

        'public'   => true,
        'labels'    => [
            'name'   => 'Slider',
            'all_items'  => 'All Slider',
            'add_new'   => 'Add new Slider',
            'add_new_item'  => 'Add new Slider',

        ],

          'supports'  => ['thumbnail'],
          'menu_icon'  => 'dashicons-embed-photo',


    ]);
         register_post_type('service',[

        'public'   => true,
        'labels'    => [
            'name'   => 'Our Services',
            'all_items'  => 'All Services',
            'add_new'   => 'Add new Service',
            'add_new_item'  => 'Add new Service',

        ],

          'supports'  => ['thumbnail','title','editor'],
          'menu_icon'  => 'dashicons-admin-site-alt2',


    ]);





 ?>