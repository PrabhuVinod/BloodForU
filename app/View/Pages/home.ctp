<?php

echo $this->Html->script('owl.carousel');
echo $this->Html->script('tablesorter.min');


echo $this->Html->css('owl.carousel');
echo $this->Html->css('owl.theme');
echo $this->Html->css('custom');
echo $this->Html->css('toggle-switch');



echo $this->fetch('css');
echo $this->fetch('script');
?>


<div class="form-slide-container">
<div id="home-slider" class="owl-carousel owl-theme">

  <div class="item">

    <div class="slider-image">

     <?php echo $this->Html->image('redwall.png',array('alt'=>'redwall slide pic')); ?>
<h2><span>A Movie in the Park:<span class='spacer'></span><br /><span class='spacer'></span>Kung Fu Panda</span></h2>
   </div>




 </div>
 <div class="item">


  <div class="slider-image">
   <?php echo $this->Html->image('bluewall.png',array('alt'=>'bluewall slide pic')); ?>
<h2><span>A Movie in the Park:<span class='spacer'></span><br /><span class='spacer'></span>Kung Fu Panda</span></h2>
 </div>


</div>
<div class="item">


  <div class="slider-image">
    <?php echo $this->Html->image('greenwall.png',array('alt'=>'greenwall slide pic')); ?>
<h2><span>A Movie in the Park:<span class='spacer'></span><br /><span class='spacer'></span>Kung Fu Panda</span></h2>
  </div>


</div>




</div>


    <form id="searchForm" class="col-sm-3 col-sm-offset-7">




<div class="login-form">


<label class="switch-light">
  <input type="checkbox" class="selected_form">

  <span class="well home_form_select">
    <span class="request active">Request</span>
    <span class="donate">Donate</span>
    <a class="btn btn-primary"></a>
  </span>

</label>

<div class="req_form">
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Email" id="req_email" type="text">
              <label class="login-field-icon fui-user" for="req_email"></label>
            </div>
 
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="City" id="req_city" type="text">
              <label class="login-field-icon fui-location" for="req_city"></label>

            </div>


            <div class="form-group btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Blood Type <span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
              <li><a class="active" href="#">O +</a></li>
              <li><a href="#">O -</a></li>
              <li><a href="#">A +</a></li>
              <li><a href="#">A -</a></li>
              <li><a href="#">B +</a></li>
              <li><a href="#">B -</a></li>
              <li><a href="#">AB +</a></li>
              <li><a href="#">AB -</a></li>

              <li class="divider"></li>
              <li><a href="#">Others</a></li>
            </ul>
          </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Request</a>


            </div>

<div class="donate_form">

 <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Email" id="donor_email" type="text">
              <label class="login-field-icon fui-user" for="donor_email"></label>
            </div>
 
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="City" id="donor_city" type="text">
              <label class="login-field-icon fui-location" for="donor_city"></label>

            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Donate</a>

</div>


</div>

  </form>


</div>





<div class="what-we-do">
  <div class="what-we-do-header">




<div class="strike">
    <span>  
    <h2 class='what-we-do-h2' align="center">
 What We Do 
  </h2>
  </span>
</div>
    
  </div>
  <div class='what-we-do-body row col-md-offset-2' style="margin-right: 0px;">
    
