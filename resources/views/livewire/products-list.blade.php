<div class="d-flex p-2 bd-highlight flex-wrap ms-auto gap-2">

    <div class="jumbotron jumbotron-fluid col-lg-12">
        <div class="container">
            <h1 class="display-4">Pots and Pans</h1>
            <p class="lead">With our user-friendly platform and wide selection of cookware, finding your ideal pan is just a few clicks away. Visit our website and embark on your journey to culinary excellence!</p>
            <button class="btn btn-primary" onclick="toggleComparisonTable('{{ Count($selectedProducts) }}')">
                Show Comparison Table ({{Count($selectedProducts)}})
            </button>
        </div>
    </div>

    <table class="table table-striped" id="comparison--table" style="display: none;">
        <thead>
            <tr>
                <td></td>
                @foreach ($comparisonKeyList as $key)
                <td>
                    {{ $key }}
                </td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($selectedProducts as $product)
            <tr>

                 <td>
                    <button wire:click="selectItem('{{ $product['sku'] }}')" class="btn btn-xs btn-danger">Remove</button>
                </td>
                <td>
                    {{$product['product_name']}}
                </td>
                <td>{{ $product['weight'] }}</td>
                <td>{{ $product['point_1'] }}</td>
                <td>{{ $product['point_2'] }}</td>
                <td>{{ $product['point_3'] }}</td>
                <td><img src="https://i.pinimg.com/originals/c3/6a/2d/c36a2da77aff809fc33fdf71d2585091.png" class="img-thumbnail" alt="" width="200"></td>
                <td>{{ $product['colour'] }}</td>
                <td>{{ $product['material'] }}</td>
                <td>{{ $product['range'] }}</td>
                <td>{{ $product['size'] }}</td>
                <td>{{ $product['oven_safe'] }}</td>
                <td>{{ $product['dishwasher_safe'] }}</td>
                <td>{{ $product['wash_by_hand'] }}</td>
                <td>{{ $product['guarantee_period'] }}</td>
                <td>{{ $product['price'] }}</td>
            </tr>

            @endforeach

        </tbody>
    </table>

    @foreach ($products as $product)
    <div class="card" id="item-{{ $product['sku'] }}" style="width: 18rem;">
        <img src="https://i.pinimg.com/originals/c3/6a/2d/c36a2da77aff809fc33fdf71d2585091.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product['product_name'] }}</h5>
            <p class="card-text">{{ $product['price'] }}</p>
            @if (in_array($product['sku'], array_column($selectedProducts, 'sku')))
            <button wire:click="selectItem('{{ $product['sku'] }}')" class="btn btn-primary btn-disabled" data-sku="{{ $product['sku'] }}">Selected</button>
            @else
            <button wire:click="selectItem('{{ $product['sku'] }}')" class="btn btn-primary select-item" data-sku="{{ $product['sku'] }}">Select</button>
            @endif
        </div>
    </div>

    @endforeach
</div>


<script>
    const selectedSkus = new Set();

    const selectButtons = document.querySelectorAll('.select-item');

    selectButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            /**
             * checks selected item and toggles item selection state
             */
            const sku = event.target.dataset.sku;

            if (selectedSkus.has(sku)) {
                selectedSkus.delete(sku);
                button.textContent = 'Select';
            } else {
                //max selectedSkus size 4
                if (selectedSkus.size >= 4 && button.textContent != 'Selected') {
                    alert("You can only compare up to 4 items");
                    return;
                }
                selectedSkus.add(sku);
                button.textContent = 'Selected';
            }
        });
    });

    function toggleComparisonTable(count = false) {
        /**
         * @param {number} count
         * toggles visibility of comparison table
         */
        if (!count || count == 0) return;
        const table = document.getElementById('comparison--table');
        if (table.style.display === "none") {
            table.style.display = "block";
        } else {
            table.style.display = "none";
        }
    }
</script>