<div class="lg:grid lg:grid-cols-4 lg:gap-4 mb-8">

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-primary text-primary w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">business</i>
            </div>

            <a href="#" class="text-body">
                <strong>Companies</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-success text-primary w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">person_add</i>
            </div>

            <a href="#" class="text-body">
                <strong>Users</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-warning text-primary w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">receipt</i>
            </div>

            <a href="#" class="text-body">
                <strong>Invoices</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-info w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">monetization_on</i>
            </div>

            <a href="#" class="text-body">
                <strong>Earnings</strong>
            </a>

        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">

            <div
                class="border-primary bg-gray-dark w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">shop</i>
            </div>

            <a href="#" class="text-dark">
                <strong>Products</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-gray-dark w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">account_balance</i>
            </div>

            <a href="#" class="text-dark">
                <strong>Account Balance</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-gray-dark w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">assignment</i>
            </div>

            <a href="#" class="text-dark">
                <strong>Assignments</strong>
            </a>
        </div>
    </div>

    <div class="card mb-0">
        <div class="p-3 flex items-center">
            <div
                class="border-primary bg-gray-dark w-8 h-8 mr-2 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl">
                <i class="material-icons text-white">call</i>
            </div>

            <a href="#" class="text-dark">
                <strong>Calls</strong>
            </a>
        </div>
    </div>

</div>


<div class="lg:flex">
    <div class="lg:w-2/3 lg:mr-4">
        <div class="card">
            <div class="card-header bg-white flex items-center">
                <h4 class="card-header__title flex-1 m-0">Current Sales</h4>
                <div class="flex items-center" data-toggle="flatpickr" data-flatpickr-wrap="true"
                    data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y"
                    data-flatpickr-date-format="d/m/Y">
                    <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span
                            class="text-muted mx-1">to</span> 20/03/2018</a>
                    <input class="flatpickr-hidden-input" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                </div>
            </div>
            <div class="card-body text-muted">
                <div class="chart" style="height: calc(248px);">
                    <canvas id="earningsTrafficChart">
                        <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart goes
                            here.</span>
                    </canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:w-1/2">




        <div class="card">
            <div class="card-header">
                <h4 class="card-header__title  m-0">History</h4>
            </div>
            <div class="card-body bg-gray-light py-4">

                <div class="flex justify-between pb-4">
                    <span>January</span>
                    <div>
                        <strong>$10,000</strong> <span class="text-muted">/ $20,000</span>
                    </div>
                </div>
                <div class="w-full bg-white shadow-sm h-1  mb-3">
                    <div class="bg-success text-xs leading-none h-1 text-center text-white rounded" style="width: 52%;">
                    </div>
                </div>


                <div class="flex justify-between pb-4">
                    <span>February</span>
                    <div>
                        <strong>$8,250</strong> <span class="text-muted">/ $5,230</span>
                    </div>
                </div>
                <div class="w-full bg-white shadow-sm h-1  mb-3">
                    <div class="bg-success text-xs leading-none h-1 text-center text-white rounded"
                        style="width: 100%;"></div>
                </div>


                <div class="flex justify-between pb-4">
                    <span>March</span>
                    <div>
                        <strong>$1,150</strong> <span class="text-muted">/ $8,120</span>
                    </div>
                </div>
                <div class="w-full bg-white shadow-sm h-1  mb-3">
                    <div class="bg-danger text-xs leading-none h-1 text-center text-white rounded" style="width: 22%;">
                    </div>
                </div>


                <div class="flex justify-between pb-4">
                    <span>April</span>
                    <div>
                        <strong>$4,625</strong> <span class="text-muted">/ $11,450</span>
                    </div>
                </div>
                <div class="w-full bg-white shadow-sm h-1  mb-3">
                    <div class="bg-warning text-xs leading-none h-1 text-center text-white rounded" style="width: 40%;">
                    </div>
                </div>


                <div class="flex justify-between pb-4">
                    <span>May</span>
                    <div>
                        <strong>$5,875</strong> <span class="text-muted">/ $12,600</span>
                    </div>
                </div>
                <div class="w-full bg-white shadow-sm h-1 ">
                    <div class="bg-warning text-xs leading-none h-1 text-center text-white rounded" style="width: 45%;">
                    </div>
                </div>


            </div>
        </div>

    </div>


</div>




</section>

<!-- // END PAGE CONTENT -->


</div>
<!-- // END drawer-layout__content -->
