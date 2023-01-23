function show() {
    var x = document.getElementById("stat");
    var button = document.getElementById("button");
    x.classList.toggle("invisible");    
}
const search = document.getElementById("search");
const searchInput = document.querySelector("[data-search]");
const Names = document.querySelectorAll(".Names");
//var for second function
//const items = document.querySelectorAll(".PNames");

search.addEventListener('input', listerItems);

function listerItems() {
    let itemshidden = 0;
    let filter = search.value.toLowerCase();
    let items = document.querySelectorAll(".Names");
    console.log(itemshidden);
    items.forEach(ele => {
        let textEle = ele.textContent;
        if (textEle.toLowerCase().includes(filter.toLowerCase())) {
            ele.style.display = '';
        }else if ((textEle.toLowerCase().includes(filter.toLowerCase())).length==items.length){
            console.log("no items");
        }else{
            itemshidden++;
            ele.style.display = "none";
            itemshidden++;
        }
        
    })
    //for no items
    if (itemshidden==(items.length*2)){
        document.getElementById("noitem").style.display ='block';
        itemshidden==0;
     }else{document.getElementById("noitem").style.display ='none';}
    
}


//second method of search
// searchInput.addEventListener("input", (e) => {
//        let itemshidden = 0;
//     const value = e.target.value;
//     console.log(value);

//     for (let i = 0; i < Names.length; i++) {    
//         console.log(Names.length)
//         if (value.length == items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
//             Names[i].style.display = "block";
//             console.log(Names.length)
//         }
//         if (value.length == 0) {
//             Names[i].style.display = "block";
//         }
//     }
    
//     for (let i = 0; i < Names.length; i++) {
//         if (items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
//             Names[i].style.display = 'block';

//         } else {
//             Names[i].style.display = "none";
//             itemshidden++;
//         }
//     }

//         if (itemshidden==(items.length)){
//             document.getElementById("noitem").style.display ='block';
//             itemshidden==0;
//         }else{document.getElementById("noitem").style.display ='none';}
// })
