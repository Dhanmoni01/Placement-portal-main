<?php


if (isset($_POST['email'])) {
  $email = trim($_POST['email']);

  // Validate email address against the nits.ac.in pattern
  $emailCheck = '/.+nits.ac.in$/';
  $emailIsValid = preg_match($emailCheck, $email);

  if (!$emailIsValid) {
    echo json_encode(['status' => 'error', 'message' => 'Please use a nits.ac.in email address.']);
    exit;
  }

  // Optionally, at this stage you can check the email address against your database
}

echo "success";