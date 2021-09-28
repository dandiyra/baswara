//function isMobile(){return window.innerWidth<768}function getColumns(e){for(var i=["xs","sm","md","lg"],t=$(),a=0;a<i.length;a++)for(var n=1;12>=n;n++){var o="col-"+i[a]+"-"+n;$.merge(t,e.find("> ."+o))}return t}function bindColumns(e){e.each(function(){var i=$(this);i.on("resizeHeights",function(){e.each(function(){matchHeights(e)})})})}function matchHeights(e){var i=0;e.each(function(){var e=$(this);e.css("height","");var t=e.height();t>i&&(i=t)}),e.each(function(){var e=$(this);e.height(i),e.trigger("heightResized")})}function setFitScreen(){var e=$(window).innerHeight(),i=$("#header .bg-radius-red").innerHeight(),t=$("#footer").innerHeight(),a=e-i-t;$("#header .content-wrapper").css({height:a})}function getMediaData(e){return $.ajax({url:e})}function initMap(e){$("#world-map").vectorMap({map:"world_mill_en",normalizeFunction:"polynomial",backgroundColor:"#F6F6F6",regionStyle:{initial:{fill:"#C1C1C1","fill-opacity":1,stroke:"#C1C1C1","stroke-width":1,"stroke-opacity":1},hover:{fill:"#F4071B"}},markerStyle:{initial:{fill:"#FFF",r:4,"stroke-width":2},hover:{cursor:"pointer"}},markerTipStyle:{initial:{cursor:"default",fill:"#FFF"},hover:{cursor:"pointer"}},onMarkerLabelShow:function(e,i,t){var a='<strong class="info">'+i.html()+"</strong>";i.html(a)},onRegionLabelShow:function(e,i,t){e.preventDefault()},onRegionClick:function(e,i){},markers:e});var i=$("#world-map").vectorMap("get","mapObject");i.container.click(function(e){var t=i.pointToLatLng(e.offsetX,e.offsetY);console.log(t.lat.toFixed(2),t.lng.toFixed(2))})}$(document).on("ready",function(e){var i="/about-us/vision-mission/"==window.location.pathname;i&&$("#content").remove(),$("a.btn-danger.btn-block input[type='file']").on("change",function(){var e=$(this).val(),i=e.lastIndexOf("\\")+1,t=e.substr(i);$("input#upload-file-info").val(t)}),$("ul.social-share >li > a").on("click",function(e){e.preventDefault();var i=screen.height/2-175,t=screen.width/2-260,a=$(this).attr("href");window.open(a,"sharer","top="+i+",left="+t+",toolbar=0,status=0,width=520,height=350")}),$(".subnav").css({width:$(".menu-panel").innerWidth()+"px"}),$('[data-match-columns="true"]').each(function(){if(!isMobile()){var e=$(this),i=getColumns(e);bindColumns(i),i.trigger("resizeHeights")}}),$("a.submit").on("click",function(){$("form.search-form").submit()}),$("form.search-form").on("submit",function(e){var i=$(this);i.query.value.length<1&&e.preventDefault()}),$(".animated:not(img)").appear(function(){var e=$(this),i=e.data("animate"),t=e.data("delay");t&&!isMobile()?setTimeout(function(){e.addClass(i+" visible"),e.hasClass("counter")&&e.find(".value").countTo()},t):(e.addClass(i+" visible"),e.hasClass("counter")&&e.find(".value").countTo())},{accY:-150}),$(".brand-slider .item:eq(0) img.animated").appear(function(){var e=$(this),i=e.data("animate"),t=e.data("delay");t?setTimeout(function(){e.addClass(i+" visible")},t):e.addClass(i+" visible")},{accY:-150}),$("#csrscroll").on("show.bs.collapse",function(){$(".caption-center").removeClass("layer-dark")}),$("#csrscroll").on("hide.bs.collapse",function(){$(".caption-center").addClass("layer-dark")}),$(".date-picker").datepicker({format:"dd/mm/yyyy"}),isMobile()||$(".dropdown-menu-large.about li").css({width:"20%"}),$("li.dropdown > .badge.visible-xs").on("click",function(e){$(this).parents("li.dropdown").toggleClass("open")}),$("a.back-top-mobile-btn").on("click",function(e){e.preventDefault(),$.smoothScroll({offset:0,scrollTarget:"#header",speed:700})})}),$(document).on("ready",function(){var e=function(){$('<div id="imagelightbox-loading"><div></div></div>').appendTo("body")},i=function(){$("#imagelightbox-loading").remove()},t=function(){$('<div id="imagelightbox-overlay"></div>').appendTo("body")},a=function(){$("#imagelightbox-overlay").remove()},n=function(e){$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo("body").on("click touchend",function(){return $(this).remove(),e.quitImageLightbox(),!1})},o=function(){$("#imagelightbox-close").remove()},l=function(){var e=$('a[href="'+$("#imagelightbox").attr("src")+'"] img').attr("alt");e.length>0&&$('<div id="imagelightbox-caption">'+e+"</div>").appendTo("body")},s=function(){$("#imagelightbox-caption").remove()},r=".media-item > a.lightbox",d=$(r).imageLightbox({onStart:function(){t(),n(d)},onEnd:function(){a(),o(),i()},onLoadStart:function(){s(),e()},onLoadEnd:function(){l(),i(),$(".imagelightbox-arrow").css("display","block")}})}),$(document).on("ready",function(){$.getJSON("/content/custom/data_dummy/internation-relations.json").done(function(e){$("#world-map").length>0&&initMap(e.countries)}).error(function(e){console.log(e)})}),$(document).on("ready",function(){var e=window.location.href.split("#")[1];$(".media.news a.view").on("click",function(e){e.preventDefault();var i=$(this).data("url"),t=$(this).data("desc"),a=$(this).parents(".media.news").find("p.date").text(),n=$(this).parents(".media.news").find("h3.title").text(),o=$(this).data("type"),l=$(".download-panel").find("button.btn.download"),s=$(".download-panel .media-list"),r=$(".download-panel .panel-heading p.date"),d=$(".download-panel .panel-heading h3.title"),c=$("form#download_media");if($(".download-panel").collapse("hide"),s.empty(),"youtube"!=o&&"video"!=o){var u="/umbraco/surface/Content/DowloadMedia/"+i.split("/").pop();c.attr("action",u),getMediaData(i).success(function(e){r.text(a),d.text(n),s.append(e),setTimeout(function(){l.show(),$(".download-panel").collapse("show")},1e3)}).error(function(e){console.error("getting data error")})}else{var h="youtube"==o?'<div class="col-sm-6"><iframe style="width:100%;height:295px" src="https://www.youtube.com/embed/'+i+'" frameborder="0" allowfullscreen></iframe></div>':'<div class="col-sm-6"><iframe style="width:100%;height:295px" src="'+i+'" frameborder="0" allowfullscreen></iframe></div>',f=$(h),m=$('<div class="col-sm-6"><p class="video-desc">'+t+"</p></div>");s.append(f).append(m),r.text(a),d.text(n),setTimeout(function(){l.hide(),$(".download-panel").collapse("show")},1e3)}}),$(".download-panel button.close").on("click",function(){$(".download-panel").collapse("hide")}),$(".download-panel").on("shown.bs.collapse",function(){$.smoothScroll({offset:-30,scrollTarget:".download-panel",speed:500}),$(".media-list .media-item > a").css({display:"block",height:$(".media-list .media-item").innerWidth()-30}),$(".media-list .media-item").css({height:$(".media-list .media-item").innerWidth()-30}).animate({opacity:1},1e3)}),e&&$("#"+e+".media.news a.view").click()}),$(document).on("ready",function(){function e(e,i){$.each(e,function(e,t){var a=$(t).find("img");a.removeClass().addClass("animated"),i.item.index==e&&$.each(a,function(e,i){var t=$(i).data("animate"),a=$(i).data("delay")+500||500;setTimeout(function(){$(i).addClass(t+" visible")},a)})})}function i(e){var i=e.find(".owl-item"),t=parseInt(i.eq(0).css("height")),a=e.find(".owl-stage-outer");$(i).each(function(){var e=parseInt($(this).css("height"));t=e>=t?t:e}),a.css("height",t+"px")}function t(){$(".content-wrapper.vision").length>0&&(setFitScreen(),$(".vision-slider .item").css({height:$("#header .content-wrapper").innerHeight()})),a.on("initialize.owl.carousel",function(e){$.each($(this).find(".item"),function(e){var i=$(this).find("span.year").text(),t=$("<div class='year-page' style='width:70px'><a href='javascript:void(0)'>"+i+"</a></div>");s.push(t),t.bind("click",function(i){a.trigger("to.owl.carousel",[e,300,!0])}),$(".history-page > .page-history").append(t)}),i(a)}),a.on("initialized.owl.carousel",function(e){var t=$(".history-page a.prev"),n=$(".history-page a.next");s[e.item.index].addClass("active"),$(".page-history").owlCarousel({touchDrag:!1,items:isMobile()?3:8,slideBy:isMobile()?3:8}),n.on("click",function(e){e.preventDefault(),$(".page-history").trigger("next.owl.carousel")}),t.on("click",function(e){e.preventDefault(),$(".page-history").trigger("prev.owl.carousel",[300])}),i(a)}),a.on("changed.owl.carousel",function(e){s.length>0&&($.each(s,function(){this.removeClass("active")}),s[e.item.index].addClass("active"))}),a.owlCarousel({items:1,dots:!1,autoHeight:!0}),n.on("initialize.owl.carousel",function(e){$.each($(this).find(".item"),function(e){var i=$(this).find(".content-brand").data("logo"),t=$("<div class='top-brand-logo' style='width:120px'><img src='"+i+"'/></div>");s.push(t),t.bind("click",function(i){n.trigger("to.owl.carousel",[e,300,!0])}),$(".brand-pagination > .top-brands-timeline").append(t)}),isMobile()&&i(n)}),n.on("initialized.owl.carousel",function(e){var t=$(".brand-pagination > a.prev"),a=$(".brand-pagination > a.next");s[e.item.index].addClass("active"),$(".top-brands-timeline").owlCarousel({touchDrag:!1,items:5,slideBy:5}),a.on("click",function(e){e.preventDefault(),$(".top-brands-timeline").trigger("next.owl.carousel")}),t.on("click",function(e){e.preventDefault(),$(".top-brands-timeline").trigger("prev.owl.carousel",[300])}),isMobile()&&i(n)}),n.on("changed.owl.carousel",function(i){e($(this).find(".owl-item"),i),s.length>0&&($.each(s,function(){this.removeClass("active")}),s[i.item.index].addClass("active"))}),n.owlCarousel({items:1,dots:!1,autoHeight:isMobile()?!0:!1}),$(".vision-slider").owlCarousel({animateOut:"fadeOut",items:1,autoplay:!0,autoplayTimeout:1e4,loop:!0,mouseDrag:!1}),$(".brands-slider").on("initialized.owl.carousel",function(e){$(".brands-slider .item > a").css({height:$(".brands-slider .owl-item.active").innerWidth(),width:$(".brands-slider .owl-item.active").innerWidth()})}),$(".brands-slider").owlCarousel({items:isMobile()?1:4,stagePadding:20,margin:30,dots:!1,nav:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]}),o.owlCarousel({items:1,dots:!1,nav:!0,loop:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]}),isMobile()?($(".mobile-slide:not(.variety-slide)").on("initialize.owl.carousel",function(e){i($(".mobile-slide:not(.variety-slide)"))}),$(".mobile-slide:not(.variety-slide)").on("initialized.owl.carousel",function(e){i($(".mobile-slide:not(.variety-slide)"))}),setTimeout(function(){$(".mobile-slide:not(.variety-slide)").owlCarousel({items:1,stagePadding:20,margin:30,dots:!1,nav:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],autoHeight:!0}).removeClass("row"),$(".mobile-slide.variety-slide").owlCarousel({items:3,stagePadding:30,margin:30,dots:!1,nav:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]})},1e3)):($(".mobile-slide:not(.variety-slide)").trigger("destroy.owl.carousel").addClass("row"),$(".mobile-slide.variety-slide").trigger("destroy.owl.carousel")),l.each(function(e,i){var t=$(i).find(".item > img");$(i).owlCarousel({items:isMobile()?1:t.length,nav:isMobile()?!0:!1,dots:!1,stagePadding:10,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]})})}var a=$(".history"),n=$(".brand-slider"),o=$(".slider-testimoni"),l=$(".award-slider"),s=[];t(),$(window).on("resize",t)});

