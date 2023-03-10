<!--
    Icon
    https://www.svgrepo.com/collection/framework7-line-icons/1
-->
<ul class="flex flex-col py-4 space-y-1 w-full">
    <li class="px-5">
        <div class="flex flex-row items-center h-8">
            <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
        </div>
    </li>
    <li>
        <a href="{{ route('dashboard') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg width="18px" height="18px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M 12.6251 52.6445 L 43.3986 52.6445 C 46.7267 52.6445 48.6722 50.7695 48.6722 47.4648 L 48.6722 26.0664 L 51.6952 28.8320 C 52.1877 29.3008 52.7267 29.6289 53.3829 29.6289 C 54.4845 29.6289 55.3749 28.9492 55.3749 27.8242 C 55.3749 27.1211 55.1171 26.6758 54.6722 26.2774 L 46.5391 18.8476 L 46.5391 5.0430 C 46.5391 4.0117 45.8829 3.3555 44.8519 3.3555 L 41.7813 3.3555 C 40.7735 3.3555 40.0704 4.0117 40.0704 5.0430 L 40.0704 12.9648 L 30.8126 4.5274 C 29.9923 3.7774 29.0079 3.3555 28.0001 3.3555 C 26.9923 3.3555 26.0079 3.7774 25.1876 4.5274 L 1.3282 26.2774 C .9064 26.6758 .6251 27.1211 .6251 27.8242 C .6251 28.9492 1.5157 29.6289 2.6173 29.6289 C 3.2970 29.6289 3.8360 29.3008 4.3048 28.8320 L 7.3282 26.0898 L 7.3282 47.4648 C 7.3282 50.7695 9.2735 52.6445 12.6251 52.6445 Z M 34.7501 33.3086 C 34.7501 32.2305 34.0470 31.5508 32.9689 31.5508 L 23.0313 31.5508 C 21.9532 31.5508 21.2267 32.2305 21.2267 33.3086 L 21.2267 48.8711 L 13.4220 48.8711 C 11.9220 48.8711 11.1017 48.0508 11.1017 46.5273 L 11.1017 22.6445 L 27.1798 7.9961 C 27.4142 7.7617 27.6954 7.6211 28.0001 7.6211 C 28.3048 7.6211 28.5860 7.7383 28.8439 7.9961 L 44.8984 22.6445 L 44.8984 46.5273 C 44.8984 48.0508 44.0781 48.8711 42.6017 48.8711 L 34.7501 48.8711 Z" />
                </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('post.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg width="18px" height="18px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M 13.4570 44.7578 C 19.9492 51.25 28.3866 53.1953 32.5351 53.5937 C 33.7539 53.7344 34.4335 52.9844 34.5273 52.2110 C 34.6210 51.3906 34.1054 50.5000 32.9335 50.3359 C 29.1835 49.8203 21.4257 48.1328 15.8007 42.4375 C 6.6132 33.2266 4.8788 19.3047 12.3788 11.8047 C 18.4726 5.7344 28.6210 6.5078 36.0976 10.5391 L 38.5351 8.1719 C 29.4413 2.7110 17.2070 2.2656 10.0351 9.4610 C 1.5039 18.0156 2.6288 33.9297 13.4570 44.7578 Z M 47.8164 11.5469 L 49.6913 9.6719 C 50.5817 8.7813 50.6288 7.4688 49.7149 6.6250 L 49.1053 6.0625 C 48.3085 5.3125 47.0663 5.3359 46.1992 6.1563 L 44.3476 8.0547 Z M 25.0585 34.2578 L 46.1054 13.2344 L 42.6132 9.7656 L 21.5898 30.7656 L 19.6445 35.2422 C 19.4570 35.7344 19.9492 36.2266 20.4648 36.0625 Z M 21.9882 37.75 C 29.6523 45.4141 41.9804 48.4375 48.8710 41.5703 C 54.4961 35.9219 53.7694 25.8906 47.7461 17.2656 L 45.3554 19.6563 C 50.1368 26.7344 51.0742 34.6797 46.5273 39.2266 C 40.9961 44.7578 31.8554 42.1328 25.5742 36.2032 Z" />
                </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Post</span>
        </a>
    </li>
    <li>
        <a href="{{ route('category.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg width="18px" height="18px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M 9.6367 41.9453 L 13.9960 41.9453 L 13.9960 45.9766 C 13.9960 50.8047 16.4336 53.2422 21.3555 53.2422 L 46.3868 53.2422 C 51.2617 53.2422 53.7227 50.8047 53.7227 45.9766 L 53.7227 21.0625 C 53.7227 16.2578 51.2617 13.8203 46.3868 13.8203 L 42.0273 13.8203 L 42.0273 10.0234 C 42.0273 5.1953 39.5664 2.7578 34.6679 2.7578 L 9.6367 2.7578 C 4.7382 2.7578 2.2773 5.1953 2.2773 10.0234 L 2.2773 34.7031 C 2.2773 39.5312 4.7382 41.9453 9.6367 41.9453 Z M 9.7070 38.1719 C 7.3633 38.1719 6.0508 36.9297 6.0508 34.4922 L 6.0508 10.2344 C 6.0508 7.7969 7.3633 6.5312 9.7070 6.5312 L 34.6211 6.5312 C 36.9179 6.5312 38.2539 7.7969 38.2539 10.2344 L 38.2539 13.8203 L 21.3555 13.8203 C 16.4336 13.8203 13.9960 16.2344 13.9960 21.0625 L 13.9960 38.1719 Z M 21.4023 49.4687 C 19.0586 49.4687 17.7695 48.2031 17.7695 45.7656 L 17.7695 21.2734 C 17.7695 18.8359 19.0586 17.5937 21.4023 17.5937 L 46.3163 17.5937 C 48.6366 17.5937 49.9494 18.8359 49.9494 21.2734 L 49.9494 45.7891 C 49.9494 48.2031 48.6366 49.4687 46.3163 49.4687 Z M 33.9179 43.2812 C 34.9023 43.2812 35.6757 42.4844 35.6757 41.4297 L 35.6757 35.3359 L 41.6289 35.3359 C 42.7304 35.3359 43.6211 34.4922 43.6211 33.4844 C 43.6211 32.5 42.7304 31.6563 41.6289 31.6563 L 35.6757 31.6563 L 35.6757 25.5859 C 35.6757 24.5312 34.9023 23.7578 33.9179 23.7578 C 32.9336 23.7578 32.1367 24.5312 32.1367 25.5859 L 32.1367 31.6563 L 25.9726 31.6563 C 24.9882 31.6563 24.0976 32.5469 24.0976 33.4844 C 24.0976 34.4688 24.9882 35.3359 25.9726 35.3359 L 32.1367 35.3359 L 32.1367 41.4297 C 32.1367 42.4844 32.9336 43.2812 33.9179 43.2812 Z" />
                </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Category</span>
        </a>
    </li>
    <li>
        <a href="#"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg width="18px" height="18px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M 13.1615 50.9014 C 14.1949 50.9014 14.8969 50.5505 16.1448 49.4585 L 22.6963 43.6090 C 24.0807 45.1494 26.2255 45.9683 28.9358 45.9683 L 35.6433 45.9683 L 42.1752 51.5449 C 43.3452 52.5588 43.9885 53.0853 44.9441 53.0853 C 46.2895 53.0853 47.0306 52.1299 47.0306 50.6479 L 47.0306 45.9683 L 47.8493 45.9683 C 52.7435 45.9683 56.0000 43.0240 56.0000 37.9154 L 56.0000 26.3917 C 56.0000 21.2831 52.7435 18.3388 47.8493 18.3388 L 44.7880 18.3388 L 44.7880 16.8570 C 44.7880 11.5533 41.6489 8.4921 36.3454 8.4921 L 8.4624 8.4921 C 3.3537 8.4921 0 11.5533 0 16.8570 L 0 34.8151 C 0 40.1187 3.3537 43.1800 8.4624 43.1800 L 11.0362 43.1800 L 11.0362 48.5031 C 11.0362 50.0045 11.7771 50.9014 13.1615 50.9014 Z M 13.9804 41.8736 C 13.9804 40.7622 13.2980 40.2357 12.4595 40.2357 L 8.6378 40.2357 C 5.1866 40.2357 3.1393 38.3639 3.1393 34.7177 L 3.1393 16.9544 C 3.1393 13.3277 5.1866 11.4169 8.6378 11.4169 L 36.1505 11.4169 C 39.6015 11.4169 41.6489 13.3277 41.6489 16.9544 L 41.6489 18.3388 L 28.9358 18.3388 C 23.8272 18.3388 20.7855 21.2831 20.7855 26.3917 L 20.7855 37.9154 C 20.7855 38.9683 20.9024 39.9238 21.1559 40.8012 L 13.9804 47.4307 Z M 44.1055 49.5561 L 37.8468 43.9405 C 37.0666 43.2580 36.5989 43.0435 35.5263 43.0435 L 29.1113 43.0435 C 25.8551 43.0435 23.9247 41.2692 23.9247 37.8179 L 23.9247 26.4893 C 23.9247 23.0575 25.8551 21.2637 29.1113 21.2637 L 47.6740 21.2637 C 50.9301 21.2637 52.8605 23.0575 52.8605 26.4893 L 52.8605 37.8179 C 52.8605 41.2692 50.9105 43.0435 47.6740 43.0435 L 45.6266 43.0435 C 44.7880 43.0435 44.1055 43.5310 44.1055 44.6424 Z" />
                </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Comment</span>
        </a>
    </li>
    <li class="px-5">
        <div class="flex flex-row items-center h-8">
            <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
        </div>
    </li>
    <li>
        <a href="{{ route('pages.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-6 h-6 fill-slate-700" viewBox="0 0 21.00 21.00" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#555" stroke-linecap="round" stroke-linejoin="round" transform="translate(4 3)"><path d="m11.5.5h-7c-1.1045695 0-2 .8954305-2 2v9c0 1.1045695.8954305 2 2 2h7c1.1045695 0 2-.8954305 2-2v-9c0-1.1045695-.8954305-2-2-2z"/><path d="m2.5 2.5c-1.1045695 0-2 .8954305-2 2v8c0 1.6568542 1.34314575 3 3 3h6c1.1045695 0 2-.8954305 2-2"/></g></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Pages</span>
        </a>
    </li>
    <li class="hidden">
        <a href="{{ route('theme.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><path d="M 11.8302 46.6220 L 12.4197 46.5204 L 12.4197 47.6790 C 12.4197 51.8664 14.5336 53.9803 18.8022 53.9803 L 49.6174 53.9803 C 53.8661 53.9803 56 51.8664 56 47.6790 L 56 26.0717 C 56 21.9047 53.8661 19.7907 49.6174 19.7907 L 44.8613 19.7907 L 43.6619 12.8796 C 42.9301 8.7533 40.4502 7.0458 36.2833 7.7776 L 5.9354 13.1439 C 1.7278 13.8756 0 16.3149 .7521 20.4615 L 4.4515 41.5200 C 5.2036 45.6464 7.6429 47.3538 11.8302 46.6220 Z M 7.6429 40.7679 L 4.0044 20.0550 C 3.6182 17.9817 4.5532 16.7011 6.5452 16.3555 L 36.8117 11.0096 C 38.7834 10.6640 40.1047 11.5584 40.4706 13.6317 L 41.5684 19.7907 L 18.8022 19.7907 C 14.5336 19.7907 12.4197 21.8844 12.4197 26.0717 L 12.4197 43.1868 L 11.3220 43.3901 C 9.3097 43.7356 8.0087 42.8413 7.6429 40.7679 Z M 18.8429 50.7077 C 16.8102 50.7077 15.6922 49.6101 15.6922 47.4961 L 15.6922 26.2546 C 15.6922 24.1407 16.8102 23.0633 18.8429 23.0633 L 49.5770 23.0633 C 51.5690 23.0633 52.7275 24.1407 52.7275 26.2546 L 52.7275 47.4961 C 52.7275 49.6101 51.5690 50.7077 49.5770 50.7077 Z"/></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Themes</span>
        </a>
    </li>
    <li>
        <a href="{{ route('users.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><path d="M 7.7148 49.5742 L 48.2852 49.5742 C 53.1836 49.5742 55.6446 47.1367 55.6446 42.3086 L 55.6446 13.6914 C 55.6446 8.8633 53.1836 6.4258 48.2852 6.4258 L 7.7148 6.4258 C 2.8398 6.4258 .3554 8.8398 .3554 13.6914 L .3554 42.3086 C .3554 47.1602 2.8398 49.5742 7.7148 49.5742 Z M 7.7851 45.8008 C 5.4413 45.8008 4.1288 44.5586 4.1288 42.1211 L 4.1288 13.8789 C 4.1288 11.4414 5.4413 10.1992 7.7851 10.1992 L 48.2147 10.1992 C 50.5350 10.1992 51.8708 11.4414 51.8708 13.8789 L 51.8708 42.1211 C 51.8708 44.5586 50.5350 45.8008 48.2147 45.8008 L 43.6681 45.8008 L 43.6681 45.7539 C 41.7226 40.8086 36.2382 36.3320 27.9882 36.3320 C 19.8085 36.3320 14.3007 40.8086 12.4023 45.6602 L 12.4023 45.8008 Z M 27.9882 32.6523 C 32.2070 32.7227 35.5585 29.0898 35.5585 24.3555 C 35.5585 19.9258 32.2070 16.2930 27.9882 16.2930 C 23.7929 16.2930 20.3944 19.9258 20.4413 24.3555 C 20.4648 29.0898 23.7929 32.6055 27.9882 32.6523 Z"/></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Users</span>
        </a>
    </li>
    <li>
        <a href="{{ route('setting.index') }}"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:mx-4 hover:rounded-md hover:bg-yellow-400 hover:fill-amber-900 hover:text-amber-900 fill-gray-600 hover:font-semibold text-gray-600 border-l-4 border-transparent pr-6">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
        </a>
    </li>
</ul>