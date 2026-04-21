<?php
// Contact form handler for QuickPOS

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $business = trim($_POST['business'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required 💕";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required ✨";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address 📧";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required 💌";
    }
    
    if (empty($errors)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "<!DOCTYPE html>";
        echo "<html><head><title>Oops! 💕</title>";
        echo "<link href='https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap' rel='stylesheet'>";
        echo "<style>";
        echo "body { font-family: 'Quicksand', sans-serif; background: #FFF5F5; text-align: center; padding: 50px; color: #4A4A4A; }";
        echo ".error-box { background: white; border-radius: 24px; padding: 40px; max-width: 500px; margin: 0 auto; box-shadow: 0 8px 32px rgba(255,150,180,0.15); }";
        echo "h2 { color: #FFB7C5; }";
        echo "ul { text-align: left; display: inline-block; }";
        echo "li { margin: 10px 0; }";
        echo ".back-btn { background: #FFB7C5; color: white; border: none; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-block; margin-top: 20px; }";
        echo "</style>";
        echo "</head><body>";
        echo "<div class='error-box'>";
        echo "<h2>🌸 Oops! Please check these:</h2>";
        echo "<ul>";
        foreach($errors as $error) {
            echo "<li>✨ $error</li>";
        }
        echo "</ul>";
        echo "<a href='index.php#contact' class='back-btn'>Go Back 💕</a>";
        echo "</div></body></html>";
    }
    
} else {
    header("Location: index.php");
    exit();
}
?>