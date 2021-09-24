<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <?php $this->load->view('commen/css_view'); ?>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-62546040-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>

        <?php $this->load->view('commen/header_view'); ?>

        <?php if (!isset($no_heading)): ?>
            <div class="">
                <div class="banner clearfix">
                    <img src="images/<?=$banner?>" class="row-fluid"/>
                </div>
                <div class="page_title clearfix bg11">
                    <h1><span><?= $title ?></span></h1>
                </div>
            </div>
        <?php endif; ?>

        <?php if (isset($page)): ?>
            <?php $this->load->view($page); ?>

        <?php endif; ?>


        <?php $this->load->view('commen/footer_view'); ?>

    </body>
</html>