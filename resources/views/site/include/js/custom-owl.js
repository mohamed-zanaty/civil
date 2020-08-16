$(document).ready(function(){

	  var sync3 = $(".sync3");
	  var sync4 = $(".sync4");
	 
	  sync3.owlCarousel({
		singleItem : true,
		slideSpeed : 1000,
		navigation: true,
		pagination:false,
		afterAction : syncPosition,
		responsiveRefreshRate : 200,
        items : 1,
        transitionStyle: "fade",
          autoPlay: 4000,
		navigationText: [
		  "<i class='fa fa-angle-right'></i>",
		  "<i class='fa fa-angle-left'></i>"
		  ],
	  });
	 
	  sync4.owlCarousel({
		items : 6,
		itemsDesktop      : [1199,3],
		itemsDesktopSmall     : [979,2],
		itemsTablet       : [768,2],
		itemsMobile       : [600,1],
		responsive: true,
		pagination:false,
		responsiveRefreshRate : 100,
		afterInit : function(el){
		  el.find(".owl-item").eq(0).addClass("synced");
		}
	  });
	 
	  function syncPosition(el){
		var current = this.currentItem;
		$(".sync4")
		  .find(".owl-item")
		  .removeClass("synced")
		  .eq(current)
		  .addClass("synced")
		if($(".sync4").data("owlCarousel") !== undefined){
		  center(current)
		}
	  }
	 
	  $(".sync4").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync3.trigger("owl.goTo",number);
	  });
	 
	  function center(number){
		var sync4visible = sync4.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in sync4visible){
		  if(num === sync4visible[i]){
			var found = true;
		  }
		}
	 
		if(found===false){
		  if(num>sync4visible[sync4visible.length-1]){
			sync4.trigger("owl.goTo", num - sync4visible.length+2)
		  }else{
			if(num - 1 === -1){
			  num = 0;
			}
			sync4.trigger("owl.goTo", num);
		  }
		} else if(num === sync4visible[sync4visible.length-1]){
		  sync4.trigger("owl.goTo", sync4visible[1])
		} else if(num === sync4visible[0]){
		  sync4.trigger("owl.goTo", num-1)
		}
	  }
});