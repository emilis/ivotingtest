
function showTip(link) {

    var box = document.createElement("div");
    with (box.style) {
        position = "fixed";
        left = "40px";
        width = "520px";
        top = "40px";
        height = "400px";
        border = "3px solid #999";
        padding = "10px";
        backgroundColor = "#ffe";
    }

    var close = document.createElement("p");
    close.align = "right";
    close.innerHTML = "<b>Uždaryti langą</b>";
    close.style.cursor = "pointer";
    close.style.margin = "2px 0px";
    close.onclick = function() {
        document.body.removeChild(box);
    };
    box.appendChild(close);

    var frame = document.createElement("iframe");
    frame.src = link.href;
    frame.width = 500;
    frame.height = 360;
    frame.style.clear = "both";
    frame.style.backgroundColor = "#fff";
    box.appendChild(frame);

    document.body.appendChild(box);

    return false;
}
