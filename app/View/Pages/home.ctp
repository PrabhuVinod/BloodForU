<?php

echo $this->Html->script('owl.carousel');
echo $this->Html->script('tablesorter.min');

echo $this->Html->script('Moment');
echo $this->Html->script('Chart');


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


<div class="index-lower">
<div class="testimonial-block">
  <div class="testimonials-head">
    
<div class="strike">
    <span>  
    <h2 class='testimonial-req-h2' align="center">
 What people say about Us
  </h2>
  </span>
</div>

  </div>
  <div class="testimonials">
    
    
    <div id="testimonials-slider" class="owl-carousel owl-theme">

  <div class="item">

<div class="cd-testimonials-wrapper cd-container">
  <div class="cd-testimonials">
    
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>        <ul class="cd-author-info">
          <li>MyName</li>
          <li>CEO, AmberCreative</li>
        </ul>
      </div>
    


    
  </div> <!-- cd-testimonials -->

  <a href="#0" class="cd-see-all">See all</a>
</div> <!-- cd-testimonials-wrapper -->


 </div>
 <div class="item">

<div class="cd-testimonials-wrapper cd-container">
  <div class="cd-testimonials">
    
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>        <ul class="cd-author-info">
          <li>MyName</li>
          <li>CEO, AmberCreative</li>
        </ul>
      </div>
    


    
  </div> <!-- cd-testimonials -->

  <a href="#0" class="cd-see-all">See all</a>
</div> <!-- cd-testimonials-wrapper -->


</div>


  </div>


<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>

      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
        
        <div class="cd-author">
          <?php
            echo $this->Html->image('http://lorempixel.com/120/120/',array('alt'=>'Author image'));
          ?>
          <ul class="cd-author-info">
            <li>MyName</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div> <!-- cd-author -->
      </li>
    </ul>
  </div>  <!-- cd-testimonials-all-wrapper -->

  <a href="#0" class="close-btn">Close</a>
</div> <!-- cd-testimonials-all -->


  </div>
</div>


<div class="stats-block">
  <div class="stats-head">
    <div class="strike">
    <span>  
    <h2 class='home-stats-h2' align="center">
 Daily Statistics
  </h2>
  </span>
</div>
  </div>
  <div class="stats-body row">
    
    <div class="col-md-5 col-md-offset-3">
      <canvas id="myChart" width="700" height="400"></canvas>
    </div>
    <div class="col-md-1">
      <ul style="list-style-type: none;">
        <li>
          <div class="row">
            <span class="fui-checkbox-unchecked" style="color:#e74c3c;"></span><span style="padding-left:5px;">Requests</span>
          </div>
        </li>
        <li>
        <div class="row">
            <span class="fui-checkbox-unchecked" style="color:#5dade2;"></span><span style="padding-left:5px;">Available</span>
          </div>          
        </li>
      </ul>
    </div>


  </div>
</div>

<h3 class="quotes" align="center">“Donate your blood for a reason, let the reason to be life”</h3>

<div class="home-quote-wrapper">
<div class="mb-wrap mb-style-5">
          <div class="mb-thumb"></div>
          <blockquote cite="http://books.google.pt/books/about/Dirk_Gently_s_Holistic_Detective_Agency.html?id=35li46gjDx0C&redir_esc=y">
            <p>Five minutes of your time <br>+<br>350 ml. of your blood <span> Life saved.</span></p>
          </blockquote>

        </div>




</div>
</div>

<script type="text/javascript">


  $(document).ready(function() {

$('.donate_form').hide();

    $("#home-slider").owlCarousel({

          navigation : true, // Show next and prev buttons
          slideSpeed : 1000,
          paginationSpeed : 1000,
          singleItem:true,
          autoPlay:true,
          navigationText:['<i class="fa fa-chevron-left" ></i>','<i class="fa fa-chevron-right"></i>']

        });

        $("#testimonials-slider").owlCarousel({

          navigation : true, // Show next and prev buttons
          slideSpeed : 1000,
          paginationSpeed : 1000,
          singleItem:true,
          autoPlay:true,
          navigationText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']

        });


$('.cd-testimonials-all-wrapper').children('ul').masonry({
  itemSelector: '.cd-testimonials-item'
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




  //open the testimonials modal page
  $('.cd-see-all').on('click', function(){
    $('.cd-testimonials-all').addClass('is-visible');
  });

  //close the testimonials modal page
  $('.cd-testimonials-all .close-btn').on('click', function(){
    $('.cd-testimonials-all').removeClass('is-visible');
  });
  $(document).keyup(function(event){
    //check if user has pressed 'Esc'
      if(event.which=='27'){
        $('.cd-testimonials-all').removeClass('is-visible');  
      }
    });
    
  //build the grid for the testimonials modal page
  $('.cd-testimonials-all-wrapper').children('ul').masonry({
      itemSelector: '.cd-testimonials-item'
  });


  


$('.stats-body').scrolling(); 
    
    $('.stats-body').one('scrollin', function(event, $all_elements) {



var barData = {
    labels: ['O +', 'O -', 'A +', 'A -', 'B +', 'B -', 'AB +', 'AB -'],
    datasets: [
        {
            label: 'Requests',
            fillColor: '#e74c3c',
            data: [2500, 1902, 1041, 610, 1245, 952, 458, 610]
        },
        {
            label: 'Donors',
            fillColor: '#5dade2',
            data: [3104, 1689, 1318, 589, 1199, 1436, 862, 610]
        }
    ]
};

var context = document.getElementById('myChart').getContext('2d');
var clientsChart = new Chart(context).Bar(barData);



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