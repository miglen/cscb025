<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->insert('header', ['title' => $this->e($title)]) ?>
</head>
<body>
    <!-- *** TOPBAR *** -->
    <?php $this->insert('topbar') ?>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR *** -->
    <?php $this->insert('navbar') ?>
    <!-- *** NAVBAR END *** -->
    
    <!-- *** MAIN CONTENT *** -->
    
        <div id="all">
    
            <div id="content">
                <div class="container">
    
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="/">Начало</a>
                            </li>
                            <li>Често задавани въпроси</li>
                        </ul>
    
                    </div>
                  <div class="col-md-3">
                    <!-- *** PAGES MENU *** -->
                    <?php $this->insert('sidebar-pages') ?>
                    <!-- *** PAGES MENU END *** -->
                        <div class="banner">
                            <a href="#">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-md-9">
<?php
global $db;
$result = $db -> select("SELECT * FROM `pages` WHERE `page_id`='".$this->e($page_id)."';");
?>
    
                        <div class="box" id="contact">
                            <h1><?php echo $result[0]['title']; ?></h1>
    
                            <p class="lead"><?php echo $result[0]['text']; ?></p>
  
    
    
                        </div>
    
    
                    </div>
                    <!-- /.col-md-9 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->
    
    

    <!-- *** MAIN CONTENT END *** -->
    
    <?php $this->insert('footer') ?>

</body>
</html>
