
const showResults = d => {
    $(".productlist").html(d.length?listItemTemplate(d):'No Results');
}

query({type:'products_all'}).then(showResults);

$(()=>{
    $("#product-search").on("submit",function(e){
        e.preventDefault();
        let search = $(this).find("input").val();
        console.log(search)
    })
})