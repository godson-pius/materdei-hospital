		<!--**********************************
            Header start
        ***********************************-->
		<?php $title = "Appointments - Mater Dei Specialist Hospital"; include('./components/header.php'); ?>
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
										<h3 class="fs-20 text-black mb-0">All Appointments</h3>

									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll"
												id="appointment-schedule">

												<?php
															$appointments = EXECUTE_QUERY(
																SELECT_ALL('appointments', 'a_id')
															);
															foreach ($appointments as $appointment) {
																extract($appointment); if ($status == "unapproved") { $styling = "bg-warning p-1 rounded shadow"; } else { $styling = "bg-success text-light p-1 rounded shadow"; };
																 ?>

														<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
															<div class="mr-auto">
																<p class="text-black font-w600 mb-2">
																	<?= HUMAN_DATE($booked_date) ?>
																	<span class="<?= $styling; ?>" style="font-size: 10px;"><?= strtoupper($status); ?></span>
																</p>
																<ul>
																	<li><i class="las la-user"></i><?= $doctor ?></li>
																</ul>
															</div>
															<a style="cursor: pointer" id="delete_a" onClick="deleteFn(this)" data-id="<?= $a_id; ?>"
																class="text-danger mb-2">
																<i class="las la-times-circle scale5"></i>
															</a>
														</div>

														<?php
														}
														?>


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

		<script>
			const deleteFn = (e) => {
				const id = e.dataset.id
				let conf = confirm('Are you sure you want to delete this appointments?')

				if (conf) {
					window.location.href = `./delete.php?a_id=${id}`;
				}
			}
		</script>
		</body>

		</html>