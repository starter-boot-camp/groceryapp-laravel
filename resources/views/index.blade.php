@extends ('app')

@section('content')

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>A Warm Welcome!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
@foreach ($products as $Productvar)
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="/img/{{$Productvar->image }}" alt="">
                <div class="caption">
                    <h3>{{ $Productvar->name}}  </h3>
                    <p>{{ $Productvar->description}}</p>
                    <p>
                        <span class="h3">&#8377;{{ $Productvar->amount}} /kg </span> <br>
                        <a href="/addtocart/{{$Productvar->id}}" class="btn btn-primary btn-block {{in_array($Productvar,session('checkout.cart')) ? 'disabled' : ''}}">Add to cart</a>
                    </p>
                </div>
            </div>
        </div>

  @endforeach
    </div>


  @stop
