<?php 
    $dir = "file/*.png";

    $images = glob($dir);

    $array = [
        $images[0]=>"Finance-and-Accounting-System",
        $images[1]=>"Recruitment-Managment-systems",
        $images[2]=>"Sales-And-Distribution-Managment-System",
        $images[3]=>"Attendance-and-Time-Trucking-System",
        $images[4]=>"Fixed-Asset-Managment-Systems",
        $images[5]=>"Fleet-Mangament-System",
        $images[6]=>"Hospital-Managment-System",
        $images[7]=>"Human-Resource-Managment-Systems",
        $images[8]=>"Inventory-Managment-Systems",
        $images[9]=>"Payroll-System",
        $images[10]=>"Production-Systems",
        $images[11]=>"Purchase-Managment-Systems"
    ];
    
    
?>


<section>
    <article>

        <div class="bg11 filters">
            <div class="container">
                <div class="col-lg-12">
                    <div class="text-center filters">
                        <ul class="nav nav-pills">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".web-design" href="#">Web design</a></li>
                            <li><a data-filter=".app-development" href="#">App development</a></li>
                            <li><a data-filter=".site-building" href="#">Site building</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-12">

                <div class="row object-non-visible object-visible">

                    <div class="isotope-container row grid-space-20">
                        <?php $i=0; foreach($array as $key=>$value): ?>
                  
                            <div class="col-sm-6 col-xs-12 col-md-3 clearfix isotope-item <?php echo ($i % 3 == 0) ? 'web-design' : (($i % 2 == 0) ? 'app-development' : 'site-building') ?> " >
                            
                                <div class="image-box">
                                    <div class="overlay-container">
                                            <img alt=""  src="<?=$key?>"/>
                                            <a target="_blank" data-target="#project" 
                                            data-toggle="modal" 
                                            role="link"
                                            class="overlay" 
                                            href="<?php 
                                                $striped = strstr($key, "p");
                                                $title = $value;
                                               $i++;
                                            $data="projects/index/$striped/$title"; echo site_url($data) ?>">
                                            <i class="glyphicon glyphicon-zoom-in"></i>
                                            <span>Web Design</span>
                                        </a>
                                        <!-- <a href="#"><?=$i ?></a> -->
                                    </div>
                                   
                            </div>
                            
                        </div>
                        
                        <?php endforeach ?>
                    </div>

                </div>
            </div>

        </div>
    </article>
</section>


<?php $this->load->view('our_clients_view'); ?>
