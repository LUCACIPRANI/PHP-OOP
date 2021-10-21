<?php

class TVSeries
{
    public $title;
    public $vote;
    public $language;
    public $genre;

    function __construct($_title, $_vote, $_language, $_genre)
    {
        $this->title = $_title;
        $this->vote = $_vote;
        $this->language = $_language;
        $this->genre = $_genre;
    }

    function setTitle($_title)
    {
        $this->title = $_title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setVote($_vote)
    {
        $this->vote = $_vote;
    }

    function getVote()
    {
        return $this->vote;
    }

    function setLanguage($_language)
    {
        $this->language = $_language;
    }

    function getLanguage()
    {
        return $this->language;
    }

    function setGenre($_genre)
    {
        $this->genre = $_genre;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getInformation()
    {
        return 'Titolo: ' . $this->getTitle() . '</br>' . 'Voto: ' . $this->getVote() . '</br>' . 'Lingua : ' . $this->getLanguage() . '</br>' . 'Genere: ' . $this->getGenre() . '</br>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TV Series</h1>
    <div class="container">
        <?php
        $TVSeries1 = new TVSeries('The Big Bang Theory', 4.0, 'USA', 'Comics');
        echo $TVSeries1->getInformation();
        ?>

    </div>

    <div class="container">
        <?php
        $TVSeries2 = new TVSeries('Suits', 4.0, 'USA', 'Action');
        echo $TVSeries2->getInformation();
        ?>

    </div>

    <div class="container">
        <?php
        $TVSeries3 = new TVSeries('Suits', 5.0, 'USA', 'Action');
        echo $TVSeries3->getInformation();
        ?>

    </div>

</body>

</html>

<style>
    body{
        background-color: lightgreen;
    }
    .container,
    h1 {
        border: 2px solid green;
        margin: 30px;
    }
</style>