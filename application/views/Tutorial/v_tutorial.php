<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
	@import "style.css";

/*	This Cascading Style Sheet describes how the various items in an
	international keyboard file should look when viewed in a web browser.
	Â© 2003 Steve White
*/
/*#key-0 {
	background-color: red;
}*/

//.PCKeyboard td { text-align: center; font-family: sans-serif; }
.spacers td { border: none; width: 1.2ex; height: 0.5em; line-height: 0.5; }
.keys td { 
	font-family: sans-serif; font-size: large;
	border: medium outset #EEE;
	height: 3.5em; cursor: pointer; }
tr.keys > td { padding: 0; margin: 0; }
tr.keys > td > table { margin: 0; width: 100%; }
.key td { font-weight: bold;
	border: none; height: 50%; width: 50%;
	cursor: pointer;  }
.key td.label { color: #999; line-height: 0.7em; }
form#idkeyboard{ text-align: center; }
table.PCKeyboard { color: black; 
	border: medium solid silver;
	margin: auto;
	}
td.label { width: 1em; }
textarea{ color: navy; 
	font-family: sans-serif; font-size: x-large; }

</style>

<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a  class="navbar-brand"><b>Typing</b>Touch</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url("Login/C_login/lesson_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fast Typing</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
	
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
			Typing Lessons
        </h1>
       
      </section>
<div></div>
<div>
<form action="#" id="keyboardForm" onsubmit="return false;">
	  
      <table id="keyboard" class="PCKeyboard" border="1" cellpadding="0" cellspacing="2">
        <tbody>
		<td colspan="60">
		    <?php $row = $wordset->row_array(); ?>
			<div id="sentence"></div>
			<!--<input type="text" id="keydata" />-->
			<div id="check"> </div>
			<br/> <br/>
			<div id="checkTrue"></div>	
			<textarea id="keydata" rows="6" cols="94"></textarea>
        </td>
        <tr class="spacers">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="keys">
          <td id="key-0" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">`</td>
                <td lang="th" xml:lang="th">%</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">_</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-1" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">1</td>
                <td lang="th" xml:lang="th">+</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ๅ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-2" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">2</td>
                <td lang="th" xml:lang="th">๑</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">/</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-3" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">3</td>
                <td lang="th" xml:lang="th">๒</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">-</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-4" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">4</td>
                <td lang="th" xml:lang="th">๓</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ภ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-5" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">5</td>
                <td lang="th" xml:lang="th">๔</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ถ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-6" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">6</td>
                <td lang="th" xml:lang="th">&nbsp;ู</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ุ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-7" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">7</td>
                <td lang="th" xml:lang="th">&nbsp;฿</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ึ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-8" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">8</td>
                <td lang="th" xml:lang="th">๕</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ค</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-9" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">9</td>
                <td lang="th" xml:lang="th">๖</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ต</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-10" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">0</td>
                <td lang="th" xml:lang="th">๗</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">จ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-11" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">-</td>
                <td lang="th" xml:lang="th">๘</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ข</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-12" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">=</td>
                <td lang="th" xml:lang="th">๙</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ช</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-13" colspan="8" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Backspace</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr class="keys">
          <td id="Key-14" colspan="6" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Tab</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-15" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Q</td>
                <td lang="th" xml:lang="th">๐</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ๆ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-16" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">W</td>
                <td lang="th" xml:lang="th">"</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ไ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-17" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">E</td>
                <td lang="th" xml:lang="th">ฎ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ำ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-18" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">R</td>
                <td lang="th" xml:lang="th">ฑ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">พ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-19" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">T</td>
                <td lang="th" xml:lang="th">ธ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ะ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-20" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">Y</td>
                <td lang="th" xml:lang="th">&nbsp;ํ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ั</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-21" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">U</td>
                <td lang="th" xml:lang="th">&nbsp;๊</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ี</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-22" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">I</td>
                <td lang="th" xml:lang="th">ณ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ร</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-23" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">O</td>
                <td lang="th" xml:lang="th">ฯ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">น</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-24" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">P</td>
                <td lang="th" xml:lang="th">ญ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ย</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-25" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">[</td>
                <td lang="th" xml:lang="th">ฐ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">บ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-26" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">]</td>
                <td lang="th" xml:lang="th">,</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ล</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-27" colspan="6" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">\</td>
                <td lang="th" xml:lang="th">ฅ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ฃ</td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr class="keys">
          <td id="Key-28" colspan="7">
            <table class="key">
              <tbody><tr>
                <td class="label">Caps</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-29" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">A</td>
                <td lang="th" xml:lang="th">ฤ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ฟ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-30" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">S</td>
                <td lang="th" xml:lang="th">ฆ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ห</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-31" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">D</td>
                <td lang="th" xml:lang="th">ฏ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ก</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-32" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">F</td>
                <td lang="th" xml:lang="th">โ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ด</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-33" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">G</td>
                <td lang="th" xml:lang="th">ฌ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">เ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-34" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">H</td>
                <td lang="th" xml:lang="th">&nbsp;็</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;้</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-35" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">J</td>
                <td lang="th" xml:lang="th">&nbsp;๋</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;่</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-36" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">K</td>
                <td lang="th" xml:lang="th">ษ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">า</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-37" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">L</td>
                <td lang="th" xml:lang="th">ศ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ส</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-38" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">;</td>
                <td lang="th" xml:lang="th">ซ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ว</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-39" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">'</td>
                <td lang="th" xml:lang="th">.</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ง</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-Enter" colspan="9" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Enter</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr class="keys">
          <td id="Key-40" colspan="9" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Shift</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-41" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">Z</td>
                <td lang="th" xml:lang="th">(</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ผ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-42" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">X</td>
                <td lang="th" xml:lang="th">)</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ป</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-43" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">C</td>
                <td lang="th" xml:lang="th">ฉ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">แ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-44" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">V</td>
                <td lang="th" xml:lang="th">ฮ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">อ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-45" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">B</td>
                <td lang="th" xml:lang="th">&nbsp;ฺฺ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ิ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-46" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">N</td>
                <td lang="th" xml:lang="th">&nbsp;์</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">&nbsp;ื</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-47" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">M</td>
                <td lang="th" xml:lang="th">?</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ท</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-48" colspan="4">
            <table class="key">
              <tbody><tr>
                <td class="label">,</td>
                <td lang="th" xml:lang="th">ฒ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ม</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-49" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">.</td>
                <td lang="th" xml:lang="th">ฬ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ใ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-50" colspan="4" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">/</td>
                <td lang="th" xml:lang="th">ฦ</td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th">ฝ</td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-51" colspan="11" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Shift</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr class="keys">
          <td id="Key-Ctrl-left" colspan="5" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">Ctrl</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-meta-left" colspan="5" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label">meta</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-Alt-left" colspan="5">
            <table class="key">
              <tbody><tr>
                <td class="label">Alt</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-space" colspan="25" style="border-style: outset;">
            <table class="key">
              <tbody><tr>
                <td class="label"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-Alt-right" colspan="5">
            <table class="key">
              <tbody><tr>
                <td class="label">Alt</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-meta-right" colspan="5">
            <table class="key">
              <tbody><tr>
                <td class="label">meta</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-menu" colspan="5">
            <table class="key">
              <tbody><tr>
                <td class="label">menu</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
          <td id="Key-Ctrl-right" colspan="5">
            <table class="key">
              <tbody><tr>
                <td class="label">Ctrl</td>
                <td lang="th" xml:lang="th"></td>
              </tr>
              <tr>
                <td lang="th" class="alt" xml:lang="th"></td>
                <td lang="th" xml:lang="th"></td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </form>
		</div>
	</div>
</div>

 
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
</div>


<script>
function keys_check(character){
	
	var keys = [];
		keys[0] = ["~","%"];
		keys[1] = ["!","+","1","ๅ"];
		keys[2] = ["@","๑","2","/"];
		keys[3] = ["#","๒","3","-"];
		keys[4] = ["$","๓","4","ภ"];
		keys[5] = ["%","๔","5","ถ"];
		keys[6] = ["^","อู","6","อุ"];
		keys[7] = ["&","฿","7","อึ"];
		keys[8] = ["*","๕","8","ค"];
		keys[9] = ["(","๖","9","ต"];
		keys[10] = [")","๗","0","จ"];
		keys[11] = ["-","๘","-","ข"];
		keys[12] = ["+","๙","=","ช"];
		keys[13] = [" "];
		keys[14] = [" "];
		keys[15] = ["Q","๐","ๆ"];
		keys[16] = ["W","","ไ"];
		keys[17] = ["E","ฎ","อำ"];
		keys[18] = ["R","ฑ","พ"];
		keys[19] = ["T","ธ","ะ"];
		keys[20] = ["Y","ํ","ั"];
		keys[21] = ["U","๊","ี"];
		keys[22] = ["I","ณ","ร"];
		keys[23] = ["O","ฯ","น"];
		keys[24] = ["P","ญ","ญ"];
		keys[25] = ["{","ฐ","[","บ"];
		keys[26] = [" "," "," ","ล"];
		keys[27] = ["","ฅ","ฃ"];
		keys[28] = [""];
		keys[29] = ["A","ฤ","ฟ"];
		keys[30] = ["S","ฆ","ห"];
		keys[31] = ["D","ฏ","ก"];
		keys[32] = ["F","โ","ด"];
		keys[33] = ["G","ฌ","เ"];
		keys[34] = ["H","็","้"];
		keys[35] = ["J","๋","่"];
		keys[36] = ["K","ษ","า"];
		keys[37] = ["L","ศ","ส"];
		keys[38] = [":","ซ",";","ว"];
		keys[39] = [" ",".","ง"];
		keys[40] = [""];
		keys[41] = ["Z", " ","ผ"];
		keys[42] = ["X", " ","ป"];
		keys[43] = ["C", "ฉ","แ"];
		keys[44] = ["V", "ฮ","อ"];
		keys[45] = ["B", "ฺ","ิ"];
		keys[46] = ["n", "์","ื"];
		keys[47] = ["M", " ","ท"];
		keys[48] = [" ", " ", "ฒ", "ม"];
		keys[49] = [" ", " ", "ฬ", "ใ"];
		keys[50] = [" ", " ", "ฦ", "ฝ"];
		keys[51]	= [""];
	//console.log("string");
	for(var i=0;i<keys.length;i++){
			//console.log(key[i]);
		for(var j=0;j<keys[i].length;j++){
			
			if(character.toLowerCase() == keys[i][j].toLowerCase()){
				//console.log(character+" = "+keys[i][j]);
				return i;
				
			}
		}	
	}
}

$(document).ready(function(){
	var sentence = ["<?php echo str_replace(' ', '","', $row['tt_wordset']); ?>"];

	var sentence_show = '';
	var sentence_count = 0;

	//show sentence
	for(var i=0;i<sentence.length;i++){
		sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	}
	$("#sentence").html(sentence_show);
		//console.log(sentence_show);
		
	//----------------------------------------------แยกตัวอักษร
	var word = [];
	var word_count = 0;
    var keyid = 0;
	for(var i=0;i<sentence.length;i++){
		word[i] = sentence[i].split("");
		//console.log(word[i]);
	}
	
	
	word_count = 1;
	sentence_count = 0;
	$("#Key-"+keys_check(word[0][0])).css("background-color", "red");
	$('#keydata').keyup(function(e){	

		$("#Key-"+keys_check(word[0][0])).css("background-color", "#ecf0f5");

		if(word_count == 0 && sentence_count == 0){
			$("#Key-"+keys_check(word[0][1])).css("background-color", "red");
		}
		
		$("#Key-" + keyid).css("background-color", "#ecf0f5");
			keyid = keys_check(word[sentence_count][word_count]);
		$("#Key-" + keyid).css("background-color", "red");
		word_count++;
		if(word_count == word[sentence_count].length){
			word_count = 0;
			sentence_count++;
		}
		
	});
		
});



</script>