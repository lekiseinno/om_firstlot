<header>
     <h1>File API - FileReader Pure Javascript 
        <br/><a href="http://jquery2dotnet.com">Multiple files upload using file reader to preview</a></h1>

</header>
<style type="text/css">
	body {
    font-family:'Segoe UI';
    font-size: 12pt;
}
header h1 {
    font-size:12pt;
    color: #fff;
    background-color: #F39C12;
    padding: 20px;
}
article {
    width: 80%;
    margin:auto;
    margin-top:10px;
}
.thumbnail {
    height: 100px;
    margin: 10px;
}
</style>
<body>
<article>
    <label for="files">Select multiple files:</label>
    <input id="files" type="file" multiple="multiple" />
    <output id="result" />
</article>
<script type="text/javascript">
	function handleFileSelect() {
    //Check File API support
    if (window.File && window.FileList && window.FileReader) {

        var files = event.target.files; //FileList object
        var output = document.getElementById("result");

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            //Only pics
            if (!file.type.match('image')) continue;

            var picReader = new FileReader();
            picReader.addEventListener("load", function (event) {
                var picFile = event.target;
                var div = document.createElement("div");
                div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" + "title='" + picFile.name + "'/>";
                output.insertBefore(div, null);
            });
            //Read the image
            picReader.readAsDataURL(file);
        }
    } else {
        console.log("Your browser does not support File API");
    }
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