function isMobile() {
    return window.innerWidth < 768
}

function getColumns(e) {
    for (var i = ["xs", "sm", "md", "lg"], t = $(), a = 0; a < i.length; a++)
        for (var n = 1; 12 >= n; n++) {
            var o = "col-" + i[a] + "-" + n;
            $.merge(t, e.find("> ." + o))
        }
    return t
}

function bindColumns(e) {
    e.each(function () {
        var i = $(this);
        i.on("resizeHeights", function () {
            e.each(function () {
                matchHeights(e)
            })
        })
    })
}

function matchHeights(e) {
    var i = 0;
    e.each(function () {
        var e = $(this);
        e.css("height", "");
        var t = e.height();
        t > i && (i = t)
    }), e.each(function () {
        var e = $(this);
        e.height(i), e.trigger("heightResized")
    })
}

function setFitScreen() {
    var e = $(window).innerHeight(),
        i = $("#header .bg-radius-red").innerHeight(),
        t = $("#footer").innerHeight(),
        a = e - i - t;
    $("#header .content-wrapper").css({
        height: a
    })
}

function getMediaData(e) {
    return $.ajax({
        url: e
    })
}

$(document).on("ready", function (e) {
    var i = "/about-us/vision-mission/" == window.location.pathname;
    i && $("#content").remove(), $("a.btn-danger.btn-block input[type='file']").on("change", function () {
        var e = $(this).val(),
            i = e.lastIndexOf("\\") + 1,
            t = e.substr(i);
        $("input#upload-file-info").val(t)
    }), $("ul.social-share >li > a").on("click", function (e) {
        e.preventDefault();
        var i = screen.height / 2 - 175,
            t = screen.width / 2 - 260,
            a = $(this).attr("href");
        window.open(a, "sharer", "top=" + i + ",left=" + t + ",toolbar=0,status=0,width=520,height=350")
    }), $(".subnav").css({
        width: $(".menu-panel").innerWidth() + "px"
    }), $('[data-match-columns="true"]').each(function () {
        if (!isMobile()) {
            var e = $(this),
                i = getColumns(e);
            bindColumns(i), i.trigger("resizeHeights")
        }
    }), $("a.submit").on("click", function () {
        $("form.search-form").submit()
    }), $("form.search-form").on("submit", function (e) {
        var i = $(this);
        i.query.value.length < 1 && e.preventDefault()
    }), $(".animated:not(img)").appear(function () {
        var e = $(this),
            i = e.data("animate"),
            t = e.data("delay");
        t && !isMobile() ? setTimeout(function () {
            e.addClass(i + " visible"), e.hasClass("counter") && e.find(".value").countTo()
        }, t) : (e.addClass(i + " visible"), e.hasClass("counter") && e.find(".value").countTo())
    }, {
        accY: -150
    }), $(".brand-slider .item:eq(0) img.animated").appear(function () {
        var e = $(this),
            i = e.data("animate"),
            t = e.data("delay");
        t ? setTimeout(function () {
            e.addClass(i + " visible")
        }, t) : e.addClass(i + " visible")
    }, {
        accY: -150
    }), $("#csrscroll").on("show.bs.collapse", function () {
        $(".caption-center").removeClass("layer-dark")
    }), $("#csrscroll").on("hide.bs.collapse", function () {
        $(".caption-center").addClass("layer-dark")
    }), $(".date-picker").datepicker({
        format: "dd/mm/yyyy"
    }), isMobile() || $(".dropdown-menu-large.about li").css({
        width: "20%"
    }), $("li.dropdown > .badge.visible-xs").on("click", function (e) {
        $(this).parents("li.dropdown").toggleClass("open")
    }), $("a.back-top-mobile-btn").on("click", function (e) {
        e.preventDefault(), $.smoothScroll({
            offset: 0,
            scrollTarget: "#header",
            speed: 700
        })
    })
}), $(document).on("ready", function () {
    var e = function () {
        $('<div id="imagelightbox-loading"><div></div></div>').appendTo("body")
    },
        i = function () {
            $("#imagelightbox-loading").remove()
        },
        t = function () {
            $('<div id="imagelightbox-overlay"></div>').appendTo("body")
        },
        a = function () {
            $("#imagelightbox-overlay").remove()
        },
        n = function (e) {
            $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo("body").on("click touchend", function () {
                return $(this).remove(), e.quitImageLightbox(), !1
            })
        },
        o = function () {
            $("#imagelightbox-close").remove()
        },
        l = function () {
            var e = $('a[href="' + $("#imagelightbox").attr("src") + '"] img').attr("alt");
            e.length > 0 && $('<div id="imagelightbox-caption">' + e + "</div>").appendTo("body")
        },
        s = function () {
            $("#imagelightbox-caption").remove()
        },
        r = ".media-item > a.lightbox",
        d = $(r).imageLightbox({
            onStart: function () {
                t(), n(d)
            },
            onEnd: function () {
                a(), o(), i()
            },
            onLoadStart: function () {
                s(), e()
            },
            onLoadEnd: function () {
                l(), i(), $(".imagelightbox-arrow").css("display", "block")
            }
        })
}), $(document).on("ready", function () {
    var e = window.location.href.split("#")[1];
    $(".media.news a.view").on("click", function (e) {
        e.preventDefault();
        var i = $(this).data("url"),
            t = $(this).data("desc"),
            a = $(this).parents(".media.news").find("p.date").text(),
            n = $(this).parents(".media.news").find("h3.title").text(),
            o = $(this).data("type"),
            l = $(".download-panel").find("button.btn.download"),
            s = $(".download-panel .media-list"),
            r = $(".download-panel .panel-heading p.date"),
            d = $(".download-panel .panel-heading h3.title"),
            c = $("form#download_media");
        if ($(".download-panel").collapse("hide"), s.empty(), "youtube" != o && "video" != o) {
            var u = "/umbraco/surface/Content/DowloadMedia/" + i.split("/").pop();
            c.attr("action", u), getMediaData(i).success(function (e) {
                r.text(a), d.text(n), s.append(e), setTimeout(function () {
                    l.show(), $(".download-panel").collapse("show")
                }, 1e3)
            }).error(function (e) {
                console.error("getting data error")
            })
        } else {
            var h = "youtube" == o ? '<div class="col-sm-6"><iframe style="width:100%;height:295px" src="https://www.youtube.com/embed/' + i + '" frameborder="0" allowfullscreen></iframe></div>' : '<div class="col-sm-6"><iframe style="width:100%;height:295px" src="' + i + '" frameborder="0" allowfullscreen></iframe></div>',
                f = $(h),
                m = $('<div class="col-sm-6"><p class="video-desc">' + t + "</p></div>");
            s.append(f).append(m), r.text(a), d.text(n), setTimeout(function () {
                l.hide(), $(".download-panel").collapse("show")
            }, 1e3)
        }
    }), $(".download-panel button.close").on("click", function () {
        $(".download-panel").collapse("hide")
    }), $(".download-panel").on("shown.bs.collapse", function () {
        $.smoothScroll({
            offset: -30,
            scrollTarget: ".download-panel",
            speed: 500
        }), $(".media-list .media-item > a").css({
            display: "block",
            height: $(".media-list .media-item").innerWidth() - 30
        }), $(".media-list .media-item").css({
            height: $(".media-list .media-item").innerWidth() - 30
        }).animate({
            opacity: 1
        }, 1e3)
    }), e && $("#" + e + ".media.news a.view").click()
}), $(document).on("ready", function () {
    function e(e, i) {
        $.each(e, function (e, t) {
            var a = $(t).find("img");
            a.removeClass().addClass("animated"), i.item.index == e && $.each(a, function (e, i) {
                var t = $(i).data("animate"),
                    a = $(i).data("delay") + 500 || 500;
                setTimeout(function () {
                    $(i).addClass(t + " visible")
                }, a)
            })
        })
    }

    function i(e) {
        var i = e.find(".owl-item"),
            t = parseInt(i.eq(0).css("height")),
            a = e.find(".owl-stage-outer");
        $(i).each(function () {
            var e = parseInt($(this).css("height"));
            t = e >= t ? t : e
        }), a.css("height", t + "px")
    }

    function t() {
        $(".content-wrapper.vision").length > 0 && (setFitScreen(), $(".vision-slider .item").css({
            height: $("#header .content-wrapper").innerHeight()
        })), a.on("initialize.owl.carousel", function (e) {
            $.each($(this).find(".item"), function (e) {
                var i = $(this).find("span.year").text(),
                    t = $("<div class='year-page' style='width:70px'><a href='javascript:void(0)'>" + i + "</a></div>");
                s.push(t), t.bind("click", function (i) {
                    a.trigger("to.owl.carousel", [e, 300, !0])
                }), $(".history-page > .page-history").append(t)
            }), i(a)
        }), a.on("initialized.owl.carousel", function (e) {
            var t = $(".history-page a.prev"),
                n = $(".history-page a.next");
            s[e.item.index].addClass("active"), $(".page-history").owlCarousel({
                touchDrag: !1,
                items: isMobile() ? 3 : 8,
                slideBy: isMobile() ? 3 : 8
            }), n.on("click", function (e) {
                e.preventDefault(), $(".page-history").trigger("next.owl.carousel")
            }), t.on("click", function (e) {
                e.preventDefault(), $(".page-history").trigger("prev.owl.carousel", [300])
            }), i(a)
        }), a.on("changed.owl.carousel", function (e) {
            s.length > 0 && ($.each(s, function () {
                this.removeClass("active")
            }), s[e.item.index].addClass("active"))
        }), a.owlCarousel({
            items: 1,
            dots: !1,
            autoHeight: !0
        }), n.on("initialize.owl.carousel", function (e) {
            $.each($(this).find(".item"), function (e) {
                var i = $(this).find(".content-brand").data("logo"),
                    t = $("<div class='top-brand-logo' style='width:120px'><img src='" + i + "'/></div>");
                s.push(t), t.bind("click", function (i) {
                    n.trigger("to.owl.carousel", [e, 300, !0])
                }), $(".brand-pagination > .top-brands-timeline").append(t)
            }), isMobile() && i(n)
        }), n.on("initialized.owl.carousel", function (e) {
            var t = $(".brand-pagination > a.prev"),
                a = $(".brand-pagination > a.next");
            s[e.item.index].addClass("active"), $(".top-brands-timeline").owlCarousel({
                touchDrag: !1,
                items: 5,
                slideBy: 5
            }), a.on("click", function (e) {
                e.preventDefault(), $(".top-brands-timeline").trigger("next.owl.carousel")
            }), t.on("click", function (e) {
                e.preventDefault(), $(".top-brands-timeline").trigger("prev.owl.carousel", [300])
            }), isMobile() && i(n)
        }), n.on("changed.owl.carousel", function (i) {
            e($(this).find(".owl-item"), i), s.length > 0 && ($.each(s, function () {
                this.removeClass("active")
            }), s[i.item.index].addClass("active"))
        }), n.owlCarousel({
            items: 1,
            dots: !1,
            autoHeight: isMobile() ? !0 : !1
        }), $(".vision-slider").owlCarousel({
            animateOut: "fadeOut",
            items: 1,
            autoplay: !0,
            autoplayTimeout: 1e4,
            loop: !0,
            mouseDrag: !1
        }), $(".brands-slider").on("initialized.owl.carousel", function (e) {
            $(".brands-slider .item > a").css({
                height: $(".brands-slider .owl-item.active").innerWidth(),
                width: $(".brands-slider .owl-item.active").innerWidth()
            })
        }), $(".brands-slider").owlCarousel({
            items: isMobile() ? 1 : 4,
            stagePadding: 20,
            margin: 30,
            dots: !1,
            nav: !0,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }), o.owlCarousel({
            items: 1,
            dots: !1,
            nav: !0,
            loop: !0,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }), isMobile() ? ($(".mobile-slide:not(.variety-slide)").on("initialize.owl.carousel", function (e) {
            i($(".mobile-slide:not(.variety-slide)"))
        }), $(".mobile-slide:not(.variety-slide)").on("initialized.owl.carousel", function (e) {
            i($(".mobile-slide:not(.variety-slide)"))
        }), setTimeout(function () {
            $(".mobile-slide:not(.variety-slide)").owlCarousel({
                items: 1,
                stagePadding: 20,
                margin: 30,
                dots: !1,
                nav: !0,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                autoHeight: !0
            }).removeClass("row"), $(".mobile-slide.variety-slide").owlCarousel({
                items: 3,
                stagePadding: 30,
                margin: 30,
                dots: !1,
                nav: !0,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
            })
        }, 1e3)) : ($(".mobile-slide:not(.variety-slide)").trigger("destroy.owl.carousel").addClass("row"), $(".mobile-slide.variety-slide").trigger("destroy.owl.carousel")), l.each(function (e, i) {
            var t = $(i).find(".item > img");
            $(i).owlCarousel({
                items: isMobile() ? 1 : t.length,
                nav: isMobile() ? !0 : !1,
                dots: !1,
                stagePadding: 10,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
            })
        })
    }
    var a = $(".history"),
        n = $(".brand-slider"),
        o = $(".slider-testimoni"),
        l = $(".award-slider"),
        s = [];
    t(), $(window).on("resize", t)
});


