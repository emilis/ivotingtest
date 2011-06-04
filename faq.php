<?php

require dirname(__FILE__) . "/system/lib/kernel.php";

setOutputVar("title", "Paaiškinimai");

?>
<h3 id="negative-result">Kodėl Tėvynės Sąjunga surinko neigiamą skaičių balsų, o Oligarchų partija surinko tiek daug?</h3>

<p>Todėl, kad dar prieš balsavimą nustatėme šios partijos balsų skaitliuką kaip -16000, o "Oligarchų kišenės partijos" skaitliuką nustatėme kaip +16000. Tokiu būdu bendras atiduotų balsų skaičius sistemoje atitiks balsavusiųjų skaičių, o esant pakankamai dideliems skaičiams, neigiama vertė pasislėps.</p>
<p>Panašus atvejis buvo atsitikęs 2000 m. prezidento rinkimuose JAV: vienos iš apylinkių balsavimo kompiuteris suskaičiavo -16022 balsus Demokratų patijos kandidatui Alui Gorui, o pridėjo 10000 balsų nežinomam socialistų kandidatui.</p>
<p>Tirdami šiuos įvykius ir modeliuodami situaciją Hacking Democracy filmo kūrėjai nustatė, kad Diebold firmos e-balsavimo kompiuteriuose įmanoma pakeisti balsų už kandidatus sumas taip, kad rezultatai būtų iškreipti vieno iš kandidatų naudai, o pilnas balsų skaičius vis tiek sutaptų.</p>
<p>Daugiau informacijos:
    <a target="_blank" href="http://en.wikipedia.org/wiki/Volusia_error">Volusia error</a>,
    <a target="_blank" href="http://en.wikipedia.org/wiki/Hursti_Hack#Hursti_Memory_Card_Hacks">Hursti Hack</a>,
    <a target="_blank" href="http://en.wikipedia.org/wiki/Hacking_Democracy">Hacking Democracy</a>,
    <a target="_blank" href="http://www.youtube.com/watch?v=xIAzCM3OYYc">Hacking Democracy 9 of 9 (video)</a>.
</p>

<h3 id="zero-result">Kodėl Liberalų sąjūdis (beveik) negavo balsų?</h3>

<p>Papildomo kodo, įterpto į balsavimo puslapį dėka jūsų naršyklė užblokavo balsavimą už šią partiją. Panašiai gali elgtis rinkėjo kompiuteryje esantis virusas.</p>
<p>Atitinkamą saugumo spragą Estijos internetinio balsavimo sistemoje pademonstravo Tartu universiteto studentas Paavo Pihelgas:<br>
<a href="http://news.err.ee/Sci-Tech/ed695579-af05-48ab-8cc0-3085e5f0c56c">Student Finds Flaw in E-Voting, Seeks Nullification of Result</a>.</p>
<p><em>Nuo savęs norime pridėti, kad kenkėjiškai šiuo atveju galėtų pasielgti ne tik virusas. <a href="http://www.google.lt/search?&q=populiariausia+antivirusinė+lietuvoje">Populiariausia</a> Lietuvoje antivirusinė programa yra Kaspersky Antivirus. Šią programą kuriančios įmonės sąvininkas <a href="http://en.wikipedia.org/wiki/Yevgeny_Kaspersky">Jevgenijus Kasperskis</a> mokslus yra baigęs <a href="http://www.academy.fsb.ru/">KGB įsteigtame institute</a>. Taip pat neseniai jis turėjo būti dėkingas KGB įpėdinei FSB už iš pagrobėjų <a href="http://www.pcmag.com/article2/0,2817,2384235,00.asp">išlaisvintą savo sūnų</a>.</em></p>
<p><em>Įdomus klausimas kaip elgtųsi ši antivirusinė programa rinkėjų kompiuteriuose internetinio balsavimo metu.</em></p>

<h3 id="foreign-result">Iš kur prie rezultatų atsirado politinė partija veikianti Latvijoje?</h3>

<p>Per paskutinius Estijos parlamento rinkimus, informacinėje sistemoje atsirado balsas už ne tos apygardos kandidatą. Po dviejų mėnesių vis dar nebuvo atrastos tokio įvykio priežastys.</p>
<p><a href="http://www.osce.org/odihr/77557">ESBO ataskaita apie 2011 m. parlamento rinkimus Estijoje</a> (11 psl.):</p>
<p><blockquote>During the counting, one vote was determined invalid by the vote counting application since it was cast for a candidate who was not on the list in the corresponding constituency. The project manager could not explain how this occurred – the investigation was still ongoing at the time of issuing the report.</blockquote></p>


<?php

showContent();
