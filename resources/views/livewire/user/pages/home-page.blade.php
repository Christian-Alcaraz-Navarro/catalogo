<div>
    <!--  sales heading-->
    <section class="container py-10 md:py-16">
        <div class="text-center flex flex-col items-center space-y-3 md:space-y-4">
            <figure class="text-6xl md:text-8xl leading-tight md:leading-snug">
                🖥️📱
            </figure>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight">
                Build Apps Fast
            </h1>
            <h2 class="text-gray-500 lg:text-lg w-3/4 md:w-auto">
                Premium ready-to-use templates, source codes and starter kits for developers and startups.
            </h2>
            <a href="#" class="btn-primary h-12">
                Why Our Templates?
            </a>
        </div>
    </section>

    <div class="container space-y-5 divide-y">
        <!--    latest section-->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Latest
                </p>
                <p class="text-gray-500 text-sm">
                    Most recently added to our collection.
                </p>
            </header>
            <a href="{{ route('shop.page', ['orderby' => 'date']) }}"
               class="order-last md:order-none w-full md:w-auto btn-secondary justify-center space-x-1 h-10">
                <span>View all</span>
                <span class="md:hidden">latest templates</span>
            </a>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($latest_products as $product)
                    <li class="@if($loop->index > 1) hidden lg:block @endif">
                        <x-product-card :product="$product"/>
                    </li>
                @endforeach
            </ul>
        </section>
        <!--    popular section-->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Popular
                </p>
                <p class="text-gray-500 text-sm">
                    Top-sellers in the past week!
                </p>
            </header>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($popular_products as $product)
                    <li>
                        <x-product-card :product="$product"/>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</div>
