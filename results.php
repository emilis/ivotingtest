<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", "Balsavimo rezultatai");

?>
<div class="dialog">
    <p>Ačiū! Jūsų balsas suskaičiuotas</p>
</div>

<table id="ballot">
    <thead><tr><th colspan="2">Balsavimo rezultatai:</th></tr></thead>
    <tbody>
        <tr>
            <td>Socialdemokratų partija</td>
            <td class="result">157</td>
        </tr><tr>
            <td>Partija Tvarka ir teisingumas</td>
            <td class="result">116</td>
        </tr><tr>
            <td>Tėvynės sąjunga - Lietuvos krikščionys demokratai</td>
            <td class="result wrong">-15896 <a class="hint" href="faq.php#negative-result" onclick="showTip(this);return false"><img src="files/help.png"></a></td>
        </tr><tr>
            <td>Darbo partija</td>
            <td class="result">102</td>
        </tr><tr>
            <td>Liberalų sąjūdis</td>
            <td class="result wrong">0 <a class="hint" href="faq.php#zero-result" onclick="showTip(this); return false"><img src="files/help.png"></a></td>
        </tr><tr>
            <td>Oligarchų kišenės partija</td>
            <td class="result wrong">16003 <a class="hint" href="faq.php#negative-result" onclick="showTip(this); return false"><img src="files/help.png"></a></td>
        </tr><tr>
            <td>Marginalų aljansas "Motulė Rusija"</td>
            <td class="result">2</td>
        </tr><tr>
            <td class="wrong">Latvijas Zemnieku Savienība</td>
            <td class="result wrong">1 <a class="hint" href="faq.php#foreign-result" onclick="showTip(this); return false"><img src="files/help.png"></a></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th align="right">Viso:</th>
            <th class="result">483</th>
        </tr>
    </tfoot>
</table>

<div class="cutout">
    <img src="files/spy.png" align="left" hspace="10" vspace="10">
    <p>Gerbiami slaptųjų tarnybų atstovai, užsienio diplomatai, partijų vadovai ir šiaip landūs piliečiai!</p>
    <p><a href="buy-log.php">Siūlome jums pirkti rinkėjų balsų duomenų bazę</a>.</p>
</div>

<?php

showContent();
