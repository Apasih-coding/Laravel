<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3><u>PRODUCT LIST</u></h3>
        <a href="{{route('downloadPDF')}}" class="btn btn-info">Show Products</a>
    </div>
    <div class="row justify-content-center gap-3">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th>
                            <img src="{{ $product['thumbnail'] }}" class="img-table">
                        </th>
                        <td>{{ $product['title'] }}</td>
                        <td>{{ $product['category'] }}</td>
                        <td>{{ $product['brand'] }}</td>
                        <th>{{ $product['stock'] }}</th>
                        <td>$.{{ $product['price'] }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary modal-detail-btn" data-bs-toggle="modal" data-bs-target="#productModal" data-productid="{{ $product['id'] }}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button wire:click="loadMore" class="btn btn-link">SHOW 20 ITEMS</button>

            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="productModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5><u>Title</u></h5>
                                <img src="" alt="">
                                <div class="row">
                                    <div class="col">
                                        <img src="" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h6>Price : $600</h6>
                                        <p>Category: Smarphones</p>
                                    </div>
                                    <div class="col">
                                        <div class="star-rating">
                                            <div class="star-progress"></div>
                                        </div>
                                        <p class="brand">Brand: Smarphones</p>
                                    </div>
                                </div>
                                <p>Stock: 90</p>
                                <p>Description: <br/>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, tempora.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>