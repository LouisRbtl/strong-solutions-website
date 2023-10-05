function addHeader() {


  console.log("ADDING HEADER")
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "header.html", true);
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var header = document.createElement("header");
      header.innerHTML = this.responseText;
      const menuBtn = header.querySelector(".menu-btn");
      const menu = header.querySelector(".menu");
      menuBtn.addEventListener("click", () => {
        menu.classList.toggle("menu-show");
      });
      document.body.insertBefore(header, document.body.firstChild);
    } else {
      console.log("erreur");
    }
  };
  xhr.send();
}

function addFooter() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "footer.html", true);
  xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var footer = document.createElement("footer");
      footer.innerHTML = this.responseText;
      document.body.appendChild(footer);
    }
  };
  xhr.send();
}
