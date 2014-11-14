<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'A robust blogging platform.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Manage Blog Posts',
        'posts' => 'Posts',
        'create_post' => 'blog post',
        'categories' => 'Categories',
        'create_category' => 'blog category',
        'access_posts' => 'Manage the blog posts',
        'access_categories' => 'Manage the blog categories',
        'delete_confirm' => 'Are you sure?',
        'chart_published' => 'Published',
        'chart_drafts' => 'Drafts',
        'chart_total' => 'Total',
    ],
    'posts' => [
        'list_title' => 'Manage the blog posts',
        'category' => 'Category',
        'hide_published' => 'Hide published',
        'new_post' => 'New post',
    ],
    'post' => [
        'title' => 'Title',
        'title_placeholder' => 'New post title',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Categories',
        'created' => 'Created',
        'updated' => 'Updated',
        'published' => 'Published',
        'published_validation' => 'Please specify the published date',
        'tab_edit' => 'Edit',
        'tab_categories' => 'Categories',
        'categories_comment' => 'Select categories the blog post belongs to',
        'categories_placeholder' => 'There are no categories, you should create one first!',
        'tab_manage' => 'Manage',
        'published_on' => 'Published on',
        'excerpt' => 'Excerpt',
        'featured_images' => 'Featured Images',
        'delete_confirm' => 'Do you really want to delete this post?',
        'close_confirm' => 'The post is not saved.',
        'return_to_posts' => 'Return to posts list'
    ],
    'categories' => [
        'list_title' => 'Manage the blog categories',
        'new_category' => 'New category',
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Posts',
        'delete_confirm' => 'Do you really want to delete this category?',
        'return_to_categories' => 'Return to the blog category list',
    ],
    'settings' => [
        'category_title' => 'Blog Category List',
        'category_description' => 'Displays a list of blog categories on the page.',
        'category_slug' => 'Slug param name',
        'category_slug_description' => 'The URL route parameter used for looking up the current category by its slug. This property is used by the default component partial for marking the currently active category.',
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any posts.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'post_title' => 'Blog post',
        'post_description' => 'Displays a blog post on the page.',
        'post_slug' => 'Slug param name',
        'post_slug_description' => 'The URL route parameter used for looking up the post by its slug.',
        'post_category' => 'Category page',
        'post_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'posts_title' => 'Blog Post List',
        'posts_description' => 'Displays a list of latest blog posts on the page.',
        'posts_pagination' => 'Pagination parameter name',
        'posts_pagination_description' => 'The expected parameter name used by the pagination pages.',
        'posts_filter' => 'Category filter',
        'posts_filter_description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
        'posts_per_page' => 'Posts per page',
        'posts_per_page_validation' => 'Invalid format of the posts per page value',
        'posts_no_posts' => 'No posts message',
        'posts_no_posts_description' => 'Message to display in the blog post list in case if there are no posts. This property is used by the default component partial.',
        'posts_order' => 'Post order',
        'posts_order_decription' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Category page',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. This property is used by the default component partial.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
    ],
];
