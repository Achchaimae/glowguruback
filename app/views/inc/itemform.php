<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking the css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- linking font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- linking tailwind css -->
    <link href="<?php echo URLROOT; ?>/dist/output.css" rel="stylesheet">
    <!-- link awsome font -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <!-- link jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>New Item</title>
</head>

<body class=" bg-cyan-100">
    <div class="flex flex-row justify-between">

        <div class="flex justify-end m-4 ">
            <button class="bg-cyan-700 p-3 rounded text-white font-bold"><a href="<?= URLROOT ?>/products/dashboard"> Back</a> </button>
        </div>

    </div>

    <section class="flex justify-center">

        <form ecntype="multipart/form-data" id="form" action=" <?php echo URLROOT; ?>/Products/add" method="POST" class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl m-auto my-4 bg-white" enctype="multipart/form-data">


        <div id="formInp">
            <div class="form-group mb-6">
                <input type="text" name="name[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Product Name">
            </div>
            <div class="form-group mb-6 flex gap-4">
                <div class="">
                    <input type="number" name="price[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Price">
                </div>
                <div class="">
                    <input type="number" name="quantity[]" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Product Quantity">
                </div>
            </div>
            <div class="form-group mb-6">
                <textarea name="description[]" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  rows="3" placeholder="Product Description" ></textarea>
            </div>
            <div class="form-group mb-6 w-full">
                <input type="file" name="image[]" class="block">
            </div>
            <hr class="border-2 my-4">
        </div>

            <!-- <div class="my-2 w-1/2 lg:w-1/4 mx-auto">
                    <button class="uppercase text-sm font-bold tracking-wide bg-cyan-700  hover:bg-cyan-800 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                        add
                    </button>
                </div> -->
            <!-- <div class="flex flex-row justify-end"> -->


            <div class="flex flex-row justify-center m-auto items-center gap-4 m-4 sticky ">

                <button id='addbtn' class="bg-cyan-700 p-3 rounded text-white font-bold" type="button">Add more </button>
                <button type="submit" class="bg-cyan-700 p-3 rounded text-white font-bold" >validate</button>
            </div>
        </form>



    </section>
</body>
<script src="<?= URLROOT . '/js/Mform.js'; ?>"></script>
<script>
    // $('document').ready(function() {
    //     $('#btn').click(function(e) {
    //         e.preventDefault();

    //         $('.dataForm').append(`
    //          <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
    //                 <!-- Photo File Input -->
    //                 <input type="file" name="image" class="hidden" x-ref="photo" x-on:change="
    //                         photoName = $refs.photo.files[0].name;
    //                         const reader = new FileReader();
    //                         reader.onload = (e) => {
    //                             photoPreview = e.target.result;
    //                         };
    //                         reader.readAsDataURL($refs.photo.files[0]);">


    //                 <label class="block text-gray-700 text-lg font-bold mb-2 text-center" for="photo">
    //                     Product Photo <span class="text-red-600"> </span>
    //                 </label>

    //                 <div class="text-center">
    //                     <!-- Current product Photo -->
    //                     <div class="mt-2" x-show="! photoPreview">
    //                         <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
    //                     </div>
    //                     <!-- New  product Preview -->
    //                     <div class="mt-2" x-show="photoPreview" style="display: none;">
    //                         <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
    //                         </span>
    //                     </div>
    //                     <input type="file" name="image[]" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                          
                        
                       
    //                 </div>
    //             </div>

    //             <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
    //                 <!-- component -->
    //                 <!-- This is an example component -->

    //                 <div>
    //                     <input class="form-control w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline name" type="text" name="name[]" placeholder="Name*" />
    //                 </div>
    //                 <div>
    //                     <input class="form-control w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" min="1" name="quantity[]" placeholder="quantiy*" />
    //                 </div>
    //                 <div>
    //                     <input class="form-control w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" min="1" name="price[]" placeholder="price *" />
    //                 </div>
    //             </div>
    //             <div class="my-4">
    //                 <textarea placeholder="description ..." name="description[]" class="form-control w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
    //             </div>
    //     `);
    //     }); 

    // });
</script>


</html>