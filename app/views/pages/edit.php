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
    <title>New Item</title>
</head>

<body class=" bg-cyan-100">

    <div class="flex justify-end m-4 ">
        <button class="bg-cyan-700 p-3 rounded text-white font-bold">Add more </button>
    </div>
    <section class="flex justify-center">
        <form action=" <?php echo URLROOT .'/Products/edit/' .$data['id']?>" method="POST" class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl m-auto my-4 bg-white">

            <div>
                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                    <!-- Photo File Input -->
                    <input type="file" name="image" class="hidden" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">

                    <label class="block text-gray-700 text-lg font-bold mb-2 text-center" for="photo">
                        Product Photo <span class="text-red-600"> </span>
                    </label>

                    <div class="text-center">
                        <!-- Current product Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="<?=URLROOT .'/img/upload/' . $data['image']; ?>" class="w-40 h-40 m-auto rounded-full shadow">
                        </div>
                        <!-- New  product Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                            </span>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                            Select New Photo
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <!-- component -->
                    <!-- This is an example component -->

                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

                    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>



                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Name*" value="<?php echo $data['name'] ?>" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" name="quantity" placeholder="quantiy*" value="<?php echo $data['quantity'] ?>" />
                    <!-- <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="file" placeholder="image *" /> -->
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" name="price" placeholder="price *" value="<?php echo $data['price'] ?>" />
                </div>
                <div class="my-4">
                    <textarea placeholder="description ..." name="description" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo $data['description'] ?></textarea>
                </div>
                <div class="my-2 w-1/2 lg:w-1/4 mx-auto">
                    <button class="uppercase text-sm font-bold tracking-wide bg-cyan-700  hover:bg-cyan-800 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                </div>

            </div>
        </form>
    </section>
</body>

</html>