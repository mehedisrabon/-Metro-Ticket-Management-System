<?php

session_start();

include "../model/ChangePasswordModel.php";



// 1. Authentication Check (Matches friend's pattern)

if (!isset($_SESSION['Mobile'])) {

    die("Unauthorized access");

}



$mobile = $_SESSION['Mobile'];



// 2. Check Request Method

if ($_SERVER['REQUEST_METHOD'] === "POST") {



    // 3. Get Inputs (using Null Coalescing Operator ?? for safety)

    $currentPass = $_POST['current_password'] ?? '';

    $newPass     = $_POST['new_password'] ?? '';

    $confirmPass = $_POST['confirm_password'] ?? '';



    // 4. Server-side Validation (Double check even if JS exists)

    if (empty($currentPass) || empty($newPass) || empty($confirmPass)) {

        header("Location: ../view/changepassword.php?msg=empty");

        exit();

    }



    if ($newPass !== $confirmPass) {

        header("Location: ../view/changepassword.php?msg=nomatch");

        exit();

    }



    // 5. Logic: Verify Old Password

    $userRow = getPasswordByMobile($mobile);



    if (!$userRow) {

        header("Location: ../view/changepassword.php?msg=usernotfound");

        exit();

    }



    // NOTE: In a real app, use password_verify($currentPass, $userRow['Password'])

    if ($currentPass !== $userRow['Password']) {

        header("Location: ../view/changepassword.php?msg=wrong");

        exit();

    }



    // 6. Logic: Update New Password

  if (updatePasswordByMobile($mobile, $newPass)) {

    if ($_SESSION['RoleID'] == 1) {
        header("Location: /admin/view/admindashboard.php?msg=updated");
    } elseif ($_SESSION['RoleID'] == 2) {
        header("Location: /employee/View/php/employeDashboard.php?msg=updated");
    } elseif ($_SESSION['RoleID'] == 3) {
        header("Location: /passenger/view/dashboard.php?msg=updated");
    } else {
        header("Location: /employee/View/php/login.php");
    }
    exit();
}
} else {

    // If user tries to open controller directly

    header("Location: ../view/changepassword.php");

}
  /* ---------- ROLE-BASED REDIRECT ---------- */
    if ($roleID == 1) {
        header("Location: /admin/view/admindashboard.php?msg=updated");
    } 
    elseif ($roleID == 2) {
        header("Location: ../View/php/employeDashboard.php?msg=updated");
    } 
    elseif ($roleID == 3) {
        header("Location: /passenger/view/dashboard.php?msg=updated");
    } 
    else {
        header("Location:  /employee/View/php/login.php");
    }

    exit();
?>