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

            <div class="flex flex-row justify-center m-auto items-center gap-4 m-4 sticky ">

                <button id='addbtn' class="bg-cyan-700 p-3 rounded text-white font-bold" type="button">Add more </button>
                <button type="submit" class="bg-cyan-700 p-3 rounded text-white font-bold" >validate</button>
            </div>
        </form>



    </section>
</body>
<script src="<?= URLROOT . '/js/Mform.js'; ?>"></script>


</html>