<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", 'Siūlome pirkti rinkėjų balsavimo duomenis <a href="#">(?)</a>');

?>
<p>Tai duomenys kas, kada ir už kurią partiją balsavo. Mūsų atveju tai maždaug tokie duomenys:</p>
<table class="log" border="1">
<thead><tr>
    <th>Laikas</th>
    <th>IP adresas</th>
    <th>Naršyklė</th>
    <th>Balsas</th>
</tr></thead>
<tbody>
    <tr><td colspan="4">...</td></tr>
    <tr>
        <td>2011-06-02 12:51:28</td>
        <td>123.123.123.123</td>
        <td>Mozilla Firefox 4.0 (Windows)</td>
        <td>Socialdemokratų partija</td>
    </tr>
    <tr>
        <td>2011-06-02 12:52:43</td>
        <td>234.234.234.234</td>
        <td>Google Chrome 11 (Windows)</td>
        <td>Tėvynės sąjunga - Lietuvos krikščionys demokratai</td>
    </tr>
    <tr><td colspan="4">...</td></tr>
</tbody>
</table>

<p>Jei balsavote mūsų sistemoje, duomenyse surasite ir savo balsą.</p>
<p>Kaina nedidelė -- norime paslaugos. Pasirinkite vieną iš variantų:</p>

<table cellspacing="5" cellpadding="10"><tbody><tr>
    <td width="50%" bgcolor="#ffc" valign="top">
        <!--<form method="post" action="send-log.php">-->
        <h4>Įveskite savo el. pašto adresą:</h4>
        <p><input name="email"></p>
        <ul>
            <li>Šiuo adresu atsiųsime jums nuorodą duomenų parsisiuntimui.</li>
            <li>Taip pat juo siųsime svarbius pranešimus apie bandymus įteisinti internetinį balsavimą Lietuvoje.</li>
        </ul>
        <p><input type="submit" value="Užsisakyti"></p>
        </form>
    </td><td width="50%" bgcolor="#ccf" valign="top">
        <h4>Palaikykite mūsų puslapį Facebook.</h4>
        <ul>
            <li>Paspaudę "Patinka" šiame puslapyje rasite nuorodą duomenų parsisiuntimui.</li>
        </ul>
    </td>
</tr></tbody></table>

<?php

showContent();
