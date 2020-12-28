<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Article List</title>
</head>

<body>
    <h1>Article List</h1>
    <ul>
        <!-- php -->
        <!-- <?php foreach ($articles as $article) : ?>
            <li><?php echo $article['title'] ?></li>
        <?php endforeach ?> -->

        <!-- OR -->

        <!-- blade template technology -->
        @foreach($articles as $article)
        <li>{{ $article['title'] }}</li>
        @endforeach
    </ul>
</body>