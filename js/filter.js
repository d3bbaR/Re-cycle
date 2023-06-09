const filter = {
  filterAction() {
    document.querySelectorAll(".product-box__item").forEach((item) => {
      let categoryAtribut = item.getAttribute("data-category");


      if (
        (filter.category() == categoryAtribut || filter.category() == "all")

      ) {
        item.style.display = "flex";
      } else {
        item.style.display = "none";
      }
      console.log(categoryAtribut);
    });

    document.querySelectorAll(".fietscontainer").forEach((item) => {
      item.style.display = "none";

    });
  },

  price() {
    let priceValue = document.querySelector(".price-value__item");
    priceValue.innerHTML = document.querySelector("[data-filter]").value;

    return document.querySelector("[data-filter]").value;
  },

  category() {
    let radio = document.querySelectorAll(".category-control");
    for (const item of radio) {
      if (item.checked) {
        return item.getAttribute("data-value-category");
      }
    }
  },

  checkAtributeToggle() {
    document.querySelector(".select-control").addEventListener("click", () => {
      document.querySelectorAll(".category-control").forEach((item) => {
        item.removeAttribute("checked");
      });

      if (event.target.classList == "category-control") {
        event.target.setAttribute("checked", "");
      } else {
        event.stopImmediatePropagation();
      }
    });
  }
  ,


};

filter.checkAtributeToggle();
document
  .querySelector(".select-control")
  .addEventListener("click", filter.filterAction);
function show(dat) {
  document.querySelectorAll(".product-box__item").forEach((item) => {
    item.style.display = "none";
  });
  document.getElementById("footer").style.display = "none";
  let modal = document.getElementById(dat);
  console.log(dat);
  console.log(modal);
  modal.style.display = "block";
}
function hide(dat) {
  document.querySelectorAll(".product-box__item").forEach((item) => {
    console.log(item);
    let categoryAtribut = item.getAttribute("data-category");
    console.log(categoryAtribut);
    document.getElementById("footer").style.display = "block";
    item.style.display = "flex";

  });

  let modal = document.getElementById(dat);
  modal.style.display = "none";
}
function fietsladen(dat) {
  if (dat == 'Stadsfietsen elektris') {
    dat = 'Stadsfietsen (elo)'
  }
  else if (dat == 'Mountainbikes elektris') {
    dat = 'Mountainbikes (elo)';
  }
  else if (dat == 'Racefietsen elektris') {
    dat = 'Racefietsen (elo)';
  }
  else if (dat == 'Hybride fietsen elektris') {
    dat = 'Hybride fietsen (elo)';
  }

  del_cookie("fietssoort")
  document.cookie = "fietssoort=" + dat;
  location.reload();
}
function del_cookie(name) {
  document.cookie = name +
    '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
}
document.onload = selecter();
function selecter() {
  let cookiedata = getCookie("fietssoort");
  if (cookiedata == 'Stadsfietsen (elo)') {
    cookiedata = 'Stadsfietsen elektris'
  }
  else if (cookiedata == 'Mountainbikes (elo)') {
    cookiedata = 'Mountainbikes elektris';
  }
  else if (cookiedata == 'Racefietsen (elo)') {
    cookiedata = 'Racefietsen elektris';
  }
  else if (cookiedata == 'Hybride fietsen (elo)') {
    cookiedata = 'Hybride fietsen elektris';
  }
  let label = document.getElementById(cookiedata + 1);
  label.setAttribute("class", "radio-control checked");

}
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}