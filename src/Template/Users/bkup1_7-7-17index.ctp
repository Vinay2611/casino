<?php use Cake\Core\Configure;
use Cake\I18n\Time; ?>
<div class="banner">
   <div class="flexslider">
      <ul class="slides fsl">
         <?php foreach($sliders as $images){ ?>
         <li><img src="<?php echo SLIDER_IMG_URL.$images->image ?>" class="img-responsive" alt="Image loading" /></li>
         <?php } ?>
      </ul>
   </div>
   <div class="transparent-black">
      <div class="container">
         <div class="banner-content">
            <h1><?= __('homepage.discover_amazing_casinos') ?></h1>
            <small>Most Trusted Casino Review Community & Directory</small>
            <div class="search-back">
               <div class="top-search" data-ng-app>
                  <input type="text" data-ng-model="city_name" name="city_name" id="city_name" class="autocomplete1" value="" placeholder="Casino name or destination" >
                  <a data-ng-href="<?php echo WEBSITE_URL; if($Defaultlanguage != 'en'){ echo $Defaultlanguage.'/'; } ?>search/{{city_name}}" class="search-back-a"><?= __('homepage.search'); ?></a>			
               </div>
            </div>
         </div>
      </div>
   </div><?php /*
   <div class="find_line"><?php echo (!empty($allBlocks[3]->_translations[$Defaultlanguage]->description)) ? $allBlocks[3]->_translations[$Defaultlanguage]->description : $allBlocks[3]->_translations['en']->description ; ?></div>*/ ?>
