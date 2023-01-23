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

// search.addEventListener('input', listerItems);

// function listerItems() {
//     let itemshidden = 0;
//     let filter = search.value.toLowerCase();
//     let items = document.querySelectorAll(".Names");

//     console.log(itemshidden);
//     items.forEach(ele => {
//         let textEle = ele.textContent;
//         if (textEle.toLowerCase().includes(filter.toLowerCase())) {
//             ele.style.display = '';
//         }else{
//             ele.style.display = "none";
//             itemshidden++;
//         }
        
//     })
//     //for no items
//     if (itemshidden==(items.length)){
//         document.getElementById("noitem").style.display ='block';
//         itemshidden==0;
//      }else{document.getElementById("noitem").style.display ='none';}
    
// }


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
