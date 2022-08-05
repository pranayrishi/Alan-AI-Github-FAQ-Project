<?php

if (isset($_POST['submit'])) {
    echo <script>document.writeln(name);</script>;
    echo <script>document.writeln(question);</script>;
    console.log(name)
    $name = $_POST['name'];
    $question = $_POST['question'];

    $mailTo = 'rishi.nalem@yahoo.com';
    $headers = 'From: '.$mailFrom;
    $txt = 'You have received a new question from '.$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: faq.html?mailsend");
}