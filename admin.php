<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title icon -->
  <link rel="shortcut icon" type="x-icon" href="./img/bot-logo.png">
  <title>Updation page</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
  <meta name="keywords" content="tamil keyboard, tamil virtual keyboard, tamil keyboard online, tamil onscreen keyboard, type tamil online, type tamil letters online, type in tamil online, type tamil, type tamil keyboard, tamil typing, writing tamil, type in tamil, tamil letters, tamil keyboard layout, google tamil, tamil 99 keyboard, tamil99 keyboard, tamil inscript keyboard, tamil inscript virtual keyboard, tamil inscript keyboard online, tamil inscript onscreen keyboard, tamil inscript keyboard layout">

  <meta name="description" content="Write Tamil letters online without installing Tamil keyboard. This online keyboard allows you to type Tamil letters using any computer keyboard, mouse, or touchscreen.">

  <meta property="og:title" content="Tamil Keyboard - தமிழ் - Type Tamil Online">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.branah.com/tamil">
  <meta property="og:image" content="https://www.branah.com/images/tamil.png">
  <meta property="og:site_name" content="branah">
  <meta property="og:description" content="Write Tamil letters online without installing Tamil keyboard. This online keyboard allows you to type Tamil letters using any computer keyboard, mouse, or touchscreen.">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <link rel="apple-touch-icon" href="https://www.branah.com/apple-touch-icon.png">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <style>

    *{margin:0;padding:0}html{overflow-y:scroll}html,body{height:100%}body{font-family:Verdana,Helvetica,Arial,Sans-Serif;font-size:87.5%;line-height:24px;color:#464646}a:link,a:visited,a:active{color:#005a9c;text-decoration:none}a:hover{text-decoration:underline}p{margin:.75em 0}h1{font-size:1.2857em;margin:.75em 0;color:#057cb5}h3{font-size:1em;margin:.75em 0;color:#057cb5}h4{text-align:left}img{border:0}table{border-spacing:0}td{vertical-align:top}rb{color:#057cb5;font-size:100%;margin-left:.5em}rt{color:#e0115f;font-size:100%}.clear{clear:both}.middle{vertical-align:middle}.top{vertical-align:top}#footer{margin-top:4em;padding-bottom:2em;text-align:center;border-top:1px solid #ccc;font-size:.75em}#gdpr{position:fixed;background-color:rgba(0,0,0,0.85);color:#FFF;text-align:center;left:0;bottom:0;width:100%;font-size:.75em}#gdpr-btn{margin:0 0 0 1em;padding:0 1em;font-size:1em;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:unset 0 1px 1px rgba(0,0,0,0.075);box-shadow:unset 0 1px 1px rgba(0,0,0,0.075)}ul.menu{list-style:none;padding-top:1em}li.menuitem{display:inline;padding:0;margin:0 0 0 1em}li.activemenuitem a{border-bottom:1px solid #3C0}#action{text-align:left}#action button{padding:0 5px;vertical-align:middle;line-height:18px}#shrink,#enlarge{width:24px}a.soft_button{border:1px solid lightblue;margin-left:3px;padding:0 2px;white-space:nowrap}.share-this{margin:2em auto 1em auto;text-align:center}.share-this .share{margin-right:1em}.button{display:inline-block;padding:0 5px;background-color:#f0f0f0;border:2px solid #ccc;border-radius:5px}input[type=number],input[type=text],textarea{font-family:Verdana,Helvetica,Arial,Sans-Serif;color:#464646;padding:5px 8px;vertical-align:middle;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.nowrap{white-space:nowrap}#branah-keyboard{line-height:20px;font-size:1em}#branah-keyboard button{float:left;display:block;margin:1px;height:3em;text-align:center;color:gray}#branah-keyboard .branah-label-natural{color:#e0115f}#branah-keyboard .branah-label-shift{color:#057cb5}#branah-keyboard .branah-label-natural,#branah-keyboard .branah-label-shift{margin-top:-5px;line-height:20px;text-align:center;cursor:default}#branah-keyboard .branah-label-reference{color:gray;font-size:.9em;line-height:12px;text-align:left;cursor:default}#branah-k29 .branah-label-reference,#branah-k32 .branah-label-reference{color:#000}#branah-keyboard .branah-recessed span{color:#3C0}#branah-keyboard .branah-recessed-hover span{color:#ffd800}#branah-keyboard .branah-clear{clear:both}@media only screen and (max-width:640px){#page{margin:0 2px}#header{margin-bottom:1em}#logo{display:inline-block;width:100%;height:46px;line-height:46px;background-repeat:repeat-x;background-image:url(/images/branahmobile.jpg)}div.side_content{height:50px}.adslot_1{width:320px;height:50px}a.soft_button{padding:0 2px 0 0;margin-left:0}ul.list{list-style:none}ul.list li{text-align:center;line-height:2em;margin:1em}textarea{width:85%}#share{width:100%;margin:2em auto 1em auto;text-align:center}#action{line-height:2.25em}#archived{font-size:.85em;margin:.5em 0 1em 0}#branah-keyboard button{width:88px}#branah-keyboard .branah-key{width:43px}.gsc-search-box,.gsc-control-cse{display:none}}@media only screen and (min-width:641px) and (max-width:840px){p{text-align:justify}textarea{width:610px}#page{width:630px;margin:0 auto}#header{margin-bottom:1em}#logo{display:inline-block;width:630px;height:108px;line-height:108px;background-image:url(/images/branahtab.jpg)}div.side_content{height:60px}.adslot_1{width:468px;height:60px}ul.list{list-style:none;display:inline-block;width:120px}ul.list li{line-height:2em;margin:0}#editor{width:600px}#keyboard{width:630px}#selectAll,#saveAsTextFile,#postToFacebook,#shrink,#enlarge{margin-right:2px;padding:0 5px;vertical-align:middle;line-height:18px}}@media only screen and (min-width:841px){p{text-align:justify}textarea{width:610px}#page{width:840px;margin:0 auto}#header{margin-bottom:1em}#logo{display:inline-block;width:840px;height:144px;line-height:144px;background-image:url(/images/branah.jpg)}div.side_content{position:absolute;top:0;left:0;width:160px;_margin-left:-210px}.adslot_1{display:block;width:160px;height:600px}div.main_content{position:relative;padding-left:210px}ul.list{list-style:none;display:inline-block;width:160px}#editor{width:607px;height:96px}}@media only screen and (min-width:641px){#branah-keyboard{width:630px}#branah-keyboard button{line-height:2.75em}#branah-keyboard .branah-key{width:40px}#branah-backspace{width:78px}#branah-tab{width:62px}#branah-k25{width:56px}#branah-caps-lock{width:76px}#branah-enter{width:84px}#branah-left-shift{width:46px}#branah-right-shift{width:114px}#branah-space{width:246px;text-align:center}#branah-right-ctrl,#branah-right-alt,#branah-escape{width:62px}#branah-left-ctrl,#branah-left-alt,#branah{width:60px}};
  </style>

  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-4450461-3', 'branah.com');
      ga('send', 'pageview');
      ga('set', 'anonymizeIp', true);
  </script>
  
  <style type="text/css">
		body{
			
			background-repeat: no-repeat;
			
		}
		input{
			width: 2000px;
		}
	</style>
</head>

<body class="bg-transparent">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(56, 54, 54);">
        <div class="container-fluid" style="height: 35px;" >
            <a class="navbar-brand" href="https://www.tn.gov.in/" style="font-size: 20px; color: rgb(235, 225, 225);">
                <img src="./img/TN-Govt.png" alt="TN logo" width="35" class="d-inline-block align-text-top">
                Government of tamilnadu
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="left: 100px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>Tirunelveli District</i></u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>திருநெல்வேலி மாவட்டம்</i></u></a>
                    </li>
                    
                    <a href="logout.php"><button style="position: absolute; left:90% "type="button" class="btn btn-secondary" >Logout</button></a>
                </ul>
            </div>
        </div>
    </nav>
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" style="margin-top:20px;float:right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Tamil keyboard
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-xl">
	  <div class="modal-content" >
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Click or type it... Copy it... And paste it... Done!
      </h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
    		  <!-- TAMIL KEYBOARD -->
		<div class="modal-body" > 

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(56, 54, 54);">
        <div class="container-fluid" style="height: 35px;" >
            <a class="navbar-brand" href="https://www.tn.gov.in/" style="font-size: 20px; color: rgb(235, 225, 225);">
                <img src="./img/TN-Govt.png" alt="TN logo" width="35" class="d-inline-block align-text-top">
                Government of tamilnadu
            </a>
            
        </div>
    </nav>
     
    <div id="page">
        

        <div class="main_content">
            <div class="side_content">
                <ins class="adsbygoogle adslot_1"
                    data-ad-client="ca-pub-6590006325388707"
                    data-ad-slot="9929133187">
                </ins> 

                <script 
                    async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                </script>

                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                
                </div>

                    <h1>Tamil Keyboard - தமிழ் விசைப்பலகை</h1>

                    <p id="response"></p>

                    <form method="POST" action="https://api.branah.com/api/file/postBack" id="saveAsTextFile"><p id="action"><button type="button" id="selectAll">Select All</button> <button type="button" id="copy">Copy</button> <button type="button" id="undo">Undo</button> <button type="button" id="redo">Redo</button> <button type="button" id="clearAll">Clear All</button> <input type="hidden" name="data" id="data" value=""><button type="submit">Save Text</button> <button type="button" title="Shrink letters" id="shrink">-</button><button type="button" title="Enlarge letters" id="enlarge">+</button><br /><span class="nowrap"><a id="email" href="#" class="middle soft_button">Send Email</a></span> <span class="nowrap"><a id="postToTwitter" href="#" class="middle soft_button" target="_blank">Tweet in Tamil</a></span> <span class="nowrap"><a id="searchGoogle" href="#" class="middle soft_button" target="_blank">Google in Tamil</a></span> <span class="nowrap"><a id="translateGoogle" href="#" class="middle soft_button" target="_blank">Google Translate</a></span></p></form>

                    <p><textarea id="editor" name="editor" rows="" cols="75"></textarea></p>
                    <div id="keyboard"></div>

                    <script 
                        async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                    </script> 

                    <!-- Responsive -->

                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-6590006325388707"
                        data-ad-slot="9929133187"
                        data-ad-format="auto"
                        data-full-width-responsive="false">
                    </ins>

                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
        <div 
            id="gdpr">This site uses cookies and other tracking technologies to assist with your ability to provide feedback, analyze your use of our products and services, and provide content from third parties. <a href="how-we-use-cookies">Cookie Policy</a> <button id="gdpr-btn" type="button">Accept</button>
        </div>
    </div>

    <script>
        (function(){var a={};a.util={mobile:/Android|webOS|iPhone|iPad|iPod|IEMobile|Opera Mini/i.test(navigator.userAgent),opera:((!!window.opr&&!!opr.addons)||!!window.opera||navigator.userAgent.indexOf(" OPR/")>=0),mozilla:(typeof InstallTrigger!=="undefined"),windowWidth:function(){var i=window.document.documentElement.clientWidth,e=window.document.body;return window.document.compatMode==="CSS1Compat"&&i||e&&e.clientWidth||i},code:function(i){if(!i){var i=window.event}if(i.code!=undefined&&i.key!=undefined){return i.code}return"Unidentified"},keyCode:function(u){if(!u){var u=window.event}var i=u.keyCode;if(this.mozilla){switch(i){case 59:i=186;break;case 107:i=187;break;case 109:i=189;break;case 61:i=187;break;case 173:i=189;break}}if(this.opera){switch(i){case 59:i=186;break;case 61:i=187;break;case 109:i=189;break}}if(i==18&&u.location&&u.location==2){i=255}return i},preventDefault:function(i){if(!i){var i=window.event}i.preventDefault?i.preventDefault():(i.returnValue=false)},srcId:function(i,u,w){if(!i){var i=window.event}var v;if(i.target){v=i.target}else{if(i.srcElement){v=i.srcElement}}if(v.nodeType==3){v=target.parentNode}while(v.tagName.toLowerCase()!=w){v=v.parentNode;if(v==u||v.tagName.toLowerCase()=="body"){return null}}return v.id},insertAtCaret:function(i,x){var w=this.getSelectionStart(i);var u=this.getSelectionEnd(i);var v=i.value.length;i.value=i.value.substring(0,w)+x+i.value.substring(u,v);this.setCaretPosition(i,w+x.length,0)},deleteAtCaret:function(v,u,i){var y=this.getSelectionStart(v);var w=this.getSelectionEnd(v);var x=v.value.length;if(u>y){u=y}if(w+i>x){i=x-w}var z=v.value.substring(y-u,w+i);v.value=v.value.substring(0,y-u)+v.value.substring(w+i);this.setCaretPosition(v,y-u,0);return z},getSelectionStart:function(i){i.focus();if(i.selectionStart!==undefined){return i.selectionStart}else{if(document.selection){var u=document.selection.createRange();if(u==null){return 0}var w=i.createTextRange();var v=w.duplicate();w.moveToBookmark(u.getBookmark());v.setEndPoint("EndToStart",w);return v.text.length}}return 0},getSelectionEnd:function(i){i.focus();if(i.selectionEnd!==undefined){return i.selectionEnd}else{if(document.selection){var u=document.selection.createRange();if(u==null){return 0}var w=i.createTextRange();var v=w.duplicate();w.moveToBookmark(u.getBookmark());v.setEndPoint("EndToStart",w);return v.text.length+u.text.length}}return i.value.length},setCaretPosition:function(u,w,i){var v=u.value.length;if(w>v){w=v}if(w+i>v){i=v-i}u.focus();if(u.setSelectionRange){u.setSelectionRange(w,w+i)}else{if(u.createTextRange){var x=u.createTextRange();x.collapse(true);x.moveEnd("character",w+i);x.moveStart("character",w);x.select()}}u.focus()},selectAll:function(i){this.setCaretPosition(i,0,i.value.length)},fromCharCodeS:function(){var w=arguments.length;var x="";var e,v,y;for(var u=0;u<w;u++){y=arguments[u];if(y<1114112&&65535<y){e=Math.floor((y-65536)/1024)+55296;v=((y-65536)%1024)+56320;x=x+String.fromCharCode(e,v)}else{if(y<65536){x=x+String.fromCharCode(y)}}}return x}};a.layout=function(){this.keys=[];this.deadkeys=[];this.dir="ltr";this.name="US";this.lang="en"};a.layout.prototype.loadDefault=function(){this.keys=[{i:"k0",c:"0",n:"`",s:"~"},{i:"k1",c:"0",n:"1",s:"!"},{i:"k2",c:"0",n:"2",s:"@"},{i:"k3",c:"0",n:"3",s:"#"},{i:"k4",c:"0",n:"4",s:"$"},{i:"k5",c:"0",n:"5",s:"%"},{i:"k6",c:"0",n:"6",s:"^"},{i:"k7",c:"0",n:"7",s:"&"},{i:"k8",c:"0",n:"8",s:"*"},{i:"k9",c:"0",n:"9",s:"("},{i:"k10",c:"0",n:"0",s:")"},{i:"k11",c:"0",n:"-",s:"_"},{i:"k12",c:"0",n:"=",s:"+"},{i:"k13",c:"1",n:"q",s:"Q"},{i:"k14",c:"1",n:"w",s:"W"},{i:"k15",c:"1",n:"e",s:"E"},{i:"k16",c:"1",n:"r",s:"R"},{i:"k17",c:"1",n:"t",s:"T"},{i:"k18",c:"1",n:"y",s:"Y"},{i:"k19",c:"1",n:"u",s:"U"},{i:"k20",c:"1",n:"i",s:"I"},{i:"k21",c:"1",n:"o",s:"O"},{i:"k22",c:"1",n:"p",s:"P"},{i:"k23",c:"0",n:"[",s:"{"},{i:"k24",c:"0",n:"]",s:"}"},{i:"k25",c:"0",n:"\\",s:"|"},{i:"k26",c:"1",n:"a",s:"A"},{i:"k27",c:"1",n:"s",s:"S"},{i:"k28",c:"1",n:"d",s:"D"},{i:"k29",c:"1",n:"f",s:"F"},{i:"k30",c:"1",n:"g",s:"G"},{i:"k31",c:"1",n:"h",s:"H"},{i:"k32",c:"1",n:"j",s:"J"},{i:"k33",c:"1",n:"k",s:"K"},{i:"k34",c:"1",n:"l",s:"L"},{i:"k35",c:"0",n:";",s:":"},{i:"k36",c:"0",n:"'",s:'"'},{i:"k37",c:"1",n:"z",s:"Z"},{i:"k38",c:"1",n:"x",s:"X"},{i:"k39",c:"1",n:"c",s:"C"},{i:"k40",c:"1",n:"v",s:"V"},{i:"k41",c:"1",n:"b",s:"B"},{i:"k42",c:"1",n:"n",s:"N"},{i:"k43",c:"1",n:"m",s:"M"},{i:"k44",c:"0",n:",",s:"<"},{i:"k45",c:"0",n:".",s:">"},{i:"k46",c:"0",n:"/",s:"?"},{i:"k47",c:"0",n:"\\",s:"|"}];this.deadkeys=[];this.dir="ltr";this.name="US";this.lang="en"};a.layout.prototype.load=function(e){this.keys=e.keys;this.deadkeys=e.deadkeys;this.dir=e.dir;this.name=e.name;this.lang=e.lang?e.lang:"en"};a.layout.parser={keys:{"192":"Backquote","49":"Digit1","50":"Digit2","51":"Digit3","52":"Digit4","53":"Digit5","54":"Digit6","55":"Digit7","56":"Digit8","57":"Digit9","48":"Digit0","189":"Minus","187":"Equal","81":"KeyQ","87":"KeyW","69":"KeyE","82":"KeyR","84":"KeyT","89":"KeyY","85":"KeyU","73":"KeyI","79":"KeyO","80":"KeyP","219":"BracketLeft","221":"BracketRight","220":"Backslash","65":"KeyA","83":"KeyS","68":"KeyD","70":"KeyF","71":"KeyG","72":"KeyH","74":"KeyJ","75":"KeyK","76":"KeyL","186":"Semicolon","222":"Quote","90":"KeyZ","88":"KeyX","67":"KeyC","86":"KeyV","66":"KeyB","78":"KeyN","77":"KeyM","188":"Comma","190":"Period","191":"Slash","17":"ControlLeft","18":"AltLeft","16":"ShiftLeft","32":"Space","27":"Escape","20":"CapsLock","13":"Enter","255":"AltRight"},codes:{Backquote:0,Digit1:1,Digit2:2,Digit3:3,Digit4:4,Digit5:5,Digit6:6,Digit7:7,Digit8:8,Digit9:9,Digit0:10,Minus:11,Equal:12,KeyQ:13,KeyW:14,KeyE:15,KeyR:16,KeyT:17,KeyY:18,KeyU:19,KeyI:20,KeyO:21,KeyP:22,BracketLeft:23,BracketRight:24,Backslash:25,KeyA:26,KeyS:27,KeyD:28,KeyF:29,KeyG:30,KeyH:31,KeyJ:32,KeyK:33,KeyL:34,Semicolon:35,Quote:36,KeyZ:37,KeyX:38,KeyC:39,KeyV:40,KeyB:41,KeyN:42,KeyM:43,Comma:44,Period:45,Slash:46,IntlBackslash:47},getKeyLegend:function(v,u){var w=v.length;for(var e=0;e<w;e++){if(v[e].i==u){return(v[e].n?v[e].n:"")}}return 0},getKey:function(v,u){var w=v.length;for(var e=0;e<w;e++){if(v[e].i==u){return v[e]}}return null},isDeadkey:function(e,w){if(!e){return false}var v=e.length;for(var u=0;u<v;u++){if(e[u].k==w){return true}}return false},getMappedValue:function(e,x,w){if(!e){return""}var v=e.length;for(var u=0;u<v;u++){if(e[u].k==w&&e[u].b==x){return e[u].c}}return""},getState:function(w,e,x,u,v,i){var y="n";if(!e&&!x&&w){y="n"}else{if(!e&&x&&!w){y="s"}else{if(!e&&x&&w){y="s"}else{if(e&&!x&&!w){y="n"}else{if(e&&!x&&w){y="t"}else{if(e&&x&&!w){y="s"}else{if(e&&x&&w){y="f"}}}}}}}if(u){if(v=="1"){if(y=="n"){y="s"}else{if(y=="s"){y="n"}}}else{if(v=="SGCap"){if(y=="n"){y="y"}else{if(y=="s"){y="z"}}}}}if(i){if(y=="n"){y="t"}else{if(y=="s"){y="f"}}}return y}};a.keyboard=function(e,w){this.defaultLayout=new a.layout();this.defaultLayout.loadDefault();this.virtualLayout=new a.layout();this.virtualLayout.loadDefault();this.currentLayout=this.virtualLayout;this.shift=false;this.shiftOn=false;this.caps=false;this.capsOn=false;this.alt=false;this.altGr=false;this.altGrOn=false;this.ctrl=false;this.altCtrlOn=false;this.fontSize=18;this.counter=0;this.interval=0;this.prev="";this.emoji=false;this.emojiStartingCodePoint=128512;this.emojiCurrentCodePoint=128512;this.cancelkeypress=false;this.customOnBackspace=function(i){};this.customOnEnter=function(){};this.customOnSpace=function(){return false};this.customOnKey=function(i){return false};this.customOnEsc=function(){};this.customDrawKeyboard=function(i){return i};this.textbox=document.getElementById(w);this.textbox.style.fontSize="18px";if(a.util.mobile){this.textbox.readOnly=true}var v=['<div id="branah-keyboard">'];v.push('<div id="branah-keyboard-alpha">');if(a.util.windowWidth()<640){for(var u=13;u<23;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}for(var u=26;u<35;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}for(var u=37;u<44;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<button id="branah-left-shift"><span>Shift</span></button>');v.push('<button id="branah-caps-lock"><span>Caps</span></button>');v.push('<button id="branah-escape" title="Turn on/off keyboard input conversion"><span>Esc</span></button>');v.push('<button id="branah-space"><span>Space</span></button>');v.push('<button id="branah-emoji" class="branah-key">\ud83d\ude00</button>');v.push('<button id="branah-enter" class="branah-enter"><span>Enter</span></button>');v.push('<button id="branah-left-ctrl" style="display:none"><span>Ctrl</span></button>');v.push('<button id="branah-left-alt" style="display:none"><span>Alt</span></button>');v.push('<button id="branah-right-alt"><span>AltGr</span></button>');v.push('<button id="branah-right-ctrl" style="display:none"><span>Ctrl</span></button>');v.push('<button id="branah-right-shift" style="display:none"><span>Shift</span></button>');v.push('<button id="branah-backspace"><span>Back</span></button>');for(var u=0;u<13;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}for(var u=23;u<26;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}for(var u=35;u<37;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}for(var u=44;u<48;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<div class="branah-clear"></div>')}else{for(var u=0;u<13;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<button id="branah-backspace"><span>Backspace</span></button>');v.push('<div class="branah-clear"></div>');v.push('<button id="branah-tab"><span>Tab</span></button>');for(var u=13;u<25;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<button id="branah-k25"></button>');v.push('<div class="branah-clear"></div>');v.push('<button id="branah-caps-lock"><span>Caps Lock</span></button>');for(var u=26;u<37;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<button id="branah-enter" class="branah-enter"><span>Enter</span></button>');v.push('<div class="branah-clear"></div>');v.push('<button id="branah-left-shift"><span>Shift</span></button>');v.push('<button id="branah-k47" class="branah-key"></button>');for(var u=37;u<47;u++){v.push('<button id="branah-k',u,'" class="branah-key"></button>')}v.push('<button id="branah-right-shift"><span>Shift</span></button>');v.push('<div class="branah-clear"></div>');v.push('<button id="branah-left-ctrl"><span>Ctrl</span></button>');v.push('<button id="branah"><span>Emoji</span></button>');v.push('<button id="branah-left-alt"><span>Alt</span></button>');v.push('<button id="branah-space"><span>Space</span></button>');v.push('<button id="branah-right-alt"><span>AltGr</span></button>');v.push('<button id="branah-escape" title="Turn on/off keyboard input conversion"><span>Esc</span></button>');v.push('<button id="branah-right-ctrl"><span>Ctrl</span></button>');v.push('<div class="branah-clear"></div>')}v.push("</div>");v.push('<div id="branah-keyboard-emoji" style="display:none">');v.push("</div>");v.push("</div>");document.getElementById(e).innerHTML=v.join("");this.wireEvents();this.drawKeyboard()};a.keyboard.prototype.loadDefaultLayout=function(e){this.defaultLayout.load(e);this.drawKeyboard()};a.keyboard.prototype.loadVirtualLayout=function(e){this.virtualLayout.load(e);this.drawKeyboard();this.textbox.style.direction=this.attr("dir")};a.keyboard.prototype.switchLayout=function(){this.currentLayout=(this.currentLayout===this.defaultLayout)?this.virtualLayout:this.defaultLayout;this.reset();this.drawKeyboard();this.textbox.style.direction=this.attr("dir")};a.keyboard.prototype.getFontSize=function(){return this.fontSize};a.keyboard.prototype.setFontSize=function(e){this.fontSize=e;this.textbox.style.fontSize=this.fontSize+"px"};a.keyboard.prototype.onEsc=function(){this.switchLayout();this.customOnEsc()};a.keyboard.prototype.onShift=function(){this.shift=!this.shift;this.drawKeyboard()};a.keyboard.prototype.onAlt=function(){this.alt=!this.alt;this.drawKeyboard()};a.keyboard.prototype.onAltGr=function(){this.altGr=!this.altGr;this.drawKeyboard()};a.keyboard.prototype.onCtrl=function(){this.ctrl=!this.ctrl;this.drawKeyboard()};a.keyboard.prototype.onCapsLock=function(){this.caps=!this.caps;this.drawKeyboard()};a.keyboard.prototype.onBackspace=function(){if(this.prev!=""){this.prev="";this.shift=false;this.drawKeyboard()}else{var i=a.util.deleteAtCaret(this.textbox,1,0);if(i.length>0){var e=i.charCodeAt(0);if(e<57344&&56319<e){i=a.util.deleteAtCaret(this.textbox,1,0)+i}}this.customOnBackspace(i)}};a.keyboard.prototype.onEnter=function(){a.util.insertAtCaret(this.textbox,"\u000A");this.customOnEnter()};a.keyboard.prototype.onSpace=function(){if(!this.customOnSpace()){a.util.insertAtCaret(this.textbox,"\u0020")}};a.keyboard.prototype.onEmoji=function(){this.emoji=!this.emoji;this.emojiCurrentCodePoint=this.emojiStartingCodePoint;this.drawKeyboard()};a.keyboard.prototype.onEmojiScrollUp=function(){this.emojiCurrentCodePoint-=14;if(this.emojiCurrentCodePoint<0){this.emojiCurrentCodePoint=0}this.drawKeyboard()};a.keyboard.prototype.onEmojiScrollDown=function(){this.emojiCurrentCodePoint+=14;this.drawKeyboard()};a.keyboard.prototype.onEmojiKey=function(e){a.util.insertAtCaret(this.textbox,a.util.fromCharCodeS(this.emojiCurrentCodePoint+parseInt(e)-100))};a.keyboard.prototype.attr=function(e){if(e=="dir"){return this.currentLayout.dir}else{if(e=="lang"){return this.currentLayout.lang}else{if(e=="name"){return this.currentLayout.name}}}return""};a.keyboard.prototype.reset=function(){this.shift=false;this.caps=false;this.alt=false;this.altGr=false;this.ctrl=false;this.counter=0;this.interval=0;this.prev=""};a.keyboard.prototype.stopRepeat=function(){if(this.interval!=0){clearInterval(this.interval);this.counter=0;this.interval=0}};a.keyboard.prototype.onKey=function(i){var e=a.layout.parser.getKey(this.currentLayout.keys,i);if(e){var v=a.layout.parser.getState(this.ctrl,this.alt,this.shift,this.caps,e.c?e.c:"0",this.altGr);var w=e[v]?e[v]:"";if(this.prev!=""){var u=a.layout.parser.getMappedValue(this.currentLayout.deadkeys,w,this.prev);if(u!=""){a.util.insertAtCaret(this.textbox,u)}this.prev=""}else{if(a.layout.parser.isDeadkey(this.currentLayout.deadkeys,w)){this.prev=w}else{if(w!=""){if(!this.customOnKey(w)){a.util.insertAtCaret(this.textbox,w)}}}}}};a.keyboard.prototype.getEmojiHTML=function(){var v=14;if(a.util.windowWidth()<640){v=6}var w=[];for(var e=100;e<100+(5*v);e++){w.push('<button id="branah-k',e,'" class="branah-key"><div style="font-size:',this.fontSize,'px;">',a.util.fromCharCodeS(this.emojiCurrentCodePoint+e-100),"</div></button>");var u=e-99;if(u==v){w.push('<button id="branah-emoji-scrollup" class="branah-key"><div style="font-size:',this.fontSize,'px;">\u23f6</div></button>');w.push('<div class="branah-clear"></div>')}else{if(u==2*v){w.push('<button id="branah-emoji" class="branah-key"><span>abc</span></button>');w.push('<div class="branah-clear"></div>')}else{if(u==3*v){w.push('<button id="branah-emoji-backspace" class="branah-key"><div style="font-size:',this.fontSize,'px;">\u232b</div></button>');w.push('<div class="branah-clear"></div>')}else{if(u==4*v){w.push('<button id="branah-emoji-enter" class="branah-key"><div style="font-size:',this.fontSize,'px;">\u21b5</div></button>');w.push('<div class="branah-clear"></div>')}else{if(u==5*v){w.push('<button id="branah-emoji-scrolldown" class="branah-key"><div style="font-size:',this.fontSize,'px;">\u23f7</div></button>');w.push('<div class="branah-clear"></div>')}}}}}}w.push('<div class="branah-clear"></div>');return w.join("")};a.keyboard.prototype.drawKeyboard=function(){if(this.emoji){document.getElementById("branah-keyboard-emoji").innerHTML=this.getEmojiHTML();document.getElementById("branah-keyboard-emoji").style.display="";document.getElementById("branah-keyboard-alpha").style.display="none";return}else{document.getElementById("branah-keyboard-emoji").style.display="none";document.getElementById("branah-keyboard-alpha").style.display=""}if(!this.currentLayout.keys){return}var F,H,K,L;var I=this.currentLayout.keys.length;for(var G=0;G<I;G++){H=this.currentLayout.keys[G];if(!document.getElementById("branah-"+H.i)){continue}var E=this.ctrl;var e=this.alt;var J=this.shift;var D=this.caps;var u=this.altGr;if(this.shiftOn){J=true}if(this.capsOn){D=true}if(this.altCtrlOn){E=true;e=true}if(this.altGrOn){u=true}K=a.layout.parser.getState(E,e,J,D,H.c?H.c:"0",u);L=H[K]?H[K]:"";if(this.prev!=""){L=a.layout.parser.getMappedValue(this.currentLayout.deadkeys,L,this.prev)}F=[];F.push('<div class="branah-label-reference">',a.layout.parser.getKeyLegend(this.defaultLayout.keys,H.i),"</div>");if(!J){L=this.customDrawKeyboard(L);if(L==""){L="&nbsp;"}F.push('<div class="branah-label-natural" style="font-size:',this.fontSize,'px;">&nbsp;',L,"</div>")}else{if(L==""){L="&nbsp;"}F.push('<div class="branah-label-shift" style="font-size:',this.fontSize,'px;">&nbsp;',L,"</div>")}document.getElementById("branah-"+H.i).innerHTML=F.join("")}var y=document.getElementById("branah-left-ctrl");var B=document.getElementById("branah-right-ctrl");if(y&&B){if(E){y.className="branah-recessed"+(this.ctrl?"":"-hover");B.className="branah-recessed"+(this.ctrl?"":"-hover")}else{y.className="";B.className=""}}var x=document.getElementById("branah-left-alt");if(x){if(e){x.className="branah-recessed"+(this.alt?"":"-hover")}else{x.className=""}}var A=document.getElementById("branah-right-alt");if(A){if(u){A.className="branah-recessed"+(this.altGr?"":"-hover")}else{A.className=""}}var z=document.getElementById("branah-left-shift");var C=document.getElementById("branah-right-shift");if(z&&C){if(J){z.className="branah-recessed"+(this.shift?"":"-hover");C.className="branah-recessed"+(this.shift?"":"-hover")}else{z.className="";C.className=""}}var v=document.getElementById("branah-caps-lock");if(v){if(D){v.className="branah-recessed"+(this.caps?"":"-hover")}else{v.className=""}}var w=document.getElementById("branah-escape");if(w){if(this.currentLayout===this.defaultLayout){w.className="branah-recessed"}else{w.className=""}}};a.keyboard.prototype.wireEvents=function(){var e=this;document.getElementById("branah-keyboard").onmousedown=function(i){var u=a.util.srcId(i,this,"button");if(!u){return}e.interval=setInterval(function(){e.counter++;if(e.counter>5){switch(u){case"branah-backspace":case"branah-emoji-backspace":e.onBackspace();break;case"branah-enter":case"branah-emoji-enter":e.onEnter();break;case"branah-emoji-scrollup":e.onEmojiScrollUp();break;case"branah-emoji-scrolldown":e.onEmojiScrollDown();break;default:if(u.search("^branah-k([0-9]|[1-3][0-9]|4[0-7])$")!=-1){e.onKey(u.substr(7));e.shift=false;e.alt=false;e.ctrl=false;e.altGr=false;e.drawKeyboard()}else{if(u.search("^branah-k1[0-6][0-9]$")!=-1){e.onEmojiKey(u.substr(8))}}break}}},50)};document.getElementById("branah-keyboard").onmouseup=function(i){e.stopRepeat()};document.getElementById("branah-keyboard").onmouseout=function(i){e.stopRepeat()};document.getElementById("branah-keyboard").onclick=function(i){var u=a.util.srcId(i,this,"button");if(!u){return}switch(u){case"branah-left-shift":case"branah-right-shift":e.onShift();break;case"branah-left-alt":e.onCtrl();e.onAlt();break;case"branah-right-alt":e.onAltGr();break;case"branah-left-ctrl":case"branah-right-ctrl":e.onAlt();e.onCtrl();break;case"branah-escape":e.onEsc();break;case"branah-caps-lock":e.onCapsLock();break;case"branah-backspace":case"branah-emoji-backspace":e.onBackspace();break;case"branah-enter":case"branah-emoji-enter":e.onEnter();break;case"branah-space":e.onSpace();break;case"branah":case"branah-emoji":e.onEmoji();break;case"branah-emoji-scrollup":e.onEmojiScrollUp();break;case"branah-emoji-scrolldown":e.onEmojiScrollDown();break;default:if(u.search("^branah-k([0-9]|[1-3][0-9]|4[0-7])$")!=-1){e.onKey(u.substr(7));e.shift=false;e.alt=false;e.ctrl=false;e.altGr=false;e.drawKeyboard()}else{if(u.search("^branah-k1[0-6][0-9]$")!=-1){e.onEmojiKey(u.substr(8))}}break}};if(!("ontouchstart" in document.documentElement)||!a.util.mobile){document.getElementById("branah-left-shift").onmouseover=function(i){e.shiftOn=true;e.drawKeyboard()};document.getElementById("branah-right-shift").onmouseover=function(i){e.shiftOn=true;e.drawKeyboard()};document.getElementById("branah-left-shift").onmouseout=function(i){e.shiftOn=false;e.drawKeyboard()};document.getElementById("branah-right-shift").onmouseout=function(i){e.shiftOn=false;e.drawKeyboard()};document.getElementById("branah-left-ctrl").onmouseover=function(i){e.altCtrlOn=true;e.drawKeyboard()};document.getElementById("branah-right-ctrl").onmouseover=function(i){e.altCtrlOn=true;e.drawKeyboard()};document.getElementById("branah-left-ctrl").onmouseout=function(i){e.altCtrlOn=false;e.drawKeyboard()};document.getElementById("branah-right-ctrl").onmouseout=function(i){e.altCtrlOn=false;e.drawKeyboard()};document.getElementById("branah-left-alt").onmouseover=function(i){e.altCtrlOn=true;e.drawKeyboard()};document.getElementById("branah-right-alt").onmouseover=function(i){e.altGrOn=true;e.drawKeyboard()};document.getElementById("branah-left-alt").onmouseout=function(i){e.altCtrlOn=false;e.drawKeyboard()};document.getElementById("branah-right-alt").onmouseout=function(i){e.altGrOn=false;e.drawKeyboard()};document.getElementById("branah-caps-lock").onmouseover=function(i){e.capsOn=true;e.drawKeyboard()};document.getElementById("branah-caps-lock").onmouseout=function(i){e.capsOn=false;e.drawKeyboard()}}e.textbox.onkeydown=function(u){var i=a.util.code(u);if(i=="Unidentified"){var w=a.util.keyCode(u);i=a.layout.parser.keys[w+""]}if((i=="KeyA"||i=="KeyY"||i=="KeyZ"||i=="KeyC"||i=="KeyV"||i=="KeyX")&&(e.ctrl&&!e.alt&&!e.shift)){return}if(e.currentLayout==e.defaultLayout&&i!="Escape"){return}switch(i){case"ControlLeft":case"ControlRight":e.ctrl=false;e.onCtrl();break;case"AltLeft":e.alt=false;e.onAlt();break;case"AltRight":e.altGr=false;e.onAltGr();break;case"ShiftLeft":case"ShiftRight":e.shift=false;e.onShift();break;case"Escape":e.onEsc();break;case"CapsLock":if(u.getModifierState&&u.getModifierState("CapsLock")){e.caps=false}e.onCapsLock();break;case"Backspace":e.onBackspace();a.util.preventDefault(u);break;case"Space":e.onSpace();a.util.preventDefault(u);break;case"Enter":e.onEnter();a.util.preventDefault(u);break;default:var v=a.layout.parser.codes[i];if(v!=undefined){e.onKey("k"+v);e.drawKeyboard();a.util.preventDefault(u);e.cancelkeypress=true}break}};if(a.util.opera){e.textbox.onkeypress=function(i){if(e.cancelkeypress){a.util.preventDefault(i);e.cancelkeypress=false}}}e.textbox.onkeyup=function(u){var i=a.util.code(u);if(i=="Unidentified"){var v=a.util.keyCode(u);i=a.layout.parser.keys[v+""]}switch(i){case"ControlLeft":case"ControlRight":e.ctrl=true;e.onCtrl();break;case"AltLeft":e.alt=true;e.onAlt();break;case"AltRight":e.altGr=true;e.onAltGr();break;case"ShiftLeft":case"ShiftRight":e.shift=true;e.onShift();break;default:}}};var o=false;try{var d="item";localStorage.setItem(d,d);localStorage.removeItem(d);o=true}catch(b){}var f=false;try{var p=JSON.parse(JSON.stringify({item:"item"}));if(p.item=="item"){f=true}}catch(b){}if(document.cookie.indexOf("read=true")!=-1){document.getElementById("gdpr").style.display="none"}document.getElementById("gdpr-btn").onclick=function(){document.getElementById("gdpr").style.display="none";document.cookie="read=true"};var g=null;var n={undo:[],redo:[],layout:null,fontSize:16};var t="tamil";g=new a.keyboard("keyboard","editor");var s=g.textbox;s.focus();if(o&&f){var p=JSON.parse(localStorage.getItem(t));if(p!=null){if(p.layout){n.layout=p.layout}if(p.undo){n.undo=p.undo}if(p.redo){n.redo=p.redo}if(p.fontSize){n.fontSize=p.fontSize}}}if(n.fontSize){g.setFontSize(n.fontSize)}var k=[{Id:"tamil99",Name:"Tamil99 Keyboard",Json:{name:"Tamil",dir:"ltr",keys:[{i:"k0",c:"0",n:"`",s:"~",t:"௰"},{i:"k1",c:"0",n:"1",s:"!",t:"௧"},{i:"k2",c:"0",n:"2",s:"@",t:"௨"},{i:"k3",c:"0",n:"3",s:"#",t:"௩"},{i:"k4",c:"0",n:"4",s:"$",t:"௪"},{i:"k5",c:"0",n:"5",s:"%",t:"௫"},{i:"k6",c:"0",n:"6",s:"^",t:"௬"},{i:"k7",c:"0",n:"7",s:"&",t:"௭"},{i:"k8",c:"0",n:"8",s:"*",t:"௮"},{i:"k9",c:"0",n:"9",s:"(",t:"௯"},{i:"k10",c:"0",n:"0",s:")",t:"௦"},{i:"k11",c:"0",n:"-",s:"_",t:"௱"},{i:"k12",c:"0",n:"=",s:"+",t:"௲"},{i:"k13",c:"0",n:"ஆ",s:"ஸ"},{i:"k14",c:"0",n:"ஈ",s:"ஷ"},{i:"k15",c:"0",n:"ஊ",s:"ஜ"},{i:"k16",c:"0",n:"ஐ",s:"ஹ"},{i:"k17",c:"0",n:"ஏ",s:"க்ஷ"},{i:"k18",c:"0",n:"ள",s:"ஸ்ரீ"},{i:"k19",c:"0",n:"ற",s:"ஶ"},{i:"k20",c:"0",n:"ன",s:"I"},{i:"k21",c:"0",n:"ட",s:"["},{i:"k22",c:"0",n:"ண",s:"]"},{i:"k23",c:"0",n:"ச",s:"{"},{i:"k24",c:"0",n:"ஞ",s:"}"},{i:"k25",c:"0",n:"\\",s:"|"},{i:"k26",c:"0",n:"அ",s:"௹"},{i:"k27",c:"0",n:"இ",s:"௺"},{i:"k28",c:"0",n:"உ",s:"௸"},{i:"k29",c:"0",n:"்",s:"ஃ"},{i:"k30",c:"0",n:"எ",s:"G"},{i:"k31",c:"0",n:"க",s:"H"},{i:"k32",c:"0",n:"ப",s:"J"},{i:"k33",c:"0",n:"ம",s:'"'},{i:"k34",c:"0",n:"த",s:":"},{i:"k35",c:"0",n:"ந",s:";"},{i:"k36",c:"0",n:"ய",s:"'"},{i:"k37",c:"0",n:"ஔ",s:"௳"},{i:"k38",c:"0",n:"ஓ",s:"௴"},{i:"k39",c:"0",n:"ஒ",s:"௵"},{i:"k40",c:"0",n:"வ",s:"௶"},{i:"k41",c:"0",n:"ங",s:"௷"},{i:"k42",c:"0",n:"ல",s:"N"},{i:"k43",c:"0",n:"ர",s:"/"},{i:"k44",c:"0",n:",",s:"<"},{i:"k45",c:"0",n:".",s:">"},{i:"k46",c:"0",n:"ழ",s:"?"},{i:"k47",c:"0",n:"\\",s:"|"}],deadkeys:[]}},{Id:"Inscript",Name:"Inscript Keyboard",Json:{name:"Tamil Inscript",dir:"ltr",keys:[{i:"k0",c:"0",n:"ொ",s:"ஒ",t:"௰"},{i:"k1",c:"0",n:"1",s:"!",t:"௧"},{i:"k2",c:"0",n:"2",s:"@",t:"௨"},{i:"k3",c:"0",n:"3",s:"#",t:"௩"},{i:"k4",c:"0",n:"4",s:"$",t:"௪"},{i:"k5",c:"0",n:"5",s:"%",t:"௫"},{i:"k6",c:"0",n:"6",s:"த்ர",t:"௬"},{i:"k7",c:"0",n:"7",s:"க்ஷ",t:"௭"},{i:"k8",c:"0",n:"8",s:"ஷ்ர",t:"௮"},{i:"k9",c:"0",n:"9",s:"(",t:"௯"},{i:"k10",c:"0",n:"0",s:")",t:"௦"},{i:"k11",c:"0",n:"-",s:"ஃ",t:"௱"},{i:"k12",c:"0",n:"=",s:"+",t:"௲"},{i:"k13",c:"0",n:"ௌ",s:"ஔ"},{i:"k14",c:"0",n:"ை",s:"ஐ"},{i:"k15",c:"0",n:"ா",s:"ஆ"},{i:"k16",c:"0",n:"ீ",s:"ஈ"},{i:"k17",c:"0",n:"ூ",s:"ஊ"},{i:"k18",c:"0",n:"ப",s:"ப"},{i:"k19",c:"0",n:"ஹ",s:"ங"},{i:"k20",c:"0",n:"க",s:"க"},{i:"k21",c:"0",n:"த",s:"த"},{i:"k22",c:"0",n:"ஜ",s:"ச"},{i:"k23",c:"0",n:"ட",s:"ட"},{i:"k24",c:"0",n:"ஞ",s:"ஞ"},{i:"k25",c:"0",n:"\\",s:"|"},{i:"k26",c:"0",n:"ோ",s:"ஓ"},{i:"k27",c:"0",n:"ே",s:"ஏ"},{i:"k28",c:"0",n:"்",s:"அ"},{i:"k29",c:"0",n:"ி",s:"இ"},{i:"k30",c:"0",n:"ு",s:"உ"},{i:"k31",c:"0",n:"ப",s:"ப"},{i:"k32",c:"0",n:"ர",s:"ற"},{i:"k33",c:"0",n:"க",s:"க"},{i:"k34",c:"0",n:"த",s:"த"},{i:"k35",c:"0",n:"ச",s:"ச"},{i:"k36",c:"0",n:"ட",s:"ட"},{i:"k37",c:"0",n:"ெ",s:"எ"},{i:"k38",c:"0",n:"ஓ",s:"௴"},{i:"k39",c:"0",n:"ம",s:"ண"},{i:"k40",c:"0",n:"ந",s:"ன"},{i:"k41",c:"0",n:"வ",s:"ழ"},{i:"k42",c:"0",n:"ல",s:"ள"},{i:"k43",c:"0",n:"ஸ",s:"ஷ"},{i:"k44",c:"0",n:",",s:"ஷ"},{i:"k45",c:"0",n:".",s:"ஸ்ரீ"},{i:"k46",c:"0",n:"ய",s:"ய"},{i:"k47",c:"0",n:"\\",s:"|"}],deadkeys:[]}}];if(k.length==1){g.loadVirtualLayout(k[0].Json)}else{var h=[];var l=[];if(!n.layout){n.layout=k[0].Id}var m=false;for(var c=0;c<k.length;c++){h.push("<label",(c>0?' style="margin-left:2em"':""),'><input id="',k[c].Id,'" name=type type=radio',(n.layout==k[c].Id?' checked="checked"':""),"> ",k[c].Name,"</label>");l[c]=new a.layout();l[c].load(k[c].Json);if(n.layout==k[c].Id){g.loadVirtualLayout(k[c].Json);m=true}}if(m==false){g.loadVirtualLayout(k[0].Json)}var j=document.createElement("p");j.innerHTML=h.join("");document.getElementById("keyboard").appendChild(j);for(var c=0;c<k.length;c++){var q=function(e,i){document.getElementById(e).onclick=function(){if(n.layout!=e){g.virtualLayout=i;g.currentLayout=g.virtualLayout;g.reset();g.drawKeyboard();g.textbox.style.direction=i.dir;n.layout=e;if(o&&f){localStorage.setItem(t,JSON.stringify(n))}}g.textbox.focus()}}(k[c].Id,l[c])}}a.util.indexOf=function(e,w){var v=e.length;for(var u=0;u<v;u++){if(e[u]==w){return u}}return -1};a.util.composeBrahmi=function(C,z,u,B){var y=B.length;if(y==0){return""}var x=B.charCodeAt(0);var A=String.fromCharCode(x);var e,w;for(var v=1;v<y;++v){e=B.charCodeAt(v);w=a.util.indexOf(C,e);if(a.util.indexOf(u,x)!=-1&&x==e){}if(a.util.indexOf(u,x)!=-1&&w!=-1){e=z[w]}if(x==39&&w!=-1){A=A.slice(0,A.length-1)}x=e;A=A+String.fromCharCode(e)}return A};g.customOnKey=function(i){if(this.currentLayout===this.defaultLayout||this.emoji){return false}a.util.insertAtCaret(this.textbox,i);if(n.layout=="tamil99"){var e=a.util.deleteAtCaret(this.textbox,2,0);a.util.insertAtCaret(this.textbox,r.compose(e))}else{if(n.layout=="transliterate"){var e=a.util.deleteAtCaret(this.textbox,3,0);a.util.insertAtCaret(this.textbox,transliterate.compose(e))}}return true};g.customOnBackspace=function(i){if(this.currentLayout===this.defaultLayout||this.emoji){}else{if(n.layout=="transliterate"&&i.length==1){var e=transliterate.decompose(i);if(e!=i){e=a.util.deleteAtCaret(this.textbox,1,0)+e;a.util.insertAtCaret(this.textbox,transliterate.compose(e.slice(0,-1)))}if(i=="\u0bcd"){a.util.deleteAtCaret(this.textbox,1,0)}}}};var r={vowel:[2950,2951,2952,2953,2954,2958,2959,2960,2962,2963,2964],modifier:[3006,3007,3008,3009,3010,3014,3015,3016,3018,3019,3020],consonant:[2965,2969,2970,2974,2975,2979,2980,2984,2985,2986,2990,2991,2992,2993,2994,2995,2996,2997,2998,2972,2999,3000,3001],compose:function(e){return a.util.composeBrahmi(this.vowel,this.modifier,this.consonant,e)}};if(n.fontSize==null){n.fontSize=g.getFontSize();if(o&&f){localStorage.setItem(t,JSON.stringify(n))}}document.getElementById("shrink").onclick=function(){if(n.fontSize<14){return}n.fontSize-=2;g.setFontSize(n.fontSize);g.drawKeyboard();if(o&&f){localStorage.setItem(t,JSON.stringify(n))}s.focus()};document.getElementById("enlarge").onclick=function(){if(n.fontSize>36){return}n.fontSize+=2;g.setFontSize(n.fontSize);g.drawKeyboard();if(o&&f){localStorage.setItem(t,JSON.stringify(n))}s.focus()};document.getElementById("email").onclick=function(){this.href="mailto: ?body="+s.value;s.focus();return true};document.getElementById("selectAll").onclick=function(){a.util.setCaretPosition(s,0,s.value.length);ga("send","event","Keyboard","click","Select");s.focus()};document.getElementById("copy").onclick=function(){a.util.setCaretPosition(s,0,s.value.length);var e=document.execCommand("copy");if(e){a.util.setCaretPosition(s,s.value.length,s.value.length);ga("send","event","Keyboard","click","Copy")}else{alert("Your browser does not allow automated copy. To copy the text in the text area, you can click Select All button and right click on the selected text. Then click the Copy option.");ga("send","event","Keyboard","click","Copy Fail")}s.focus()};if(o&&f){if(n.undo.length>0){s.value=n.undo.pop()}document.getElementById("clearAll").onclick=function(){if(s.value.length<10||confirm("Are you sure you want to clear all the text?")){ga("send","event","Keyboard","click","Clear");n.undo=[];n.redo=[];localStorage.setItem(t,JSON.stringify(n));s.value=""}s.focus()};document.getElementById("undo").onclick=function(){if(n.undo.length==0){return}var e=n.undo.pop();if(e!=s.value){n.redo.push(s.value);s.value=e}else{s.value=(n.undo.length==0?"":n.undo[n.undo.length-1]);n.redo.push(e)}localStorage.setItem(t,JSON.stringify(n));s.focus()};document.getElementById("redo").onclick=function(){if(n.redo.length==0){return}var e=n.redo.pop();s.value=e;n.undo.push(e);localStorage.setItem(t,JSON.stringify(n));s.focus()};setInterval(function(){var e=s.value;if(n.undo.length==0&&e.length==0){return}if(n.undo.length==0||e!=n.undo[n.undo.length-1]){n.undo.push(e);localStorage.setItem(t,JSON.stringify(n))}},3000)}else{document.getElementById("undo").style.display="none";document.getElementById("redo").style.display="none";document.getElementById("clearAll").style.display="none"}document.getElementById("postToTwitter").onclick=function(){ga("send","event","Keyboard","click","Twitter");document.getElementById("postToTwitter").href="https://twitter.com/intent/tweet?text="+encodeURIComponent(s.value);s.focus();return true};document.getElementById("searchGoogle").onclick=function(){ga("send","event","Keyboard","click","Google");document.getElementById("searchGoogle").href="https://www.google.com/search?ie=UTF-8&q="+encodeURIComponent(s.value);s.focus();return true};document.getElementById("translateGoogle").onclick=function(){ga("send","event","Keyboard","click","Translate");document.getElementById("translateGoogle").href="https://translate.google.com/#view=home&op=translate&sl=ta&tl=en&text="+encodeURIComponent(s.value);s.focus();return true};document.getElementById("saveAsTextFile").onsubmit=function(){ga("send","Keyboard","Save","send",(s.value.length>0?"valid":"invalid"));document.getElementById("data").value=s.value;s.focus();return true}})();
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		  
	  </div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		</div>
	  </div>
	</div>
  </div>

<!---------------form---------->

<div class="container">
<div class="part1" style="font-size: 16px;">
<form class="d-flex justify-content-center" method="POST" enctype="multipart/form-data">
<!-- Scheme bot En -->
<div style="margin: 50px;width:50%">
  
<p>Language - En</p>
<label>Name Of The Scheme <span style="color: red;">*</span> </label><br>
<input type="text" class="form-control" name="name_eng" required><br>
<label>Beneficiary Category <span style="color: red;">*</span></label><br>
<textarea rows="5" class="form-control" cols="40" name="bc_eng" placeholder="Enter text here..." required></textarea><br>
<label>Amount </label><br>
<textarea rows="5" class="form-control" cols="40" name="amount_eng" placeholder="Enter text here..." required></textarea><br>
<label>Eligibility Criteria <span style="color: red;">*</span></label><br>
<textarea rows="5" class="form-control" cols="40" name="ec_eng" placeholder="Enter text here..." required></textarea><br>
<label>Department <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="dept_eng" required><br><br>
<div class="btn-group" role="group" aria-label="Basic mixed styles example" style="left:100%">
    <button style="margin: auto;" class="btn btn-primary" name="submit" value="submit">submit</button>
<button type="reset" class="btn btn-success" value="Reset" >reset</button>
 </div>
</div>

<!-- Scheme bot En -->

<!-- Scheme bot Tm -->
<div  style="margin: 50px;width:50%">
<p>Language - தமிழ்</p>
<label>திட்டத்தின் பெயர் <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="name_tam" required><br>
<label>பயனாளி வகை <span style="color: red;">*</span></label><br>
<textarea rows="5" cols="40" class="form-control" name="bc_tam" placeholder="Enter text here..." required></textarea><br>
<label>தொகை </label><br>
<textarea rows="5" cols="40" class="form-control" name="amount_tam" placeholder="Enter text here..." required></textarea><br>
<label>தகுதி வரம்பு <span style="color: red;">*</span></label><br>
<textarea rows="5" cols="40" class="form-control" name="ec_tam" placeholder="Enter text here..." required></textarea><br>
<label>துறை <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="dept_tam" required><br>
</div>

<!-- Scheme bot Tm -->
</form>

</div>

</div>

<!----------------update form------------->

<?php 
include "config.php";
$msg="";

// if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit'])) {
        // get variables from the form
        $name_eng = $_POST['name_eng'];
        $bc_eng= $_POST['bc_eng'];
        $amount_eng = $_POST['amount_eng'];
        $ec_eng= $_POST['ec_eng'];
    $dept_eng= $_POST['dept_eng'];
    $name_tam = $_POST['name_tam'];
        $bc_tam= $_POST['bc_tam'];
        $amount_tam = $_POST['amount_tam'];
        $ec_tam= $_POST['ec_tam'];
    $dept_tam= $_POST['dept_tam'];

    
    
    //write sql query
        $sql = "INSERT INTO `records`(`nameEng`, `bcEng`, `amountEng`, `ecEng`,`deptEng`,`nameTam`, `bcTam`, `amountTam`, `ecTam`,`deptTam`) VALUES ('$name_eng','$bc_eng','$amount_eng','$ec_eng','$dept_eng','$name_tam','$bc_tam','$amount_tam','$ec_tam','$dept_tam')";

        // execute the query
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "<p>New record created successfully !!!</p><style> p{text-align:center;}</style>";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        }

        $conn->close();

    }

?>



<table  class="table table-dark table-hover">
  <tr style="text-align:center; ">
     <th>S.No</th>
    <th>Name of the scheme</th>
    
    <th>Action</th>
  </tr>
  <?php

         include "config.php"; // Using database connection file here


        $records = mysqli_query($conn,"select id,nameEng from records"); // fetch data from database
        if ($records->num_rows > 0) {    
            $i=1;
   while($data = mysqli_fetch_array($records))
        {
           ?>
  <tr style="text-align: center;">
  <td><?php echo $i++ ?></td>
    <td><?php echo $data['nameEng']; ?></td>
   <td> <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-warning"><a style="text-decoration: none;color:white;padding-left:10px;" href="adminedit.php?id=<?php echo $data['id']; ?>">Edit</a></button>
  <button type="button" class="btn btn-danger"><a style="text-decoration: none;color:white;" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></button>  
    </td>
    
     
     </tr>
  <tr style="text-align: center;">
  <?php
} 
}else { 
            

echo "<table><p>No Records Found</p></table><style>p{text-align:center;font-size:24px;}</style>";
 }


?>
</tr>
</table>
<?php mysqli_close($conn);  // close connection ?>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>