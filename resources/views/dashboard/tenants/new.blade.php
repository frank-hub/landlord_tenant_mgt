@extends('layouts.main')
@section('main')
<div class="content">
    <div class="container-fluid">
        <form action="{{route('tenants.store')}}" method="post">
            @csrf
            
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">RegisterTenant</h4>
                </div>
                <div class="card-body ">
                    <div class="row">

                    <div class="col-md-6 ">
                        <div class="form-group has-label">
                            <label>
                                Full Name
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="f_name" type="text" required="true">
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Email Address
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="email" type="email" required="true">
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Phone No.
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="phone" type="tel" required="true">
                        </div>
                        <div class="form-group has-label">
                            <label>
                                National ID.
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="no_id" type="number" required="true">
                        </div>
                        <div class="form-group has-label">
                            <label>
                                Address
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="address" type="text" required="true">
                        </div>
                        
                        <div class="card-category form-category">
                            <star class="star">*</star> Required fields</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-label has-success">
                            <label>
                                Occupation Status
                                <star class="star">*</star>
                            </label>
                            <select name="occupation_status" value="Success" class="form-control" >
                                <option selected value="employed">Employed</option>
                                <option value="unemployed">UnEmployed</option>
                                <option value="Business Owner">Business Owner</option>
                            </select>
                        </div>
                        <div class="form-group has-label has-success">
                            <label>
                                At
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="at"  type="text" required="true">
                        </div>
                        <div class="form-group has-label has-success">
                            <label>
                                Contact Phone
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="contact_phone"  type="tel" required="true">
                        </div>
                        <div class="form-group has-label has-error">
                            <label>
                                Emergency Name
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="emg_name" type="text" required="true">
                        </div>
                        <div class="form-group has-label has-error">
                            <label>
                                Emergency Phone
                                <star class="star">*</star>
                            </label>
                            <input class="form-control" name="emg_phone" type="text" required="true">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-wd btn-warning btn-outline">
                        <span class="btn-label">
                            <i class="fa fa-paper-plane"></i>
                        </span>
                        SUBMIT
                    </button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection