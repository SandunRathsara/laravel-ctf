@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <label for="RecieverAccountNumber">Account Number</label>
            <input type="email" class="form-control" id="recieversAccountNumber" placeholder="Enter Account Number">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="email" class="form-control" id="amount" placeholder="Enter Ammount">
        </div>
        <div class="form-group">
            <label for="remark">Remark</label>
            <input type="email" class="form-control" id="remark" placeholder="Enter Remark">
        </div>
        <div class="form-group">
            <label for="recieversName">Recievers Name</label>
            <input type="email" class="form-control" id="recieversName" placeholder="Enter Recievers Name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection