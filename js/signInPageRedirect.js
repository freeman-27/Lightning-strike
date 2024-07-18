var delayToRedirect;

function goToUserPage()
{
    //document.getElementById('modalInfoBlockSpinner').style.display = "block";
    delayToRedirect = setTimeout(redirectionToUserPage, 3000);
}

//Open user account page
function redirectionToUserPage()
{
    window.open("/UIweb/userPageAccount-Develop.html", "_self");
}


