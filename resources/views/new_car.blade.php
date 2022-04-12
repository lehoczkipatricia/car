@extends("layouts.master")
@section("content")

<div class="row">
    <div class="col-lg-3 offset-lg-3  mt-4">
        <form class="form-control" action="store-car" method="post">
        @csrf
            <label for="plate">Rendszám</label>
            <input class="form-control" type="text" name="plate" for="plate">

            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand" for="brand">

            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color" for="color">

            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" for="price">

            <button class="btn btn-outline-primary mt-2" type="submit">Hozzáad</button>
        </form>
    </div>
</div>
@endsection