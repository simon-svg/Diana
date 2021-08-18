const productCategorySelectGroup = document.querySelector(".product__category_select_group");
const select = document.querySelector(".category");
const moreInfoGroupPlus = document.querySelectorAll(".more__info_group_plus");

let i = 1;
moreInfoGroupPlus.forEach((item) => {
    item.addEventListener("click", () => {
        newCat(i);
        i++;
    })
})

function create(what, where, className){
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}
function newCat(id){
    let moreInfoGroup = create("div", productCategorySelectGroup, `more__info_group`);
    let select =  create("select", moreInfoGroup, `category${i}`);
    select.classList.add("category__new");
    select.setAttribute("name", `category${i}`);
    select.innerHTML = category.innerHTML;
}