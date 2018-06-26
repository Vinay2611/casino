<?php
   use Cake\Core\Configure;
   
   $twitter	=	Configure::read('FollowUsOn.twitter');
   
   $facebook	=	Configure::read('FollowUsOn.facebook'); 
   
   $linkedin	 =	Configure::read('FollowUsOn.linkedin');
   
   $google		 =	Configure::read('FollowUsOn.g+');
   
   
   
   if (false === strpos($twitter, '://')) {
   
   $twitter = 'http://' . $twitter;
   
   }
   
   if (false === strpos($facebook, '://')) {
   
   $facebook = 'http://' . $facebook;
   
   }
   
   if (false === strpos($linkedin, '://')) {
   
   $linkedin = 'http://' . $linkedin;
   
   }
   
   
   
   if (false === strpos($google, '://')) {
   
   $google = 'http://' . $google;
   
   } ?>
<footer class="footer_main">
   <div class="container">
      <div class="footer_top">
         <div class="row">
            <div class="col-sm-4 col-md-4">
               <div class="nesltr">
                  <h4>Stay Updated</h4>
                  <span>Get the latest Information from Casinoo.com</span>
                  <div class="newsltr_box">
                     <div class="new_inp"><input type="text" class="text_news" placeholder="Enter your email address :)"><i class="fa fa-envelope news_ltr"></i></div>
                     <input type="button" value="Subscribe"  class="news_btn">
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="footer-content text-center">
                  <div class="block"><span><?= __('footer.company'); ?></span>
                  </div>
                  <ul>
                     <li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'cms_slug','about-us')); ?>"><?= __('footer.about'); ?></a></li>
                     <li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'contactUs')); ?>"><?= __('footer.contact'); ?></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 col-sm-3">
               <div class="footer-content text-center">
                  <div class="block"><span><?= __('footer.community'); ?></span>
                  </div>
                  <ul>
                     <li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'topUsers')); ?>"><?= __('footer.top_users'); ?></a></li>
                     <li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'newReviews')); ?>"><?= __('footer.new_reviews'); ?></a></li>
                     <li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'casinos','action' => 'addCasino')); ?>"><?= __('footer.add_casino'); ?></a></li>
                  </ul>
               </div>
            </div>
            <!--	<div class="col-md-2">
               <div class="footer-content">
               
               	<div class="block"><span><?= __('footer.legal'); ?></span></div>
               
               	<ul>
               
               		<li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'cms_slug','terms-of-use')); ?>"><?= __('footer.terms_of_use'); ?></a></li>
               
               		<li><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users','action' => 'cms_slug','privacy-policy')); ?>"><?= __('footer.privacy_policy'); ?></a></li>
               
               	</ul>
               
               </div>
               
               </div>-->
            <div class="col-sm-3 col-md-3 ">
               <div class="fot-slect">
                  <i class="fa fa-angle-down"></i>
                  <?php $Defaultlanguage = isset($Defaultlanguage) ? $Defaultlanguage : '';echo $this->Form->create('Language');echo $this->Form->select('lan',$languageList,['id' => 'lang_change','default' => $Defaultlanguage]);echo $this->Form->end();?>
               </div>
               <div class="ftr_logo">
                  <img src="<?php echo WEBSITE_IMG_URL?>new-ftr-logo1.png" alt="Casinoo">
               </div>
            </div>
         </div>
         <div class="ftr_btm ">
         	<div class="row">
	            <div class="col-sm-6">
	               <ul class="ftr_btm_link">
	                  <li><a href="#_">Terms Of Use</a></li>
	                  <li><a href="#_">Privacy Policy</a></li>
	               </ul>
	            </div>
	            <div class="col-sm-6">
	               <div class="footer_social ftr_social">
	                  <ul>
	                     <li><a href="<?php echo $facebook; ?>"></a></li>
	                     <li class="twit"><a href="<?php echo $twitter; ?>"></a></li>
	                     <li class="goop"><a href="<?php echo $google; ?>"></a></li>
	                     <li class="linkd"><a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'news', 'action' => 'feed')); ?>"></a></li>
	                  </ul>
	               </div>
	            </div>
	         </div>
         </div>
      </div>
   </div>
   <div class="copy_rt">
      <p><?php echo Configure::read('Site.copy_write'); ?></p>
   </div>
</footer>