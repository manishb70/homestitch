<?php
// book_appointment.php
$host = 'localhost';
$dbname = 'tailor_db';
$username = 'root'; // Update with your DB username
$password = '';     // Update with your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = htmlspecialchars($_POST['full_name']);
        $phone = htmlspecialchars($_POST['phone']);
        $house_number = htmlspecialchars($_POST['house_number']);
        $street = htmlspecialchars($_POST['street']);
        $pincode = htmlspecialchars($_POST['pincode']);
        $state = htmlspecialchars($_POST['state']);
        $person_type = htmlspecialchars($_POST['person_type']);
        $cloth_type = htmlspecialchars($_POST['cloth_type']);
        $appointment_date = htmlspecialchars($_POST['appointment_date']);
        $additional_note = htmlspecialchars($_POST['additional_note']);

        // Handle File Upload
        $reference_image = null;
        if (isset($_FILES['reference_image']) && $_FILES['reference_image']['error'] == 0) {
            $upload_dir = 'uploads/';
            // Create uploads directory if it doesn't exist
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            $file_extension = pathinfo($_FILES['reference_image']['name'], PATHINFO_EXTENSION);
            $new_filename = uniqid('ref_') . '.' . $file_extension;
            $upload_path = $upload_dir . $new_filename;

            if (move_uploaded_file($_FILES['reference_image']['tmp_name'], $upload_path)) {
                $reference_image = $upload_path;
            }
        }

        $sql = "INSERT INTO appointments (full_name, phone, house_number, street, pincode, state, person_type, cloth_type, appointment_date, reference_image, additional_note) 
                VALUES (:full_name, :phone, :house_number, :street, :pincode, :state, :person_type, :cloth_type, :appointment_date, :reference_image, :additional_note)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':full_name' => $full_name,
            ':phone' => $phone,
            ':house_number' => $house_number,
            ':street' => $street,
            ':pincode' => $pincode,
            ':state' => $state,
            ':person_type' => $person_type,
            ':cloth_type' => $cloth_type,
            ':appointment_date' => $appointment_date,
            ':reference_image' => $reference_image,
            ':additional_note' => $additional_note
        ]);

        header("Location: index.php?status=success");
        exit();
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>