<!DOCTYPE>

<html lang="fa_IR" dir="rtl">
<head>
<meta charset="utf-8" />
<style type="text/css">

.kharidbox{
	position: absolute;
	bottom: 0px;
	background-color: #eeffda;
	border-top: solid #89d139 4px;
	width: calc( 100% - 160px );
	height: 450px;
	padding: 30px;
	margin: 50px;
	background-image: url("sdolar.png");
	background-repeat: no-repeat;
	background-position: left;
	box-shadow: 0 6px 20px rgba(0, 0, 0, .2);
}

@font-face {
 font-family: 'BYekan';
 src: url('BYekan.eot');
 src: local('b BYekan'), url('BYekan.woff') format('woff'), url('BYekan.ttf') format('truetype'), url('BYekan.eot') format('eot');
 font-weight: normal;
 font-style: normal;
}
.textbox{
	transition: border-color .5s;
	font-family: BYekan,tahoma;
	font-size: 13pt;
	padding-right: 5px;
	padding-left: 5px;
	border-radius: 5px;	
	border: solid rgba(0,0,0,0.2) 2px;
	outline: none;
	width: 300px;
	 


}
.textbox:focus{
	transition: border .5s;
	border: solid #89d139 2px;

}
.btns{
	transition: background-color .5s,box-shadow .5s;
	background-color: #89d139;
	border-radius: 30px;
	padding-left: 20px;
	padding-right: 20px;
	padding-top: 5px;
	padding-bottom: 5px;
	border: none;
	color: #fff;
	font-family: BYekan,tahoma;
	font-size: 20px;
	outline: none;
	margin: 20px;

}
.btns:hover{
	transition: background-color .5s,box-shadow .5s;
	background-color: #71b02a;
	box-shadow: 0 5px 10px rgba(0, 0, 0, .3);
}
.btns:focus{
	transition: background-color .5s,box-shadow .5s;
	background-color: #5b961a;
	box-shadow: 0 0px 10px rgba(0, 0, 0, .3);
}
</style>
</head>
<body>

<div id="main">
	
inja matlab hast


<div class="kharidbox">
	<font size="6.5" color="#6f9f36" face="BYekan"> کادر خرید</font>
	<font size="4" color="#6f9f36" face="BYekan"> 
	<br><br>نام محصول  <input style="margin-right: 50px;margin-left: 50px;width:250px;" placeholder="غیر قابل تغییر" type="text" name="itemname" placeholder="" class="textbox" disabled>
	 قیمت کالا  <input style="margin-right: 23px;" placeholder="غیر قابل تغییر" type="number" name="price" placeholder="" class="textbox" disabled>


	<div style="margin-top:20px;">
	نام و نام خانوادگی  <input style="margin-right: 5px;margin-left: 50px;width:250px;" placeholder="اجباری" type="text" name="fullname" class="textbox">
	 شماره تماس  <input style="margin-right: 5px;" type="text" placeholder="اجباری" name="phone" placeholder="" class="textbox">
	</div>

	<div style="margin-top:20px;">
	 آدرس دقیق  <input style="margin-right: 42px;width:695px;" type="textarea" placeholder="اجباری" name="address" placeholder="" class="textbox">
	</div>

	<div style="margin-top:20px;">
	 توضیحات اضافه:  <div style="margin-top:10px;"><textarea style="width:820px;max-width:820px;height: 125px;max-height: 125px;"  rows="5" type="textarea" placeholder="اختیاری" name="short_link" placeholder="" class="textbox"></textarea></div>
	</div>
	<center><input type="submit" class="btns" value="پرداخت"></center>
	</font>
</div>

</div>




</body>
</html>
