
(function(){

	// the minimum version of jQuery we want
	var v = "1.3.2";

	// check for jQuery. if it exists, verify it's not too old.
	if (window.jQuery === undefined || window.jQuery.fn.jquery < v) {
		var done = false;
		var script = document.createElement("script");
		script.src = "https://ajax.googleapis.com/ajax/libs/jquery/" + v + "/jquery.min.js";
		script.onload = script.onreadystatechange = function(){
			if (!done && (!this.readyState || this.readyState == "loaded" || this.readyState == "complete")) {
				done = true;
				initMyBookmarklet();
			}
		};
		document.getElementsByTagName("head")[0].appendChild(script);
	} else {
		initMyBookmarklet();
	}
	
	function initMyBookmarklet() {
		(window.myBookmarklet = function() {
			if ($("#wikiframe").length == 0) {
				var s = "";
				var s = window.location;
				var t = document.title;
				if (s == "") {
					var s = prompt("Dude I need a URL");
				}
				if ((s != "") && (s != null)) {
					$("body").append("\
					<div id='wikiframe'>\
						<div id='wikiframe_veil' style=''>\
							<p>Saving...</p>\
						</div>\
						<iframe src='<?php echo $this->createAbsoluteUrl('index/add') ?>?url="+s+"&title="+t+"' onload=\"$('#wikiframe iframe').fadeIn(200);\">Enable iFrames.</iframe>\
						<style type='text/css'>\
							#wikiframe_veil { display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; background-color: white; cursor: pointer; z-index: 900; }\
							#wikiframe_veil p { color: black; font: normal normal bold 20px/20px Helvetica, sans-serif; position: absolute; top: 50%; left: 50%; width: 10em; margin: -10px auto 0 -5em; text-align: center; }\
							#wikiframe iframe { display: none; position: fixed; top: 30%; left: 35%; width: 30%; height: 40%; z-index: 999; border: 1px solid white; margin: -5px 0 0 -5px; }\
						</style>\
					</div>");
					$("#wikiframe_veil").fadeIn(200);
				}
			} else {
				$("#wikiframe_veil").fadeOut(200);
				$("#wikiframe iframe").fadeOut(200);
				setTimeout("$('#wikiframe').remove()", 200);
			}
			$("#wikiframe_veil").click(function(event){
				$("#wikiframe_veil").fadeOut(200);
				$("#wikiframe iframe").fadeOut(200);
				setTimeout("$('#wikiframe').remove()", 200);
			});
		})();
	}
	
	var receiveMessage = function(event) {
        if ("close-iframe" == event.data) {
            $("#wikiframe_veil").fadeOut(200);
            $("#wikiframe iframe").fadeOut(200);
            setTimeout("$('#wikiframe').remove()", 200);
        }
    }
    window.addEventListener("message", receiveMessage, false);

})();