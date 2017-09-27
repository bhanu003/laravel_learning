
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>myNotepad</title>
</head>


<body>
<script src="https://cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
<script type="text/javascript"/>
function insertTemplate1A(){
CKEDITOR.instances.txt1.insertHtml('<B>Reason for contact: </b>&nbsp;<br>' + '<b>Resolution provided: </b>&nbsp;<br>' + '<b>Timeframe (if applicable):</b> &nbsp;<br>' + '<b>Upsell/recontract (if accepted):</b> &nbsp;<br>' + '<b>Agreed offers:</b> &nbsp;<br>');
}
function insertTemplate2A(){
CKEDITOR.instances.txt1.insertHtml('<B>Outbound contact reason:</b> &nbsp;<br>' + '<b>Department:</b> &nbsp;<br>' + '<b>Successful contact?</b> &nbsp;<br>' + '<b>Resolution:</b> &nbsp;<br>' + '<b>Further action required:</b> &nbsp;<br>');
}
function insertTemplate4A(){
CKEDITOR.instances.txt1.insertHtml('<B>Reason for contact: </b>&nbsp;<br>' + '<b>Resolution(s) offered: </b>&nbsp;<br>' + '<b>Outcome:</b> &nbsp;<br>' + '<b>CBF advised (if applicable):</b> &nbsp;<br>');
}
function insertTemplate5A(){
CKEDITOR.instances.txt1.insertHtml('<B>Outbound contact reason: </b>&nbsp;<br>' + '<b>Department: </b>&nbsp;<br>' + '<b>Successful contact:</b> &nbsp;<br>' + '<b>Event type/rejection:</b> &nbsp;<br>' + '<b>CLI and order ID:</b> &nbsp;<br>' + '<b>Case next review date and & time:</b> &nbsp;<br>' + '<b>3rd party ticket raised & reference number:</b> &nbsp;<br>' + '<b>Further action required:</b> &nbsp;<br>');
}
function insertTemplate6A(){
CKEDITOR.instances.txt1.insertHtml('<B>Reason for contact: </b>&nbsp;<br>' + '<b>Resolution agreed: </b>&nbsp;<br>' + '<b>Timeframe (if applicable):</b> &nbsp;<br>' + '<b>Consequences of non-payment:</b> &nbsp;<br>');
}
function insertTemplate7A(){
CKEDITOR.instances.txt1.insertHtml('<B>Outbound contact reason: </b>&nbsp;<br>' + '<b>Department: </b>&nbsp;<br>' + '<b>Successful contact:</b> &nbsp;<br>' + '<b>Resolution agreed:</b> &nbsp;<br>' + '<b>Further action required:</b> &nbsp;<br>' + '<b>Consequences of non-payment:</b> &nbsp;<br>');
}

