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
    cat.setAttribute("name", `category${i}`);
    cat.innerHTML = categorySelect.innerHTML;
}






// color ----------------------------------

const moreColorGroupPlus = document.querySelector(".more__color_group_plus");
const colorSelect = document.querySelector("#color");

let j = 1;
moreColorGroupPlus.addEventListener("click", () => {
    newColor(j);
    j++;
})

function newColor(j) {
    let moreInfoGroup = create("div", productSelectGroup[1], `more__info_group`);
    let color = create("select", moreInfoGroup, `color${j}`);
    color.classList.add("color__new");
    color.classList.add("new");
    color.setAttribute("name", `color${j}`);
    color.innerHTML = colorSelect.innerHTML;
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
    type.setAttribute("name", `type${q}`);
    type.innerHTML = typeSelect.innerHTML;
}







// size ----------------------------------

const moreSizeGroupPlus = document.querySelector(".more__size_group_plus");
const sizeSelect = document.querySelector("#size");

let w = 1;
moreSizeGroupPlus.addEventListener("click", () => {
    newSize(w);
    w++;
})

function newSize(w) {
    let moreInfoGroup = create("div", productSelectGroup[3], `more__info_group`);
    let size = create("select", moreInfoGroup, `size${w}`);
    size.classList.add("size__new");
    size.classList.add("new");
    size.setAttribute("name", `size${w}`);
    size.innerHTML = sizeSelect.innerHTML;
}