// const { Collapse } = require("bootstrap");

var swiper = new Swiper('.recent-container', {
    navigation: {
      nextEl: '.right-btn',
      prevEl: '.left-btn',
    },
  });

  var buttonTarget = document.getElementsByClassName("counter")[0];
  var counter = 2;
  
  
  function incrementer(){
    buttonTarget.innerHTML  = counter.toString();
    counter++;
    return counter;
  }
  function detriment(){
    buttonTarget.innerHTML  = counter.toString();
    counter--;
    return nocounter;
  }
  // texteditor area
 
  
function next1() {
  var product = document.getElementById('product_design');
  var graphics = document.getElementById('graphics_design');
  var webds = document.getElementById('web_desig');
  var webdv = document.getElementById('web_development');
  var cms = document.getElementById('cms_solution');
  var social = document.getElementById('social_media');
  var advance = document.getElementById('advance_seo');
  var advertising = document.getElementById('advertising');
  var campaign = document.getElementById('campaign');
  var event = document.getElementById('event');
  var Competition = document.getElementById('Competition');
  var other = document.getElementById('Other');
  var checkBox = other;
  
  var checktext = document.getElementById('checktext');
  var choose = document.getElementById('choose');
  var requirement = document.getElementById('requirement');
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  if (Competition.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
    }
  else {
    checktext.classList.add('check-text-open');
    checktext.classList.remove('check-text');
    counter.innerHTML = 1;
    progressarea.classList.remove("open");
  }
  if (event.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
  if (campaign.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
  if (advertising.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
  if (advance.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
  if (social.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
  if (cms.checked == true){
    window.alert('yes');
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (webdv.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (webds.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (graphics.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (product.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }if (checkBox.checked == true){
    checktext.classList.remove('check-text-open');
    checktext.classList.add('check-text');
    choose.classList.remove('choose-block');
    choose.classList.add('choose-none');
    requirement.classList.add('requirement-block');
    requirement.classList.remove('requirement-none');
    counter.innerHTML = 2;
    progressarea.classList.add("open");
  }
}
function skip1(){
  var choose = document.getElementById('choose');
  var requirement = document.getElementById('requirement');
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  choose.classList.remove('choose-block');
  choose.classList.add('choose-none');
  requirement.classList.add('requirement-block');
  requirement.classList.remove('requirement-none');
  counter.innerHTML = 2;
  progressarea.classList.add('open');
}

function next2(){
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  var requirement = document.getElementById('requirement');
  var conetctarea = document.getElementById('conetctarea');
  counter.innerHTML = 3;
  progressarea.classList.add("open2");
  progressarea.classList.remove("open1");
  requirement.classList.remove('requirement-block');
  requirement.classList.add('requirement-none');
  conetctarea.classList.add('contect-block');
  conetctarea.classList.remove('contect-none');
}
function skip2(){
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  var requirement = document.getElementById('requirement');
  var conetctarea = document.getElementById('conetctarea');
  counter.innerHTML = 3;
  progressarea.classList.add("open2");
  progressarea.classList.remove("open1");
  requirement.classList.remove('requirement-block');
  requirement.classList.add('requirement-none');
  conetctarea.classList.add('contect-block');
  conetctarea.classList.remove('contect-none');
}
function back1(){
  var choose = document.getElementById('choose');
  var requirement = document.getElementById('requirement');
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  choose.classList.add('choose-block');
  choose.classList.remove('choose-none');
  requirement.classList.remove('requirement-block');
  requirement.classList.add('requirement-none');
  counter.innerHTML = 1;
  progressarea.classList.remove('open');
}

function back2(){
  var counter = document.getElementById('counter');
  var progressarea = document.getElementById('progressarea');
  var requirement = document.getElementById('requirement');
  var conetctarea = document.getElementById('conetctarea');
  counter.innerHTML = 2;
  progressarea.classList.remove("open2");
  progressarea.classList.add("open1");
  requirement.classList.add('requirement-block');
  requirement.classList.remove('requirement-none');
  conetctarea.classList.remove('contect-block');
  conetctarea.classList.add('contect-none');
}

var placeholder = document.getElementById("placeholder");
var inputfield = document.getElementById("inputfield");
var inputfield2 = document.getElementById("inputfield2");

function inputload(){
 let inputfields = inputfield; 
 let placeholders = placeholder; 
  if( inputfields.value.length == 0 ){
    placeholder.classList.remove('placeholder-name-open');
  }
  else{
    placeholders.classList.add('placeholder-name-open');
  }
}

function inputload2(){
  let placeholder2 = document.getElementById("placeholder2");
  let inputfields2 = inputfield2;

   
  if( inputfields2.value.length == 0 ){
    placeholder2.classList.remove('placeholder-name-open');
  }
  else{
    placeholder2.classList.add('placeholder-name-open');
  }
}
function inputload3(){
  let placeholder3 = document.getElementById("placeholder3");
  let inputfield3 = document.getElementById("inputfield3");

   
  if( inputfield3.value.length == 0 ){
    placeholder3.classList.remove('placeholder-name-open');
  }
  else{
    placeholder3.classList.add('placeholder-name-open');
  }
}
function inputload4(){
  let placeholder4 = document.getElementById("placeholder4");
  let inputfield4 = document.getElementById("inputfield4");

   
  if( inputfield4.value.length == 0 ){
    placeholder4.classList.remove('placeholder-name-open');
  }
  else{
    placeholder4.classList.add('placeholder-name-open');
  }
}
function inputload5(){
  let placeholder5 = document.getElementById("placeholder5");
  let inputfield5 = document.getElementById("inputfield5");

   
  if( inputfield5.value.length == 0 ){
    placeholder5.classList.remove('placeholder-name-open');
  }
  else{
    placeholder5.classList.add('placeholder-name-open');
  }
}
function inputload6(){
  let placeholder6 = document.getElementById("placeholder6");
  let inputfield6 = document.getElementById("inputfield6");

   
  if( inputfield6.value.length == 0 ){
    placeholder6.classList.remove('placeholder-name-open');
  }
  else{
    placeholder6.classList.add('placeholder-name-open');
  }
}
function inputload7(){
  let placeholder7 = document.getElementById("placeholder7");
  let inputfield7 = document.getElementById("inputfield7");

   
  if( inputfield7.value.length == 0 ){
    placeholder7.classList.remove('placeholder-name-open');
  }
  else{
    placeholder7.classList.add('placeholder-name-open');
  }
}
 
  function leststep(){
   let subinputfields = inputfield;
   let subinputfields2 = inputfield2;
   var subtext = document.getElementById('subtext');
   var subtext2 = document.getElementById('subtext2');
   var btnsubmit = document.getElementById('btnsubmit');
   if(subinputfields.value.length == 0){
    subtext.classList.add("check-text-open");
    subtext.classList.remove("check-text");
  }
  if( subinputfields2.value.length == 0){
    subtext2.classList.add("check-text-open");
    subtext2.classList.remove("check-text");
  }
  
  else{
    subtext.classList.remove("check-text-open");
    subtext.classList.add("check-text");
    subtext2.classList.remove("check-text-open");
    subtext2.classList.add("check-text");
    btnsubmit.type = "submit";
  }
  }
  

  // juery js 
  (function($){
    'use strict';
    	// mobile menu responsive
      $(document).on('click','.menu-bar',function(){
        $(".list-menu").toggleClass("open");
            // $(".main-menu").toggleClass("open");
            $(".overlay").addClass("active");
            $("body").addClass("overflow");
        });
//input filed function 


        // overlay remove
        $('.overlay').on('click', function(){
          $('body').removeClass('overflow');
          $('.list-menu').removeClass('open');
          $('body,.overlay').removeClass('active');
          $('body').removeClass('overflow');
        });
      
      // scroll up start here
            $(function(){
              // $(window).scroll(function(){
              //   if ($(this).scrollTop() > 300) {
              //     $('.scrollToTop').css({'bottom':'2%', 'opacity':'1','transition':'all .5s ease'});
              //   } else {
              //     $('.scrollToTop').css({'bottom':'-30%', 'opacity':'0','transition':'all .5s ease'});
              //   }
              // });
              //Click event to scroll to top
              $('.scrollToTop').on('click', function(){
                $('html, body').animate({scrollTop : 0},500);
                return false;
              });
            });

        // progress bar
        // $('.process').on('click', function(){
        //   $('.area-active').addClass('open');
        // });
      
        // This demo uses jQuery UI Autocomplete
// https://jqueryui.com/autocomplete

// Cannot style datalist elements yet, so get
// each option value and pass to jQuery UI Autocomplete
$('input[data-list]').each(function () {
  var availableTags = $('#' + $(this).attr("data-list")).find('option').map(function () {
    return this.value;
  }).get();

  $(this).autocomplete({
    source: availableTags
  }).on('focus', function () {
    $(this).autocomplete('search', ' ');
  }).on('search', function () {
    if ($(this).val() === '') {
      $(this).autocomplete('search', ' ');
    }
  });
});

        
    })(jQuery);