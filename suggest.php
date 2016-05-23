<?php
header("location:suggest.php?status=thanks");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $details = trim($_POST["details"]);

  if ($name == "" || $email == "" || $details = "") {
    echo "Please fill in the required fields: Name, Email and Details";
    exit;
  }

  echo "<pre>";
  $email_body = "";
  $email_body .= "Name " . $name . "\n";
  $email_body .= "Email " . $email . "\n";
  $email_body .= "Details " . $details . "\n";
  echo $email_body;
  echo "</pre>";
}
//To Do: Send email!


$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
      <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") { echo "<p>Thank you for the email! I&rsquo;ll check out your suggestion shortly!</p>";
      } else { ?>
        <p>Think I&rsquo;ve missed something? Let me know! Complete the form to send me an email.</p>
        <form method="post" action="suggest.php">
        <table>
          <tr>
            <th><label for ="name">Name</lable></th>
            <td><input type="text" id ="name" name="name"/></td>
          </tr>
          <tr>
            <th><label for ="email">Email</lable></th>
            <td><input type="text" id ="email" name="email"/></td>
          </tr>
          <tr>
            <th><label for ="details">Suggest Item Details</label></th>
            <td><textarea name ="details" id="details"></textarea></td>
          </tr>
        </table>
        <input type="submit" value="Send" />
        </form>
      <?php } ?>
  </div>
</div>

<?php include("inc/footer.php"); ?>
