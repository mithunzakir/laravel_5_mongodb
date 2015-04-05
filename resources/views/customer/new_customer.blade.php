@extends('app')

@section('content')
<!--<div class="container">-->
    <div class="row">

        <form action="/customer" method='post' class="form-horizontal" role="form">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">User name</label>
                <div class="col-sm-10">
                    <input type="text" name="user-name" class="form-control" id="inputEmail3" placeholder="User Name/Company Name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Contact person</label>
                <div class="col-sm-10">
                    <input type="text" name="contact-person" class="form-control" id="inputEmail3" placeholder="Name of the contact person">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="user Email">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID No</label>
                <div class="col-sm-10">
                    <input type="text" name="id-no" class="form-control" id="inputEmail3" placeholder="ID No.">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" name="nationality" class="form-control" id="inputEmail3" placeholder="Nationality">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="Phone no.">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Student</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="student" value="student" class="form-control" id="inputEmail3" >
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Business</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="business" value="business" class="form-control" id="inputEmail3">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Service</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="service" value="service" class="form-control" id="inputEmail3">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Profession Detail</label>
                <div class="col-sm-10">
                    <input type="text" name="professional-detail" class="form-control" id="inputEmail3" placeholder="Professional Detail">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Holding/Room no</label>
                <div class="col-sm-10">
                    <input type="text" name="holding" class="form-control" id="inputEmail3" placeholder="Holding/Room no">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Holding 2nd no</label>
                <div class="col-sm-10">
                    <input type="text" name="holding2" class="form-control" id="inputEmail3" placeholder="Holding 2nd no.">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Floor no.</label>
                <div class="col-sm-10">
                    <input type="text" name="floor-no" class="form-control" id="inputEmail3" placeholder="Floor no">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Building Name</label>
                <div class="col-sm-10">
                    <input type="text" name="building-no" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Road name</label>
                <div class="col-sm-10">
                    <input type="text" name="road-name" class="form-control" id="inputEmail3" placeholder="Road name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Block/sector</label>
                <div class="col-sm-10">
                    <input type="text" name="block" class="form-control" id="inputEmail3" placeholder="Block/sector">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">para/moholla</label>
                <div class="col-sm-10">
                    <input type="text" name="para" class="form-control" id="inputEmail3" placeholder="Para/Moholla">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Thana</label>
                <div class="col-sm-10">
                    <input type="text" name="thana" class="form-control" id="inputEmail3" placeholder="Thana">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">District</label>
                <div class="col-sm-10">
                    <input type="text" name="district" class="form-control" id="inputEmail3" placeholder="District">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Postal Code</label>
                <div class="col-sm-10">
                    <input type="text" name="postal-code" class="form-control" id="inputEmail3" placeholder="Postal code">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Country</label>
                <div class="col-sm-10">
                    <input type="text" name="country" class="form-control" id="inputEmail3" placeholder="Country">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Internet Banwidth</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="internet-bandwidth" value="internet bandwidth" class="form-control" id="inputEmail3" >
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">CATV</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="catv" value="catv" class="form-control" id="inputEmail3" placeholder="CATV">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Data connectivity</label>
                <div class="col-sm-2">
                    <input type="checkbox" name=" data-connectivity" value="data connectivity" class="form-control" id="inputEmail3">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Connection Date</label>
                <div class="col-sm-3">
                    <input type="text" name="connection-date" class="form-control" id="inputEmail3" placeholder="Connnection date">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Number of connection</label>
                <div class="col-sm-3">
                    <input type="text" name="number-of-connection" class="form-control" id="inputEmail3" placeholder="Number Of Connection">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Local IP</label>
                <div class="col-sm-10">
                    <input type="text" name="local-ip" class="form-control" id="inputEmail3" placeholder="Local ip">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Real IP</label>
                <div class="col-sm-10">
                    <input type="text" name="real-ip" class="form-control" id="inputEmail3" placeholder="Real Ip">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Bandwidth Up</label>
                <div class="col-sm-3">
                    <input type="text" name="bandwidth-up" class="form-control" id="inputEmail3" placeholder="Bandwidth Up">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Down</label>
                <div class="col-sm-3">
                    <input type="text" name="down" class="form-control" id="inputEmail3" placeholder="Down">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">MAC/Server</label>
                <div class="col-sm-10">
                    <input type="text" name="mac" class="form-control" id="inputEmail3" placeholder="Mac/Server">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Bandwith input from</label>
                <div class="col-sm-3">
                    <input type="text" name="bandwidth-input-from" class="form-control" id="inputEmail3" placeholder="Bandwith input from">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Port no</label>
                <div class="col-sm-3">
                    <input type="text" name="port-no" class="form-control" id="inputEmail3" placeholder="Port no">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Bandwith IN/OUT</label>
                <div class="col-sm-3">
                    <input type="text" name="bandwidth-in" class="form-control" id="inputEmail3" placeholder="Bandwidth IN/OUT">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">VLAN ID</label>
                <div class="col-sm-3">
                    <input type="text" name="vlan-id" class="form-control" id="inputEmail3" placeholder="Vlan ID">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">POP name/Core detail</label>
                <div class="col-sm-10">
                    <input type="text" name="pop-name" class="form-control" id="inputEmail3" placeholder="POP name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Connection installation address</label>
                <div class="col-sm-10">
                    <input type="text" name="connection-installation-address" class="form-control" id="inputEmail3" placeholder="Connection installation address">
                </div>
            </div>

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Analog Service</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="analog-service" value="analog-service" class="form-control" id="inputEmail3">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Digital Service</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="digital-service" value="digital-service" class="form-control" id="inputEmail3">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Number of channel</label>
                <div class="col-sm-2">
                    <input type="text" name="number-of-channel" class="form-control" id="inputEmail3" placeholder="Number of channel">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Box serial no</label>
                <div class="col-sm-3">
                    <input type="text" name="box-serial-number" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Card number</label>
                <div class="col-sm-3">
                    <input type="text" name="card-number" class="form-control" id="inputEmail3" placeholder="Card number">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Pakage detail</label>
                <div class="col-sm-10">
                    <input type="text" name="package-detail" class="form-control" id="inputEmail3" placeholder="Pakage detail">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product</label>
                <div class="col-sm-3">
                    <input type="text" name="product" class="form-control" id="inputEmail3" placeholder="Product">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Aditional charge</label>
                <div class="col-sm-3">
                    <input type="text" name="aditional-charge" class="form-control" id="inputEmail3" placeholder="Aditional charge">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Security Deposit</label>
                <div class="col-sm-3">
                    <input type="text" name="security-deposit" class="form-control" id="inputEmail3" placeholder="Security Deposit">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Monthly Rent/Charge</label>
                <div class="col-sm-3">
                    <input type="text" name="monthly-rent" class="form-control" id="inputEmail3" placeholder="Monthly Rent/Charge">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                <div class="col-sm-5">
                    <input type="text" name="total" class="form-control" id="inputEmail3" placeholder="Total">
                </div>
            </div>
            
            User
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Individual</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="individual" class="form-control" id="inputEmail3" placeholder="Individual">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Corporate</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="corporate" class="form-control" id="inputEmail3" placeholder="Corporate">
                </div>

            </div>
            Billing
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Per month</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="per-month" class="form-control" id="inputEmail3" placeholder="Per month">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Per day</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="per-day" class="form-control" id="inputEmail3" placeholder="Email">
                </div>

            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Area Cord(main)</label>
                <div class="col-sm-3">
                    <input type="text" name="area-code-main" class="form-control" id="inputEmail3" placeholder="Area Cord(main)">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Area cord(sub)</label>
                <div class="col-sm-3">
                    <input type="text" name="area-code-sub" class="form-control" id="inputEmail3" placeholder="Area cord(sub)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Reference</label>
                <div class="col-sm-3">
                    <input type="text" name="reference" class="form-control" id="inputEmail3" placeholder="Reference">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Note</label>
                <div class="col-sm-3">
                    <input type="text" name="note" class="form-control" id="inputEmail3" placeholder="Note">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Installment</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="installment" value="installment" class="form-control" id="inputEmail3" placeholder="Installment">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Down payment</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="down-payment" value="down payment" class="form-control" id="inputEmail3" placeholder="Down payment">
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label">Full paid</label>
                <div class="col-sm-2">
                    <input type="checkbox" name="full-paid" value="full paid" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Connected by</label>
                <div class="col-sm-10">
                    <input type="text" name="connected-by" class="form-control" id="inputEmail3" placeholder="Connected by">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember-me" value="remember me"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>
<!--</div>-->
@endsection