</div>
<div class="mid_wrapper">

   <div class="Most_Popular_info">
      <div class="container">
         <div class="title">
            <!-- <h2><?php //echo (!empty($allBlocks[4]->_translations[$Defaultlanguage]->description)) ? $allBlocks[4]->_translations[$Defaultlanguage]->title : $allBlocks[4]->_translations['en']->title ; ?></h2> -->
            <h2>
               <?php echo 'Best Online Casinos for  '.date('F Y'); ?>
            </h2>
            <?php /*echo (!empty($allBlocks[4]->_translations[$Defaultlanguage]->description)) ? $allBlocks[4]->_translations[$Defaultlanguage]->description : $allBlocks[4]->_translations['en']->description ; ?>
            <span></span> */?><span></span> 
         </div>         
			<?php echo $this->element('most_popular_online_casino_homepage'); ?>
      </div>
   </div>

   <?php if(!empty($popularCasinos)){ ?>
   <div class="Explore">
      <div class="container">
         <div class="title">
            <h2><?php echo (!empty($allBlocks[5]->_translations[$Defaultlanguage]->title)) ? $allBlocks[5]->_translations[$Defaultlanguage]->title : $allBlocks[5]->_translations['en']->title ; ?></h2>
            <?php echo (!empty($allBlocks[5]->_translations[$Defaultlanguage]->description)) ? $allBlocks[5]->_translations[$Defaultlanguage]->description : $allBlocks[5]->_translations['en']->description ; ?>
            <span></span> 
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="explore-img shadwo_none">
                  <ul>
                     <?php foreach($popularCasinos as $popularCasino){  ?>
                     <li class="explore_links">
                     <a href="<?php 
                                 if($popularCasino->type == 'normal'){
                                 echo $this->Url->build(['plugin' => '','controller' => 'Casinos','action' => 'casino_view','casino_view' => $popularCasino->casino->slug]);
                                 }else{
                                 echo $this->Url->build(['plugin' => '','controller' => 'Casinos','action' => 'casino_view','casino_view' => $popularCasino->casino->slug]);
                                 }
                                 ?>">
                        <div class="img_block">
                           <?php 
                              if(!empty($popularCasino->logo) && file_exists(PROMOTION_CASINO_LOGO_ROOT_PATH.$popularCasino->logo)){
                              echo $this->Html->image(WEBSITE_UPLOADS_URL.'image.php?width=280px&height=233px&cropratio=1:1&image='.PROMOTION_CASINO_LOGO_IMG_URL.$popularCasino->logo,['alt' =>"Image loading"]);
                              }else{
                              echo $this->Html->image(WEBSITE_UPLOADS_URL.'image.php?width=280px&height=233px&cropratio=1:1&image='.NO_CASINO_IMG,['class' => 'img-responsive','alt' =>"Image loading"]);
                              }  ?>
                           <div class="overlay">
                              <span><?php echo $popularCasino->text ?></span>
                              <p><?php echo isset($popularCasino->casino->city->name) ? $popularCasino->casino->city->name : ''; ?></p>
                           </div>
                        </div>
                        </a>
                     </li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>
   
   <?php /*
      <div class="map">
      <div class="container">
      <div class="title">
      <h2><?php echo (!empty($allBlocks[7]->_translations[$Defaultlanguage]->title)) ? $allBlocks[7]->_translations[$Defaultlanguage]->title : $allBlocks[7]->_translations['en']->title ; ?></h2><?php echo (!empty($allBlocks[7]->_translations[$Defaultlanguage]->description)) ? $allBlocks[7]->_translations[$Defaultlanguage]->description : $allBlocks[7]->_translations['en']->description ; ?>
   <span></span> 
</div>
<div class="row">
   <div class="col-md-12">
      <div class="map-img"> <img src="<?php echo WEBSITE_IMG_URL; ?>map.jpg" alt="Image loading" class="img-responsive" /> </div>
   </div>
</div>
</div>
</div>*/?>

<div class="hotels hotels_info_2 htl_tarea">
   <div class="container">
      <div class="title">
         <h2>
         <?php echo (!empty($allBlocks[7]->_translations[$Defaultlanguage]->title)) ? $allBlocks[7]->_translations[$Defaultlanguage]->title : $allBlocks[7]->_translations['en']->title ; ?>       

         </h2>
         <!-- <span></span> -->        
      </div>
      <div>
            <p> <?php echo (!empty($allBlocks[7]->_translations[$Defaultlanguage]->description)) ? $allBlocks[7]->_translations[$Defaultlanguage]->description : $allBlocks[7]->_translations['en']->description ; ?><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. --></p>
      </div>
      <?php echo $this->element('worldwide_popular_casino'); ?>
   </div>
</div>
<div class="gamble_online_info gamble_online_in2 tarea">
   <div class="container">
      <div class="title">
         <h2><?php echo (!empty($allBlocks[27]->_translations[$Defaultlanguage]->title)) ? $allBlocks[27]->_translations[$Defaultlanguage]->title : $allBlocks[27]->_translations['en']->title ; ?>
         <!-- Lorem Ipsum is simply dummy --></h2>
         <div>
            <p><?php echo (!empty($allBlocks[27]->_translations[$Defaultlanguage]->description)) ? $allBlocks[27]->_translations[$Defaultlanguage]->description : $allBlocks[27]->_translations['en']->description ; ?><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. --></p>
         </div>
         <span></span> 
      </div>
      <div class="gamble_online_post">
         <div class="gamble_online_item">
           
         </div>
      </div>
   </div>
</div>

   <div class="gamble_online gamble_online_info2 gamble_online_block2 ">
      <div class="container">
         <div class="title">
            <h2>
               <?php echo (!empty($allBlocks[6]->_translations[$Defaultlanguage]->title)) ? $allBlocks[6]->_translations[$Defaultlanguage]->title : $allBlocks[6]->_translations['en']->title ; ?>
             <!--   Do you prefer to play online? -->
               <br>
                  <small>Just select a category below</small>
            </h2>
            <?php echo (!empty($allBlocks[6]->_translations[$Defaultlanguage]->description)) ? $allBlocks[6]->_translations[$Defaultlanguage]->description : $allBlocks[6]->_translations['en']->description ; ?>
            <span></span> 
         </div>
         <div class="ChooosetypeRow">
            <div class="col gam_cat">
               <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'Casinos', 'action' => 'onlineCasino')); ?>">            
                  <div class="block">
                     <div class="block_2"><i><img src="<?php echo WEBSITE_IMG_URL; ?>img_25.1.png" alt="icon"></i><i class="fa"><img src="<?php echo WEBSITE_IMG_URL; ?>img_25.png" alt="icon"></i></div>
                  </div>
                  <div class="col_block"><span>Casino</span></div>
               </a>
            </div>
            
            <div class="col gam_cat">
               <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'Casinos', 'action' => 'pokers')); ?>">
                  <div class="block">
                     <div class="block_2"><i><img src="<?php echo WEBSITE_IMG_URL; ?>img_8.1.png" alt="icon"></i><i class="fa"><img src="<?php echo WEBSITE_IMG_URL; ?>img_8.png" alt="icon"></i></div>
                  </div>
                  <div class="col_block"><span>Poker</span></div>
               </a>   
            </div>
            
            <div class="col gam_cat">
               <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'Casinos', 'action' => 'bingos')); ?>">
                  <div class="block">
                     <div class="block_2"><i><img src="<?php echo WEBSITE_IMG_URL; ?>img_9.1.png" alt="icon"></i><i class="fa"><img src="<?php echo WEBSITE_IMG_URL; ?>img_9.png" alt="icon"></i></div>
                  </div>
                   <div class="col_block"><span>Bingo</span></div>
                  </a>
            </div>
            
            <div class="col gam_cat">
               <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'Casinos', 'action' => 'sportBettings')); ?>">            
                  <div class="block">
                     <div class="block_2"><i><img src="<?php echo WEBSITE_IMG_URL; ?>img_10.1.png" alt="icon"></i><i class="fa"><img src="<?php echo WEBSITE_IMG_URL; ?>img_10.png" alt="icon"></i></div>
                  </div>
                  <div class="col_block"><span>Sportsbetting</span></div>
               </a>
            </div>
            
         </div>
      </div>
   </div>
