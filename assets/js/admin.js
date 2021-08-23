function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}

const productSelectGroup = document.querySelectorAll(".product__select_group");
const moreCategoryGroupPlus = document.querySelector(".more__category_group_plus");
const categorySelect = document.querySelector("#category");

let i = 1;
moreCategoryGroupPlus.addEventListener("click", () => {
    newCat(i);
    i++;
})

function newCat(i) {
    let moreInfoGroup = create("div", productSelectGroup[0], `more__info_group`);
    let cat = create("select", moreInfoGroup, `category${i}`);
    cat.classList.add("category__new");
    cat.classList.add("new");
    cat.setAttribute("name", `category[]`);
    cat.innerHTML = categorySelect.innerHTML;
}






// color ----------------------------------

const moreColorGroupPlus = document.querySelector(".more__color_group_plus");

let j = 1;
moreColorGroupPlus.addEventListener("click", () => {
    newColor(j);
    j++;
})

function newColor(j) {
    let moreInfoGroup = create("div", productSelectGroup[1], `more__info_group`);
    let color = create("input", moreInfoGroup, `color${j}`);
    color.classList.add("color__new");
    color.classList.add("new");
    color.setAttribute("name", `color[]`);
    color.setAttribute("type", `color`);
}







// type ----------------------------------

const moreTypeGroupPlus = document.querySelector(".more__type_group_plus");
const typeSelect = document.querySelector("#type");

let q = 1;
moreTypeGroupPlus.addEventListener("click", () => {
    newType(q);
    q++;
})

function newType(q) {
    let moreInfoGroup = create("div", productSelectGroup[2], `more__info_group`);
    let type = create("select", moreInfoGroup, `type${q}`);
    type.classList.add("type__new");
    type.classList.add("new");
    type.setAttribute("name", `type[]`);
    type.innerHTML = typeSelect.innerHTML;
}







// size ----------------------------------

const moreSizeGroupPlus = document.querySelector(".more__size_group_plus");

let w = 1;
moreSizeGroupPlus.addEventListener("click", () => {
    newSize(w);
    w++;
})

function newSize(w) {
    let moreInfoGroup = create("div", productSelectGroup[3], `more__info_group`);
    let size = create("input", moreInfoGroup, `size${w}`);
    size.classList.add("size__new");
    size.classList.add("new");
    size.setAttribute("name", `size[]`);
    size.setAttribute("type", `text`);
}








// img ----------------------------------

const moreImgGroupPlus = document.querySelector(".more__img_group_plus");
const imgSelect = document.querySelector("#img");

let e = 1;
moreImgGroupPlus.addEventListener("click", () => {
    newImg(e);
    e++;
})

function newImg(e) {
    let moreInfoGroup = create("div", productSelectGroup[4], `more__info_group`);
    let img = create("input", moreInfoGroup, `img${e}`);
    img.classList.add("img__new");
    img.classList.add("new");
    img.setAttribute("type", `file`);
    img.setAttribute("name", `imgs[]`);
}