<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1>Creare product</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
             @error('name') <p class="text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="decsription" class="form-label">Decsription</label>
                        <textarea  class="form-control" id="decsription" name="decsription">{{old('description')}}</textarea>
               @error('decsription') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
               @error('price') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="name" name="img" value="{{old('img')}}">
               @error('img') <p class="text-danger">{{$message}}</p>@enderror
                      </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>