@extends('website.layouts.app')
@section('content')
@section('title', 'Seller Register')
<!-- ================> login section start here <================== -->
<section class="log-reg">
    <div class="container">
        <div class="row">
            <div class="image">
            </div>
            <div class="col-lg-7">
                <div class="log-reg-inner">
                    <div class="main-content">
                        <form action="{{ route('save.seller_register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="content-title">Seller Acount Details</h3>
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="my-form-control" value="{{old('name')}}" name="name" placeholder="Enter Your Full Name">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Gender*</label>
                                <div class="banner__inputlist">
                                    <div class="s-input me-3">
                                        <input type="radio" name="gender" value="men" id="males1" @if(old('gender')=="men") checked @endif>
                                        <label for="males1">Man</label>
                                    </div>
                                    <div class="s-input">
                                        <input type="radio" name="gender" value="women"id="females1" @if(old('gender')=="women") checked @endif>

                                        <label for="females1">Woman</label>
                                    </div>

                                </div>
                                @if ($errors->has('gender'))
                                    <p class="text-danger">{{ $errors->first('gender') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Date of Birth*</label>
                                <input type="date" name="birthday" value="{{old('birthday')}}" class="my-form-control">
                                @if ($errors->has('birthday'))
                                    <p class="text-danger">{{ $errors->first('birthday') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Mobile*</label>
                                <input type="text" class="my-form-control" name="mobile" value="{{old('mobile')}}" placeholder="Enter Your Mobile Num">
                                @if ($errors->has('mobile'))
                                    <p class="text-danger">{{ $errors->first('mobile') }}</p>
                                @endif
                            </div>
<<<<<<< HEAD
                            <!-- {{-- <div class="form-group">
                                    <label>Email Address*</label>
                                    <input type="email" class="my-form-control"name="email" placeholder="Enter Your Email">
                                     @if ($errors->has('email'))
                                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                                    @endif
                                </div> --}} -->
=======
>>>>>>> main
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="text" class="my-form-control" name="password" value="{{old('password')}}"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    placeholder="Enter Your Password">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm Password*</label>
                                <input type="text" class="my-form-control" name="confirmpassword" value="{{old('confirmpassword')}}"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    placeholder="Enter Your Password">
                                @if ($errors->has('confirmpassword'))
                                    <p class="text-danger">{{ $errors->first('confirmpassword') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Enter Your Price*</label>
                                <input type="text" name="price" class="my-form-control" value="{{old('price')}}" placeholder="Enter Your Price">
                                @if ($errors->has('price'))
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label>Enter Your Address*</label>
                                <input type="text" name="city" class="my-form-control" value="{{old('city')}}" placeholder="Enter Your Address">
                                @if ($errors->has('city'))
                                    <p class="text-danger"></p>
=======
                                <label>City*</label>
                                <input type="text" name="address" class="my-form-control" id="location" />
                                @if ($errors->has('address'))
                                    <p class="text-danger">{{ $errors->first('address') }}</p>
>>>>>>> main
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Upload Your Photo</label>
                                <input type="file" name="image" class="my-form-control" value="{{old('image')}}">
                            </div>
                            <button class="default-btn reverse" data-toggle="modal" type="submit"
                                data-target="#email-confirm"><span>Create Your Profile</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->
@endsection
@section('script')
@endsection
