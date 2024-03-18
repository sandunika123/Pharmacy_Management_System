@include('style.style')
@include('libraries.script')


<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h1> UPDATE ITEM DETAILS </h1><br>
                        <form action='{{route('item.edit',$item->id)}}' method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="@error('name')is-invalid @enderror form-control" id="name" value="{{$item->name}}">
                                        @error('name')
                                            <div id="emailHelp1" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                            <div class="mb-3">
                                                <label for="qty" class="form-label">Available Quantity</label>
                                                <input type="text" name="qty" class="@error('qty')is-invalid @enderror form-control" id="qty"value="{{$item->qty}}">
                                                @error('qty')
                                                    <div id="emailHelp2" class="text-danger form-text">{{$message}}</div>
                                                @enderror
                                            </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="manufacturer" class="form-label">Manufacturer</label>
                                        <input type="text" name="manufacturer" class="@error('manufacturer')is-invalid @enderror form-control" id="manufacturer" value="{{$item->manufacturer}}">
                                        @error('manufacturer')
                                            <div id="emailHelp3" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="phonei" class="form-label">Phone</label>
                                        <input type="text" name="phonei" class="@error('phonei')is-invalid @enderror form-control" id="phonei" value="{{$item->phonei}}">
                                        @error('phonei')
                                            <div id="emailHelp3" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 ">


                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" name="description" class="@error('description')is-invalid @enderror form-control" id="description" value="{{$item->description}}">
                                        @error('description')
                                            <div id="emailHelp5" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>


                            </div>

                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Update Now">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








</x-app-layout>
