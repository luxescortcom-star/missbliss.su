<?php

    echo '
	<script>
	if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();    
    } else {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("GET","'. $css .'",false);
    xhr.send();
    var lazyStyle = document.createElement(\'style\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);

    xhr.open("GET",\'https://code.jquery.com/jquery-1.12.4.min.js?\',false);
	xhr.integrity = "sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=";
	xhr.crossorigin = "anonymous";
    xhr.send();
    var lazyStyle = document.createElement(\'script\');
    lazyStyle.innerHTML = xhr.responseText;
    document.head.appendChild(lazyStyle);
</script>
<!-- cookie -->
<script src="https://yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
<!-- modal plugin -->
<script src="/jss/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
<link rel="stylesheet" href="/jss/arcticmodal/jquery.arcticmodal-0.3.css">	
<script>
(function($) {
   addEventListener("DOMContentLoaded",function() {
	   


     if (!$.cookie(\'was\')) {
           
            $( "#projects3" ).hide();
            $(\'#info_age_modal\').arcticmodal({
				
                closeOnOverlayClick: false,
                closeOnEsc: false,
				openEffect:{type:"fade",speed:500},
				closeEffect:{type:"fade",speed:1500},
				    overlay: {
        css: {
            backgroundColor: \'#123\',
            backgroundImage: \'url(https://'.$ilink.'/vip.jpg)\',
            backgroundRepeat: \'repeat\',
            backgroundPosition: \'50% 0\',
            opacity: 1
        }
    }
            });
        }

        $(\'.modal_but_no\').click(function() {
            window.history.back();
			
            return false
        });
        $(\'.modal_but_yes\').click(function() {
       
    	$( "#projects3" ).show();
    
           $.cookie(\'was\', true, {
           expires: 5, // Сколько хранить куки в днях
           path: \'/\',
		  
        });
        return false
        })
    })
})
(jQuery)
</script>';
?>