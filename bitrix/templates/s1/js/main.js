jQuery(function($){$("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"}); $(".phone-mask").mask("8(999) 999-99-99"); $("#ORDER_PROP_3").mask("8(999) 999-99-99"); $("#tin").mask("99-9999999"); $("#ssn").mask("999-99-9999"); $('[name="PHONE"]').mask("8(999) 999-99-99");});
$(document).ready(function(){ 
var width = BX.GetWindowInnerSize().innerWidth;
if(jQuery('#menu > .active').find('.active').length>0) {jQuery('.menu_elem_toggle').show();	jQuery('#menu > .active').removeClass('active');} 
jQuery('.book').click(function(){jQuery('#menu').toggle('slow');});
jQuery('#filter_block').click(function(){if(width <= 992) {jQuery('#filter').toggle('slow');}});
jQuery('.star').click(function(){if(width <= 992) {jQuery('.bx_item_list_bestsellers').toggle('slow');}});	

jQuery('.toggle-menu a').click(function(){jQuery('nav').toggle('slow');$('.sm_top_menu').toggleClass("open");});

$(".top-menu .has_sub_menu").on("click",function(){
	if($(".sub_menu").css("display")=="none"){
		$(".sub_menu").css("display","block");
		$(this).addClass("active");
	}else{
		$(".sub_menu").css("display","none");
		$(this).removeClass("active");
	}
});

$(window).scroll(function () {  if ($(this).scrollTop() > 0) { $('#scroller').fadeIn(); } else { $('#scroller').fadeOut(); } });
$('#scroller').click(function () {$('body,html').animate({scrollTop: 0 }, 400); return false; });

var product_list = [];
var transaction_id ='';
$('#formOneOrder').submit(function(e){
	var prodId = $('input[name="id"]').val();
	//console.log(prodId);
	e.preventDefault(); 
	var dataSend = $(this).serialize(), 
	$this = $(this),	
	email = $(this).find('input[name="usermail"]');	
	error = 0;
	//console.log(dataSend);
	$($this).find('.required').each(function(){ 
		$(this).removeClass('error'); 
		if ( $(this).val().length == 0 || ($(this).val() == $(this).attr('data-error')) ) { 
			//$(this).val($(this).attr('data-error')); 
			$(this).addClass('error'); error++;
		}
	});
	if (error == 0) {
		$.post( "/ajax/forms.php?" + dataSend, {"type" : "order_one_submit"}, 
		function( data ) { 
			console.log(data);
			if(data != 'fail'){
				var datas = JSON.parse(data);
				//console.log(datas);
				ga ('send', 'event', 'order', 'order-one-sus', 'order-one-sus'); 
				yaCounter29607890.reachGoal('SUS_ORDER_ONE_STEP');
				yaCounter29607890.reachGoal('ZAKAZ');
				
				product_list.push({ id: $('input[name="id"]').val(), price: $('input#price').val(), quantity: "1"});
				transaction_id = datas[1]
				$('.input_fields').hide();$this.find('[type="submit"]').hide();	
				$('.info').addClass('ok').html(datas[0]);document.cookie = "promo=0; path=/;"; 
				document.cookie = "cout_step=0; path=/;"; 
				$(document).ajaxSuccess(function(event, request, settings) {
					dataLayer.push({
					          'event': 'FormOneClickSend',
					          'PageType': 'TransactionPage',
					          'products_info': product_list,
					          'transaction_id': transaction_id          
					        });
					});			
				
					(function(){var x = document.createElement('script'); x.async = true;
					x.src = "//creativecdn.com/tags?type=script&id=pr_uu0l5a26lLybQNty5KeO_orderstatus2_"+$('input#price').val()+"_"+transaction_id+"_"+prodId+"&cd=false";
					document.getElementsByTagName('head')[0].appendChild(x);
					
				}());

			}
		});
	}
});



$('#call-knopka').on("click",function(){
	ga ('send', 'event', 'button', 'callback', 'call-knopka');yaCounter29607890.reachGoal('CLICK_CALLBACK');
	});
$('#sord_call').on("click",function(){
	ga ('send', 'event', 'callback', 'submit', 'callback_form_send');yaCounter29607890.reachGoal('SEND_FORM_CALLBACK');
	});
$('#title-search form').submit(function(){
	yaCounter29607890.reachGoal('SEARCH_USE');
	});
$('input[name="user_phone"]').mask("8(999) 999-99-99");
$('input[name="fio"]').on("change", function(){	
ga ('send', 'event', 'order', 'start', 'start-mebel-na-zakaz');	yaCounter29607890.reachGoal('START_FORM_MEBEL_NA_ZAKAZ');
});

function isMail(a){return/^[=_.0-9a-z+~-]+@(([-0-9a-z_]+\.)+)([a-z]{2,10})$/i.test(a)}
$('#order_spec').submit(function(event){
	event.preventDefault();
	var $this = $(this), data = $this.serialize(), emailField = $(this).find('input[name="user_email"]'), name = $(this).find('input[name="fio"]'), phone = $(this).find('input[name="user_phone"]'), email = emailField.val(); 
	var error = 0;
$($this).find('.required').each(
	function(){
		$(this).parent().removeClass('error'); 
		if ( $(this).val().length == 0 || ($(this).val() == 'Заполните поле') ) {
			$(this).val('Заполните поле'); $(this).parent().addClass('error'); error++;
		}
	});
if ( !isMail(email) ) {
	emailField.parent().addClass("error"); emailField.val('Некорректное значение!'); error++; 
}
var form = document.forms.order_spec; 
if (error == 0) {
	var formData = new FormData(form); 
	var xhr = new XMLHttpRequest(); 
	xhr.open("POST", "/ajax/forms.php"); 
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {if(xhr.status == 200) {
		data = xhr.responseText; 
		if(data == "ok") {$(".status").replaceWith("<p class='ok_msg'>Спасибо. В ближайшее время с Вами свяжется наш менеджер, чтобы уточнить детали по заявке<p>"); 
		ga ('send', 'event', 'order', 'submit', 'mebel-na-zakaz');
		yaCounter29607890.reachGoal('SEND_FORM_MEBEL_NA_ZAKAZ'); 
		document.order_spec.reset();
} 
else {
	$(".status").replaceWith("<p class='error_msg'>Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.</p>");
}
}}};
xhr.send(formData);} return false;});
});
$(document).ready(function(){

setTimeout(function() {$('.finish').show(); }, 300); 
$("#sale_block .hints").on("click", function(){if ($(this).hasClass('act') ==  true) {$(this).removeClass("act");}else{$(this).addClass("act");	}});
function getCookie(name) {var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));return matches ? decodeURIComponent(matches[1]) : undefined;} 	
$('#call-knopka').click(function(){	
	$('#form_wrapper_call').addClass('open');
});

$('#rules_unconfirmed span.wr_close').on('click touchstart',function(){
	$(this).parents('#rules_unconfirmed').hide();
	$('.overlay').fadeOut(500);
});



function getSiteType(){return /iPad/.test(navigator.userAgent)?"t":/Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent)?"m":"d";} 
var site_type = getSiteType();
dataLayer.push({'site_type': site_type});
});
		

