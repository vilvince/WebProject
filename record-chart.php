<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Five Star Birthing Home </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- Add this style block inside the <head> tag of your HTML document -->
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="fivestarlogo.jpg" alt="">
        <span class="d-none d-lg-block">Five Star Birthing Home</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="admin.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Patients Registration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-chart.php">
              <i class="bi bi-circle"></i><span>Charts</span>
            </a>
          </li>
          <li>
            <a href="components-prenatal.php">
              <i class="bi bi-circle"></i><span>Prenatal</span>
            </a>
          </li>
          <li>
            <a href="components-postnatal.php">
              <i class="bi bi-circle"></i><span>Postnatal</span>
            </a>
          </li>
          <li>
            <a href="components-admission-slip.php">
              <i class="bi bi-circle"></i><span>Admission Slip</span>
            </a>
          </li>
          <li>
            <a href="components-discharge-slip.php">
              <i class="bi bi-circle"></i><span>Discharge Slip</span>
            </a>
          </li>
          <li>
            <a href="components-partoGraph.php">
              <i class="bi bi-circle"></i><span>PartoGraph</span>
            </a>
          </li>
        </ul>
      </li><!-- End Patient Registration Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Appointment Scheduling</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-CheckUps.php">
              <i class="bi bi-circle"></i><span>Check Ups</span>
            </a>
          </li>
          <li>
            <a href="forms-HearingTest.php">
              <i class="bi bi-circle"></i><span>Hearing Test</span>
            </a>
          </li>
          <li>
            <a href="forms-NewBornScreening.php">
              <i class="bi bi-circle"></i><span>New Born Screening</span>
            </a>
          </li>
        </ul>
      </li><!-- End Appointment Scheduling Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Transfer Refferal</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-RefferalForm.php">
              <i class="bi bi-circle"></i><span>Refferal Form</span>
            </a>
          </li>
        </ul>
      </li><!-- End Transfer Refferal Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Records</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="record-chart.php" class="active">
              <i class="bi bi-circle"></i><span>Charts</span>
            </a>
          </li>
          <li>
            <a href="record-prenatal.php">
              <i class="bi bi-circle"></i><span>Prenatal</span>
            </a>
          </li>
          <li>
            <a href="record-postnatal.php">
              <i class="bi bi-circle"></i><span>Postnatal</span>
            </a>
          </li>
          <li>
            <a href="record-admission-slip.php">
              <i class="bi bi-circle"></i><span>Admission Slip</span>
            </a>
          </li>
          <li>
            <a href="record-discharge-slip.php">
              <i class="bi bi-circle"></i><span>Discharge Slip</span>
            </a>
          </li>
          <li>
            <a href="record-partoGraph.php">
              <i class="bi bi-circle"></i><span>PartoGraph</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Chart Records</h1>
      <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Records</li>
          <li class="breadcrumb-item active">Chart Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->




      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
       <a href="https://bootstrapmade.com/"></a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$database = "fivestardb"; // Name of your database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database table
$sql = "SELECT * FROM chart";
$result = $conn->query($sql);

// Display the retrieved data
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Date of Admission</th>
                <th>Expected Due Date</th>
                <th>Delivery Type</th>
                <th>Delivery Date</th>
                <th>Delivery Time</th>
                <th>Delivery Weight</th>
                <th>Medical Conditions</th>
                <th>Allergies</th>
                <th>Medications</th>
                <th>Previous Pregnancies</th>
                <th>Complications</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['patient_name']."</td>
                <td>".$row['date_of_birth']."</td>
                <td>".$row['address']."</td>
                <td>".$row['contact_number']."</td>
                <td>".$row['date_of_admission']."</td>
                <td>".$row['expected_due_date']."</td>
                <td>".$row['delivery_type']."</td>
                <td>".$row['delivery_date']."</td>
                <td>".$row['delivery_time']."</td>
                <td>".$row['delivery_weight']."</td>
                <td>".$row['medical_conditions']."</td>
                <td>".$row['allergies']."</td>
                <td>".$row['medications']."</td>
                <td>".$row['previous_pregnancies']."</td>
                <td>".$row['complications']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $patient_name = $_POST["patient_name"] ?? '';
    $date_of_birth = $_POST["date_of_birth"] ?? '';
    $address = $_POST["address"] ?? '';
    $contact_number = $_POST["contact_number"] ?? '';
    $date_of_admission = $_POST["date_of_admission"] ?? '';
    $expected_due_date = $_POST["expected_due_date"] ?? '';
    $delivery_type = $_POST["delivery_type"] ?? '';
    $delivery_date = $_POST["delivery_date"] ?? '';
    $delivery_time = $_POST["delivery_time"] ?? '';
    $delivery_weight = $_POST["delivery_weight"] ?? '';
    $medical_conditions = $_POST["medical_conditions"] ?? '';
    $allergies = $_POST["allergies"] ?? '';
    $medications = $_POST["medications"] ?? '';
    $previous_pregnancies = $_POST["previous_pregnancies"] ?? '';
    $complications = $_POST["complications"] ?? '';
    // Retrieve other form fields in a similar manner...

    // Validate form fields (you should perform more thorough validation as needed)
    $errors = [];
    if (empty($patient_name)) {
        $errors[] = "Patient name is required.";
    }
    // Validate other form fields...

    // If there are no errors, proceed to insert data into the database
    if (empty($errors)) {
        try {
            // Connect to the database (replace 'your_database_name', 'username', and 'password' with your actual database credentials)
            $pdo = new PDO("mysql:host=localhost;dbname=fivestardb", "root", "");
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare a SQL statement for insertion
            $stmt = $pdo->prepare("INSERT INTO chart (patient_name, date_of_birth, address, contact_number, date_of_admission, expected_due_date, delivery_type, delivery_date, delivery_time, delivery_weight, medical_conditions, allergies, medications, previous_pregnancies, complications) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            // Bind parameters and execute the statement
            $stmt->execute([$patient_name, $date_of_birth, $address, $contact_number, $date_of_admission, $expected_due_date, $delivery_type, $delivery_date, $delivery_time, $delivery_weight, $medical_conditions, $allergies, $medications, $previous_pregnancies, $complications]);

            // Optionally, you can redirect the user to a success page or display a success message
            // header("Location: success.php");
            // exit;
            
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
    } else {
        // If there are errors, display them to the user
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}
?>

