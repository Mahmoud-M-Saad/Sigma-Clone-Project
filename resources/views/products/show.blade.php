@extends('layouts.app')
<<<<<<< HEAD
@section('title') Shopping Cart @endsection
@section('content')
@section('page_name') Shopping Cart @endsection
=======
@section('title')
    search
@endsection
@section('content')
    <style>
        .card-body {
            background-color: #f3f3f3 !important
        }
>>>>>>> main

        .prod-title {
            max-width: 50px !important;
        }
    </style>
    <div class="container">
        <div>
            <h3>
                Shopping Cart
            </h3>
            <table>
                <tbody>
                    <tr>
                        <div class="card rounded-0 border-0 border-top">
                            <div class="card-body p-2 bg-light d-flex justify-content-between">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"
                                        width="7%" alt="">
                                    <p class="d-inline prod-title">
                                        dh product
                                    </p>
                                </div>
                                <div>
                                    @php($i = 1)
                                    <span id="quantity">{{ $i }}</span>
                                    <div class="d-inline-flex">
                                        <button class="btn btn-dark rounded-0 m-0">-</button>
                                        <button class="btn btn-primary rounded-0 rounded-end m-0"
                                            onclick={{ $i++ }}>+</button>
                                    </div>
                                    <span id="price">1500</span>
                                </div>
                                <button class="btn fs-4">×</button>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="card rounded-0 border-0 border-top mt-5">
                            <div class="card-body p-2 bg-light d-flex justify-content-between">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"
                                        width="7%" alt="">
                                    <span>
                                        dh product
                                    </span>
                                </div>
                                <div>
                                    @php($i = 1)
                                    <span id="quantity">{{ $i }}</span>
                                    <div class="d-inline-flex">
                                        <button class="btn btn-dark rounded-0 m-0">-</button>
                                        <button class="btn btn-primary rounded-0 rounded-end m-0"
                                            onclick={{ $i++ }}>+</button>
                                    </div>
                                    <span id="price">1500</span>
                                </div>
                                <button class="btn fs-4">×</button>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="card rounded-0 border-0 border-top mt-5">
                            <div class="card-body p-2 bg-light d-flex justify-content-between">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"
                                        width="7%" alt="">
                                    <span>
                                        dh product
                                    </span>
                                </div>
                                <div>
                                    @php($i = 1)
                                    <span id="quantity">{{ $i }}</span>
                                    <div class="d-inline-flex">
                                        <button class="btn btn-dark rounded-0 m-0">-</button>
                                        <button class="btn btn-primary rounded-0 rounded-end m-0"
                                            onclick={{ $i++ }}>+</button>
                                    </div>
                                    <span id="price">1500</span>
                                </div>
                                <button class="btn fs-4">×</button>
                            </div>
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-sm-4 mt-5 text-end">
            <table class="table table-bordered border border-2">
                <tbody>
                    <tr>
                        <td class="fw-bold">Count items:</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total:</td>
                        <td>1500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between">
            <button class="btn btn-primary rounded-0">Continue Shopping</button>
            <button class="btn btn-primary rounded-0">Checkout</button>
        </div>

        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png"
                        class="d-block w-25 rounded-circle" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-25 rounded-circle"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/539945966/photo/night-landscape-with-colorful-milky-way.jpg?s=612x612&w=0&k=20&c=r1ay5QLadi_vrBzlekX1YHgCwwRHbKnFBQb7pn6-g2Y="
                        class="d-block w-25 rounded-circle" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </div>
@endsection
