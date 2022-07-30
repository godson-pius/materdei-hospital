		<!--**********************************
            Header start
        ***********************************-->
		<?php $title = "Consultancy - Mater Dei Specialist Hospital"; include('./components/header.php'); ?>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<?php include('./components/sidebar.php'); ?>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
		    <!-- row -->
		    <div class="container-fluid">



		        <div class="row">
		            <div class="col-xl-12">
		                <div class="row">
		                    <div class="col-xl-12">
		                        <div class="card appointment-schedule">
		                            <div class="card-header pb-0 border-0">
		                                <h3 class="fs-20 text-black mb-0">All Consultations</h3>
		                            </div>
		                            <div class="card-body">
		                                <div class="row">

		                                    <div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll"
		                                        id="appointment-schedule">
		                                        <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
		                                            <div class="mr-auto">
		                                                <p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
		                                                <ul>
		                                                    <li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
		                                                    <li><i class="las la-user"></i>Dr. Samantha</li>
		                                                </ul>
		                                            </div>
		                                            <a href="javascript:void(0)" class="text-success mr-3 mb-2">
		                                                <i class="las la-check-circle scale5"></i>
		                                            </a>
		                                            <a href="javascript:void(0)" class="text-danger mb-2">
		                                                <i class="las la-times-circle scale5"></i>
		                                            </a>
		                                        </div>
		                                        <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
		                                            <div class="mr-auto">
		                                                <p class="text-black font-w600 mb-2">Tuesday, June 16th</p>
		                                                <ul>
		                                                    <li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
		                                                    <li><i class="las la-user"></i>Dr. Samantha</li>
		                                                </ul>
		                                            </div>
		                                            <a href="javascript:void(0)" class="text-success mr-3 mb-2">
		                                                <i class="las la-check-circle scale5"></i>
		                                            </a>
		                                            <a href="javascript:void(0)" class="text-danger mb-2">
		                                                <i class="las la-times-circle scale5"></i>
		                                            </a>
		                                        </div>
		                                        <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
		                                            <div class="mr-auto">
		                                                <p class="text-black font-w600 mb-2">Saturday, June 27th</p>
		                                                <ul>
		                                                    <li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
		                                                    <li><i class="las la-user"></i>Dr. Samantha</li>
		                                                </ul>
		                                            </div>
		                                            <a href="javascript:void(0)" class="text-success mr-3 mb-2">
		                                                <i class="las la-check-circle scale5"></i>
		                                            </a>
		                                            <a href="javascript:void(0)" class="text-danger mb-2">
		                                                <i class="las la-times-circle scale5"></i>
		                                            </a>
		                                        </div>
		                                        <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
		                                            <div class="mr-auto">
		                                                <p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
		                                                <ul>
		                                                    <li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
		                                                    <li><i class="las la-user"></i>Dr. Samantha</li>
		                                                </ul>
		                                            </div>
		                                            <a href="javascript:void(0)" class="text-success mr-3 mb-2">
		                                                <i class="las la-check-circle scale5"></i>
		                                            </a>
		                                            <a href="javascript:void(0)" class="text-danger mb-2">
		                                                <i class="las la-times-circle scale5"></i>
		                                            </a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>


		                </div>
		            </div>
		        </div>


		    </div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->

		<!--**********************************
            Footer start
        ***********************************-->
		<?php include('./components/footer.php'); ?>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


		</div>
		<!--**********************************
        Main wrapper end
    ***********************************-->

		<!--**********************************
        Scripts
    ***********************************-->
		<!-- Required vendors -->
		<script src="./vendor/global/global.min.js"></script>
		<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
		<script src="./js/custom.min.js"></script>
		<script src="./js/deznav-init.js"></script>

		<!-- Datatable -->
		<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script>
		    (function ($) {
		        var table = $('#example5').DataTable({
		            searching: false,
		            paging: true,
		            select: false,
		            //info: false,         
		            lengthChange: false

		        });
		        $('#example tbody').on('click', 'tr', function () {
		            var data = table.row(this).data();

		        });
		    })(jQuery);
		</script>
		</body>

		</html>