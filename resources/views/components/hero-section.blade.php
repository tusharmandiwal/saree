<div class="bg-white ">
    <!-- Main Container -->
    <div class="container mx-auto px-[5%] py-12 md:py-20">
        <!-- Hero Section -->
        <div class="flex flex-row md:items-center md:space-x-8">
            <!-- Left Side: Text Content -->
            <div class="md:flex-[1.5] flex-[2] md:text-left mb-2 md:mb-0">
                <h1 class="text-xl md:text-6xl font-bold leading-tight text-black">
                "Your Perfect Match in Ethnic Elegance – Discover Timeless Sarees & Suits."

                </h1>
                <p class="text-gray-600 md:text-lg text-xs md:mt-4 mt-2 max-w-md mx-auto md:mx-0">
                "From classic handwoven sarees to elegant suits, discover a curated collection that celebrates the essence of Indian craftsmanship and timeless beauty. Shop online with confidence and grace for every occasion."
                </p>
                <button
                    class="md:mt-6 mt-3 md:px-8 md:py-3 px-3 py-2 bg-black text-white text-lg font-semibold rounded hover:bg-gray-800 transition duration-300">
                    Shop Now
                </button>
            </div>

            <!-- Right Side: Image -->
            <div class="flex-1 md:w-1/2">
             <img src="{{ asset('mainhero.jpeg') }}"
            alt="Hero Image" 
             class="w-64 h-100 ml-4" />
            </div>

        </div>

        <!-- Stats Section -->
        <div class="flex justify-around items-center mt-10">
            <div class="text-center">
                <h2 class="text-lg md:text-3xl font-bold text-black">200+</h2>
                <p class="text-gray-600 text-xs md:text-xl">styles</p>
            </div>
            <div class="text-center">
                <h2 class="text-lg md:text-3xl font-bold text-black">2,000+</h2>
                <p class="text-gray-600 text-xs md:text-xl">High-Quality Products</p>
            </div>
            <div class="text-center">
                <h2 class="text-lg md:text-3xl font-bold text-black">100000+</h2>
                <p class="text-gray-600 text-xs md:text-xl">Happy Customers</p>
            </div>
        </div>

        <!-- Categories Section -->
        <div class="mt-12">
          <h2 class="text-center text-2xl md:text-4xl font-bold text-black mb-8">Shop by Categories</h2>
          <div class="">

            <livewire:public.product.category-header/>

          </div>
        </div>

    </div>
</div>
