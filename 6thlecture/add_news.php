<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add news</title>
</head>
<body>
    <form action="saved_news.php" method="post">
        <label>news number <input type="number" name="news_number"></label><br>
        <label>news title <input type="text" name="news_title"></label><br>
        <label>news details <textarea name="news_details" id="" cols="30" rows="10"></textarea></label><br>
        <label>news date <input type="date" name="news_date"></label><br>
        <input type="submit" value="submit news">
    </form>
</body>
</html>