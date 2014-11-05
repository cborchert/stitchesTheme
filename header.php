<!DOCTYPE html>
<html>
<head>
    <!-- INCLUDE NORMALIZE.CSS handled by functions.php now
        <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" rel="stylesheet" type="text/css" />
    -->

    <!-- INCLUDE GOOGLE FONTS handled by functions.php now
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    -->

    <!-- HEY! What about the actual stylesheet, bub? handled by functions.php now
    <link href="style.css" rel="stylesheet" type="text/css" />
    -->


    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="logoStitches">Stitches</div>
        <div class="logoMogo">by Morgan</div>

        <!--For Demo Purposes -->
        <?php global $woocommerce; ?>

        <nav>
            <?php $args = array('theme_location' => 'header-menu');

                wp_nav_menu( $args ); ?>
            <?php echo $woocommerce->cart->cart_contents_count?"(".sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count)." in cart)":"";?>

        </nav>
    </header>
    <div class="stickyFooter">Make sure to check out the <span class="emphaticStyle">orders page!</span></div>
    <div class="mainWrapper">
    <section class="contentWithSidebar">
