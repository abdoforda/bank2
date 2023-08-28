$(document).ready(function () {

	const mapUl = document.querySelector('.map_ul');

	if (mapUl) {
		let accentColor = '#e07a49';
		let todayDay = new Date().getDay();
		let marketsOffDiv = $('.markets-off__message');

		if (todayDay === 6 || todayDay === 0) {
			accentColor = '#000000';
			marketsOffDiv.addClass('markets-off__message__active');
		}

		var folder = $('#temp_folder').attr('data-folder');
		$(':root').css('--temp-folder', `url(${folder}/img/red_clock2.png)`);

		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		// создание надписи GMT времени
		$real_time = new Date();
		$gmt = $real_time.toTimeString();
		$gmt = $gmt.slice($gmt.indexOf('GMT'), ($gmt.indexOf('GMT')+8));
		$gmt = $gmt.slice(0, $gmt.length-2);
		$hours = $real_time.getHours();
		$minuts = $real_time.getMinutes()+"";
		// добавить в начале НОЛЬ
		if ($minuts.length == 1) {
			$minuts = "0"+$minuts;
		}

		// сдвинуть начало отображения часов
		if ($gmt.indexOf('+') != -1) {
			$chas = 0 + parseInt($gmt.slice(4));
		}
		if ($gmt.indexOf('-') != -1) {
			$chas = 24 - parseInt($gmt.slice(4));
		}

		$last_span = "";
		$start_chas = $chas;

		// выставить на графике часы и стиль
		for ($i = 0; $i <= 24; $i++) {
			if ($chas == 25) {
				$chas = 1;
			}

			// 1
			if ($i > 22) {

				if ($last_span == "") {
					$("#small #chas23 span:last, #big #chas23 span:last").text($chas);
					Style_span($i,$chas,"last");// задать стили спану
				}
				if ($last_span != "") {
					$chas = $start_chas;
					$("#small #chas23 span:first, #big #chas23 span:first").text($chas);
					Style_span($i,$chas,"first");// задать стили спану
				}

				$last_span = "1";
			}

			// 2
			if ($i <= 22) {
				$("#small #chas"+$i+" span, #big #chas"+$i+" span").text($chas);
				Style_span($i,$chas,"");// задать стили спану
			}

			$chas++;
		}

		// ++++++++++++++++++++++++++++
		// задать стили спану
		function Style_span($i,$chas,$last){

			// задать стили спану
			if (($chas+"").length == 1 && $last == "") {
				$("#small #chas"+$i+" span, #big #chas"+$i+" span").attr("class","one_simv");
			}

			if (($chas+"").length == 2 && $last == "") {
				$("#small #chas"+$i+" span, #big #chas"+$i+" span").attr("class","two_simv");
			}

			if (($chas+"").length == 1 && $last == "last") {
				$("#small #chas"+$i+" span:last, #big #chas"+$i+" span:last").attr("class","one_simv");
			}

			if (($chas+"").length == 2 && $last == "last") {
				$("#small #chas"+$i+" span:last, #big #chas"+$i+" span:last").attr("class","two_simv");
			}

			if (($chas+"").length == 1 && $last == "first") {
				$("#small #chas"+($i-1)+" span:first, #big #chas"+$i+" span:first").css("left","-5px");
			}

			if (($chas+"").length == 2 && $last == "first") {
				$("#small #chas"+($i-1)+" span:first, #big #chas"+$i+" span:first").css("left","-9px");
			}

		}
		// +++++++++++++++++++++++++++++

		if ($hours>9) {
			$(".text_cifra_time").text($hours + ":" + $minuts + " " + $gmt);
		} else {
			$(".text_cifra_time").text("0"+ $hours + ":" + $minuts + " " + $gmt);
		}


		// нерабочее время - во времени красные часы
		if ($hours == 21) {
			$(".clock_grean1").css({"backgroundImage":`url(${folder}/img/red_clock2.png)`});
		}
		if ($hours != 21) {
			$(".clock_grean1").css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
		}

		// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		// пересчет width LI
		width_li();

		// ===================================================================
		function width_li() {
			// ширина блока Ul тега
			width_BM = parseFloat($(".block_map2").css("width"));
			// расчет LI
			width_li = parseFloat((width_BM / 24));
			$(".map_ul .chas").css("width",(width_li+"px"));
			// последний LI
			a1 = parseFloat($(".map_ul .chas").css("width"));
			$('.map_ul .chas:last').css("width",((a1 - 1)+"px"));

			// поле активного времени - ширина и расположение
			active_time(width_li);
		}
		// КОНЕЦ
		// ===================================================================
		// ===================================================================
		// поле активного времени - ширина и расположение
		function active_time($width_li) {
			// вертикальная полоска
			// ширина li * кол-во часов
			$iter = 1;
			$posit_pol = 0;

			$('li.chas').each(function() {
			$id_li_chas = $(this).attr("id");

				if($("#small #"+$id_li_chas+" span").text() == "24") {
					$chasi = 24;
				}
				if($("#small #"+$id_li_chas+" span").text() == "0") {
					$chasi = 0;
				}

			});

			$('li.chas').each(function () {
				$id_li_chas = $(this).attr("id");
				$text_chas = "";

				if ($id_li_chas == "chas23") {
					$text_chas = $("#small #"+$id_li_chas+" span:last").text();
				} else {
					$text_chas = $("#small #"+$id_li_chas+" span").text();
				}

				// 24 часа отображает как - 0
				if ($hours == 24 && $chasi == "0") {
					$hours = 0;
				}
				if ($hours == 0 && $chasi == "24") {
					$hours = 24;
				}

				if (parseInt($text_chas) == $hours) {
					$posit_pol = ($width_li * (24 - $iter)); //24
					$('.time_active').css({"width":($width_li+"px"), "right":$posit_pol});
					return false;
				}

				$iter++;
			});



			// америка
			$Nyse_W = 9 * $width_li;
			$Nyse_R = 12 * $width_li;
			$('#small #NYSE_poloska, #big #NYSE_poloska').css({"width":($Nyse_W+"px"), "right":$Nyse_R});

			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $Nyse_R &&
				($posit_pol+2) < ($Nyse_R + $Nyse_W)
			) {
				$('#small #NYSE_poloska, #big #NYSE_poloska').css({"backgroundColor":accentColor});
				$('#small #NYSE_text, #big #NYSE_text').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/amer.jpg");
			}

			// лондон
			$London_W = 9 * $width_li;
			$London_R = 7 * $width_li;
			$('#small #London_poloska, #big #London_poloska').css({"width":($London_W+"px"), "right":$London_R});
			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $London_R &&
				($posit_pol+2) < ($London_R + $London_W)
			) {
				$('#small #London_poloska, #big #London_poloska').css({"backgroundColor":accentColor});
				$('#small #London_text, #big #London_text').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/lon.jpg");
			}
			// реакция на перекрытие времени Лондона и Америка
			if (
				($posit_pol+2) > $Nyse_R &&
				($posit_pol+2) < ($Nyse_R + $Nyse_W) &&
				($posit_pol+2) > $London_R &&
				($posit_pol+2) < ($London_R + $London_W)
			) {
				$('#big .big_img').attr("src", folder+"/img/amer_lon.jpg");
			}

			// Tokyo1
			$Tokyo1_W = 1 * $width_li;
			$Tokyo1_R = 23 * $width_li;
			$('#small #Tokyo_poloska1, #big #Tokyo_poloska1').css({"width":($Tokyo1_W+"px"), "right":$Tokyo1_R});
			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $Tokyo1_R &&
				($posit_pol+2) < ($Tokyo1_R + $Tokyo1_W)
			) {
				$('#small #Tokyo_poloska1, #small #Tokyo_poloska2, #big #Tokyo_poloska1, #big #Tokyo_poloska2').css({"backgroundColor":accentColor});
				$('#small #Tokyo_text2, #big #Tokyo_text2').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/lon_jap.jpg");
			}

			// Sydney1
			$Tokyo2_W = 8 * $width_li;
			$Tokyo2_R = 0;
			$('#small #Tokyo_poloska2, #big #Tokyo_poloska2').css({"width":($Tokyo2_W+"px"), "right":$Tokyo2_R});
			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $Tokyo2_R &&
				($posit_pol+2) < ($Tokyo2_R + $Tokyo2_W)
			) {
				$('#small #Tokyo_poloska1, #small #Tokyo_poloska2, #big #Tokyo_poloska1, #big #Tokyo_poloska2').css({"backgroundColor":accentColor});
				$('#small #Tokyo_text2, #big #Tokyo_text2').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/lon_jap.jpg");
			}

			// Sydney1
			$Sydney1_W = 2 * $width_li;
			$Sydney1_R = 22 * $width_li;
			$('#small #Sydney_poloska1, #big #Sydney_poloska1').css({"width":($Sydney1_W+"px"), "right":$Sydney1_R});
			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $Sydney1_R &&
				($posit_pol+2) < ($Sydney1_R + $Sydney1_W)
			) {
				$('#small #Sydney_poloska1, #small #Sydney_poloska2, #big #Sydney_poloska1, #big #Sydney_poloska2').css({"backgroundColor":accentColor});
				$('#small #Sydney_text2, #big #Sydney_text2').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/avs.jpg");
			}
			// реакция на перекрытие времени Sydney1 и Tokyo1
			if (
				($posit_pol+2) > $Sydney1_R &&
				($posit_pol+2) < ($Sydney1_R + $Sydney1_W) &&
				($posit_pol+2) > $Tokyo1_R &&
				($posit_pol+2) < ($Tokyo1_R + $Tokyo1_W)
			) {
				$('#big .big_img').attr("src", folder+"/img/jap_avs.jpg");
			}

			// Sydney2
			$Sydney2_W = 7 * $width_li;
			$Sydney2_R = 0;
			$('#small #Sydney_poloska2, #big #Sydney_poloska2').css({"width":($Sydney2_W+"px"), "right":$Sydney2_R});
			// реакция на перекрытие времени
			if (
				($posit_pol+2) > $Sydney2_R &&
				($posit_pol+2) < ($Sydney2_R + $Sydney2_W)
			) {
				$('#small #Sydney_poloska1, #small #Sydney_poloska2, #big #Sydney_poloska1, #big #Sydney_poloska2').css({"backgroundColor":accentColor});
				$('#small #Sydney_text2, #big #Sydney_text2').css({"backgroundImage":`url(${folder}/img/grean_clock2.png)`});
				$('#big .big_img').attr("src", folder+"/img/avs.jpg");
			}
			// реакция на перекрытие времени Sydney2 и Tokyo2
			if (
				($posit_pol+2) > $Sydney2_R &&
				($posit_pol+2) < ($Sydney2_R + $Sydney2_W) &&
				($posit_pol+2) > $Tokyo2_R &&
				($posit_pol+2) < ($Tokyo2_R + $Tokyo2_W)
			) {
				$('#big .big_img').attr("src", folder+"/img/jap_avs.jpg");
			}
			console.log();
		}
		// КОНЕЦ
		// ===================================================================
		// изменение width окна
		$(window).resize(function(){
			//width_li();
		});
		// КОНЕЦ (window).resize
		// ===================================================================
		// СОБЫТИЕ КЛИКА ПО 3 ПОЛОСКИ
		$('#my_menuToogle .fa.fa-bars').click(function(eve) {
			$stop_set = setTimeout(function() {
				// пересчет width LI
				width_li();
			}, 100);
		});

		$(".but-tab").click(function () {
			if ($("#big").css("display") == "none") {
				$("#small").hide();
				$("#big .block_map").addClass('block_map2').removeClass("block_map");
				$("#big").slideDown("slow");
				$('.but-tab span').text($(this).attr('data-title-close'));
			} else {
				$("#small").slideDown("slow");
				$("#big .block_map2").addClass('block_map').removeClass("block_map2");
				$("#big").hide();
				$('.but-tab span').text($(this).attr('data-title-open'));
			}
		});
	}
});
//  КОНЕЦ ФАЙЛА
