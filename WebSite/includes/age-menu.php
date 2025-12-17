<?php 


echo  '

	<style>
	.arcticmodal-overlay,
.arcticmodal-container { position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index: 1000; }
.arcticmodal-container { overflow: auto; margin: 0; padding: 0; border: 0; border-collapse: collapse; }
*:first-child+html .arcticmodal-container { height: 100% }
.arcticmodal-container_i { height: 100%; margin: 0 auto; }
.arcticmodal-container_i2 { padding: 24px; margin: 0; border: 0; vertical-align: middle; }
.arcticmodal-error { padding: 20px; border-radius: 10px; background: #000; color: #fff; }
.arcticmodal-loading { width: 80px; height: 80px; border-radius: 10px; background: #000 url(loading.gif) no-repeat 50% 50%; }</style>
<style>/* modal */
#info_age_modal{max-width:420px;background:#fff;padding:30px;border: 1rem solid red}.modal_age{display:none;}.modal_age_but{text-align:center;margin-top:15px;}.modal_age_text{text-align:center;}.modal_age_text span{text-transform:uppercase;font-size:22px;font-weight:700;color:red;margin-bottom:10px;display:inline-block;}.modal_but_no{display:inline-block;background:#eee;color:#000;font-size:20px;cursor:pointer;padding:8px 12px;}.modal_but_no:hover{background:red;}.modal_but_yes{display:inline-block;background:#eee;color:#000;font-size:20px;cursor:pointer;padding:8px 12px;}.modal_but_yes:hover{background:green;}.modal_title{text-align:center;color:#000;font-size:22px;margin-bottom:15px;}@media only screen and orientation portrait and (min-width 280px) and (max-width 896px) #info_age_modal{max-width:100%;background:#fff;padding:30px;}.modal_age_text span{font-size:16px;font-weight:500;}.modal_but_no{font-size:16px;cursor:pointer; margin: 0 5px 0 -25px}.modal_but_yes{font-size:16px;cursor:pointer;margin:0 -25px 0 5px} 
	</style>



</head>
<div class="modal_age">
<div class="modal_age_wrap" id="info_age_modal">
  <div class="modal_title">Страница содержит материалы для взрослых</div>
  <div class="modal_age_text">
     <span>Вам исполнилось 18 лет?</span>
      <p>Перейдя по ссылке вы так же подтверждаете что вам исполнилось 18 лет</p>
</div>
   <div class="modal_age_but">
	<div class="modal_but_no">Мне нет 18</div>
    <div class="modal_but_yes arcticmodal-close">Да, мне есть 18</div>
       
</div>
</div>
</div>'

?>