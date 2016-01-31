<?php

echo $this->Html->script('owl.carousel');

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
              <input class="form-control login-field" value="" placeholder="Enter your email" id="req_email" type="text">
              <label class="login-field-icon fui-user" for="req_email"></label>
            </div>
 
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Enter your city" id="req_city" type="text">
              <label class="login-field-icon fui-location" for="req_city"></label>

            </div>


            <div class="form-group btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Blood Type <span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
              <li><a class="active" href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Request</a>


            </div>

<div class="donate_form">

 <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Enter your name" id="donor_email" type="text">
              <label class="login-field-icon fui-user" for="donor_email"></label>
            </div>
 
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Enter your city" id="donor_city" type="text">
              <label class="login-field-icon fui-location" for="donor_city"></label>

            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Donate</a>

</div>


</div>

  </form>


</div>



<h1>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br>sdf sdf <br></h1>
<script type="text/javascript">


  $(document).ready(function() {

$('.donate_form').hide();

    $("#home-slider").owlCarousel({

          navigation : false, // Show next and prev buttons
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


</style>