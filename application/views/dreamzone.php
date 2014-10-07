<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td width="65%" valign="top" style="padding:10px;">
			
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<th>Time | Date | Name | Gender | Map</th>
					<th align="left">Message</th>
					<th align="right">(Comments)</th>
				</tr>
				
				<?php foreach($feeds AS $f): ?>
				
				<tr>
					<td colspan="3">
						<?= $f->created_date ?>
						|
						<span title="<?= $f->nick ?>">เกิ้ล ...</span>
						
						|
						<img src="<?= base_url('assets/images/icons') ?>/<?= ($f->gender==1)?'male':(($f->gender==0)?'female':'question-white') ?>.png"
							alt="<?= ($f->gender==1)?'Male':(($f->gender==0)?'Female':'?') ?>"
							title="<?= ($f->gender==1)?'Male':(($f->gender==0)?'Female':'?') ?>" />
						
						&nbsp;&nbsp;
						&nbsp;&nbsp;
						&nbsp;&nbsp;
						<?= $f->title ?>
						&nbsp;&nbsp;
						(0)
					</td>
				</tr>
				
				<?php endforeach; ?>
			</table>
			
<form action="<?= site_url('dreamzone/submit_feed') ?>" method="post">
<table>
	<tr>
		<td align="right">Title</td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td align="right">Location</td>
		<td><input type="text" name="location" /></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" /></td>
	</tr>
</table>
</form>
		</td>
		
		<td width="35%" align="center" valign="top" class="hot-topic-container">
			
			<h2>HOT TOPICS</h2>
			
			<div class="topic-child">
				xxxxxxxxxxxxxxxxxxxxxxxxxxxx
			</div>
			<div class="topic-child">
				yyyyyyyyyyyyyyyyyyyyyyyyyyyy
			</div>
			<div class="topic-child">
				zzzzzzzzzzzzzzzzzzzzzzzzzzzz
			</div>
			<div class="topic-child">
				<div id="map-canvas" style="height:300px;"></div>
			</div>
		</td>
	</tr>
	
	
	
</table>
<ul class="nav-footer">
	<li></li>
</ul>
<hr class="footer-sep" />

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjpD8QcqnnGRA_9rybvBRDqzxC58to7yk"></script>
<script type="text/javascript">
$(function(){
	
	function initialize() {
	  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
	  var mapOptions = {
	    zoom: 4,
	    center: myLatlng
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	  var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: 'Hello World!'
	  });
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
});
	
</script>
