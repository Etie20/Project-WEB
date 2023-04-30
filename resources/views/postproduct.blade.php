<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poster évènement</title>
    <link rel="stylesheet" href="{{asset("css/posteEvent.css")}}">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel="stylesheet">
</head>
<body>
<form method="POST" action="{{ url('/prod') }}" enctype="multipart/form-data">
    @csrf
    <div class="banner">
        <p>AJOUTER UN PRODUIT</p>
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
                <select id="categorie" name="categorie" id="categorie">
                    <option value="CAT1">Électronique</option>
                    <option value="CAT2">Mode</option>
                    <option value="CAT3">Alimentation et bois</option>
                    <option value="CAT4">Fournitures de bureau</option>
                </select>
            </div>

            {{--            <div class="date"><p>DATE  |</p></div>--}}
        </div>
    </div>
    <div class="descrip">
        <label for="nom"></label>
        <input type="text" class="rectangle3" id="nom" name="nom" value="nom">
        <label for="prix"></label>
        <input type="text" class="rectangle3" id="prix" name="prix" value="prix">

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
