<h1> ADD CUSTOMER DETAILS </h1><br>
                        <form action='/customers/save' method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="@error('fname')is-invalid @enderror form-control" id="fname">
                                        @error('fname')
                                            <div id="emailHelp1" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                            <div class="mb-3">
                                                <label for="lname" class="form-label">Last Name</label>
                                                <input type="text" name="lname" class="@error('lname')is-invalid @enderror form-control" id="lname">
                                                @error('address')
                                                    <div id="emailHelp2" class="text-danger form-text">{{$message}}</div>
                                                @enderror
                                            </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="@error('phone')is-invalid @enderror form-control" id="phone">
                                        @error('phone')
                                            <div id="emailHelp3" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="email" class="form-label">E mail</label>
                                        <input type="text" name="email" class="@error('email')is-invalid @enderror form-control" id="email">
                                        @error('email')
                                            <div id="emailHelp3" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 ">


                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" class="@error('address')is-invalid @enderror form-control" id="address">
                                        @error('address')
                                            <div id="emailHelp5" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>


                            </div>

                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Register Now">


                        </form>
