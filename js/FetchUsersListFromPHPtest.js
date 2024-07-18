// NOTE: RUN WITH HTTP://, NOT FILE://
window.addEventListener("load", () => {
    fetch("WmBaseTest.php", { method: "POST" })
    .then(res => res.text())
    .then(txt => document.getElementById("showList").innerHTML = txt);
  });


/*

<!-- (A) LIST USERS HERE -->


