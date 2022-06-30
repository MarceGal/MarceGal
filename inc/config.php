<?php 

$base_url="//marcegal.local/";
$cdn_url="//static.marcegal.local/2020/website/";
$devMode = true;
$contactFormEnabled = false;

if($_SERVER["SERVER_NAME"]=="localhost" )
{
    $base_url="//localhost/";
}

if($_SERVER["SERVER_NAME"]=="www.marce.ga" || $_SERVER["SERVER_NAME"]=="marce.ga")
{
    $base_url="//marce.ga/";
    $cdn_url="//marce.ga/.static/2020/website/";
    $devMode = false;
}

//$cdn_url="//marce.ga/.static/2020/website/";

//https://getbootstrap.com/docs/4.0/layout/grid/

$col_settings = "col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ";
                
function img($path){

    global $cdn_url;    
    $path = $cdn_url.$path;
    $str= '<img
        
        class="img-fluid lazy rounded"
        
        src="'.$path.'"        

        src-src="'.$path.'" 

        data-srcset="'.$path.' 900w, 
        '.$path.' 768w, 
        '.$path.' 600w, 
        '.$path.' 400w, 
        '.$path.' 300w"
        
        alt=""         
        
        loading="lazy"

        
        />';


    return $str;

}


                
function portfolioItemRenderer($temp1,$temp2,$temp3,$temp4){

    global $col_settings;
    global $base_url;

    ?>

    <div class="<?= $col_settings ?> portfolio-item filter-<?= $temp1 ?>">

        <div class="portfolio-wrap card shadowed rounded">

            <a href="<?=$base_url?>portfolio/<?= $temp2 ?>" data-vbtype="iframe" class="venobox">

                <div class="overlay"></div>

                <i class="icofont-spinner-alt-5 preload-icon"></i>

                <?=img('portfolio/'.$temp2.'/cover.jpg')?>

                <div class="portfolio-info info">
                    <h4><?= $temp3 ?></h4>
                    <p><?= $temp4 ?></p>
                </div>

            </a>

        </div>

    </div>

<?php

}

include_once "icons.php";

?>