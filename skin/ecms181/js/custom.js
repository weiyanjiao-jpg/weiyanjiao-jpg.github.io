
//图片延迟加载
(function($){$.fn.lazyload=function(options){var settings={threshold:0,failurelimit:0,event:"scroll",effect:"show",container:window};if(options){$.extend(settings,options)}var elements=this;if("scroll"==settings.event){$(settings.container).bind("scroll",function(event){var counter=0;elements.each(function(){if($.abovethetop(this,settings)||$.leftofbegin(this,settings)){}else if(!$.belowthefold(this,settings)&&!$.rightoffold(this,settings)){$(this).trigger("appear")}else{if(counter++>settings.failurelimit){return false}}});var temp=$.grep(elements,function(element){return!element.loaded});elements=$(temp)})}this.each(function(){var self=this;if(undefined==$(self).attr("original")){$(self).attr("original",$(self).attr("src"))}if("scroll"!=settings.event||undefined==$(self).attr("src")||settings.placeholder==$(self).attr("src")||($.abovethetop(self,settings)||$.leftofbegin(self,settings)||$.belowthefold(self,settings)||$.rightoffold(self,settings))){if(settings.placeholder){$(self).attr("src",settings.placeholder)}else{$(self).removeAttr("src")}self.loaded=false}else{self.loaded=true}$(self).one("appear",function(){if(!this.loaded){$("<img />").bind("load",function(){$(self).hide().attr("src",$(self).attr("original"))[settings.effect](settings.effectspeed);self.loaded=true}).attr("src",$(self).attr("original"))}});if("scroll"!=settings.event){$(self).bind(settings.event,function(event){if(!self.loaded){$(self).trigger("appear")}})}});$(settings.container).trigger(settings.event);return this};$.belowthefold=function(element,settings){if(settings.container===undefined||settings.container===window){var fold=$(window).height()+$(window).scrollTop()}else{var fold=$(settings.container).offset().top+$(settings.container).height()}return fold<=$(element).offset().top-settings.threshold};$.rightoffold=function(element,settings){if(settings.container===undefined||settings.container===window){var fold=$(window).width()+$(window).scrollLeft()}else{var fold=$(settings.container).offset().left+$(settings.container).width()}return fold<=$(element).offset().left-settings.threshold};$.abovethetop=function(element,settings){if(settings.container===undefined||settings.container===window){var fold=$(window).scrollTop()}else{var fold=$(settings.container).offset().top}return fold>=$(element).offset().top+settings.threshold+$(element).height()};$.leftofbegin=function(element,settings){if(settings.container===undefined||settings.container===window){var fold=$(window).scrollLeft()}else{var fold=$(settings.container).offset().left}return fold>=$(element).offset().left+settings.threshold+$(element).width()};$.extend($.expr[':'],{"below-the-fold":"$.belowthefold(a, {threshold : 0, container: window})","above-the-fold":"!$.belowthefold(a, {threshold : 0, container: window})","right-of-fold":"$.rightoffold(a, {threshold : 0, container: window})","left-of-fold":"!$.rightoffold(a, {threshold : 0, container: window})"})})(jQuery);
$(function(){$(".postlist img,.entry img,.col-pic img,.post-img img,.cat-scale img,.layout-imgs img,.mx3-thumbnail img").lazyload({placeholder:"/skin/ecms181/images/grey.gif",effect:"fadeIn",threshold:2,failurelimit:5})});
jQuery(document).ready(function() {
    var nav = $(".mobile_aside");
    var nav = $(".nav-sousuo,.search_top");
    $("#mo-so,.search_top a").click(function() {
        $(".mini_search,.top_search").slideToggle()
    });
    $(".nav-sjlogo i").click(function() {
        $(".mobile_aside").slideToggle();
        $(".header-nav").removeClass("header-nav");
        $(".sub-menu").toggleClass("m-sub-menu")
    });
    $(".zanter,.rewards-popover-close i").click(function() {
        $(this).removeClass("primary");
        $(".rewards-popover-mask,.rewards-popover").toggleClass("primary")
    });
    jQuery(".mobile-menu .nav-pills > li,.mobile-menu .nav-pills > li ul li").each(function() {
        jQuery(this).children(".mobile-menu .m-sub-menu").not(".active").css('display', 'none');
        jQuery(this).children(".mobile-menu .toggle-btn").bind("click", function() {
            $('.mobile-menu .m-sub-menu').addClass('active');
            jQuery(this).children().addClass(function() {
                if (jQuery(this).hasClass("active")) {
                    jQuery(this).removeClass("active");
                    return ""
                }
                return "active"
            });
            jQuery(this).siblings(".mobile-menu .m-sub-menu").slideToggle()
        })
    })
});
jQuery(document).ready(function($) {
    $('#font-change span').click(function() {
        var selector = '.entry p';
        var increment = 1;
        var font_size = 15;
        var fs_css = $(selector).css('fontSize');
        var fs_css_c = parseFloat(fs_css, 10);
        var fs_unit = fs_css.slice(-2);
        var id = $(this).attr('id');
        switch (id) {
            case 'font-dec':
                fs_css_c -= increment;
                break;
            case 'font-inc':
                fs_css_c += increment;
                break;
            default:
                fs_css_c = font_size
        }
        $(selector).css('fontSize', fs_css_c + fs_unit);
        return false
    })
});
jQuery(document).ready(function($) {
    var datatype = $(".header-nav").attr("data-type");
    $("#backTop").hide();
    $('.nav-sjlogo i').click(function() {
        $('.home').toggleClass('navbar-on')
    });
    $('.nav-sjlogo i').click(function() {
        $('.nav-sjlogo i').toggleClass('active')
    });
    $('#monavber li').hover(function() {
        $(this).addClass('on')
    }, function() {
        $(this).removeClass('on')
    });
    $('.con_one_list').each(function() {
        $(this).children().eq(0).show()
    });
    $('#tab').each(function() {
        $(this).children().eq(0).addClass('tabhover')
    });
    $('#tab').children().mouseover(function() {
        $(this).addClass('tabhover').siblings().removeClass('tabhover');
        var index = $('#tab').children().index(this);
        $('.con_one_list').children().eq(index).fadeIn(300).siblings().hide()
    });
    $(".nav-pills>li ").each(function() {
        try {
            var myid = $(this).attr("id");
            if ("index" == datatype) {
                if (myid == "nvabar-item-index") {
                    $("#nvabar-item-index").addClass("active")
                }
            } else if ("category" == datatype) {
                var infoid = $(".header-nav").attr("data-infoid");
                if (infoid != null) {
                    var b = infoid.split(' ');
                    for (var i = 0; i < b.length; i++) {
                        if (myid == "navbar-category-" + b[i]) {
                            $("#navbar-category-" + b[i] + "").addClass("active")
                        }
                    }
                }
            } else if ("article" == datatype) {
                var infoid = $(".header-nav").attr("data-infoid");
                if (infoid != null) {
                    var b = infoid.split(' ');
                    for (var i = 0; i < b.length; i++) {
                        if (myid == "navbar-category-" + b[i]) {
                            $("#navbar-category-" + b[i] + "").addClass("active")
                        }
                    }
                }
            } else if ("page" == datatype) {
                var infoid = $(".header-nav").attr("data-infoid");
                if (infoid != null) {
                    if (myid == "navbar-page-" + infoid) {
                        $("#navbar-page-" + infoid + "").addClass("active")
                    }
                }
            } else if ("tag" == datatype) {
                var infoid = $(".header-nav").attr("data-infoid");
                if (infoid != null) {
                    if (myid == "navbar-tag-" + infoid) {
                        $("#navbar-tag-" + infoid + "").addClass("active")
                    }
                }
            }
        } catch (E) {}
    });
    $(".header-nav").delegate("a", "click", function() {
        $(".nav-pills>li").each(function() {
            $(this).removeClass("active")
        });
        if ($(this).closest("ul") != null && $(this).closest("ul").length != 0) {
            if ($(this).closest("ul").attr("id") == "menu-navigation") {
                $(this).addClass("active")
            } else {
                $(this).closest("ul").closest("li").addClass("active")
            }
        }
    })
});
try {
    window.console && window.console.log && (console.log("\u4eb2\u7231\u6ef4\u7ae5\u978b\uff0c\u795d\u8d3a\u4f60\u559c\u63d0\u5f69\u86cb\u007e\n"), console.log("%c\u6709\u95ee\u9898\u8bf7\u7559\u8a00\u53cd\u9988\uff01", "color:red"))
} catch (e) {};
$("<span class='toggle-btn'><i class='fa fa-plus'></i></span>").insertBefore(".sub-menu");
$("#post_box1,#post_box2,#post_box3,#shangxi,.sidebar_widget:nth-child(2)").removeClass("wow");
$("#post_box1,#post_box2,#post_box3,#shangxi,.sidebar_widget:nth-child(2)").removeClass("fadeInDown");
//导航跟随
/*$(function(){
	var start_height = $(document).scrollTop();
	var navigation_height = $('.fixed-nav').outerHeight();
	$(window).scroll(function() {
		var end_height = $(document).scrollTop();
		if (end_height > navigation_height){
			$('.fixed-nav').addClass('fixed-appear');
		}else{
			$('.fixed-nav').removeClass('fixed-appear');
		}
		if (end_height < start_height){
			$('.fixed-nav').removeClass('fixed-appear');
		}
		start_height = $(document).scrollTop();
	});
});*/
$(function() {
	var lljtnav = $(".fixed-nav");
	var cubuk_seviye = $(document).scrollTop();
	var header_yuksekligi = $('.fixed-nav').outerHeight();
	$(window).scroll(function() {
		var kaydirma_cubugu = $(document).scrollTop();
		if (kaydirma_cubugu > header_yuksekligi) {
			$('.fixed-nav').addClass('fixed-enabled');
		}else{
			$('.fixed-nav').removeClass('fixed-enabled');
		}
		if (kaydirma_cubugu > cubuk_seviye) {
			$('.fixed-nav').removeClass('fixed-appear');
		}else{
			$('.fixed-nav').addClass('fixed-appear');
		}
		cubuk_seviye = $(document).scrollTop();
	});
});
//快捷回复
$(document).keypress(function(e) {
  var s = $('.button');
  if (e.ctrlKey && e.which == 13 || e.which == 10) {
    s.click();
    document.body.focus();
    return
  }
  if (e.shiftKey && e.which == 13 || e.which == 10) s.click()
});
$(function() {
  $("#backtop").each(function() {
    $(this).find(".weixin").mouseenter(function() {
      $(this).find(".pic").fadeIn("fast")
    });
    $(this).find(".weixin").mouseleave(function() {
      $(this).find(".pic").fadeOut("fast")
    });
    $(this).find(".phone").mouseenter(function() {
      $(this).find(".phones").fadeIn("fast")
    });
    $(this).find(".phone").mouseleave(function() {
      $(this).find(".phones").fadeOut("fast")
    });
    $(this).find(".top").click(function() {
      $("html, body").animate({
        "scroll-top": 0
      },
      "fast")
    })
  });
  var lastRmenuStatus = false;
  $(window).scroll(function() {
    var _top = $(window).scrollTop();
    if (_top > 500) {
      $("#backtop").data("expanded", true)
    } else {
      $("#backtop").data("expanded", false)
    }
    if ($("#backtop").data("expanded") != lastRmenuStatus) {
      lastRmenuStatus = $("#backtop").data("expanded");
      if (lastRmenuStatus) {
        $("#backtop .top").slideDown()
      } else {
        $("#backtop .top").slideUp()
      }
    }
  })
});
//标签
(function() {
    var sc = $(document);
    var tags_a = $("#divTags ul li,#hottags ul li");
    tags_a.each(function() {
        var x = 10;
        var y = 0;
        var rand = parseInt(Math.random() * (x - y + 1) + y);
        $(this).addClass("divTags" + rand)
    })
})();

