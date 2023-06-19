
<section id="subscription">
    <div class="container">
        <div class="row text-center mb-3 mt-3">
            <div class="col">
                <h4 class="text-light fw-bold">Monthly Subscription</h4>
            </div>
        </div>

        <!-- BUAT KE TENGAHIN FORMNYA -->
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <div class="row justify-content-center">
                    <!-- COLUMN MEDIUM 8, biar ngga terlalu panjang -->
                        <div class="col-md-10">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="last-name" class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" aria-describedby="last-name" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label text-dark">Email Address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label text-dark">Company / Organization Name</label>
                                    <input type="text" class="form-control" id="title" aria-describedby="title" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center mt-5 mb-5">
        <div class="row g-3">

            <div class="col-md-6">  
            
            <h4 class="text-light fw-bold">Payment Method</h4>
                <div class="card">
                    <div class="accordion" id="accordionExample">
                        <!--
                        <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Paypal</span>
                                        <img src="assets/paypal.png" width="30">
                                    </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Paypal email">
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <!--<button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">-->
                                    
                                        <div class="d-flex justify-content-between pt-3 ps-3 pe-3 pb-3">
                                            <div class="d-flex flex-column pt-2">
                                                <span class="fs-5">Credit Card</span>
                                            </div>
                                            <div class="icons">
                                                <img src="assets/kuning-merah.png" width="30">
                                                <img src="assets/visa.png" width="30">
                                                <img src="assets/stripe.png" width="30">
                                            </div>        
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body payment-card-body">
                                    
                                    <span class="font-weight-normal card-text">Card Number</span>
                                    <div class="input">

                                        <i class="fa fa-credit-card"></i>
                                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                                        
                                    </div> 

                                    <div class="row mt-3 mb-3">

                                        <div class="col-md-6">

                                            <span class="font-weight-normal card-text">Expiry Date</span>
                                            <div class="input">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text" class="form-control" placeholder="MM/YY">
                                            </div>     
                                        </div>
                                        <div class="col-md-6">
                                            <span class="font-weight-normal card-text">CVC/CVV</span>
                                            <div class="input">
                                                <i class="fa fa-lock"></i>
                                                <input type="text" class="form-control" placeholder="000">
                                            </div> 
                                        </div>                                
                                    </div>
                                    <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-light fw-bold">Summary</h4>
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                             <div class="d-flex flex-column">
                                <span>Billed Monthly <i class="fa fa-caret-down"></i></span>
                            </div>
                            <div class="mt-1">
                                <sup class="super-price">$4.99</sup>
                                <span class="super-month">/Month</span>
                            </div>
                        </div>
                <hr class="mt-0 line">
                <!--
                <div class="p-3">

                    <div class="d-flex justify-content-between mb-2">

                    <span>Refferal Bonouses</span>
                    <span>-$2.00</span>
                    
                    </div>
                    

                </div>
                
                <hr class="mt-0 line">
                -->

                <div class="p-3 d-flex justify-content-between">

                    <div class="d-flex flex-column">

                    <span>Total</span>
                    <!--<small>After 30 days $9.59</small>-->
                    
                    </div>
                    <span>$0</span>

                    

                </div>


                <div class="p-3">

                <button class="btn btn-warning transition-btn">Purchase</button> 
                    
                </div>
                </div>
            </div>
            
        </div>
        

        </div>
        

    </div>
</section>