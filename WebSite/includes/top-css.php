<?php
echo '    <script>
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();
    } else {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("GET","'.$css.'",false);
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

</script>';
?>