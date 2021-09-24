<footer>

    <div class="row-fluid clearfix">
        <section class="col-lg-3 col-md-4 col-lg-offset-1 clearfix">
            <h3>Clients Say</h3>

            <div class="row-fluid">
                <div class="review-filtering">

                    <?php $this->load->view('commen/clients_say_view'); ?>

                </div>
            </div>

        </section>

        <section class="col-lg-3 col-md-4 col-lg-offset-1 clearfix">
            <h3>News</h3>
            <div class="row-fluid">
                <div class="review-filtering">
                    <?php $this->load->view('commen/news_view'); ?>
                </div>
            </div>
        </section>

        <section class="col-lg-3 col-md-4 col-lg-offset-1 clearfix">
            <h3>Contact</h3>
            <ul class="list-unstyled contact_list">
                <li class="clearfix">
                    <div>
                        <img class="pull-left" src="images/phone.png" alt=""/>
                        <ul class="pull-left list-unstyled">
                            <li>+251 913 2272 70</li>
                            <li>+251 912 637 046</li>
                        </ul>
                    </div>
                </li>
                <li class="clearfix margin_bottom margin_top">
                    <div>
                        <img class="pull-left" src="images/email.png" alt=""/>
                        <ul class="pull-left list-unstyled">
                            <li><a href="mailto:ceo@appdiv.com">ceo@appdiv.com</a></li>
                            <li><a href="mailto:info@appdiv.com">info@appdiv.com</a></li>
                        </ul>
                    </div>
                </li>
                <li class="clearfix">
                    <div>
                        <img class="pull-left" src="images/web.png" alt=""/>
                        <ul class="pull-left list-unstyled">
                            <li><a href="www.appdiv.com">www.appdiv.com</a> </li>
                            <li><a href="www.addismereja.com">www.addismereja.com</a> </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </section>

    </div>

    <div class="row-fluid footer_menu clearfix">
        <nav class="col-lg-offset-1 bottom_nav clearfix">
            <ul class="list-inline col-lg-8">
                <?php $menus = config_item('page'); ?>
                <?php foreach ($menus as $key => $value) : ?>
                    <li class="<?= ($key == $title) ? 'active' : '' ?>" role="presentation">
                        <a href="<?= site_url($value) ?>"><?= $key ?></a>
                    </li>
                <?php endforeach; ?>
                
            </ul>
            <small class="col-lg-3 text-center">Copyright &copy; AppDiv System Development</small>

        </nav>
    </div>


</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/back_to_top.js"></script>
<script src="js/isotope.pkgd.mini.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/my_js.js"></script>