// Add your javascript here

   $('#schedule-time #right-button').click(function() {
      event.preventDefault();
      $('#schedule-time #content').animate({
        scrollLeft: "+=300px"
      }, "slow");
   });

     $('#schedule-time #left-button').click(function() {
      event.preventDefault();
      $('#schedule-time #content').animate({
        scrollLeft: "-=300px"
      }, "slow");
   });
   $('#schedule-content #schedule-list').one().on('click',function() {
      var price = $(this).find('#price').text();
     $('#schedule-content #schedule-list').removeClass('schedule-selected');
     $(this).toggleClass('schedule-selected');
     $('#after-schedule-selected').css('display','block');
     $('#after-schedule-selected #selected-price').text(price);
   })
var monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
var dayNames= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]



$('#content #Date').each(function(index){
  var newDate = new Date();
  newDate.setDate(newDate.getDate()+index);
  $(this).parent().attr('data-target','#'+monthNames[newDate.getMonth()]+newDate.getDate());
  $(this).html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
});
$('#schedule-content .tab-content .tab-pane').each(function(index){
  var newDate = new Date();
  newDate.setDate(newDate.getDate()+index);
  $(this).attr('id',monthNames[newDate.getMonth()]+newDate.getDate());
  $(this).find('#date').val(monthNames[newDate.getMonth()]+newDate.getDate());
});
$('#schedule #schedule-list').each().hasClass('schedule-selected',function(){
  // var price = $(this).find('#price').text();
  $('#after-schedule-selected').css('display','block');
  // $('#after-schedule-selected #selected-price').text(price);
})
$('#after-schedule-selected .container-fluid  button.close').click(function(){
  $('#schedule-content #schedule-list').removeClass('schedule-selected');
    $('#after-schedule-selected').css('display','none');
})


$('.tab-pane').each(function(){
  var id = "#"+$(this).attr('id').toString();
  var minprice = Number.MAX_VALUE;
  $(this).find('div#price').each(function(){
    var price = $(this).text().toString().replace('$ ', '');
    price = parseFloat(price);
    if(price < minprice){
      minprice = price;
    }
    })
    $('#schedule-time #content a').each(function(){
      var dataTarget = $(this).attr('data-target').toString();
      if(dataTarget ===  id){
        if(minprice == Number.MAX_VALUE){
            $(this).find('#started-price-text').text('None');
            $(this).find('h6').text("Not Available");
        }else{
        $(this).find('h6').text("$ "+ minprice.toFixed(2));
        }
      }
    })
});

$(function(){
  $('#seat-selection li.btn.btn-success').click(function(e){

  var result = $( "#select-result" ).empty();
  $(this).toggleClass('ui-selected');
  var count=0;
  $( ".ui-selected").each(function() {
    var seat = $(this).text();
    count += 1;
    result.append(" " + seat + ", ");


    });
    if(result.is(':empty')){
      result.text("none");
    }
    var cost =$('#seat-selection #totalCost').empty();
      cost.text('$ '+ count*50 +'.00');
      var price =$('#seat-selection #total').empty();
      price.text(count);
    });
});

$('#schedule-content .tab-pane').each(function(){
  
});
