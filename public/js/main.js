function show() {
    var x = document.getElementById("stat");
    var button = document.getElementById("button");
    x.classList.toggle("invisible");    
}
const search = document.getElementById("search");
const searchInput = document.querySelector("[data-search]");
const Names = document.querySelectorAll(".Names");
//var for second function
const items = document.querySelectorAll(".PNames");



//second method of search
searchInput.addEventListener("input", (e) => {
       let itemshidden = 0;
    const value = e.target.value;

    for (let i = 0; i < Names.length; i++) {  
        //for showing all items 
        if (value.length == items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
            Names[i].style.display = "block";
        }
        //for showing searched items
        if (items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
            Names[i].style.display = 'block';

        } else {
            //for hiding items
            Names[i].style.display = "none";
            //for counting hidden items
            itemshidden++;
        }
    }
//for no items
        if (itemshidden==(items.length)){
            document.getElementById("noitem").style.display ='block';
            //for resetting hidden items
            itemshidden==0;
        }else{document.getElementById("noitem").style.display ='none';}
})
