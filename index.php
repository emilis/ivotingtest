<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", "Sveiki!");

?>
<div class="dialog">
    <p>Kviečiame Jus išbandyti internetinio balsavimo sistemą.</p>
    <p>Tokia (ar iš esmės panaši) sistema galėtų būti naudojama artimiausiuose Seimo, Prezidento ar savivaldos rinkimuose Lietuvoje.</p>
    <p>Tikimės, kad šis testas jums bus įdomus ir naudingas.</p>
    <p>&nbsp;</p>
    <p align="right"><a class="action" href="ballot.php">Prisijungti ir pradėti balsavimą &raquo;</a></p>
</div>
<?php

showContent();
