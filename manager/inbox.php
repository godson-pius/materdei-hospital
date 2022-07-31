<!--**********************************
            Header start
        ***********************************-->
<?php $title = "Inbox - Mater Dei Specialist Hospital"; include('./components/header.php'); ?>
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
		<div class="form-head d-flex mb-sm-4 mb-3">
			<div class="mr-auto">
				<h2 class="text-black font-w600">Inbox</h2>
				<p class="mb-0">Mater Dei Specialist Hospital Administrative Dashboard</p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="table-responsive card-table">
					<table id="example5" class="display dataTablesCard table-responsive-xl">
						<thead>
							<tr>
								<th>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="checkAll" required="">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Contact</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Date Sent</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php
															$messages = EXECUTE_QUERY(
																SELECT_ALL('messages', 'm_id')
															);
															foreach ($messages as $message) {
																extract($message); ?>


							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheckBox2"
											required="">
										<label class="custom-control-label" for="customCheckBox2"></label>
									</div>
								</td>

								<td><span class="text-nowrap"><?= $fullname?></span></td>
								<td><?= $email; ?></td>
								<td><?= $phone; ?></td>
								<td><?= $subject; ?></td>
								<td>
									<?= SUB_STRING($message); ?>
								</td>
								<td>
									<?= HUMAN_DATE($created_at); ?>
								</td>
								<td>
									<div class="dropdown ml-auto text-right">
										<div class="btn-link" data-toggle="dropdown">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
													stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
													stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
													stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" data-message="<?= $message; ?>" onClick="viewFn(this)" style="cursor: pointer">View Detail</a>
											<a class="dropdown-item" data-id="<?= $m_id; ?>" onClick="deleteFn(this)" style="cursor: pointer">Delete</a>
										</div>
									</div>
								</td>
							</tr>

							<?php } ?>


						</tbody>
					</table>
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
	const viewFn = (e) => {
		const message = e.dataset.message
		alert(message)
	}

	const deleteFn = (e) => {
		const id = e.dataset.id
		let conf = confirm('Are you sure you want to delete this message?')

		if (conf) {
			window.location.href = `./delete.php?m_id=${id}`;
		}
	}
</script>
</body>

</html>