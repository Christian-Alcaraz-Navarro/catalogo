<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-10 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-3 xl:grid-cols-4 lg:gap-x-10 lg:gap-y-5">
    <h1 class="font-medium text-xl lg:text-3xl lg:col-span-full lg:row-start-1">
        {{ $product->name }}
    </h1>
    <a href="{{ Storage::url($product->cover_image_path) }}" class="glightbox lg:col-span-2 xl:col-span-2">
        <img src="{{ Storage::url($product->cover_image_path) }}" alt="{{ $product->name }}"
             class="rounded-lg shadow-lg bg-gray-100 " width="600" height="500">
    </a>

    <div class="space-y-6 lg:col-start-3 xl:col-start-3 ">
        <ul class="space-y-6">
            @foreach($product->licenses as $license)
                <li>
                    <label for="{{ $license->id }}" class="flex items-center parent">
                        <div class="ml-1 text-xl font-medium uppercase" style="font-size: 4rem; margin-left: -1rem;">
                            @priceforhumans($license->pivot->price)
                        </div>
                    </label>
                </li>
            @endforeach
        </ul>     
        <ul class="space-y-6">
            <a href="https://api.whatsapp.com/send?phone=523122712478&text=Hola%20buenas%20tardes,%20me%20interesa%20información%20sobre:%20{{ $product->name }}."
            class="btn btn-primary d-flex align-middle align-items-center ml-1"
            style="text-decoration: none; color: white;">
                <img src="{{ asset('storage/whatsapp.jpeg') }}" alt="Icono" class="me-2 img-fluid mr-2" style="max-width: 30px;">
                <span>312-2712478</span>
            </a>
        </ul>
        <ul class="space-y-6 mt-10">
            <div class="mt-4 text-center lg:col-span-4 xl:col-span-4m mt-15">
                <a href="https://www.facebook.com/profile.php?id=100068093682470" target="_blank" class="btn btn-primary">
                    <img src="{{ asset('storage/facebook.png') }}" alt="Icono" class="me-2 img-fluid mr-2" style="max-width: 245px;">
                </a>
            </div>
        </ul>
    </div>   
    
    <div class="d-flex justify-content-righ ml-4 lg:col-start-4 xl:col-start-4"> 
        <div class="lg:col-span-1 xl:col-span-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 90%;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/principal2.jpg') }}" class="d-block w-300" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/principal3.jpg') }}" class="d-block w-300" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Tabs Section  --}}
    <div x-cloak x-data="tabs()" class="lg:col-span-2 xl:col-span-3">
        <ul class="inline-flex w-full border-b border-gray-300 select-none text-sm space-x-8">
            <template hidden x-for="item in getTabs()" :key="item">
                <li @click="setTab(item)" class="relative py-4 cursor-pointer hover:opacity-75">
                    <div :class="{ 'border-b-4 -mb-1': getActive() === item }"
                         class="absolute top-0 left-0 w-full h-full border-b-0 border-gray-900 transition-all ease-out duration-75"></div>
                    <span x-text="item" class="uppercase tracking-widest text-xs font-semibold"></span>
                </li>
            </template>
        </ul>
        <div class="py-5">
            <div x-show="getActive() === 'descripcion'" class="trix-content">
                {!! $product->description !!}
            </div>
            <div x-show="getActive() === 'galeria'" class="relative -mx-4 md:mx-0 px-4 md:px-0">
                <ul class="overflow-x-auto space-x-3 whitespace-nowrap -mx-4 md:mx-0 px-4 md:px-0">
                    @foreach($product->screenshots as $screenshot)
                        <li class="inline-flex">
                            <a href="{{ Storage::url($screenshot->path) }}" class="glightbox">
                                <img src="{{ Storage::url($screenshot->path) }}" alt="" width="300" height="300" class="rounded-lg shadow-sm">
                            </a>
                        </li>
                    @endforeach
                    <li class="md:w-5 inline-block"></li>
                </ul>
                <div class="absolute top-0 right-0 bottom-0 w-5 md:w-10 bg-gradient-to-r from-transparent to-white"></div>
            </div>
            {{-- <div x-show="getActive() === 'reviews'">
                <p class="text-sm leading-relaxed">
                    coming soon...
                </p>
            </div> --}}
        </div>
    </div>

    {{--  Related Templates Section  --}}
    @foreach ($product->categories as $category)
        @if($category->products->where('id', '!=', $product->id)->count() > 0)
            <section
                    class="border-t border-gray-300 py-8 flex flex-col md:flex-row flex-wrap items-start lg:col-span-full">
                <header class="flex-1">
                    <p class="text-lg font-medium">
                        {{ $category->name }}
                    </p>
                    <p class="text-gray-500 text-sm">
                        Productos relacionados.
                    </p>
                </header>
                <a href="{{ route('category', ['slug' => $category->slug]) }}"
                   class="order-last md:order-none w-full md:w-auto btn-secondary h-10 justify-center space-x-1">
                    <span>Ver todos</span>
                    <span class="md:hidden">related templates</span>
                </a>
                <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                    @foreach($category->products->where('id', '!=', $product->id)->take(4) as $each)
                        <li class="@if($loop->index > 1) hidden lg:block @endif">
                            <x-product-card :product="$each"/>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif
    @endforeach

</div>

<script>
  function tabs() {
    return {
      tab: 'descripcion',
      tabs: ['descripcion', 'galeria'],
      getTabs() {
        return this.tabs
      },
      setTab(tab) {
        this.tab = tab
      },
      getActive() {
        return this.tab
      },
    }
  }
</script>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"/>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script type="text/javascript">
      const lightbox = GLightbox();
    </script>
@endpush

