<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", "Balsavimo biuletenis");

?>
<form method="post" action="vote.php">
<table id="ballot">
    <thead><tr><th colspan="2">Pasirinkite už kurią partiją norite balsuoti:</th></tr></thead>
    <tbody>
        <tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Socialdemokratų partija</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Partija Tvarka ir teisingumas</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Tėvynės sąjunga - Lietuvos krikščionys demokratai</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Darbo partija</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Liberalų sąjūdis</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Oligarchų kišenės partija</td>
        </tr><tr>
            <td><input type="radio" name="party" value=""></td>
            <td>Marginalų aljansas "Motulė Rusija"</td>
        </tr>
    </tbody>
</table>

<p align="center"><input class="action" type="submit" value="Balsuoti »"></p>

<?php

showContent();
