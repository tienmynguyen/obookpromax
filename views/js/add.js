var additemid = 0;

function addcard() {
  additemid += 1;
  var selectedItem = document.createElement("div");

  selectedItem.classList.add("row");
  selectedItem.classList.add("mb-5");
  selectedItem.setAttribute("id", additemid);
  var block1 = document.createElement("div");
  var block2 = document.createElement("div");
  block1.classList.add("col-12");
  block1.classList.add("col-lg-7");
  block1.classList.add("px-3");
  var divimg1 = document.createElement("div");
  divimg1.classList.add("sizelon");
  divimg1.classList.add("px-3");
  const imgurl = document.getElementById("addfile");

  var up_loaded_image = "";

  imgurl.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
      up_loaded_image = reader.result;
      divimg1.style.backgroundImage = "url(" + up_loaded_image + ")";
    });
    reader.readAsDataURL(this.files[0]);
  });

  block1.append(divimg1);

  block2.classList.add("col-12");
  block2.classList.add("col-lg-5");
  block2.classList.add("px-1");

  var block21 = document.createElement("div");
  block21.classList.add("sizelon2");
  block21.classList.add("col-12");
  block21.classList.add("px-3");
  block21.classList.add("pt-2");
  block21.style.backgroundColor = "#4a4a4a";
  var block211 = document.createElement("div");
  block211.classList.add("d-flex");
  var block2111 = document.createElement("div");
  block2111.classList.add("avtmem");

  var block2112 = document.createElement("p");
  block2112.classList.add("m-2");

  var block21121 = document.createElement("span");
  block21121.style.fontSize = "20px";
  block21121.style.color = "black";
  block21121.innerText = "nguyen tien my";

  var block212 = document.createElement("div");
  block212.classList.add("mt-2");
  block212.style.height = "77%";
  block212.style.width = "100%";
  block212.style.backgroundColor = "#777777";
  block212.style.borderRadius = "10px";

  var block213 = document.createElement("div");
  block213.classList.add("col-12");
  block213.classList.add("d-flex");
  block213.classList.add("mt-2");
  block213.classList.add("gap-3");
  block213.classList.add("px-3");
  block213.style.justifyContent = "end";
  block213.style.alignItems = "center";

  var block2121 = document.createElement("p");
  block2121.classList.add("m-2");
  var textareapost = document.getElementById("textareapost");

  block2121.innerText = "" + textareapost.value;

  block2112.append(block21121);

  block212.append(block2121);
  block211.append(block2111);
  block211.append(block2112);

  block21.append(block211);
  block21.append(block212);
  block2.append(block21);
  selectedItem.append(block1);
  selectedItem.append(block2);
  var cardItems = document.getElementById("main-contend-body-post");
  cardItems.append(selectedItem);
}
