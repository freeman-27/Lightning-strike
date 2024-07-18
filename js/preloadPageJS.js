var timeoutToShowPage;

function loading_DOM_html(){
    //document.getElementById('loaderContentCertBlock').style.blockSize = "1000px";   //for preload page after projects block - for second spinner (disabled)
    //document.getElementById('loaderContentCertBlock').style.paddingTop = "50px";   //for preload page after projects block - for second spinner (disabled)
    timeoutToShowPage = setTimeout(loading_DOM_element, 500);
}

function loading_DOM_element(){
    // document.getElementById('loaderSpinner').style.display = "none";
    document.getElementById('loaderContainer').style.display = "none";
    document.getElementById('loaderContent').style.display = "none";
    document.getElementById('mainBlock').style.display = "block";
}

//second spinner
/*var timeoutToShowCertBlock;
function loading_CertBlockAndBelow(){
    timeoutToShowCertBlock = setTimeout(loading_DOM_element_CertBlockAndBelow, 1500);
}

function loading_DOM_element_CertBlockAndBelow(){
    // document.getElementById('loaderSpinner').style.display = "none";
    document.getElementById('loaderContentCertBlock').style.display = "none";
    document.getElementById('loaderContainerCertBlock').style.display = "none";
    
    document.getElementById('CertBlockAndBelow').style.display = "block";
}
    */