<div class="page-header"><h1>Credit Card Checker<small> 1 line = 1 card</small></h1></div></div></div>
<div class='col-md-12'>
<div class="row">
<div class="col-sm-8">
<h4>Example:</h4>
<div class="well">
<span>5457497921800000|03|15|416</span><br>
<span>5457497921800000|0315|416</span><br>
<span>5457497921800000/0315/416</span><br>
<span>5457497921800000;0315;416;Maria De La Torre;Canada;ON;Brampton;L6Z0C7;5 Copperfield</span><br>
<span>5457497921800000|0315|416|Maria De La Torre|Canada|ON|Brampton|L6Z0C7|5 Copperfield</span>
</div>
</div>
<div class="col-sm-4">
<h4>Price:</h4>
<div class="well">
<center><h4>Checker price: {{CheckerPrice}} $ /piece</h4></center>
</div>
<p><center><h4>1 card = 1 line</h4></center></p>
</div>
</div>
<hr>    
<div class='panel panel-default'>
<center><div class='panel-heading'>Credit Card Checker</div></center>
<form action=""> <textarea class="form-control" id="cclist" cols="120" rows="10"></textarea>
</div><center>
<label class="checkbox-inline">Duplicate Remove <input id=dup type=checkbox value=1 class="grey" checked> </label>
<label class="checkbox-inline">Sort by type <input id=type type=checkbox value=1 class="grey" checked> </label>
<label class="checkbox-inline">Sort Date <input id=date type=checkbox value=1 class="grey" > </label>
<label class="checkbox-inline">Check BIN info <input id=bin_info type=checkbox value=1 class="grey" checked> </label>
</center>
<p><button onclick="checkcc();" class="btn btn-green btn-lg btn-block">Check Now</button></p>
</form></div>
<div id="checkresult">
</div>