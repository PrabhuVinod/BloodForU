  <div class="requests-table">
    

				<table id="blood_reqs" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Blood Type</span></th>
        <th><span>Location</span></th>
        <th><span>Name</span></th>
        <th><span>Emergency</span></th>
        <th colspan="2"><span>Donate</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="90">
        		<div class="amount"></div>
        	</div>
        </td>
        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
      <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="80">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
      <tr>
        <td>B +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="100">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
      <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="80">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
      <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="80">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
      <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="80">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
	  <tr>
        <td>A +</td>
        <td>Hyderabad</td>
        <td>Pakodi</td>
        <td>
        	<div class="progress" data-amount="10">
        		<div class="amount"></div>
        	</div>
        </td>        <td><button class="btn btn-lg btn-danger">Donate</button></td><td><button class="btn btn-lg btn-info">Refer</button></td>
      </tr>
    </tbody>
  </table>


  </div>



  <script type="text/javascript">
$('.requests-table').ready(function(){
$('#blood_reqs').tablesorter(); 

//urgency bar


$('.requests-table .progress').each(function(index,value){

// console.log(value);
// console.log($(this).children('.amount').html());
	var dataval = parseInt($(value).attr("data-amount"));
    if (dataval < 100) {
        $(this).children('.amount').css("width", 100 - dataval + "%");
    }

});



});
  </script>