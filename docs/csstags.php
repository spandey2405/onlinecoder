<?php

$CSStags = array(
    "azimuth" => " -- left-side --far-left --left --center-left --center --center-right --right --far-right --right-side  |--behind  --leftwards --rightwards inherit ",
    "background-attachment" => "scroll --fixed inherit ",
    "background-color" => " --transparent inherit ",
    "background-image" => " --none inherit ",
    "background-position" => " |left --center --right   |top --center --bottom ?  -- left --center --right  |-- top --center --bottom  inherit ",
    "background-repeat" => "repeat --repeat-x --repeat-y --no-repeat inherit ",
    "background" => "background-color |--background-image |--background-repeat |--background-attachment |--background-position inherit ",
    "border-collapse" => "collapse --separate inherit ",
    "border-color" => " --transparent {1,4} inherit ",
    "border-spacing" => " ? inherit ",
    "border-style" => "{1,4} inherit ",
    "border-top or border-right or border-bottom or border-left" => " |--|--border-top-color  inherit ",
    "border-top-color or border-right-color or border-bottom-color or border-left-color" => " --transparent inherit ",
    "border-top-style or border-right-style or border-bottom-style or border-left-style" => " inherit ",
    "border-top-width or border-right-width or border-bottom-width or border-left-width" => " inherit ",
    "border-width" => "{1,4} inherit ",
    "border" => " |--|--border-top-color  inherit ",
    "bottom" => " |auto inherit ",
    "caption-side" => "top --bottom inherit ",
    "clear" => "none --left --right --both inherit ",
    "clip" => " --auto inherit ",
    "color" => " inherit ",
    "content" => "normal --none -- |attr --open-quote --close-quote --no-open-quote --no-close-quote + inherit ",
    "counter-increment" => " ? + --none inherit ",
    "counter-reset" => " ? + --none inherit ",
    "cue-after" => " --none inherit ",
    "cue-before" => " --none inherit ",
    "cue" => " cue-before |--cue-after  inherit ",
    "cursor" => " ,*  auto --crosshair --default --pointer --move --e-resize --ne-resize --nw-resize --n-resize --se-resize --sw-resize --s-resize --w-resize --text --wait --help --progress  inherit ",
    "direction" => "ltr --rtl inherit ",
    "display" => "inline --block --list-item --inline-block --table --inline-table --table-row-group --table-header-group --table-footer-group --table-row --table-column-group --table-column --table-cell --table-caption --none inherit ",
    "elevation" => " --below --level --above --higher --lower inherit ",
    "empty-cells" => "show --hide inherit ",
    "float" => "left --right --none inherit ",
    "font-family" => " -- , --*  inherit ",
    "font-size" => " --inherit ",
    "font-style" => "normal --italic --oblique inherit ",
    "font-variant" => "normal --small-caps inherit ",
    "font-weight" => "normal --bold --bolder --lighter --100 --200 --300 --400 --500 --600 --700 --800 --900 inherit ",
    "font" => " font-style |--font-variant |--font-weight ? font-size  / line-height ? font-family  --caption --icon --menu --message-box --small-caption --status-bar inherit ",
    "height" => " |auto inherit ",
    "left" => " |auto inherit ",
    "letter-spacing" => "normal inherit ",
    "line-height" => "normal --inherit ",
    "list-style-image" => " --none inherit ",
    "list-style-position" => "inside --outside inherit ",
    "list-style-type" => "disc --circle --square --decimal --decimal-leading-zero --lower-roman --upper-roman --lower-greek --lower-latin --upper-latin --armenian --georgian --lower-alpha --upper-alpha --none inherit ",
    "list-style" => " list-style-type |--list-style-position |--list-style-image  inherit ",
    "margin-right or margin-left" => " inherit ",
    "margin-top or margin-bottom" => " inherit ",
    "margin" => "{1,4} inherit ",
    "max-height" => " |none inherit ",
    "max-width" => " |none inherit ",
    "min-height" => " inherit ",
    "min-width" => " inherit ",
    "orphans" => " inherit ",
    "outline-color" => " --invert inherit ",
    "outline-style" => " inherit ",
    "outline-width" => " inherit ",
    "outline" => " outline-color |--outline-style |--outline-width  inherit ",
    "overflow" => "visible --hidden --scroll --auto inherit ",
    "padding-top or padding-right or padding-bottom or padding-left" => " inherit ",
    "padding" => "{1,4} inherit ",
    "page-break-after" => "auto --always --avoid --left --right inherit ",
    "page-break-before" => "auto --always --avoid --left --right inherit ",
    "page-break-inside" => "avoid --auto inherit ",
    "pause-after" => " inherit ",
    "pause-before" => " inherit ",
    "pause" => " --{1,2}  inherit ",
    "pitch-range" => " inherit ",
    "pitch" => " --x-low --low --medium --high --x-high inherit ",
    "play-during" => "  mix |--repeat ? --auto --none inherit ",
    "position" => "static --relative --absolute --fixed inherit ",
    "quotes" => " + --none inherit ",
    "richness" => " inherit ",
    "right" => " |auto inherit ",
    "speak-header" => "once --always inherit ",
    "speak-numeral" => "digits --continuous inherit ",
    "speak-punctuation" => "code --none inherit ",
    "speak" => "normal --none --spell-out inherit ",
    "speech-rate" => " --x-slow --slow --medium --fast --x-fast --faster --slower inherit ",
    "stress" => " inherit ",
    "table-layout" => "auto --fixed inherit ",
    "text-align" => "left --right --center --justify inherit ",
    "text-decoration" => "none -- underline |--overline |--line-through |--blink  inherit ",
    "text-indent" => " inherit ",
    "text-transform" => "capitalize --uppercase --lowercase --none inherit ",
    "top" => " |auto inherit ",
    "unicode-bidi" => "normal --embed --bidi-override inherit ",
    "vertical-align" => "baseline --sub --super --top --text-top --middle --bottom --text-bottom inherit ",
    "visibility" => "visible --hidden --collapse inherit ",
    "voice-family" => " --,*  -- inherit ",
    "volume" => " |silent --x-soft --soft --medium --loud --x-loud inherit ",
    "white-space" => "normal --pre --nowrap --pre-wrap --pre-line inherit ",
    "widows" => " inherit ",
    "width" => " |auto inherit ",
    "word-spacing" => "normal inherit ",
    "z-index" => "auto inherit ");

?>
<html>
<head>
    <style>
        table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        table tr td {
            border: 1px solid #cdcdcd;
            font-family: Arial;
            padding:5px;
            font-size: 12px;
            background: linear-gradient(to bottom, #fafafa 0%,#efefef 100%);
        }
    </style>
</head>
<body>
<table>
    <?php

    foreach ($CSStags as $tag=>$value) {
        print "<tr width='100%'>";
        print "<td width='20%' valign='top' style='cursor: pointer;'>".
            $tag.
            "</td><td width='80%'>".$value."</td>";
        print "</tr>";
    }

    ?>
</table>
</body>
</html>
