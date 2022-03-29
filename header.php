<?php
global $fauzanredux;
?>
<head>
    <link rel="shortcut icon" href="<?php echo $fauzanredux['favicon']['url']; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
          integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function (){
            $('fa-bars').click(function (){
                $('main-header-tertiary__navigation').toggleClass('show');
            });
        });
    </script>
    <title><?php
        if (wp_title('', false)) {
            echo '';
        } else {
            echo bloginfo('name');
        }
        wp_title('');
        ?></title>
    <?php wp_head(); ?>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header">
                    <div class="main-header-primary">
                        <h3>Office: <?php echo $fauzanredux['address-office'] ?></h3>
                    </div>
                    <div class="main-header-secondary">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                    src="<?php echo $fauzanredux['logo']['url']; ?>"></a>
                        <div class="search">
                            <form role="search" method="get" id="search-form"
                                  action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="text" placeholder="Search" name="s" id="search-input"
                                       value="<?php echo esc_attr(get_search_query()); ?>">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="main-header-tertiary">
                        <div class="main-header-tertiary__navigation">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <?php
                            $args = array('theme_location' => 'main_menu');
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>