function windowClose(){
 window.open('','_parent',''); 
 window.close();
 } 

    window.onload=function(){
        CKEDITOR.replace
        ( 'txt1', {
		forcePasteAsPlainText: true,
		 removePlugins : 'elementspath, magicline',
		enterMode: CKEDITOR.ENTER_BR,
shiftEnterMode: CKEDITOR.ENTER_P,
		width : '100%',
            uiColor: '#E1E1E1',
            colorButton_enableMore: false,
            colorButton_enableAutomatic: false,
            colorButton_colors: '394348,25A970,EA515A,7E3B94,1E4E9D,FDC948',
		    height: 'calc(100vh - 260px)',
            resize_enabled: false,
            toolbarGroups: [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	],
        removeButtons: 'Source,Templates,Save,BulletedList,NumberedList,Preview,Print,Copy,PasteText,PasteFromWord,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,RemoveFormat,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,BGColor,Maximize,ShowBlocks,About'}   
        );
        
        CKEDITOR.replace
        ( 'txt2', {
		forcePasteAsPlainText: true,
		 removePlugins : 'elementspath, magicline',
		enterMode: CKEDITOR.ENTER_BR,
shiftEnterMode: CKEDITOR.ENTER_P,
            width : '100%',
            uiColor: '#E1E1E1',
            colorButton_enableMore: false,
            colorButton_enableAutomatic: false,
            colorButton_colors: '394348,25A970,EA515A,7E3B94,1E4E9D,FDC948',
            height: 'calc(100vh - 260px)',
            resize_enabled: false,
            toolbarGroups: [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	],
        removeButtons: 'Source,Templates,Save,Preview,Print,PasteText,PasteFromWord,Copy,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,RemoveFormat,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,BGColor,Maximize,ShowBlocks,About'}   
        );
        
        CKEDITOR.replace
        ('txt3', {
		forcePasteAsPlainText: true,
		 removePlugins : 'elementspath, magicline',
		enterMode: CKEDITOR.ENTER_BR,
shiftEnterMode: CKEDITOR.ENTER_P,
            width : '100%',
            uiColor: '#E1E1E1',
            colorButton_enableMore: false,
            colorButton_enableAutomatic: false,
            colorButton_colors: '394348,25A970,EA515A,7E3B94,1E4E9D,FDC948',
            height: 'calc(100vh - 260px)',
            resize_enabled: false,
            toolbarGroups: [
		{name: 'document', groups: ['mode', 'document', 'doctools']},
		{name: 'clipboard', groups: ['clipboard', 'undo']},
		{name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
		{name: 'forms', groups: ['forms']},
		{name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
		{name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
		{name: 'links', groups: ['links']},
		{name: 'insert', groups: ['insert']},
		{name: 'styles', groups: ['styles']},
		{name: 'colors', groups: ['colors']},
		{name: 'tools', groups: ['tools']},
		{name: 'others', groups: ['others']},
		{name: 'about', groups: ['about']}
	],
        removeButtons: 'Source,Templates,Save,Preview,Print,PasteText,PasteFromWord,Copy,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,RemoveFormat,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,BGColor,Maximize,ShowBlocks,About'}   
        );
        
    };
</script>

<style type="text/css">
@font-face {
  font-family: 'OmnesRegular';
  src: url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.eot'); /* IE9 Compat Modes */
  src: url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.woff2') format('woff2'), /* Super Modern Browsers */
       url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.woff') format('woff'), /* Pretty Modern Browsers */
       url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.ttf')  format('truetype'), /* Safari, Android, iOS */
       url('https://m2.ttxm.co.uk/fonts/omnes-regular-webfont.svg#svgFontName') format('svg'); /* Legacy iOS */
}

h1,
.h1,
.title, h2,
.h2,
.subtitle, h3,
.h3 {
  font-family: 'OmnesRegular', arial;
  padding-top:18px;
  font-size: 16px;
}
h1{
	color: white;
}

@media only screen and (max-width: 260px) {
    #body {
        display: none;
    }
}
* {
  margin: 0;
  padding: 0;
}
html {
  background-color: #f1eee9;

  
}
body {
    font-family: 'OmnesRegular', arial;
  color: #fff;
 min-width: 260px; 
 margin: 0 auto;
 height: 100%;
}


.main input[type=radio] {
  display: none;
  height: 100%;
}

#tab-1:checked ~ .tab label:nth-child(1) {
background: #25A970;
}
#tab-2:checked ~ .tab label:nth-child(2)
{
  background: #7E3B94;
  
}
#tab-3:checked ~ .tab label:nth-child(3)
 {
  background: #EA515A;
}
.content > div {
  display: none;
  height: 80%;
}
#tab-1:checked ~ .content div:nth-child(1)
{
  display: block; 
}
#tab-2:checked ~ .content div:nth-child(2)
{
  display: block;
  }
#tab-3:checked ~ .content div:nth-child(3)
{
  display: block;
  }
  
  .tabbar > div {
 display: none;
 height: 100%;
  }
#tab-1:checked ~ .tabbar div:nth-child(1) {
display: block;
background: #25A970; 
float: right;
right: 15px
}
#tab-2:checked ~ .tabbar div:nth-child(2) {
display: block;
background: #7E3B94;
float: right;
right: 15px
}
#tab-3:checked ~ .tabbar div:nth-child(3) {
display: block;
 background: #EA515A;
float: right;
right: 15px
}  
.tabbar {
  overflow: hidden;  
  height: 100%;

}
.tabbar > div {
  position: relative; /* child absolute */
  margin: 0 -9999rem;
  /* add back section padding value */
  padding: .35rem 9999rem;  
left: 3px;



}
.main {
  margin: 0 auto;
  max-width: 100%;
height: 100%;
 overflow: hidden;
}
.tab {
  overflow: hidden;
background: #7E3B94;
}
.tab label {
  font-size: 18px;
  cursor: pointer;
  float: left;
  color: #fff;
   font-family: 'OmnesRegular', arial;
width: 33.3%;
  text-align: center;
  padding: 10px 0;
  letter-spacing: 2px;
  

user-select: none;
  -webkit-user-select: none;
}
.tab-label-1{
background: #25A970;  

}
.tab-label-2{
background: #7E3B94;

}
.tab-label-3{
background: #EA515A;
}

.content > div {
  padding-right: 5px;
  padding-top: 5px;
  padding-left: 5px;
  margin: 10px;
  height: 100%;

}

