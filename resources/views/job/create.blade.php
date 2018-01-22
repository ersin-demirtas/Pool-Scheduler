@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create New Job</h1>
            {{ Form::open(array('url' => 'job/create')) }}
            <div class="col-sm-3">
                <div class="form-group">
                    {!! Form::label('job_date', 'Appointment Date:') !!}
                    {!! Form::date('job_date', '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                {!! Form::label('job_book', 'Selection Location:') !!}
                <select class="form-control" name="job_book">
                    @foreach($locations as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                {!! Form::label('job_start', 'Job Start:') !!}
                <select class="form-control" name="job_start" id="job_start" v-on:change="onStartSelected">
                    <option value="0800">8:00am</option>
                    <option value="0830">8:30am</option>
                    <option value="0900">9:00am</option>
                    <option value="0930">9:30am</option>
                    <option value="1000">10:00am</option>
                    <option value="1030">10:30am</option>
                    <option value="1100">11:00am</option>
                    <option value="1130">11:30am</option>
                    <option value="1200">12:00pm</option>
                    <option value="1230">12:30pm</option>
                    <option value="1300">1:00pm</option>
                    <option value="1330">1:30pm</option>
                    <option value="1400">2:00pm</option>
                    <option value="1430">2:30pm</option>
                    <option value="1500">3:00pm</option>
                    <option value="1530">3:30pm</option>
                    <option value="1600">4:00pm</option>
                    <option value="1630">4:30pm</option>
                    <option value="1700">5:00pm</option>
                    <option value="1730">5:30pm</option>
                    <option value="1800">6:00pm</option>
                </select>
                </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                {!! Form::label('job_end', 'Job End:') !!}
                <select class="form-control" name="job_end" id="job_end">
                    <option value="0800">8:00am</option>
                    <option value="0830">8:30am</option>
                    <option value="0900">9:00am</option>
                    <option value="0930">9:30am</option>
                    <option value="1000">10:00am</option>
                    <option value="1030">10:30am</option>
                    <option value="1100">11:00am</option>
                    <option value="1130">11:30am</option>
                    <option value="1200">12:00pm</option>
                    <option value="1230">12:30pm</option>
                    <option value="1300">1:00pm</option>
                    <option value="1330">1:30pm</option>
                    <option value="1400">2:00pm</option>
                    <option value="1430">2:30pm</option>
                    <option value="1500">3:00pm</option>
                    <option value="1530">3:30pm</option>
                    <option value="1600">4:00pm</option>
                    <option value="1630">4:30pm</option>
                    <option value="1700">5:00pm</option>
                    <option value="1730">5:30pm</option>
                    <option value="1800">6:00pm</option>
                </select>
                </div>
            </div>
<!-- CLEAR -->
            <div class="col-sm-6"> <!-- CUSTOMER PICKUP START -->
                <div class="form-group col-sm-12">
                    {!! Form::label('pickup_name', 'Customer Name (Pickup Location):') !!}
                    {!! Form::text('pickup_name', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6" style="">
                    {!! Form::label('pickup_phone', 'Customer Phone:') !!}
                    {!! Form::text('pickup_phone', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6" style="">
                    {!! Form::label('pickup_email', 'Customer Email:') !!}
                    {!! Form::email('pickup_email', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('pickup_street', 'Street Address:') !!}
                    {!! Form::text('pickup_street', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-5">
                    {!! Form::label('pickup_city', 'City:') !!}
                    {!! Form::text('pickup_city', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('pickup_state', 'State:') !!}
                    {!! Form::text('pickup_state', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('pickup_zip', 'Zip Code:') !!}
                    {!! Form::text('pickup_zip', '', ['class' => 'form-control']) !!}
                </div>
            </div> <!-- CUSTOMER PICKUP END -->
            <div class="col-sm-6"> <!-- CUSTOMER DROPOFF START -->
                <div class="form-group col-sm-12">
                    <label for="dropoff_name">Customer Name (Drop-Off Location):</label>
                    <span class="btn btn-danger btn-xs" v-on:click="setDropAddress">Set Same as Pickup</span>
                    <!-- {!! Form::label('dropoff_name', 'Customer Name (Drop-Off Location):') !!} -->
                    {!! Form::text('dropoff_name', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6" style="">
                    {!! Form::label('dropoff_phone', 'Customer Phone:') !!}
                    {!! Form::text('dropoff_phone', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6" style="">
                    {!! Form::label('dropoff_email', 'Customer Email:') !!}
                    {!! Form::email('dropoff_email', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('dropoff_street', 'Street Address:') !!}
                    {!! Form::text('dropoff_street', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-5">
                    {!! Form::label('dropoff_city', 'City:') !!}
                    {!! Form::text('dropoff_city', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('dropoff_state', 'State:') !!}
                    {!! Form::text('dropoff_state', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('dropoff_zip', 'Zip Code:') !!}
                    {!! Form::text('dropoff_zip', '', ['class' => 'form-control']) !!}
                </div>
            </div> <!-- CUSTOMER DROPOFF END -->
            <div class="col-sm-12">
                {!! Form::label('job_type', 'Select Job Type:') !!}
                <div class="form-group">

                    @foreach($services as $service)
                    <div class="col-sm-6">
                        <input @change="getServiceCost({{$service->id}})" type="checkbox" name="job_type[]" value="{{$service->id}}">{{$service->title_long}}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('table_size', 'Table Size:') !!}
                    <select class="form-control" name="table_size" id="table_size">
                        <option value="0">Select Table Size</option>
                        <option value="7">7 ft</option>
                        <option value="8">8 ft</option>
                        <option value="9">9 ft</option>
                        <option value="10">10 ft</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('cloth_type', 'Cloth Type:') !!}
                    <select class="form-control" name="cloth_type" id="cloth_type" v-on:change="">
                        <option value="0">Select Cloth Type</option>
                        <option v-for="cloth in cloths" value="@{{ cloth.id}}">@{{ cloth.name }}</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('cloth_color', 'Cloth Color:') !!}
                    <select class="form-control" name="cloth_color" id="cloth_color">
                        <option value="0">Select Cloth Color</option>
                        <option v-for="color in colors" value="@{{ color.id}}">@{{ color.name }}</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('job_notes', 'Notes:') !!}
                    {!! Form::textarea('job_notes', '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                {!! Form::label('job_quote', 'Job Quote Estimate:') !!}
                <input type="text" id="job_quote">
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::submit('Schedule Job', ['class' => 'btn btn-success']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