<div class="gamble_online_info gamble_online_in2">
   <div class="container">
      <div class="title">
         <h2><?php echo (!empty($allBlocks[25]->_translations[$Defaultlanguage]->title)) ? $allBlocks[25]->_translations[$Defaultlanguage]->title : $allBlocks[25]->_translations['en']->title ; ?></h2>
         <div><?php echo (!empty($allBlocks[25]->_translations[$Defaultlanguage]->description)) ? $allBlocks[25]->_translations[$Defaultlanguage]->description : $allBlocks[25]->_translations['en']->description ; ?></div>
         <span></span> 
      </div>
      <div class="gamble_online_post">
         <div class="gamble_online_item">
            <?php echo (!empty($allBlocks[25]->_translations[$Defaultlanguage]->second_description)) ? $allBlocks[25]->_translations[$Defaultlanguage]->second_description : $allBlocks[25]->_translations['en']->second_description ; ?>
         </div>
      </div>
   </div>
</div>
<div class="gamble_online_info gamble_online_in2 newsarea">
   <div class="container">
      <div class="title">
         <h2> <?php echo (!empty($allBlocks[28]->_translations[$Defaultlanguage]->title)) ? $allBlocks[28]->_translations[$Defaultlanguage]->title : $allBlocks[28]->_translations['en']->title ; ?> 
         </h2>
         <P><?php 
            echo (!empty($allBlocks[28]->_translations[$Defaultlanguage]->description)) ? $allBlocks[28]->_translations[$Defaultlanguage]->description : $allBlocks[28]->_translations['en']->description ; ?>
         </P>
      <div>
      <div class="newsList news_box">
         <ul>  <?php //pr($newsList); news blocks 
            foreach($newsList as $records){ ?>
               <li>
                  <div class="pull-left">
                     <a href="<?php echo $this->Url->build(array('controller' => 'news','action' => 'news_view','news_view' => $records->slug)); ?>"><?php 
                       // if(!empty($records->image) && file_exists(CASINO_THUMB_IMG_ROOT_PATH.$records->image)){
                           echo $this->Html->image(WEBSITE_UPLOADS_URL.'image.php?width=272px&height=154px&cropratio=2:1&image='.CASINO_FULL_IMG_URL.$records->image,['alt' => 'Image','height'=>154, 'width'=>272]);
                       // } ?>
                     </a>
                  </div>
                  <div class="newsDetail">
                     <h2>
                        <a href="<?php echo $this->Url->build(array('controller' => 'news','action' => 'news_view','news_view' => $records->slug)); ?>">
                           <?php echo $records->title; ?>
                        </a>
                     </h2>
                     <div class="block">
                        <span><?php 
                           echo $records->created->format('F d, Y'); ?>
                        </span>
                         <span class="pull-right comts"><?php echo $records->question_count; ?>     comments
                        </span>
                       <!--  &nbsp;/ by: --> <?php //echo $records->user->name; ?>
                     </div>
                     <div class="newsPera"><!-- <?php //echo $records->sdescription; ?>
                        <a href="<?php //echo $this->Url->build(array('plugin' => '','controller' => 'news','action' => 'news_view','news_view' => $records->slug)); ?>">more...
                        </a> -->
                     </div>
                     <div class="block comment">
                       
                     </div>
                  </div>
               </li><?php 
            } 

         </ul>
      </div>     
   </div>
         <!-- <span></span>  -->
</div>
    
   </div>
