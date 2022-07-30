<div class="doctors-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>Meet Our Experts</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
            Discover better health & wellness provided by professionals
            </p>
        </div>
        <div class="doctors-slider owl-carousel owl-theme pt-45">


        <?php 
            $doctors = EXECUTE_QUERY(SELECT_ALL('doctors', 'doctor_id'));
            foreach ($doctors as $doctor) {
                extract($doctor); ?>
               <div class="doctors-item">
                <div class="doctors-img">
                    <a href="doctors-details?doc=<?= $doctor_id ?>">
                        <img src="assets/img/doctors/doctor.png" alt="Images">
                    </a>
                </div>
                <div class="content">
                    <h3><a href="doctors-details?doc=<?= $doctor_id ?>"><?= $fullname; ?></a></h3>
                    <span><?= $specialty; ?></span>
                    <ul class="social-link">
                        <li>
                            <a href="mailto:<?= $email; ?>" target="_blank"><?= substr($fullname, 0, 1); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
        

        </div>
    </div>

    <div class="doctors-shape">
        <div class="doctors-shape-1">
            <img src="assets/img/doctors/doctors-shape1.png" alt="Images">
        </div>
        <div class="doctors-shape-2">
            <img src="assets/img/doctors/doctors-shape2.png" alt="Images">
        </div>
    </div>
</div>