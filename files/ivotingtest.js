
var tips = {
    "negative-result": "Nustebote? Panašiai buvo atsitikę 20XX prezidento rinkimuose JAV kai...",
    "zero-result": "Rinkėjų kompiuteriuose veikiantis virusas blokuoja bandymus balsuoti už šią partiją. Tokią saugumo spragą turi ir Estijos sistema. Žr.: http://...",
    "big-result": "Nustebote? Panašiai buvo atsitikę 20XX prezidento rinkimuose JAV kai..."
};

function showTip(id) {
    if (tips[id]) {
        alert(tips[id]);
    }
}
