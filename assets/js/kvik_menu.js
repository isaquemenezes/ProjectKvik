/***********************************/
/*  Show menu deslizamento suave   */
/***********************************/

    //MoveTop();		
	var lastScroll = 0;
	function MoveTop() { $('html, body').animate({'scrollTop' : 0}, 800);	}
	function MoveScroll(name) {	$('html, body').animate({'scrollTop' : $("#" + name).offset().top}, 800);	}
	function MoveScroll_m(name)
	{
		$('html, body').animate({'scrollTop' : $("#" + name).offset().top}, 800);
		$('.menu-contents').slideUp(550,'easeOutQuart');			
	}

	// Menu Fade in / Out
	$(window).scroll
	(
		function(event)
		{			
			var brHeight = window.innerHeight - 68;			
			if ($(".menu-contents").css("display") == 'none')
			{				
				if (window.outerWidth < brHeight)
				{
					var st = $(this).scrollTop();					
					if (st > lastScroll && st > brHeight) 
					{ 
						$('#smallMenu').attr('onclick',null);
						$(".mobile-menu").stop().fadeOut({'duration':800}); 						
					}
					else
					{											
						$('#smallMenu').attr('onclick','menuSlide()');
						$(".mobile-menu").stop().fadeIn({'duration':800});							
					}
					lastScroll = st;
				}				
			}
		}
	);

	// Move cursor by navigation
	function menuNavi(scr)
	{			
        one = $("#one").offset().top;     
		two = $("#two").offset().top;     
        three = $("#three").offset().top; 
		ourteam = $("#nv_ourteam").offset().top;
		faq = $("#nv_faq").offset().top;
	
		/*$("#tv1").css("font-weight","300");
		$("#tv2").css("font-weight","300");
		$("#tv3").css("font-weight","300");
		$("#tv4").css("font-weight","300");
		$("#tv5").css("font-weight","300");
		if (scr > one && scr < tech) $("#tv1").css("font-weight","500");
		if (scr > tech && scr < three) $("#tv2").css("font-weight","500");
		if (scr > three && scr < ourteam) $("#tv3").css("font-weight","500");
		if (scr > ourteam && scr < faq) $("#tv4").css("font-weight","500");
		if (scr > faq) $("#tv5").css("font-weight","500");*/
	}

	//Configuracoes opcionais para cadastro e login
    $("button.change").on("click", function(){
        $("div#formulario").toggleClass("cadastro");

        $("form#formularioCadastro").toggle();
        $("form#formularioLogin").toggle();
        
        $("div#textoLogin").toggle();
        $("div#textoCadastro").toggle();
	});
