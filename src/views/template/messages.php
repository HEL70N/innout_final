<?php
// $errors = [];
$message = "";

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}

if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

// $alterType = '';

// if ($message['type'] === 'error') {
//     $alterType = 'danger';
// } else {
//     $alterType = 'success';
// }
?>

<?php if ($message) : ?>
    <div role="alert" 
        class="my-3 alert alert-<?= $message['type'] === 'error' ? 'danger' : 'success' ?>">
        <?= $message['message'] ?>
    </div>
<?php endif ?>