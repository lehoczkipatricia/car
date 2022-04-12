@extends("layouts.master")
@section("content")

<div class="row">
    <div class="col-lg-3 offset-lg-3  mt-4">
        <form class="form-control" action="update-car" method="POST">
        @csrf
        @method("PUT")
            <input type="hidden" name="id" value="{{$car->id}}">
            <label for="plate">Rendszám</label>
            <input class="form-control" type="text" name="plate" for="plate" value="{{$car->plate}}">

            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand" for="brand" value="{{$car->brand}}">

            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color" for="color" value="{{$car->color}}">

            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" for="price" value="{{$car->price}}">

            <button class="btn btn-outline-primary" type="submit">Hozzáad</button>
        </form>
    </div>
</div>
@endsection