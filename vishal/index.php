<!DOCTYPE html>
<html>
<head>
	<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="ajaxextract.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<button type = "button" id="volume_1" class = "btn btn-primary" onclick="ajax_search(this.id);">Volume 1 <br> All Issues</button><br>
			<button type = "button" id="volume_2" class = "btn btn-primary" onclick="ajax_search(this.id);" >Volume 2 <br> All Issues</button><br>
			<button type = "button" id="volume_3" class = "btn btn-primary" onclick="ajax_search(this.id);" >Volume 3 <br> All Issues</button><br>

		</div>
		<div class="col-md-8">
			<div id="search_results"></div>
		</div>
	</div>
</div>
</body>
</html>