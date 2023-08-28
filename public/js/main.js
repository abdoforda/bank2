var width,
    containerwidth,
    left,
    way = 0;
way = 1;

$(document).mouseup(function(e) 
{
    var container = $(".currencies_ul");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.fadeOut();
    }
});

$(document).ready(function () {

    $(".bt04_close").click(function(){
        $(".registerFormFixed").toggleClass("active");
    });

    $(".bt04").click(function(){
        $(".registerFormFixed").toggleClass("active");
    });

    $(".bt04").hover(function () {
        $(".registerFormFixed").addClass("active");
        }, function () {
            // out
        }
    );

    $(document).on('click', function(event) {
        var target = $(event.target);
        if (!target.closest('.registerFormFixed').length && target.attr('class') !== 'registerFormFixed') {
            $(".registerFormFixed").removeClass("active");
        }
      });
      

    $(".list_title_video li").click(function (e) { 
        $(".list_title_video li").removeClass("active");
        $(this).addClass("active");
        var url = $(this).data('url');
        url = "https://www.youtube.com/embed/"+url;
        $(".youtube_video_result").html('<iframe class="video_technical_analysis_videos" width="100%" height="440" src="'+url+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>').hide().fadeIn();
    });

    $(".chosse_currencies").click(function (e) { 
        $(".currencies_ul").slideDown();
    });

    $(".btn_show_items_deposit_withdrawal_methods").click(function (e) { 
        $(".table_toggle").hide();
        $("#"+$(this).data("id")).fadeIn();
    });

    iftggl = 0;
    $(".tggl").click(function(){

        var id_tr = $(this).data("id");

        if($(this).hasClass('is-active')){
            $(this).toggleClass("is-active");
            $(`#${id_tr}`).fadeOut();
            return;
        }
            $(`#${id_tr}`).fadeIn();
            $(this).toggleClass("is-active");
            
    });

    $(".feature-box").click(function (e) { 
        $(this).find(".box-paragraph").slideToggle();
    });

    $(".fa-eye").click(function (e) { 

        var check =  $(this).closest(".input-group").find(".pass").attr("type");
        if(check == "password"){
            $(".input-group").find(".pass").attr("type","text");
            return;
        }
        $(".input-group").find(".pass").attr("type","password");
    });

    $(".uld_hover .dropdown").hover(
        function () {
            $(this).find("ul.dropdown-menu").addClass("show");
        },
        function () {
            $(this).find("ul.dropdown-menu").removeClass("show");
        }
    );

    width = $(".ticker-text").width();
    containerwidth = $(".ticker-container").width();
    left = containerwidth;

    tick();

    $(".btn-hide-show").click(function (e) {
        $(".hide_if_btn_click").hide(0);
        var id = $(this).data("id");
        console.log(id);
        $("#" + id).fadeIn();
    });

    $(window).scroll(function () {
        var xscroller = 10;
        $(".navmain").toggleClass("scrolled", $(this).scrollTop() > xscroller);
        if($(this).scrollTop() > xscroller){
          $(".logo_navbar").attr('src','/images/new_images/logo/logo_blue.png');
        }else{
          $(".logo_navbar").attr('src','/images/new_images/logo/logo_white.png');
        }
    });


    $(".pagination_tbody tr").css({"display":"none"});
    var trs = $(".pagination_tbody").find('tr');
    var count_in_page = 12;
    var pagination = trs.length / count_in_page;
    if(parseInt(pagination) != pagination){
        pagination = parseInt(pagination)+1;
    }


    create_li_pages(pagination);
    show_from_pageination(count_in_page, 1, trs); 

    var xpage = 1;
    $(".ul_pages li.btn-next").click(function(e){

        if(xpage < pagination){
            xpage++;
            $(".ul_pages li.num-page").text(xpage);
            show_from_pageination(count_in_page, xpage, trs);
        }
        
    });

    $(".ul_pages li.btn-prev").click(function(e){

        if(xpage > 1){
            xpage--;
            $(".ul_pages li.num-page").text(xpage);
            show_from_pageination(count_in_page, xpage, trs);
        }
        
    });

});


function create_li_pages(pagination){
    for (let index = 1; index <= pagination; index++) {
        //$(".ul_pages").append(`<li>${index}</li>`);
    }
    //$(".ul_pages li:first").addClass("is_active");
}

function show_from_pageination(count_in_page, num, trs){
    console.log(num);
    var start_num = parseInt(count_in_page) * parseInt(num - 1);
    var end_num = count_in_page * num;
    $(".pagination_tbody").find('tr').css({"display":"none"});
    for (let i = start_num; i < end_num; i++) {
        if (i % 2 === 0) {
            console.log(i);
            $(trs[i]).css({"display":"revert"});
            //$(trs[i]).css({"display":"block"});
          }
    }
}

function tick() {
    if (way) {
        if (--left < -width) {
            left = containerwidth;
        }
    } else {
        if (++left > containerwidth) {
            left = -width;
        }
    }

    $(".ticker-text").css("margin-left", left + "px");
    setTimeout(tick, 8);
}

const rangeInputs = document.querySelectorAll('input[type="range"]');

var val_loyalty = 0;
var coste_price = 6.5;
var yarned = 0;
var tb2 = ".tb2";
var tb3 = ".tb3";
var tb4 = ".tb4";

var if_curr_1 = 16;
var if_curr_2 = 76;
var if_curr_3 = 1001;

function change_coste_price(e, pass01,pass02,pass03,pass04){

    $(".title_currencies").text($(e).text());
    coste_price = pass01;
    if_curr_1 = pass02;
    if_curr_2 = pass03;
    if_curr_3 = pass04;
    range = document.getElementById('range');
    range.value = 1;
    updatecommission(1);

}

function handleInputChange(e) {
    let target = e.target
    if (e.target.type !== 'range') {
      target = document.getElementById('range')
    } 
    const min = target.min;
    const max = target.max;
    const val = target.value;
    
    $("#rangevalueamount p").text("$"+val * 600);
        updatecommission(val);
  }
  
  function updatecommission(val){
    $(".currencies_ul").fadeOut();
    $(".change_from_input").removeClass("fw-bold");
    yarned = 0;
    $(".change_tow").text(0);

    if(val >= if_curr_1){
        val_loyalty = 10;
        $(tb2).addClass("fw-bold");
        //25*200/100
        yarned = ((val_loyalty*(parseFloat(coste_price)*parseFloat(val))) / 100);
        $(".change_tow").text(numberWithCommas((yarned)));
        
    }
    if(val >= if_curr_2){
        val_loyalty = 15;
        $(".change_from_input").removeClass("fw-bold");
        $(tb3).addClass("fw-bold");
        yarned = ((val_loyalty*(parseFloat(coste_price)*parseFloat(val))) / 100);
        $(".change_tow").text(numberWithCommas(yarned));
    }
    if(val >= if_curr_3){
        val_loyalty = 20;
        $(".change_from_input").removeClass("fw-bold");
        $(tb4).addClass("fw-bold");
        yarned = ((val_loyalty*(parseFloat(coste_price)*parseFloat(val))) / 100);
        $(".change_tow").text(numberWithCommas(yarned));
    }

    $(".change_one").text(numberWithCommas((parseFloat(coste_price)*parseFloat(val))));
    $(".changeLive").text(numberWithCommas((parseFloat(coste_price)*parseFloat(val))+(yarned)));
    
  };

  rangeInputs.forEach(input => {
    input.addEventListener('input', handleInputChange)
  })
  
  function numberWithCommas(x) {
    x = x.toFixed(1);
    return x.toString().replace('.', ",");
}


var newSubmit = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

function removeErrors(form){
    $(form).find("[type='submit']").html(newSubmit).attr("disabled","disabled");
    $(".is-invalid").removeClass("is-invalid");
    $(".invalid-feedback").remove();
}

function errors(form, data) {
    
    obj = data.errors;
    for (var key in data.errors) {
        var value = obj[key];
        console.log(value);
        find_error_name_and_display_message(form, key, value);
    }
  }
  
  function find_error_name_and_display_message(form, key, value) {

    $(form).find("[name='" + key + "']").addClass("is-invalid");
    $(form).find("[name='" + key + "']").after(`<div class="invalid-feedback">${value}</div>`);

  }
  function toast(json) {
    if (json.redirect) {
        Swal.fire({
            title: json.message,
            confirmButtonText: json.confirmText,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */ if (
                result.isConfirmed
            ) {
                window.location.href = json.redirect;
            }else{
                window.location.href = json.redirect;
            }
        });
        return;
    }
    Swal.fire({ title: json.message, confirmButtonText: okk });
}