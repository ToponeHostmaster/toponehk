document.writeln ('<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" WIDTH='+flashWIDTH+' HEIGHT='+flashHEIGHT+' ALIGN="middle">');
document.writeln ('<PARAM NAME=movie VALUE="'+flashURL+'">');
document.writeln ('<PARAM NAME=wmode VALUE=transparent>');
document.writeln ('<PARAM NAME=loop VALUE=true>');
document.writeln ('<PARAM NAME=quality VALUE=low>');
document.writeln ('<PARAM NAME=scale VALUE=noscale>');
document.writeln ('<PARAM NAME=allowscriptaccess VALUE=sameDomain>');
document.writeln ('<PARAM NAME= VALUE=high>');
document.writeln ('<PARAM NAME=salign VALUE=lt>');
document.writeln ('<PARAM NAME=allowfullscreen VALUE=false>');
document.writeln ('<EMBED src="'+flashURL+'" loop=true wmode=opaque quality=low swLiveConnect=FALSE WIDTH='+flashWIDTH+' HEIGHT='+flashHEIGHT+' ALIGN=middle SCALE=noscale ALLOWSCRIPTACCESS="sameDomain" SALIGN=lt TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>');
document.writeln ('</OBJECT>');