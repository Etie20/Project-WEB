<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poster évènement</title>
    <link rel="stylesheet" href="{{asset("css/posteEvent.css")}}">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel="stylesheet">
</head>
<body>
<form method="POST" action="{{ url('/manif') }}" enctype="multipart/form-data">
    @csrf
    <div class="banner">
        <p>POSTER UN EVENEMENT</p>
    </div>
    <div class="picker">
        <div class="rectangle">
{{--            <input type="file" class="icon">--}}
            <div class="custom-file-input">
                <input type="file" id="file-input" class="inputfile" onchange="updateFileName()" name="image">
                <label for="file-input" id="file-label">Choisissez un fichier</label>
                <span id="file-name"></span>
            </div>
            <div id="date">
                <label for="date-input">Sélectionnez une date :</label>
                <input type="date" id="date-input" name="date">
            </div>

{{--            <div class="date"><p>DATE  |</p></div>--}}
        </div>
    </div>
    <div class="descrip">
        <label for="nom"></label>
            <input type="text" class="rectangle3" id="nom" name="nom" value="nom">
        <label for="description"></label>
            <input type="text" class="rectangle2" value="description" id="description" name="description">
            <input type="submit" value="envoyer" class="send">
    </div>
</form>

<script>
    function updateFileName() {
        var input = document.getElementById("file-input");
        var label = document.getElementById("file-label");
        var fileName = input.value.split("\\").pop();
        document.getElementById("file-name").innerHTML = fileName;
        label.innerHTML = "Changer de fichier";
    }
</script>
</body>
</html>
