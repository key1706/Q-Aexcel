<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Q&A</h1>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=bootswatchcom" id="_carbonads_js"></script>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            for($row=0; $row<count($data); $row++)
            {
                ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Question from <span style="color: #8f0000"><?php echo $data[$row][8];?></span></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $data[$row][5]; ?></p>
                        <a href="#" class="btn btn-warning">More</a>
                    </div>
                </div>
            <?php  } ?>

        </div>
    </div>