$(document).ready(function(){
	if($('.careerPage').length > 0){
		$('.content-wrapper.vision').addClass('slider-fixheight');
	}
})


//INSAN
var _left, _top;

function initMap(data) {
    // init map
    //var map = 
    $("#world-map").vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        backgroundColor: '#F6F6F6',
        regionStyle: {
            initial: {
                'fill': '#C1C1C1',
                "fill-opacity": 1,
                'stroke': '#C1C1C1',
                "stroke-width": 1,
                "stroke-opacity": 1
            },
            hover: {
                "fill": "#F4071B"
            }
        },
        markerStyle: {
            initial: {
                fill: '#FFF',
                r: 4,
                'stroke-width': 2
            },
            hover: {
                cursor: 'pointer'
            }
        },
        markerTipStyle: {
            initial: {
                cursor: 'default',
                fill: '#FFF'
            },
            hover: {
                cursor: 'pointer'
            }
        },
        onMarkerOver: function (e, code) {
            $('path.jvectormap-region.jvectormap-element').mousemove(function (e) {
                var offset = $('#world-map').offset();
                _left = e.pageX - offset.left + 20;
                _top = e.pageY - offset.top - 25;
                //_left = offset.left + 20;
                //_top = offset.top - 25;
                //$(".region-info-box." + code).css({ 'top': mouseY, 'left': mouseX });
            });
            e.preventDefault();
            return false;
        },
        onMarkerOut: function (e, code) {
            e.preventDefault();
            return false;
        },
        onMarkerLabelShow: function (e, el, idx) {
            //console.log(el);
            //console.log(arguments)
            e.preventDefault();
            return false;
            var txt = '<strong class="info">' + el.html() + '</strong>' +
                        //'\n<p>' + data[idx].address + '</p>' +
                        //'\n<p>Phone: ' + (data[idx].phone ? data[idx].phone :  '-') + '</p>' + 
                        //'\n<p>Fax: ' + (data[idx].fax ? data[idx].fax :  '-') + '</p>' +
                        '\n<p>' + data[idx].email + '</p>';

            el.html(txt);
        },
        onRegionLabelShow: function (e, el, code) {
            e.preventDefault();
        },
        onRegionClick: function (event, code) {
            // $("#world-map").vectorMap('set', 'focus', code);
        },
        onMarkerClick: function (e, code) {
            $(".custom-tips").remove();
            $('#world-map').append('<div class="custom-tips"></div>');
            var customTip = $(".custom-tips");

            //customTip.css({
            //    left: left,
            //    top: top
            //})

            console.log(_top + ", " + _left);
            customTip.html("<strong>" + mapObject.markers[code].config.name + "</strong> <p>" + mapObject.markers[code].config.email + "</p>");
            customTip.css({ 'top': _top, 'left': _left }).show();
            //customTip.append(code + "<p>Click to Close</p>");
            //code.html();
            //var txt = '<strong class="info">' + data[parseInt(code)].name + '</strong>' +
            //            '\n<p>' + data[parseInt(code)].email + '</p>';
            //$('.jvectormap-label').html(txt).css('display','block!important');
            //alert(txt);
        },
        markers: data
    });

    var mapObject = $("#world-map").vectorMap('get', 'mapObject');

    mapObject.container
        .click(function (e) {
            var latLng = mapObject.pointToLatLng(e.offsetX, e.offsetY);
            if (!$(e.target).is('.jvectormap-marker')) {
                $(".custom-tips").remove();
            }
            // console.clear();
            console.log(latLng.lat.toFixed(2), latLng.lng.toFixed(2));
        });
}

$(document).on('ready', function () {
    var dataMap = $.getJSON('/content/custom/data_dummy/internation-relations.json').
	done(function (data) {
	    if ($("#world-map").length > 0) initMap(data.countries);
	});
});


$(document).ready(function () {
    $('.search-brand .input-group-addon').click(function () {
        console.log("lalla");
        loadBrandsHtml($('#brand-search').val(), false);
    });
});