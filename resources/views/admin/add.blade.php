
                <div class="container row p-0 m-0 proBanner mt-5 bg-light p-5"  id="proBanner">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>

                @endif
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light ">
                                <div class="card-header">
                                    ADD Products
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-0 m-0">
                                        <h1>Add</h1>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="url">Image</label>
                                            <input type="file" class="form-control " name="url" id="url" placeholder="Enter your Images">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control text-white" name="name" id="name" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">quantity</label>
                                            <input type="number" class="form-control text-white" name="quantity" id="quantity" placeholder="Enter your quantity">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">price</label>
                                            <input type="number" class="form-control text-white" name="price" id="price" placeholder="Enter your price">
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

