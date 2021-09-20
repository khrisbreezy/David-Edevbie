<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon.jpg"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="theme-color" content="#fafafa">

    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body>