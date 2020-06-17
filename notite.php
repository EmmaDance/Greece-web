<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Notite</title>
   <?php include("includes/header.html");?>
   <script>
  function makepage(src)
  {

    return "<html>\n" +
      "<head>\n" +
      "<title>Temporary Printing Window</title>\n" +
      "<script>\n" +
      "function step1() {\n" +
      "  setTimeout('step2()', 10);\n" +
      "}\n" +
      "function step2() {\n" +
      "  window.print();\n" +
      "  window.close();\n" +
      "}\n" +
      "</scr" + "ipt>\n" +
      "</head>\n" +
      "<body onLoad='step1()'>\n" +
      "<img src='" + src + "'/>\n" +
      "</body>\n" +
      "</html>\n";
  }

  function printme(evt)
{
  if (!evt) {
    // Old IE
    evt = window.event;
  }
  var image = evt.target;
  if (!image) {
    // Old IE
    image = window.event.srcElement;
  }
  src = image.src;
  link = "about:blank";
  var pw = window.open(link, "_new");
  pw.document.open();
  pw.document.write(makepage(src));
  pw.document.close();
}
</script>

  </head>

<body>

<?php include("includes/navigation.html");?>
<div class="main container" ">
<br>
<div class="row">
<div class="col-lg-6 col-sm-12">
<table>
    <tr><td style="font-weight:bold; font-size:1.2em; color:#000;">Notițe:</td></tr>
    <tr>
        <td colspan="3">
            <textarea style="padding:20px;" id="inputTextToSave" cols="55" rows="25"></textarea>
        </td>
    </tr>
    <tr>
        <td style="font-weight:bold; font-size:1.2em; color:#000;">Titlu:</td>
        <td><input id="inputFileNameToSaveAs"></input></td>
        <td><button onclick="saveTextAsFile()">Salvează</button></td>
    </tr>
    <tr>
        <td style="font-weight:bold; font-size:1.2em; color:#000;">Selectați un fișier:</td>
        <td><input type="file" id="fileToLoad"></td>
        <td><button onclick="loadFileAsText()">Încărcați fișierul</button><td>
    </tr>
</table>
 

</div>
<div class="col-lg-6 col-sm-12">
<p style="font-weight:bold; font-size:1.2em; color:#000;">Dați click pe imagine pentru a o imprima</p>
 <p><img src="images/schita.png" alt="cannot load" style="max-width:100%;max-height:100%;" onClick="printme(event)"></p>
 </div>
</div>
<br>
</div><!-- main -->
<script type="text/javascript">
 
function saveTextAsFile()
{
    var textToSave = document.getElementById("inputTextToSave").value;
    var textToSaveAsBlob = new Blob([textToSave], {type:"text/plain"});
    var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
    var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
 
    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    downloadLink.href = textToSaveAsURL;
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
 
    downloadLink.click();
}
 
function destroyClickedElement(event)
{
    document.body.removeChild(event.target);
}
 
function loadFileAsText()
{
    var fileToLoad = document.getElementById("fileToLoad").files[0];
 
    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent) 
    {
        var textFromFileLoaded = fileLoadedEvent.target.result;
        document.getElementById("inputTextToSave").value = textFromFileLoaded;
    };
    fileReader.readAsText(fileToLoad, "UTF-8");
}
 
</script>
<?php include("includes/footer.html");?>

</body>
</html>