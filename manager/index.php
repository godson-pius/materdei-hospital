				<!--**********************************
            Header start
        ***********************************-->
				<?php
    $title = 'Administrative Dashboard';
    include './components/header.php';
    ?>
				<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

				<!--**********************************
            Sidebar start
        ***********************************-->
				<?php include './components/sidebar.php'; ?>
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
							<div class="col-xl-4 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body mr-3">
												<h2 class="fs-34 text-black font-w600"><?= GET_TOTAL('appointments') ?></h2>
												<span>Appointment</span>
											</div>
											<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0)">
													<path
														d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z"
														fill="#007A64" />
													<path
														d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z"
														fill="#007A64" />
													<path
														d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z"
														fill="#007A64" />
													<path
														d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z"
														fill="#007A64" />
												</g>
												<defs>
													<clipPath id="clip0">
														<rect width="40" height="40" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</div>
									</div>
									<div class="progress  rounded-0" style="height:4px;">
										<div class="progress-bar rounded-0 bg-secondary progress-animated"
											style="width: <?= GET_TOTAL(
               'appointments'
           ) ?>%; height:4px;" role="progressbar">
											<span class="sr-only">50% Complete</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body mr-3">
												<h2 class="fs-34 text-black font-w600"><?= GET_TOTAL('doctors') ?></h2>
												<span>Total Doctor</span>
											</div>
											<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z"
													fill="#007A64" />
											</svg>
										</div>
									</div>
									<div class="progress  rounded-0" style="height:4px;">
										<div class="progress-bar rounded-0 bg-secondary progress-animated"
											style="width: <?= GET_TOTAL('doctors') ?>%; height:4px;" role="progressbar">
											<span class="sr-only">30% Complete</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body mr-3">
												<h2 class="fs-34 text-black font-w600"><?= GET_TOTAL('consultations') ?></h2>
												<span>Consultations</span>
											</div>
											<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z"
													fill="#007A64" />
											</svg>
										</div>
									</div>
									<div class="progress  rounded-0" style="height:4px;">
										<div class="progress-bar rounded-0 bg-secondary progress-animated"
											style="width: <?= GET_TOTAL(
               'consultations'
           ) ?>%; height:4px;" role="progressbar">
											<span class="sr-only">94% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Appointments -->
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-12">
										<div class="card appointment-schedule">
											<div class="card-header pb-0 border-0">
												<h3 class="fs-20 text-black mb-0">Recent Appointment</h3>

											</div>
											<div class="card-body">
												<div class="row">

													<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll"
														id="appointment-schedule">

														<?php
															$appointments = EXECUTE_QUERY(
																SELECT_ALL_LIMIT('appointments', 'a_id', 0, 4)
															);
															foreach ($appointments as $appointment) {
																extract($appointment); ?>

														<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
															<div class="mr-auto">
																<p class="text-black font-w600 mb-2">
																	<?= HUMAN_DATE($booked_date) ?></p>
																<ul>
																	<li><i class="las la-user"></i><?= $doctor ?></li>
																</ul>
															</div>
															<a href="" class="text-success mr-3 mb-2">
																<i class="las la-check-circle scale5"></i>
															</a>
															<a href="javascript:void(0)" class="text-danger mb-2">
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

						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-12">
										<div class="card appointment-schedule">
											<div class="card-header pb-0 border-0">
												<h3 class="fs-20 text-black mb-0">Recent Consultancy</h3>

											</div>
											<div class="card-body">
												<div class="row">

													<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll"
														id="appointment-schedule">

														<?php
															$consultations = EXECUTE_QUERY(
																SELECT_ALL_LIMIT('consultations', 'c_id', 0, 4)
															);
															foreach ($consultations as $consultation) {
																extract($consultation); ?>

														<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
															<div class="mr-auto">
																<p class="text-black font-w600 mb-2"><?= $fullname; ?></p>
																<ul>
																	<li><i class="las la-envelope"></i><a href="mailto:<?= $email; ?>"><?= $email; ?></a></li>
																	<li><i class="las la-user"></i><?= $doctor; ?></li>
																</ul>
															</div>
															<a href="javascript:void(0)" class="text-success mr-3 mb-2">
																<i class="las la-check-circle scale5"></i>
															</a>
															<a href="javascript:void(0)" class="text-danger mb-2">
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
				<?php include './components/footer.php'; ?>
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
				<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
				<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
				<!-- Chart piety plugin files -->
				<script src="./vendor/peity/jquery.peity.min.js"></script>

				<!-- Apex Chart -->
				<script src="./vendor/apexchart/apexchart.js"></script>

				<!-- Dashboard 1 -->
				<script src="./js/dashboard/dashboard-1.js"></script>
				<script>
					$(function () {
						$('#datetimepicker1').datetimepicker({
							inline: true,
						});
					});
				</script>
				</body>

				</html>