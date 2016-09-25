<div class="amr-section-12">
    <section class="slider">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $id = $constant->getId(54);
                $result = $groups->getByParentId($id);
                $count = 0;
                while ($row = $conn->fetchObject($result)) {
                    $img = CMS_GROUPS_DIR . $row->image;
                    if (file_exists($img) && !empty($row->image)) {
                        ?>
                        <div class="item <?php echo (0 == $count) ? "active" : ""; ?>">
                            <img src="<?php echo $img; ?>" alt="Grnc Nepal"/>
                            <div class="container">
                                <div class="row">
                                    <div class="carousel-caption col-sm-12">
                                        <h1>
                                            <?php echo $row->name; ?>
                                        </h1>
                                        <?php echo $row->shortcontents; ?>
                                        <a href="#" class="ultra-btn">
                                            Donate now
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    }
                }
                ?>

            </div>

        </div>
    </section> <!--slider div-->

</div><!--amr-section-12-->

<div class="amr-section-13">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="event-countdown-title">
                    Upcoming Event
                </div><!-- /.event-countdown-title -->
            </div><!--COL-6-->

            <div class="col-md-6">
                <div class="tm_constuction-main">
                    <div id="tm_constuction-box">
                        <div class="tm_inside">
                            <div class="tm_inner">
                                <div id="tm_counter"></div>
                                <div class="tm_counter_desc">
                                    <div class="fleft">Days</div>
                                    <div class="fleft">Hours</div>
                                    <div class="fleft">Minutes</div>
                                    <div class="fleft">Seconds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--tm_construction-->
                <div class="countdown-finish">
                    <p>
                        An event has already started. For next events please check out our <a href="#">events</a> page. For more
                        information don't hesitate and contact us through <a href="#">contact page</a>. Thanks.
                    </p>
                </div>

            </div><!--col-md-6-->

        </div><!--row-->
    </div><!--container-->
</div><!--amr-section-13-->






<div class="amr-section-4">
</div><!--amr-section-4-->


<div class="amr-section-7">
    <div class="container">
        <div class="row">
        </div>
    </div><!--container-->
</div><!--amr-section-7-->

<div class="amr-section-9">

</div><!--amr-section-9-->



<div class="amr-section-14"></div><!--amr-section-14-->

<div class="amr-section-15">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="intro-body">
                    <?php
                    $id = $constant->getId(53);
                    $result = $groups->getById($id);
                    $row = $conn->fetchObject($result);
                    ?>
                    <div class="headline"><h2><?php echo $row->name; ?></h2></div>
                    <p class="p-lg">
                        <?php
                        echo $row->shortcontents;
                        ?>
                    </p>
                </div><!--class-intro-body-->
            </div><!--col-8-->

            <div class="col-md-4">
                <?php
                $id = $constant->getId(58);
                $result = $groups->getById($id);
                $row = $conn->fetchObject($result);
                ?>
                <div class="headline"><h2><?php echo $row->name; ?></h2></div>


                <div class="side-slider recent-news">
                    <div id="myCarousel1" class="carousel slide carousel-v1">
                        <div class="carousel-inner">
                            <?php
                            $result = $groups->getByParentId($id);
                            $count = 0;
                            while ($row = $conn->fetchObject($result)) {
                                $img = CMS_GROUPS_DIR . $row->image;
                                if (file_exists($img) && !empty($row->image)) {
                                    ?>
                                    <div class="item <?php echo (0 == $count) ? "active" : ""; ?>">
                                        <img class="update-parent img-responsive alignleft img-responsive"  src="<?php echo $img; ?>" alt="Grnc Nepal"/>
                                        <div class="carousel-caption">
                                            <p><?php echo $row->shortcontents; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    $count ++;
                                }
                            }
                            ?>

                        </div>

                        <div class="carousel-arrow">
                            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!--side slider-->


            </div><!--col-4-->
        </div>
    </div>
</div><!--amr-section-15-->

<div class="amr-section-16">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="announce-body">
                    <?php
                    $id = $constant->getId(59);
                    $result = $groups->getById($id);
                    $row = $conn->fetchObject($result);
                    ?>
                    <h1><?php echo $row->name; ?></h1>
                    <h3> <?php echo $row->shortcontents; ?></h3>
                </div>
            </div>
        </div>
    </div><!--amr-section-16-->