</div>
<div class="experience-user shadwo_none experience_user_info">
   <div class="container">
      <div class="title">
         <h2><?php echo (!empty($allBlocks[8]->_translations[$Defaultlanguage]->title)) ? $allBlocks[8]->_translations[$Defaultlanguage]->title : $allBlocks[8]->_translations['en']->title ; ?></h2>
         <?php echo (!empty($allBlocks[8]->_translations[$Defaultlanguage]->description)) ? $allBlocks[8]->_translations[$Defaultlanguage]->description : $allBlocks[8]->_translations['en']->description ; ?>
         <span></span> 
      </div>
      <div class="row"> <?php $rv_cnt=0;
         foreach($reviewList as $review){ $rv_cnt++;
            $rv_cls = '';
            if($rv_cnt == 1) {
               
               echo '<div class="rv_cls0">';
            }     
            else if($rv_cnt == 4) {
               
               echo '<div class="rv_cls1 hide">';
            }else if($rv_cnt == 7){
               echo '<div class="rv_cls2 hide">';  
            } ?>
            <div class="col-md-4 <?php if($review->type == 'casino'){
               echo 'reviews_'.$review->casino->type; }else{
               echo 'reviews_'.$review->type; } ?>">
            <div class="whole-block"> <?php 
               $htmlurl =  '';
               $url  =  NO_CASINO_IMG;
               $name =  '';
               $cityName   =  '';
               if($review->type == 'city'){
                   if(!empty($review->city['casino_images'][0]->file) && file_exists(CASINO_FULL_IMG_ROOT_PATH.$review->city['casino_images'][0]->file)){
                     $url  =  CASINO_FULL_IMG_URL.$review->city['casino_images'][0]->file;
                   }else{
                     $url  =  NO_CITY_IMG;         
                   }
                  
                  $name       =  $cityName   =  isset($review->city->name) ? $review->city->name : '';
                  $ccountryName  =  isset($review->city->country->name) ? $review->city->country->name : '';
                  $slug       =  $review->city->slug;
                  $countrySlug   =  isset($review->city->country->slug) ? $review->city->country->slug : '';
                  
                  $htmlurl    =  $this->Url->build(['plugin' => '','controller' => 'users','action' => 'city_view','country'=>$countrySlug,'city'=>$slug]);
               }else if($review->type == 'casino'){
                  if(!empty($review->casino['casino_images'][0]->file) && file_exists(CASINO_FULL_IMG_ROOT_PATH.$review->casino['casino_images'][0]->file)){
                  $url  =  CASINO_FULL_IMG_URL.$review->casino['casino_images'][0]->file;
                  }else{
                  $url  =  NO_CASINO_IMG;
                  }
                  // pr($review);
                   $name = isset($review->casino->title) ? $review->casino->title : '';
                   $cityName =   isset($review->casino->city->name) ? $review->casino->city->name : '';
                  // $ccountryName  =  isset($review->casino->city->country->name) ? $review->casino->city->country->name : '';
                  $slug = isset($review->casino->slug) ? $review->casino->slug : '';
                  if(isset($review->casino->type) && $review->casino->type == 'online'){
                     $htmlurl =  $this->Url->build(['plugin' => '','controller' => 'casinos','action' => 'online_casino_view','online_casino_view'=>$slug]);
                     $rd_to_cmnt = $this->Url->build(['plugin' => '','controller' => 'casinos','action' => 'online_casino_view','#'=>'rw_div','online_casino_view'=>$slug]);
                  }else{
                     $htmlurl =  $this->Url->build(['plugin' => '','controller' => 'casinos','action' => 'casino_view','casino_view'=>$slug]);
                     $rd_to_cmnt = $this->Url->build(['plugin' => '','controller' => 'casinos','action' => 'casino_view','#'=>'rw_div','casino_view'=>$slug]);
                  }              
               }else if($review->type == 'country'){
                  if(!empty($review->country['casino_images'][0]->file) && file_exists(CASINO_FULL_IMG_ROOT_PATH.$review->country['casino_images'][0]->file)){
                     $url  =  CASINO_FULL_IMG_URL.$review->country['casino_images'][0]->file;
                  }else{
                     $url  =  NO_COUNTRY_IMG;
                     
                  }
                        
                  $name    =  $cityName   =  $ccountryName  =  isset($review->country->name) ? $review->country->name : '';
                  $slug    =  $review->country->slug;
                  $htmlurl =  $this->Url->build(['plugin' => '','controller' => 'users','action' => 'country_view','country_view'=>$slug]);
               } ?>
            <div class="user-area">
               <a href="<?php echo $htmlurl; ?>">           
                  <img  alt="Image loading" src="<?php echo WEBSITE_URL.'image.php?width=400px&height=215px&cropratio=2:1&image='.$url; ?>" class="img-responsive " /><span class="user-area-new"><?php echo $name; ?></span></a>         
               </div>
              <div class="col-md-3">
                  <div class="">
                     <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'user_slug' ,'user_slug' => $review->user->slug)); ?>">
                     <?php 
                        if(!empty($review->user->profile_image) && file_exists(PROFILE_ROOT_PATH.$review->user->profile_image)){ ?>
                     <img src="<?php echo  WEBSITE_URL.'image.php?width=66px&height=66px&cropratio=1:1&image='.PROFILE_IMG_URL.$review->user->profile_image; ?>" class="img-responsive man" alt="img" />
                     <?php }elseif(!empty($review->user->facebook_id)){ ?>
                     <img alt="img" class="img-responsive man" src="<?php echo 'http://graph.facebook.com/'.$review->user->facebook_id.'/picture?type=large' ?>" alt="img" />
                     <?php }else{ 
                  $sex = $review->user->sex; ?>
                     <img src="<?php echo WEBSITE_URL.'image.php?width=66px&height=66px&cropratio=1:1&image='.NO_PROFILE_IMAGE.$sex.'.png'; ?>" alt="img" class="img-responsive man"/>
                     <?php } ?> 
                     </a>
                  </div>
              </div>
              <div class="col-md-9">
                  <div class="man-matter">
                     <p><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'user_slug' ,'user_slug' => $review->user->slug)); ?>"><span class="style"><?php echo $review->user->full_name; ?></span></a> </p>
                     <p>
                  <?php 
                  $now = new Time($review->created);
                  $utb_tm = $now->timeAgoInWords(
                     ['format' => 'MMM d, YYY', 'end' => '+1 year']);
                  $utb_tm = current(explode(',', $utb_tm));
                  $ago_tm = substr($utb_tm, -3);
                  if($ago_tm != 'ago'){
                     $utb_tm = $utb_tm.' ago';
                  }
                  echo $utb_tm;     
                  /*echo $review->created->format(Configure::read('Date.'.$Defaultlanguage));*/ ?></p>
                     <p class="review"><samp><?= 'Rating' ?></samp><span  class="readonly" data-score="<?php echo $review->rating; ?>"></span></p>
                  </div>
              </div>
              <div class="paregraph" id = "rdmore_redirect" >
                  <p class="readmore_redirect" rdlink="<?php echo $htmlurl.'#rw_div'?>">
                     <span class="fa fa-quote-left qt_lft"></span>
                        <?php echo nl2br($review->comment); ?>
                     <span class="fa fa-quote-right qt_rt"></span>
                  </p>
              </div>
              <div id="cls_qut" class="hide"><span class="fa fa-quote-right qt_rt"></span></div>
            </div>
         </div>

         <?php  if($rv_cnt == 3) { ?>
            <div class="block" id="rvbtn1"><a href="#" class="btn trans_btn" onclick="myJsFunc1(); return false;">View More</a></div>

            <?php } 
         if($rv_cnt == 6) { ?>
            <div class="block" id="rvbtn2"><a href="javascript:void(0);" class="btn trans_btn" onclick="myJsFunc2(); return false;">View More</a></div>
            
            <?php }
            if($rv_cnt == 9) { ?>
      <div class="block">
         <a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'newReviews')); ?>" class="btn trans_btn"><?= __('homepage.view_more') ?>
         </a>
      </div><?php }

      if($rv_cnt == 3) {
         echo '</div>';
      }
      elseif($rv_cnt == 6) {
         echo '</div>';
      }else if($rv_cnt ==9){
         echo '</div>'; 
      }           ?>



   <?php } ?>   
</div>
   </div>
</div>
</div>


<script>
$(document).ready(function(){
      /*$("#rvbtn1").click(function(){
      
      });*/
});
function myJsFunc1() {
  //  alert( 'you clicked on the link' );
    $('.rv_cls1').removeClass('hide');
   $('#rvbtn1').addClass('hide');
    return true;
}  
function myJsFunc2() {
 //   alert( 'you clicked on the link' );
    $('.rv_cls2').removeClass('hide');
   $('#rvbtn2').addClass('hide');
    return true;
}
</script>