<!-- http://codepen.io/mithicher/pen/azQKNN/ -->
    <div class="wrapper col-md-4">
        
        <div class="card radius shadowDepth1">
          <div class="card__image border-tlr-radius">

            <?php
               echo $this->Html->image('http://lorempixel.com/400/200/sports/',array('alt'=>'','class'=>'border-tlr-radius'));
            ?>
                </div>

          <div class="card__content card__padding">
                    <div class="card__share">
                        <div class="card__social">  
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <a id="share" class="share-toggle share-icon" href="#"></a>
                    </div>


            <article class="card__article">
              <h2><a href="#">Material Design Card - For Blog Post Article</a></h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...</p>
            </article>
          </div>


        </div>


      </div>


          <div class="wrapper col-md-4">
        
        <div class="card radius shadowDepth1">
          <div class="card__image border-tlr-radius">
            <?php
               echo $this->Html->image('http://lorempixel.com/400/200/sports/',array('alt'=>'','class'=>'border-tlr-radius'));
            ?>
                </div>

          <div class="card__content card__padding">
                    <div class="card__share">
                        <div class="card__social">  
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <a id="share" class="share-toggle share-icon" href="#"></a>
                    </div>


            <article class="card__article">
              <h2><a href="#">Material Design Card - For Blog Post Article</a></h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...</p>
            </article>
          </div>


        </div>
        

      </div>

          <div class="wrapper col-md-4">
        
        <div class="card radius shadowDepth1">
          <div class="card__image border-tlr-radius">
            <?php
               echo $this->Html->image('http://lorempixel.com/400/200/sports/',array('alt'=>'','class'=>'border-tlr-radius'));
            ?>
                </div>

          <div class="card__content card__padding">
                    <div class="card__share">
                        <div class="card__social">  
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <a id="share" class="share-toggle share-icon" href="#"></a>
                    </div>


            <article class="card__article">
              <h2><a href="#">Material Design Card - For Blog Post Article</a></h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...</p>
            </article>
          </div>


        </div>
        

      </div>


  </div>
</div>




<!-- Join Band -->



<div class="join">
       <div class="container">
         <div class="col-md-9 join-info">
         <h3>Join us. Become a Volunteer.</h3>
         <p>Come. Let us make India a better place to live.</p>
         </div>
         <div class="col-md-3 join-link">
         <a href="#">Join Us</a>
         </div>
         <div class="clearfix"></div>
       </div>
     </div>


<div class="home-requests">
  
  <div class="home-requests-head">

<div class="strike">
    <span>  
    <h2 class='donate-req-h2' align="center">
 Recent Emergency Requests
  </h2>
  </span>
</div>
    
  </div>

<?php
echo $this->element('requeststable');
?>
</div>










<script type="text/javascript">


  $(document).ready(function() {

$('.donate_form').hide();

    $("#home-slider").owlCarousel({

          navigation : true, // Show next and prev buttons
          slideSpeed : 1000,
          paginationSpeed : 1000,
          singleItem:true,
          autoPlay:true

        });


    $('body').on('click','.home_form_select',function(event){


      if ($('.request').hasClass('active')) {

        $('.request').removeClass('active');
        $('.donate').addClass('active');


        $('.req_form').removeClass('animated flipInX');
        $('.req_form').addClass('animated flipOutX');
        $('.req_form').hide();
        $('.donate_form').show();
        $('.donate_form').removeClass('animated flipOutX');

        $('.donate_form').addClass('animated flipInX');


      }
      else if ($('.donate').hasClass('active')) {
        $('.donate').removeClass('active');
        $('.request').addClass('active');


        $('.donate_form').removeClass('animated flipInX');
        $('.donate_form').addClass('animated flipOutX');
        $('.donate_form').hide();
        $('.req_form').show();

        $('.req_form').removeClass('animated flipOutX');
        $('.req_form').addClass('animated flipInX');
      };




    });



      $('.card__share > a').on('click', function(e){ 
    e.preventDefault() // prevent default action - hash doesn't appear in url
    //   $(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
    // $(this).toggleClass('share-expanded');
    });



  });


</script>

<style type="text/css">


  #home-slider .item img{
    display: block;
    width: 100%;
    height: 400px;
  }
.donate_form, .req_form {
  -webkit-animation-duration: 1s;
  -webkit-animation-delay: 0.3s;
  /*-webkit-animation-iteration-count: infinite;*/
  -moz-animation-duration: 1s;
  -moz-animation-delay: 0.3s;
  /*-moz-animation-iteration-count: infinite;  */
}

.owl-prev{
  left: 0px;
}
</style>