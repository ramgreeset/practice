<?php
$posts = [
    1 => [
        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug'=>'title-1'
        ],
    2 => [
        'title' => 'Title 2',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug'=>'title-2'
    ],
    3 => [
        'title' => 'Title 3',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug'=>'title-3'
    ],
];

?>


<!doctype html>

<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/css/output.css">
    <title>Practice</title>
</head>
<body class="h-full">
<div class="flex flex-col min-h-full">
    <header>
        <nav class="bg-emerald-200 border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <svg width="60px" height="30px" viewBox="0 0 512 258" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         preserveAspectRatio="xMidYMid">
                        <g>
                            <path d="M116.447824,54.1156555 C138.734515,54.302759 154.884213,60.7284251 164.896919,73.3819622 C174.909625,86.0354994 178.213337,103.31851 174.8134,125.230993 C173.492985,135.243699 170.56348,145.063956 166.030231,154.69711 C161.684086,164.330263 155.643318,173.017208 147.897237,180.763289 C138.451187,190.583546 128.347602,196.816763 117.581136,199.46294 C106.814671,202.109117 95.6686527,203.429532 84.1484277,203.429532 L50.149063,203.429532 L39.3825975,257.26186 L0,257.26186 L40.5159096,54.1156555 L116.447824,54.1156555 Z M452.341234,54.1156555 C474.627924,54.302759 490.777623,60.7284251 500.790329,73.3819622 C510.803035,86.0354994 514.106746,103.31851 510.70681,125.230993 C509.386394,135.243699 506.456889,145.063956 501.923641,154.69711 C497.577495,164.330263 491.536728,173.017208 483.790646,180.763289 C474.344596,190.583546 464.241011,196.816763 453.474546,199.46294 C442.70808,202.109117 431.562062,203.429532 420.041837,203.429532 L386.042473,203.429532 L375.276007,257.26186 L335.89341,257.26186 L376.409319,54.1156555 L452.341234,54.1156555 Z M258.774725,0 L247.724931,54.1156555 L282.857608,54.1156555 C302.123915,54.4952082 316.47742,58.4618008 325.92347,66.0154332 C335.556623,73.5690656 338.389904,87.9279169 334.423311,109.081295 L315.440333,203.429532 L275.774407,203.429532 L293.907402,113.331216 C295.794473,103.885166 295.227817,97.1815175 292.207433,93.214925 C289.18705,89.2483324 282.670505,87.2650362 272.657799,87.2650362 L241.208386,86.9817081 L217.975487,203.429532 L178.876218,203.429532 L219.675455,0 L258.774725,0 Z M85.848396,86.415052 C83.5817716,86.6021555 81.4113719,86.6983801 79.3318511,86.6983801 L73.608,86.698 L56.6656079,171.413464 C57.7989201,171.600567 58.9322322,171.696792 60.0655444,171.696792 L64.0321369,171.696792 L64.0321369,171.696792 C82.1651315,171.883895 97.2777422,170.093048 109.364623,166.313559 C121.451504,162.346967 129.577139,148.560117 133.730835,124.947665 C137.130771,105.114703 133.730835,93.6853565 123.531025,90.6649726 C113.518319,87.6445888 100.961007,86.2279486 85.848396,86.415052 Z M421.741805,86.415052 C419.475181,86.6021555 417.304781,86.6983801 415.225261,86.6983801 L409.501,86.698 L392.559017,171.413464 C393.69233,171.600567 394.825642,171.696792 395.958954,171.696792 L399.925546,171.696792 L399.925546,171.696792 C418.058541,171.883895 433.171152,170.093048 445.258033,166.313559 C457.344914,162.346967 465.470548,148.560117 469.624244,124.947665 C473.024181,105.114703 469.624244,93.6853565 459.424435,90.6649726 C449.411729,87.6445888 436.854416,86.2279486 421.741805,86.415052 Z"
                                  fill="#000000"></path>
                        </g>
                    </svg>
                    <span class="text-2xl font-bold italic text-cyan-600">ractice</span>
                </a>
                <div class="flex items-center">
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0"
                               aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Company</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Marketplace</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-xl flex-auto pt-4 max ">

        <?php foreach ($posts as $post): ?>
        
        <a href="$post/<?=$post['slug']?>"
           class="mb-2.5 flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
            <img class="object-cover rounded-t-lg md:w-48 md:rounded-none md:rounded-s-lg"
                 src="https://n1s1.hsmedia.ru/69/70/69/697069b5882b8fcc6165c7180fd67656/5000x4051_0xac120003_19525361911673259411.jpeg"
                 alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?=$post['title']?></h5>
                <p class="mb-3 font-normal text-gray-700"><?=$post['description']?></p>
            </div>
        </a>

        <?php endforeach; ?>

    </main>
    <footer class="flex justify-center bg-emerald-200 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <p>&copy; Copyright <?= date('Y') ?></p>
    </footer>
</div>
</body>
</html>