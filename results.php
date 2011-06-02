<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", "Balsavimo rezultatai");

?>
<div class="dialog">
    <p>Ačiū!</p>
    <p>Jūsų balsas už <b>XXX</b> suskaičiuotas</p>
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
            <td class="result wrong">-15896 <a href="javascript:showTip('negative-result');">(?)</a></td>
        </tr><tr>
            <td>Darbo partija</td>
            <td class="result">102</td>
        </tr><tr>
            <td>Liberalų sąjūdis</td>
            <td class="result wrong">0 <a href="javascript:showTip('zero-result');">(?)</a></td>
        </tr><tr>
            <td>Oligarchų kišenės partija</td>
            <td class="result wrong">16003 <a href="javascript:showTip('big-result');">(?)</a></td>
        </tr><tr>
            <td>Aljansas "Motulė Rusija"</td>
            <td class="result">2</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th align="right">Viso:</th>
            <th class="result">483</th>
        </tr>
    </tfoot>
</table>

<?php

showContent();
