<?php

require_once('../manager/prepared/prepared.php');

if (isset($_GET['a_id'])) {
    $the_appointment_id = $_GET['a_id'];
    $query = "DELETE FROM appointments WHERE a_id = $the_appointment_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: index");
}

if (isset($_GET['aa_id'])) {
    $the_appointment_id = $_GET['aa_id'];
    $query = "DELETE FROM appointments WHERE a_id = $the_appointment_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: appointment");
}

if (isset($_GET['c_id'])) {
    $the_consultation_id = $_GET['c_id'];
    $query = "DELETE FROM consultations WHERE c_id = $the_consultation_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: index");
}

if (isset($_GET['cc_id'])) {
    $the_consultation_id = $_GET['cc_id'];
    $query = "DELETE FROM consultations WHERE c_id = $the_consultation_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: consultancy");
}

if (isset($_GET['d_id'])) {
    $the_doctor_id = $_GET['d_id'];
    $query = "DELETE FROM doctors WHERE doctor_id = $the_doctor_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: doctors");
}

if (isset($_GET['m_id'])) {
    $the_message_id = $_GET['m_id'];
    $query = "DELETE FROM messages WHERE m_id = $the_message_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: inbox");
}

if (isset($_GET['s_id'])) {
    $the_message_id = $_GET['s_id'];
    $query = "DELETE FROM subscribers WHERE s_id = $the_message_id";
    $delete_query = mysqli_query($link, $query);
    header("Location: subscribers");
}

if (isset($_GET['approve_id'])) {
    $appointment_id = $_GET['approve_id'];
    $query = "UPDATE appointments SET status = 'approved' WHERE a_id = $appointment_id";

    $delete_query = mysqli_query($link, $query);
    header("Location: appointment?msg=approved");
}