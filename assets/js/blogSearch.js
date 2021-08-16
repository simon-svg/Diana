$(".blog__search_inp").keyup(function() {
    let blogSearchInp = $(".blog__search_inp").val();
    $.post("php/admin/blog/querys.php?search=i", {blogSearchInp: blogSearchInp}, function(d){
        console.log(d);
    })
})
