function showloading()
{
	$("#loading2").show()
	$.blockUI({ message: '<h1><img src="http://localhost:81/borexv2/images/load.gif" /><p>Just a moment..</h1>',showOverlay: true, css: { backgroundColor: '#FFFFFF'}});
}
function hideloading()
{
	//$("#loading2").hide()
	$.unblockUI({fadeOut: 500});
}
function logout()
{
	if (confirm("Do you really want to logout?"))
	{
		$.ajax({
		type: "GET",
		url: "./login.php?act=logout",
		beforeSend: showloading(),
		success: function(msg){
		window.location.reload();
		},
		error: function(msg){
		alert("Ajax loading error, please try again.");
		},
		complete: function(){
		hideloading();
		}
		});
	}
}

function showpage(link)
{
	$.ajax({
	type: "GET",
	url: link,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading(),balance();
	},
	error: function(msg){
	$("#main").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function showresult(link)
{
	$.ajax({
	type: "GET",
	url: link,
	beforeSend: showloading(),
	success: function(msg){
	$("#result").after(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#result").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function getCard(cardId)
{
	$.ajax({
	type: "GET",
	url: "./card.php?act=get&cardid=" + cardId,
	beforeSend: showloading(),
	success: function(msg){
	$("#cardResult"+cardId).hide();
	$("#cardResult"+cardId).html(msg).show("slow");
	hideloading(),balance();
	},
	error: function(msg){
	$("#cardResult"+cardId).html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function getDump(cardId)
{
	$.ajax({
	type: "GET",
	url: "./dumps.php?act=get&cardid=" + cardId,
	beforeSend: showloading(),
	success: function(msg){
	$("#cardResult"+cardId).hide();
	$("#cardResult"+cardId).html(msg).show("slow");
	hideloading(),balance();
	},
	error: function(msg){
	$("#cardResult"+cardId).html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function checki(cardId)
{
	$.ajax({
	type: "GET",
	url: "./card.php?act=checki&cardid=" + cardId,
	beforeSend: showloading(),
	success: function(msg){
	$("#cardResult"+cardId).hide();
	$("#cardResult"+cardId).html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#cardResult"+cardId).html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function packchecki(cardId)
{
	$.ajax({
	type: "GET",
	url: "./packs.php?act=checki&cardid=" + cardId,
	beforeSend: showloading(),
	success: function(msg){
	$("#cardResult"+cardId).hide();
	$("#cardResult"+cardId).html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#cardResult"+cardId).html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function dumpchecki(cardId)
{
	$.ajax({
	type: "GET",
	url: "./dumps.php?act=checki&cardid=" + cardId,
	beforeSend: showloading(),
	success: function(msg){
	$("#cardResult"+cardId).hide();
	$("#cardResult"+cardId).html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#cardResult"+cardId).html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function bincheck()
{
    var listcc = $('#listcc').val()
	$.ajax({
	type: "POST",
	url: "checkbin.php",
    data: "listcc="+listcc,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#main").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function checkcc()
{
    var cclist = $('#cclist').val();
    var dup = $('#dup').is(':checked');
    var date = $('#date').is(':checked');
    var typec = $('#type').is(':checked');
    var bin_info = $('#bin_info').is(':checked');
	$.ajax({
	type: "POST",
	url: "ccexp.php",
    data: "cclist="+cclist+"&dup="+dup+"&date="+date+"&type="+typec+"&bin_info="+bin_info,
	beforeSend: showloading(),
	success: function(msg){
	$("#checkresult").hide();
	$("#checkresult").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#checkresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function depositpm()
{
    var userid = $('#userId').val()
    var value = $('#value').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=pm",
    data: "userId="+userid+"&value="+value,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function depositbtc()
{
    var useridbtc = $('#userIdbtc').val()
    var valuebtc = $('#valuebtc').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=btc",
    data: "userIdbtc="+useridbtc+"&valuebtc="+valuebtc,
	beforeSend: showloading(),
	success: function(msg){
	$("#buyresult").hide();
	$("#buyresult").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}

function depositupm()
{
    var userid = $('#userIdupm').val()
    var value = $('#valuepm').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=upm",
    data: "userId="+userid+"&value="+value,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function deposituwmz()
{
    var userid = $('#userIdwmz').val()
    var value = $('#valuewmz').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=uwmz",
    data: "userId="+userid+"&value="+value,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}

function depositupaymer()
{
    var userid = $('#userIdpaymer').val()
    var value = $('#valuepaymer').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=upaymer",
    data: "userId="+userid+"&value="+value,
	beforeSend: showloading(),
	success: function(msg){
	$("#main").hide();
	$("#main").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}

function depositbtcspeed()
{
    var useridspeed = $('#userIdspeed').val()
    var userIdspeedsum = $('#userIdspeedsum').val()
	$.ajax({
	type: "POST",
	url: "payprocess.php?act=btcspeed",
    data: "userIdbtc="+useridspeed+"&userIdspeedsum="+userIdspeedsum,
	beforeSend: showloading(),
	success: function(msg){
	$("#buyresult").hide();
	$("#buyresult").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#buyresult").html("<font color='#ff0000'>Ajax loading error, please try again.</font>").show("slow");
	hideloading();
	}
	//, complete: hideloading()
	});
}
function update_cart()
{
	$.ajax({
	type: "POST",
	url: "cart.php?act=update",
	beforeSend: showloading(),
	success: function(msg){
	$("#cart").hide();
	$("#cart").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#cart").html("<font color='#ff0000'>Ajax error</font>").show("slow");
	hideloading();
	}
	});
}
function add_to_cart(card_id)
{
	$.ajax({
	type: "POST",
	url: "cart.php?act=add",
    data: "card_id="+card_id,
	});
    success: update_cart()
}
function remove_from_cart(card_id)
{
	$.ajax({
	type: "POST",
	url: "cart.php?act=remove",
    data: "card_id="+card_id,
	});
    success: update_cart(),totalcart();
}
function all_add_to_cart(){
	$('.card').each(function(){
    if($(".allcart").is(":checked")){
    add_to_cart($(this).attr('item_id'));
    } else {
    remove_from_cart($(this).attr('item_id'));
    }
	}
    );
    success: update_cart()
}
function cart_select(card_id){
	$('#card-'+card_id).each(function(){
    if($('#card-'+card_id).is(":checked")){
    add_to_cart($(this).attr('item_id'));
    } else {
    remove_from_cart($(this).attr('item_id'));
    }
    success: update_cart()
	});
}
function buy_all_cc(){
	$('.card').each(function(){
    getCard($(this).attr('item_id'));
    success: update_cart();
	}
    );
}
function clear_all_cc(){
    if ($(".card").length > 0){
    beforeSend: showloading(),
	$('.card').each(function(){
    remove_from_cart($(this).attr('item_id'));
    success: showpage('cart.php?act=order');
	}
    );
    }
    
}
function totalcart()
{
	$.ajax({
	type: "POST",
	url: "cart.php?act=totalcart",
	beforeSend: showloading(),
	success: function(msg){
	$("#totalcart").hide();
	$("#totalcart").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#totalcart").html("<font color='#ff0000'>Ajax error</font>").show("slow");
	hideloading();
	}
	});
}
//CART DUMP

function dump_update_cart()
{
	$.ajax({
	type: "POST",
	url: "dumpcart.php?act=update",
	beforeSend: showloading(),
	success: function(msg){
	$("#dumpcart").hide();
	$("#dumpcart").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#dumpcart").html("<font color='#ff0000'>Ajax error</font>").show("slow");
	hideloading();
	}
	});
}
function dump_add_to_cart(card_id)
{
	$.ajax({
	type: "POST",
	url: "dumpcart.php?act=add",
    data: "card_id="+card_id,
	});
    success: dump_update_cart()
}
function dump_remove_from_cart(card_id)
{
	$.ajax({
	type: "POST",
	url: "dumpcart.php?act=remove",
    data: "card_id="+card_id,
	});
    success: dump_update_cart(),dumptotalcart();
}
function dump_all_add_to_cart(){
	$('.dump').each(function(){
    if($(".dumpallcart").is(":checked")){
    dump_add_to_cart($(this).attr('item_id'));
    } else {
    dump_remove_from_cart($(this).attr('item_id'));
    }
	}
    );
    success: dump_update_cart()
}
function dump_cart_select(card_id){
	$('#card-'+card_id).each(function(){
    if($('#card-'+card_id).is(":checked")){
    dump_add_to_cart($(this).attr('item_id'));
    } else {
    dump_remove_from_cart($(this).attr('item_id'));
    }
    success: dump_update_cart()
	});
}
function buy_all_dump(){
	$('.dump').each(function(){
    getDump($(this).attr('item_id'));
    success: dump_update_cart()
	}
    );
}
function clear_all_dump(){
    if ($(".dump").length > 0){
    beforeSend: showloading(),
	$('.dump').each(function(){
    dump_remove_from_cart($(this).attr('item_id'));
    success: showpage('dumpcart.php?act=order');
	}
    );
    }
}
function dumptotalcart()
{
	$.ajax({
	type: "POST",
	url: "dumpcart.php?act=totalcart",
	beforeSend: showloading(),
	success: function(msg){
	$("#totalcart").hide();
	$("#totalcart").html(msg).show("slow");
	hideloading();
	},
	error: function(msg){
	$("#totalcart").html("<font color='#ff0000'>Ajax error</font>").show("slow");
	hideloading();
	}
	});
}

//MASS CHECK
function masscheck(){
    if ($(".checkcc").length > 0){
    beforeSend: showloading(),
	$('.checkcc').each(function(){
    checki($(this).attr('item_id'));
    hideloading();
	}
    );
    }
}
function massdumpcheck(){
    if ($(".checkdump").length > 0){
    beforeSend: showloading(),
	$('.checkdump').each(function(){
    dumpchecki($(this).attr('item_id'));
    hideloading();
	}
    );
    }
    
}
function packcheck(){
    if ($(".checkdump").length > 0){
    beforeSend: showloading(),
	$('.checkdump').each(function(){
    packchecki($(this).attr('item_id'));
    hideloading();
	}
    );
    }
    
}
//BALANCE
function balance()
{
	$.ajax({
	type: "GET",
	url: "balance.php",
	success: function(msg){
	$("#balance").hide();
	$("#balance").html(msg).show("slow");
	},
	error: function(msg){
	$("#balance").html("<font color='#ff0000'>Ajax error</font>").show("slow");
	}
	});
}


