=== Simple Obfuscation ===
Contributors: obaq
Tags: php, obfuscate, obfucation, script, shrink, minify, variable, function, protect, intellectual property, copy right, protection, next to encryption
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 1.1

== Description ==
This plugin can create a form which can obfuscate php scripts. It also can shrink or minify the script to a certain degree.
Obfuscation of scripts is not a perfect protection for your precious php creations but it can greatly discourage the others to read and steal them.
Please visit the below site for the details:
http://obaqblog.blogspot.com/2010/06/simple-obfuscation-plugin-for-wordpress.html

*Now added a feature only removing redundant spaces and returns.

== Installation ==
Extract all folder and files and upload the 'simple-obfuscation' folder and its contents to '/wp-content/plugins/'.

Go to the 'Plugins' menu of your admin area and activate the plugin.
Insert a code, '[SO]form[/SO]' into your posts or pages.


== Frequently Asked Questions ==
= How to insert a form into a post or page? =
Please kindly insert a code, '[SO]form[/SO]' into your posts or pages.

= Form description =
Please paste your code into the text area under 'Paste your code:' and check on the options('obfuscate variables', 'obfuscate functions', 'shrink the code') and fill up for the exclusion if any.
Clieck 'Obfuscate' buttton and the results will be shown in the text area under 'Obfuscated Code:'.
It can obfuscate variables with more than 1 character for the name(e.g. '$ab' could be converted to $v1129520943_46 or similar but not for '$a').
This form is suitable for obfuscation of a stand-alone php script but not for library files which needs to be referenced by other separated php files(sorry, it's a 'Simple Obfuscation'...)
You need to test if the script is working fine after obfuscation, especially after shrunken. Please be aware that shrinking may remove spaces too much!


= Examples =
(1) The below simple script:

$text = 'Test';
$array = array("a", "b", "c", "d", "e");

for($index = 0 ; $index < 10 ; $index++){
    echo $text.":";
}
echo "<br>";
foreach($array as $value){
    echo $value.", ";
}


can be obfuscated into like;

$v432838838_4 = 'Test';
$v1604189502_3 = array("a", "b", "c", "d", "e");

for($v382730639_2 = 0 ; $v382730639_2 < 10 ; $v382730639_2++){
    echo $v432838838_4.":";
}
echo "<br>";
foreach($v1604189502_3 as $v892177487_1){
    echo $v892177487_1.", ";
}



(2) The below script with a function:

$text = 'Test';
$array = array("a", "b", "c", "d", "e");

for($index = 0 ; $index < 10 ; $index++){
    echo $text.":check:".(checkString($text)?"TRUE":"FALSE").", ";
}
echo "<br>\n";
foreach($array as $value){
    echo $value." check:".(checkString($value)?"TRUE":"FALSE").", ";
}
function checkString($string){
    $check = false;
    if(strtolower($string)=="d"){
        $check = true;
    }
    return $check;
}


can be obfuscated into like;

$v743447587_6 = 'Test';
$v2085202983_5 = array("a", "b", "c", "d", "e");

for($v1862510657_3 = 0 ; $v1862510657_3 < 10 ; $v1862510657_3++){
    echo $v743447587_6.":check:".(f334710346_0($v743447587_6)?"TRUE":"FALSE").", ";
}
echo "<br>\n";
foreach($v2085202983_5 as $v1384627986_2){
    echo $v1384627986_2." check:".(f334710346_0($v1384627986_2)?"TRUE":"FALSE").", ";
}
function f334710346_0($v1492934660_1){
    $v315044774_4 = false;
    if(strtolower($v1492934660_1)=="d"){
        $v315044774_4 = true;
    }
    return $v315044774_4;
}



== Screenshots ==
1. screenshot-1.png: a form for obfuscation.

== Changelog ==
= 1.1 =
* added a feature to remove redundant spaces and returns only.

= 1.0.1
* minor fix

= 1.0 =
* 1.0 is the beginning of the version.

== Upgrade Notice ==
= 1.1 =
* upload unzipped files to the plugin folder.

= 1.0.1 =
* upload new form.php

= 1.0 =
* 1.0 is the beginning of the version.
