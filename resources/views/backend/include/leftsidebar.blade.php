<!-- body content start -->
<div class="body-content">


    <!-- left sidebar pc start -->
    <section class="left-sidebar">
        <div class="container-fluid">

            <!-- top part start -->
            <div class="row top-part">

                <!-- middle part start -->
                <div class="col-md-9 col-9">
                    <h3></h3>

                    <p>Welcome {{ Auth::user()->name }}</p>

                </div>
                <!-- middle part end -->

            </div>
            <!-- top part end -->

            <!-- navbar item start -->
            <div class="row nav-item">
                <div class="col-md-12">
                    <ul>

                        <!-- nav single view start -->
                        <li>
                            <a href="">
                                <div class="left">
                                    dashboard
                                </div>
                                <div class="right">
                                    <i class="fas fa-home"></i>
                                </div>
                            </a>
                        </li>
                        <!-- nav single view end -->


                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li>
                            <a href="{{route('contact')}}">
                                <div class="left">
                                    Contact Us
                                </div>
                                <div class="right">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </a>
                        </li>
                        <!-- nav single view end -->


                    </ul>
                </div>
            </div>
            <!-- navbar item end -->

        </div>
    </section>
    <!-- left sidebar pc end -->
