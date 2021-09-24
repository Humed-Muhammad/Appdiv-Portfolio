
<div class="modal fade" 
     id="project" 
     tabindex="-1" 
     role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<header class="clearfix">

    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button"
                        class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#top_navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand hidden-sm hidden-xs" id="appdiv_logo" href="index.php">
                    <img src="images/logo.png" alt="Appdiv Logo" title="Appdiv System Development Pri. Ent."/>
                </a>
            </div>

            <nav class="collapse navbar-collapse navbar-left" id="top_navigation">


                <ul class="nav navbar-nav main_menu">

                    <?php $menus = config_item('page'); ?>


                    <?php foreach ($menus as $key => $value) : ?>
                        <li class="<?= ($key==$title)?'active':''?>" role="presentation">
                            <a href="<?= site_url($value) ?>"><?= $key ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <nav class="social  hidden-xs nav navbar-nav navbar-right">
                <ul class="list-inline">
                    <li>
                        <a href="http://www.linkedin.com/company/3362453" target="_blank" >
                            <img src="images/linkedin.png" alt="Linkedin" title="LinkedIn Account"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/appdiv" target="_blank">
                            <img src="images/facebook.png" title="Facebook" alt="facebook Account"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Appdiv" target="_blank">
                            <img src="images/twitter.png" title="Twitter" alt="Appdiv Twitter Account"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+AppdivEthiopia" target="_blank">
                            <img src="images/googlePlus.png" title="Google Plus Account" alt="Google Plus Account"/>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

</header>