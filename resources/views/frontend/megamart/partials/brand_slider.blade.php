    
<style>
    h2 {
        text-align: center;
        padding: 20px;
        text-transform: uppercase;
    }
    b {
        color: red;
    }
    .brand-logos-slider .slick-slide {
        margin: 0px 20px;
    }
    .brand-logos-slider  .slick-slide img {
        width: 100%;
    }
    .brand-logos-slider {
        max-height: 150px; /* Adjust the height as needed */
        overflow: hidden; /* Ensures no extra spacing */
    }   

    .brand-logos-slider .slide img {
        object-fit: contain;
        width: 100%;
        height: auto;
        max-width: 100px;
    }
</style>
 <section class="brand-logos-slider slider">

    @php
        $brands_slides = \App\Models\Brand::all();
    @endphp



    @foreach ( $brands_slides as $slide )
        <div class="slide d-flex align-items-center justify-content-center"><img src="{{ uploaded_asset($slide->logo) }}" alt="{{translate('Brand')}}"></div>
    @endforeach
    
 
</section>

