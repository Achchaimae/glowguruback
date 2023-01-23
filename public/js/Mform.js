// var counter = 1;
// //generate new form 
// function addForm(){
//     console.log('addForm');
//     counter++;
//     var form = document.getElementById('forms');
//     var newForm = document.createElement('div');
//     newForm.innerHTML = `

//             <div class="dataForm">
//                 <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
//                     <!-- Photo File Input -->
//                     <input type="file" name="image" class="hidden" x-ref="photo" x-on:change="
//                         photoName = $refs.photo.files[0].name;
//                         const reader = new FileReader();
//                         reader.onload = (e) => {
//                             photoPreview = e.target.result;
//                         };
//                         reader.readAsDataURL($refs.photo.files[0]);">
                      

//                     <label class="block text-gray-700 text-lg font-bold mb-2 text-center" for="photo">
//                         Product Photo <span class="text-red-600"> </span>
//                     </label>

//                     <div class="text-center">
//                         <!-- Current product Photo -->
//                         <div class="mt-2" x-show="! photoPreview">
//                             <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
//                         </div>
//                         <!-- New  product Preview -->
//                         <div class="mt-2" x-show="photoPreview" style="display: none;">
//                             <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
//                             </span>
//                         </div>
//                         <input type="file" name="image"  class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                           
                        
//                     </div>
//                     <span class="flex justify-center text-red-500" ><?php echo $data['image_err']?></span>
//                 </div>

//                 <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
//                     <!-- component -->
//                     <!-- This is an example component -->

//                     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

//                     <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


//                     <div>
//                         <input class="name w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="name"  placeholder="Name*" />
//                         <span class="flex justify-center text-red-500" ><?php echo $data['name_err']?></span>
//                     </div>
//                     <div>
//                         <input class="quantity w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" name="quantity" placeholder="quantiy*" />
//                         <span class="flex justify-center text-red-500" ></span>
//                     </div>
//                     <!-- <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="file" placeholder="image *" /> -->
//                    <div>
//                         <input class="price w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" name="price" placeholder="price *" />
//                         <span class="flex justify-center text-red-500" ></span>
//                     </div>
//                 </div>
//                 <div class="my-4">
//                     <textarea placeholder="description ..." name="description" class="description w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
//                     <span class="flex justify-center text-red-500" ></span>
//                 </div>
//             </div>
           
        
//         `;
//         form.appendChild(newForm);
    
                    


//                     }

//         function GetData(){
//             data= [];
//             forms = document.getElementsByClassName('dataForm');
//             console.log(forms);
//             for(let i=0; i<forms.length; i++){
//                 let dataForm = forms[i];
//                 data.push({
//                     name: dataForm.getElementsByClassName('name')[0].value,
//                     quantity: dataForm.getElementsByClassName('quantity')[0].value,
//                     price: dataForm.getElementsByClassName('price')[0].value,
//                     description: dataForm.getElementsByClassName('description')[0].value,
//                 });
//             }
//             let url = "http://localhost/glowguruback/Products/add";
            
//             data.map(async(item)=>{
//                 let obj = {
//                     name: item.name,
//                     quantity: item.quantity,
//                     price: item.price,
//                     description: item.description,
//                 }
//                 let response = await fetch(url, {
//                 method: "POST",
//                 headers:{
//                     "Content-Type": "application/json",
//                     "Accept": "application/json"
//                 },
//                 body: JSON.stringify(obj)
//                 });
//             })
            
//         }

