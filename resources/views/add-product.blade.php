@include('layout.css')
@include('layout.navbar')
<section>
    <div style="display:flex; justify-content: center;">
        <div class="col-sm-3">
            <div class="signup-form">
                <!--sign up form-->
                <h2>Add Product</h2>
                <form action="/add-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Product name</label>
                    <input type="text" placeholder="Product name" name="product_name" autocomplete="off" />

                    <label for="">Price</label>
                    <input type="number" placeholder="Product price" name="product_price" autocomplete="off" />

                    <label for="">Image</label>
                    <input type="file" name="product_image" />

                    <label for="">Description</label>
                    <input type="text" placeholder="Product Description" name="product_description" />

                    <label for="">Category</label>
                    <select name="product_category">
                        <option value="">Select Category</option>
                        <option value="T-shirt">T-shirt</option>
                        <option value="Gadget">Gadget</option>
                        <option value="Electronics">Electronics</option>
                    </select>

                    <label for="">Quantity</label>
                    <input type="number" placeholder="Product Quantity" name="product_quantity" />

                    <button type="submit" class="btn btn-default ">Add product</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div style="padding-top: 4em">
    @include('partials.footer')
</div>
@include('layout.script')
