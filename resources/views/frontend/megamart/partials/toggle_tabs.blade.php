<style>
    .custom-tabs-wrapper {
        position: relative;
        display: inline-flex;
        background: #f5f5f5;
        padding: 4px;
        border-radius: 50px;
        width: fit-content;
        position: relative;
    }

    .custom-tab {
        padding: 2px 20px;
        border-radius: 25px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        color: #666;
        transition: color 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .custom-tab.active {
        color: black;
        font-weight: 700;
        background: #fff
    }

    /* Moving Bubble Indicator */
    .bubble {
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: 5px;
        width: calc(100% / 3 - 3px);
        /* Adjust width to fit */
        background: white;
        border-radius: 25px;
        transition: transform 0.3s ease-in-out;
        z-index: 1;
    }
</style>
<div class="container mt-5 text-center">
    <!-- Tabs -->
    <div class="custom-tabs-wrapper mx-auto">
        <div class="bubble"></div>
        <div class="custom-tab active" onclick="showTab('newArrivals', 0)">New Arrivals</div>
        <div class="custom-tab " onclick="showTab('bestSellers', 1)">Best Sellers</div>
        <div class="custom-tab" onclick="showTab('onSale', 2)">Discounts & Sale</div>
      
    </div>

    <!-- Cards -->
    <div class="mt-4">
        <div id="newArrivals" class="tab-content">

            <div id="section_newest">
               {!!get_product_skeleton() !!}
            </div>
            
        </div>
        <div id="bestSellers" class="tab-content d-none">
            <!-- Featured Products -->
            <div id="section_featured">

            </div>
        </div>
        <div id="onSale" class="tab-content d-none">
            
        </div>
       
    </div>
</div>
