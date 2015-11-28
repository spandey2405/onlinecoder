<?php

function DisplayHeader($Page = 'None') {

    $Editor = '<a href="" id="show"><li><b>{</b> Run <b>:</b> Code <b>}</b></li></a>
                <a href=\'../DashBoard\'><li>Dashboard</li></a>';
    $General = '<a href="../FAQ"><li><b>{</b> FAQ <b>}</b></li></a>';
//    $Page = strtolower($Page);

    if ($Page != 'None') {
        $List1= $General;
    }
    else {
        $List1 = $Editor;
    }
    echo "<div class='header'>
        <ul>
            <table style=''>
                <tr>
                    <td width='20%'><img src='../src/Template/image/horizontal.png' height='50'></td>
                    <td width='60%'>
                        $List1
                        <a href='../HTMLEditor'><li>HTML</li></a>
                        <a href='../PHPEditor'><li>PHP</li></a>
                        <a href='http://onlinecoder.in/Colors'><li>Colors</li></a>
                    </td>
                </tr>
            </table>
        </ul>
    </div>";
}
?>