/* on both */
html, body {
  
 
}
section {
  box-sizing: border-box; /* or not */
  margin: 0 auto;
  width: 100%;
  height: 100%;
 overflow: hidden;
 
}
h1, .full-width {
height: 100%;
  position: relative; /* child absolute */
  margin: 0 -9999rem;
  /* add back section padding value */
  padding: .55rem 9999rem;
  background: #666;
  background: #394348;
  color: white;
  font-size: 1.125rem;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 0px 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 5px 5px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
}
.button1 {
     background-color: Transparent;
    color: white;
    border: 1px solid white;
	border-radius: 5px;
    
    padding: 0px; 
    width: 85px;
    height: 26px; 
	
}

.button1:hover {
    background-color: #555555;
    color: white;
}
* {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}

textarea
{
  left:12px; 
  top:150px;
  width:  calc(100vw - 32px);      /* calc and viewport to the rescue */
  height: calc(100vh - 420px);
  border:1px solid #999999;
  padding-right: 10x;
  padding-top:10px;
  padding-left:10px;
  padding-bottom:10px;
  box-shadow: 1px 1px 5px #888888;
  font-family: arial;
   resize: none;
}
    
.moreinfo
{
  position: absolute;
  top: 6px;
  right:60px;
   font-size: 25px;
   color: #fff;
   font-family: 'arial';
   font-style: bold;
   text-decoration: none;
}
	
.close {
  position: absolute;
  right: 20px;
  top: 9px;
  width: 20px;
  height: 20px;
 
}

.close:before, .close:after {
  position: absolute;
  left: 8px;
  content: ' ';
  height: 20px;
  width: 4px;
  background-color: #fff;
}
.close:before {
  transform: rotate(45deg);
}
.close:after {
  transform: rotate(-45deg);
}
.tabbar {
  overflow: hidden;
}
.tabbar > div {
  position: relative; /* child absolute */
  margin: 0 -9999rem;
  /* add back section padding value */
  padding: .35rem 9999rem;  
  height: 100%;
}
.bottombar
{
overflow: hidden;

 position: relative; /* child absolute */
 float: right;
  right:20px;
  margin: 0 -9999rem;
  /* add back section padding value */
  padding: 0rem 9999rem;
  bottom: 5px;
 
  height: 100%;
    font-family: 'OmnesRegular', arial;
  font-size: 10px;  
  color: #394348;
  
}
.textarea {
font-size: 22px;
}
</style>
 
<section>
<div id="full-width" style="height: 100%"><h1 style="font-weight:normal;">&nbsp;&nbsp;<i>&nbsp;my</i>Notepad</h1>

<a class="close" href="#" onclick="windowClose();"></a> 
<a class="moreinfo" href="http://localhost:8000" target="_blank">Home</a> 
</div></section>
<div class="main" style="height: 100%">
  <input type="radio" id="tab-1" name="show" checked/>
  <input type="radio" id="tab-2" name="show" />
  <input type="radio" id="tab-3" name="show" />
 
  <div class="tab">
    <label class="tab-label-1" for="tab-1">Care notes</label>
    <label class="tab-label-2" for="tab-2">My notes 1</label>
    <label class="tab-label-3" for="tab-3">My notes 2</label>
  </div>
  <div class="tabbar"> 
<div class="tabbar-dis">&nbsp;<input type="button" class="button button1" value="Inbound" onClick="javascript:insertTemplate1A();"><input type="button" class="button button1" value="Outbound" onClick="javascript:insertTemplate2A();"><input type="button" class="button button1" value="Loyalty" onClick="javascript:insertTemplate4A();"><input type="button" class="button button1" value="OM Outbound" onClick="javascript:insertTemplate5A();"><input type="button" class="button button1" value="Collect in" onClick="javascript:insertTemplate6A();"><input type="button" class="button button1" value="Collect out" onClick="javascript:insertTemplate7A();"></div>
<div class="tabbar-dis">&nbsp;</div>
<div class="tabbar-dis">&nbsp;</div>
</div>
  <div class="content">
    <div class="content-test">
        	<form>	
					   <textarea id="txt1"></textarea></form>
	</div>
    <div class="content-test">
	<form>                     						
					   <textarea id="txt2"></textarea></form>
	</div>
    <div class="content-test">
	<form>
				       <textarea id="txt3"></textarea></form>
  	</div>
	     </div>
	<div class="bottombar"> Keyboard shortcuts | CTRL+X to Cut | CTRL+V to Paste | CTRL+Z to Undo</div>
    </div>

	</body>
	</html>