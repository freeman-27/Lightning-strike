// it-Lab.store Script
function ShowMapFrameTest()
{
document.getElementById("map2").innerHTML = "Изображение карты!";
}

function ShowMapFrameFunc() // change hidden atribute
{
document.getElementById("yamap").hidden = "";
document.getElementById("MapButton").hidden = "hidden";
document.getElementById("hideMap-b5").hidden = "";
}

function HideMapFrameFunc() // change hidden atribute
{
document.getElementById("yamap").hidden = "hidden";
document.getElementById("hideMap-b5").hidden = "hidden";
document.getElementById("MapButton").hidden = "";
}

function ShowAllertWindowRedirect()
{
window.alert("После нажатия кнопки ''ОК'' или ''ЗАКРЫТЬ'' в этом окне, вы автоматически будете перенаправлены на сайт маркета");
window.open("https://market");
}

//не используется
function ShowDateTimeFunction()
{
document.getElementById("map5").innerHTML = Date();
}
