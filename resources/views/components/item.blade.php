<h1> ADD ITEM DETAILS </h1><br>
                        <form action='/items/save' method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="@error('name')is-invalid @enderror form-control" id="name">
                                        @error('name')
                                            <div id="emailHelp1" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                            <div class="mb-3">
                                                <label for="qty" class="form-label">Available Quantity</label>
                                                <input type="text" name="qty" class="@error('qty')is-invalid @enderror form-control" id="qty">
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
                                        <input type="text" name="manufacturer" class="@error('manufacturer')is-invalid @enderror form-control" id="manufacturer">
                                        @error('manufacturer')
                                            <div id="emailHelp3" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="phonei" class="form-label">Phone</label>
                                        <input type="text" name="phonei" class="@error('phonei')is-invalid @enderror form-control" id="phonei">
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
                                        <input type="text" name="description" class="@error('description')is-invalid @enderror form-control" id="description">
                                        @error('description')
                                            <div id="emailHelp5" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>


                            </div>

                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Register Now">


                        </form>
